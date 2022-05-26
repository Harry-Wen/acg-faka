<?php
declare(strict_types=1);

namespace App\Pay\ZPay\Impl;

/**
 * Class Signature
 * @package App\Pay\Kvmpay\Impl
 */
class Signature implements \App\Pay\Signature
{

    /**
     * 生成签名
     * @param array $data
     * @param string $key
     * @return string
     */
    public static function generateSignature(array $data, string $key): string
    {
        ksort($data);
        $sign = '';
        foreach ($data as $k => $v) {
            $sign .= $k . '=' . $v . '&';
        }
        $sign = trim($sign, '&');

        return md5($sign . $key);
    }

    /**
     * 支付宝生成签名
     * @param $out_trade_no
     * @param $attach
     * @param $type
     * @param $amount
     * @param $timestamp
     * @param $mch_id
     * @param $key
     * @return string
     */
    public static function sign($out_trade_no, $attach, $type, $amount, $timestamp, $mch_id, $key)
    {
        return md5($out_trade_no . $attach . $type . $amount . $timestamp . $mch_id . $key);
    }

    /**
     * 微信生成签名
     * @param $mch_id
     * @param $host
     * @param $key
     * @param $time
     * @return string
     */
    public static function wechatSign($mch_id, $host, $key, $time)
    {
        return md5($mch_id . $host . $key . $time);
    }

    /**
     * @inheritDoc
     */
    public function verification(array $data, array $config): bool
    {
        $sign = $data['sign'];
        $res_sign = md5($data['out_trade_no'].$data['attach'].$data['type'].$data['amount'].$data['really_amount'].$config['pid'].$config['key']);
        if ($sign != $res_sign) {
            return false;
        }
        return true;
    }
}