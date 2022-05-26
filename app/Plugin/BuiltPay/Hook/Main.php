<?php
declare(strict_types=1);

namespace App\Plugin\BuiltPay\Hook;


use App\Controller\Base\View\ManagePlugin;
use App\Util\Plugin;
use App\Util\QrCode;
use Kernel\Annotation\Hook;
use Kernel\Exception\JSONException;


class Main extends ManagePlugin
{

    public static array|null $config = null;

    /**
     * @throws JSONException
     */
    #[\Kernel\Annotation\Plugin(state: \Kernel\Annotation\Plugin::SAVE_CONFIG)]
    public function saveConfig($pluginName, $map)
    {
        if ($pluginName == "BuiltPay") {
            //解析微信二维码
            if ($map['wx_qrcode'] != "") {
                $qrcode = QrCode::parse(BASE_PATH . $map['wx_qrcode']);
                if ($qrcode == "") {
                    Plugin::log("BuiltPay", "微信二维码解析错误。");
                    throw new JSONException("微信二维码解析失败");
                }
                Plugin::setConfig("BuiltPay", "wx_url", $qrcode);
                Plugin::log("BuiltPay", "微信二维码解析成功：" . $qrcode);
            }
            //解析支付宝二维码
            if ($map['alipay_qrcode'] != "") {
                $qrcode = QrCode::parse(BASE_PATH . $map['alipay_qrcode']);
                if ($qrcode == "") {
                    Plugin::log("BuiltPay", "支付宝商家二维码解析错误。");
                    throw new JSONException("支付宝商家二维码解析失败");
                }
                Plugin::setConfig("BuiltPay", "alipay_url", $qrcode);
                Plugin::log("BuiltPay", "支付宝商家二维码解析成功：" . $qrcode);
            }

            //解析QQ二维码
            if ($map['qq_qrcode'] != "") {
                $qrcode = QrCode::parse(BASE_PATH . $map['qq_qrcode']);
                if ($qrcode == "") {
                    Plugin::log("BuiltPay", "QQ钱包二维码解析错误。");
                    throw new JSONException("QQ钱包二维码解析失败");
                }
                Plugin::setConfig("BuiltPay", "qq_url", $qrcode);
                Plugin::log("BuiltPay", "QQ钱包二维码解析成功：" . $qrcode);
            }
        }
    }

    #[Hook(point: \App\Consts\Hook::KERNEL_INIT)]
    public function getBuiltPayConfig(): void
    {
        self::$config = (array)Plugin::getConfig("BuiltPay");
    }
}