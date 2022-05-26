<?php
declare(strict_types=1);

namespace App\Plugin\BuiltPay\Controller;

use App\Controller\Base\View\UserPlugin;
use App\Plugin\BuiltPay\Model\BuiltPay;
use App\Util\Client;
use Kernel\Exception\ViewException;

class Order extends UserPlugin
{
    /**
     * @return string
     * @throws ViewException
     */
    public function trade(): string
    {
        $tradeNo = (string)$_GET['tradeNo'];
        $order = BuiltPay::query()->where("trade_no", $tradeNo)->first();

        if (!$order) {
            Client::redirect("/", "订单不存在");
        }

        if ($order->status != 0) {
            Client::redirect($order->return_url, "该订单已支付过了");
        }

        if (strtotime($order->create_time) + 300 < time()) {
            Client::redirect($order->return_url, "这个订单过期了");
        }

        $data = $order->toArray();
        $config = getPluginConfig("BuiltPay");

        $template = match ($order->type) {
            0 => "Wechat.html",
            1 => "WechatAccount.html",
            2 => "Alipay.html",
            3 => "AlipayMerchant.html",
            4 => "AlipayAccount.html",
            5 => "WechatAdmire.html",
            6 => "QQ.html"
        };

        return $this->render("请扫码支付", $template, ['order' => $data, 'config' => $config], true);
    }
}