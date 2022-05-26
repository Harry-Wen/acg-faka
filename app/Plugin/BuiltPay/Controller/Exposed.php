<?php
declare (strict_types=1);

namespace App\Plugin\BuiltPay\Controller;

use App\Controller\Base\API\UserPlugin;
use App\Model\Config;
use App\Util\Client;
use App\Util\Http;
use App\Util\Plugin;
use App\Util\Str;
use GuzzleHttp\Exception\GuzzleException;
use Kernel\Exception\JSONException;
use function App\Plugin\BuiltPayPuls\Hook\generateSignature;

class Exposed extends UserPlugin
{

    /**
     * 生成易支付签名
     * @param array $data
     * @param string $key
     * @return string
     */
    private function generateSignature(array $data, string $key): string
    {
        unset($data['sign']);
        unset($data['sign_type']);

        ksort($data);
        $sign = '';
        foreach ($data as $k => $v) {
            $sign .= $k . '=' . $v . '&';
        }
        $sign = trim($sign, '&');
        return md5($sign . $key);
    }


    /**
     * 易支付公开接口
     * @return void
     * @throws JSONException
     */
    public function easy(): void
    {
        $cfg = Plugin::getConfig("BuiltPay");
        if ((int)$cfg['easyPay_status'] != 1) {
            throw new JSONException("您并未启用外置API，请先启用。");
        }

        $generateSignature = $this->generateSignature($_POST, (string)$cfg['app_key']);
        if ($generateSignature != $_POST['sign']) {
            throw new JSONException("签名验证失败");
        }

        //易支付转内置码通道
        $code = match ((string)$_POST['type']) {
            'alipay' => $cfg['easyPay_alipay'],
            'wxpay' => $cfg['easyPay_wecaht'],
            'qqpay' => $cfg['easyPay_qq']
        };

        //回调地址
        $callbackDomain = trim(Config::get("callback_domain"), "/");

        if (!$callbackDomain) {
            $callbackDomain = Client::getUrl();
        }

        $postData = [
            'trade_no' => $_POST['out_trade_no'],
            'amount' => $_POST['money'],
            'type' => $code,
            'notification_url' => $callbackDomain . '/plugin/builtPay/exposed/notify',
            'return_url' => $_POST['return_url']
        ];

        $postData['sign'] = Str::generateSignature($postData, (string)$cfg['app_key']);

        try {
            $request = Http::make()->post($callbackDomain . '/plugin/builtPay/api/trade', [
                "form_params" => $postData
            ]);
        } catch (GuzzleException $e) {
            throw new JSONException("内部错误，请联系插件开发商");
        }

        $contents = $request->getBody()->getContents();
        $json = json_decode((string)$contents, true);

        if ($json['code'] != 200) {
            throw new JSONException((string)$json['msg']);
        }

        //将订单的异步回调地址保存到缓存中
        Plugin::setCache("BuiltPay", "Notify", $_POST['out_trade_no'], [
            'notify_url' => (string)$_POST['notify_url'],
            'type' => (string)$_POST['type']
        ], 3600);

        $url = $json['data']['url'];
        Client::redirect($url, "正在下单，请稍等..", 0);
    }


    /**
     * @throws JSONException
     * @throws GuzzleException
     */
    public function notify(): string
    {
        $cfg = Plugin::getConfig("BuiltPay");
        $sign = Str::generateSignature($_POST, (string)$cfg['app_key']);
        if ($sign != $_POST['sign']) {
            return "签名失败";
        }

        //获取异步地址
        $cache = Plugin::getCache("BuiltPay", "Notify", $_POST['trade_no']);

        $data = [
            'pid' => '1314520',
            'trade_no' => $_POST['trade_no'],
            'out_trade_no' => $_POST['trade_no'],
            'type' => $cache['type'],
            'name' => $_POST['trade_no'],
            'money' => $_POST['amount'],
            'trade_status' => 'TRADE_SUCCESS'
        ];

        $data['sign'] = $this->generateSignature($data, (string)$cfg['app_key']);
        $data['sign_type'] = "MD5";


        try {
            $response = Http::make(['timeout' => 10])->get($cache['notify_url'], [
                "query" => $data
            ]);
            Plugin::delCache("BuiltPay", "Notify", $_POST['trade_no']);
            return (string)$response->getBody()->getContents();
        } catch (\Error|\Exception $e) {
            return "插件回调失败：" . $e->getMessage();
        }
    }
}