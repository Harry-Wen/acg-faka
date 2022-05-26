<?php
declare(strict_types=1);

namespace App\Plugin\BuiltPay\Controller;


use App\Controller\Base\API\UserPlugin;
use App\Plugin\BuiltPay\Model\BuiltPay;
use App\Util\Date;
use App\Util\Http;
use App\Util\Plugin;
use App\Util\Str;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use  Illuminate\Database\Capsule\Manager as DB;
use Kernel\Annotation\Inject;
use Kernel\Exception\JSONException;

/**
 * Class Demo
 * @package App\Plugin\Demo\Controller
 */
class Api extends UserPlugin
{

    #[Inject]
    private Client $http;

    /**
     * @throws JSONException
     */
    public function verify(): array
    {
        $key = (string)$_POST['key'];
        if ($key != getPluginConfig("BuiltPay")['app_key']) {
            Plugin::log("BuiltPay", "监控连接失败，请检查密钥是否正确");
            throw new JSONException("密钥不正确");
        }
        return $this->json(200, "ok");
    }

    /**
     * @return array
     * @throws JSONException
     */
    public function trade(): array
    {
        if (Str::generateSignature((array)$_POST, getPluginConfig("BuiltPay")['app_key']) != $_POST['sign']) {
            throw new JSONException("签名验证失败");
        }
        //干掉无用订单
        try {
            BuiltPay::clear();
        } catch (\Exception|\Error $e) {

        }

        $tradeNo = (string)$_POST['trade_no'];
        $amount = (float)$_POST['amount'];
        $type = (int)$_POST['type'];
        $returnUrl = (string)$_POST['return_url'];
        $notificationUrl = (string)$_POST['notification_url'];

        if ($amount <= 0) {
            throw new JSONException("下单金额必须大于0");
        }
        $builtPay = DB::transaction(function () use ($type, $amount, $tradeNo, $returnUrl, $notificationUrl) {
            //获取可用金额
            $acgAmount = BuiltPay::available($type, $amount);
            $builtPay = new BuiltPay();
            $builtPay->trade_no = $tradeNo;
            $builtPay->amount = $amount;
            $builtPay->acg_amount = $acgAmount;
            $builtPay->return_url = $returnUrl;
            $builtPay->notification_url = $notificationUrl;
            $builtPay->type = $type;
            $builtPay->status = 0;
            $builtPay->create_time = Date::current();
            $builtPay->save();
            return $builtPay;
        });

        return $this->json(200, "success", ['trade_no' => $builtPay->trade_no, 'url' => '/plugin/builtPay/order/trade?tradeNo=' . $builtPay->trade_no]);
    }

    /**
     * @throws JSONException|GuzzleException
     */
    public function callback(): string
    {
        $appKey = getPluginConfig("BuiltPay")['app_key'];

        if ($_POST['sign'] != Str::generateSignature($_POST, $appKey)) {
            throw new JSONException("签名验证失败");
        }
        $type = (int)$_POST['type'];
        $amount = (float)$_POST['amount'];
        $memo = (string)$_POST['memo'];

        //提高数据库事物等级至串行化，防止出现幻读
        DB::connection()->getPdo()->exec("set session transaction isolation level serializable");
        $order = DB::transaction(function () use ($type, $amount, $memo) {
            $order = BuiltPay::query()->where("status", 0)->where("type", $type)->where("acg_amount", $amount)->where("create_time", ">", date("Y-m-d H:i:s", time() - 300));

            if ($memo != "") {
                $order = $order->where("trade_no", $memo);
            }

            $order = $order->first();
            if (!$order) {
                throw new JSONException("订单不存在");
            }
            $order->status = 1;
            $order->pay_time = Date::current();
            $order->save();
            return $order;
        });

        //准备参数
        $data = [
            "trade_no" => $order->trade_no,
            "amount" => $order->amount,
            "status" => $order->status,
            "pay_time" => $order->pay_time
        ];

        //进行签名
        $data['sign'] = Str::generateSignature($data, $appKey);

        //进行post提交
        try {
            $request = $this->http->post($order->notification_url, [
                "form_params" => $data,
                "verify" => false
            ]);
            return (string)$request->getBody()->getContents();
        } catch (\Error|\Exception $e) {
            return "插件回调失败：" . $e->getMessage();
        }
    }


    /**
     * @return array
     * @throws JSONException
     */
    public function query(): array
    {
        $tradeNo = (string)$_POST['tradeNo'];
        $order = BuiltPay::query()->where("trade_no", $tradeNo)->first();
        if (!$order) {
            throw new JSONException("订单不存在");
        }

        if (strtotime($order->create_time) + 300 < time()) {
            throw new JSONException("订单已过期");
        }

        return $this->json(200, "success", ["status" => $order->status]);
    }


    /**
     * @throws JSONException
     * @throws GuzzleException
     */
    public function refresh(): array
    {
        $tradeNo = (string)$_GET['tradeNo'];
        $config = Plugin::getConfig("BuiltPay");
        if ($config['alipay_replenishment'] != 1) {
            throw new JSONException("未开启该功能");
        }

        $order = BuiltPay::query()->where("trade_no", $tradeNo)->first();

        if (!$order) {
            throw new JSONException("订单不存在");
        }

        if (strtotime($order->create_time) + 300 < time()) {
            throw new JSONException("订单已过期");
        }

        $cache = (int)Plugin::getCache("BuiltPay", "Db", $tradeNo, true);

        if ($cache >= 2) {
            throw new JSONException("请不要频繁操作，请联系客服。");
        }

        //请求补单操作
        try {
            Http::make(['connect_timeout' => 5, 'timeout' => 5])->post("http://{$config['server_ip']}:4123/refresh", [
                'form_params' => [
                    'key' => $config['app_key']
                ]
            ]);
        } catch (\Exception|\Error $e) {
            throw new JSONException("本功能需要监控服务器开启外网，当前未开启外网或未开放相关端口。");
        }

        Plugin::setCache("BuiltPay", "Db", $tradeNo, $cache + 1, 360, true);
        return $this->json(200, "补单已执行，请稍等..");
    }
}