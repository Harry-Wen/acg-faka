<?php
declare(strict_types=1);

namespace App\Pay\ZPay\Impl;

use App\Entity\PayEntity;
use App\Model\Config;
use App\Pay\Base;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Kernel\Exception\JSONException;

/**
 * Class Pay
 * @package App\Pay\Kvmpay\Impl
 */
class Pay extends Base implements \App\Pay\Pay
{

    public function millisecondWay(){
        list($s1, $s2) = explode(' ', microtime());
        return (float)sprintf('%.0f', (floatval($s1) + floatval($s2)) * 1000);
    }

    /**
     * @return PayEntity
     * @throws \Kernel\Exception\JSONException
     */
    public function trade(): PayEntity
    {

        if (!$this->config['url']) {
            throw new JSONException("请配置Z支付请求地址");
        }

        if (!$this->config['pid']) {
            throw new JSONException("请配置Z支付商户ID");
        }

        if (!$this->config['key']) {
            throw new JSONException("请配置Z支付商户密钥");
        }

        $client = new Client(["verify" => false,'base_uri' => $this->config['url']]);

        $param = [
            'mch_id' => $this->config['pid'],
            'attach' => $this->tradeNo, //订单名称
            'type' => 2,
            'amount' => $this->amount,
            'out_trade_no' => $this->tradeNo,
            'notify_url' => $this->callbackUrl,
            'return_url' => $this->returnUrl,
            'timestamp' => $this->millisecondWay(),
            'isHtml' => 1,
        ];
        $param['sign'] = Signature::sign($param['out_trade_no'],$param['attach'],$param['type'],$param['amount'],$param['timestamp'],$this->config['pid'],$this->config['key']);
        try {
            $request = $client->post( '/v1/common/createOrder', [
                'form_params' => $param
            ]);
        } catch (GuzzleException $e) {
            throw new JSONException("内部错误，请联系插件开发商");
        }
        $contents = $request->getBody()->getContents();
        $json = json_decode((string)$contents, true);

        if ($json['code'] != 200) {
            throw new JSONException((string)$json['msg']);
        }
        $url = $json['data']['payUrl'];
        $payEntity = new PayEntity();
        $payEntity->setType(self::TYPE_REDIRECT);
        $payEntity->setUrl($url);
        return $payEntity;
    }
}