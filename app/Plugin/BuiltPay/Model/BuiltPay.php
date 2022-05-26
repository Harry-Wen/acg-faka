<?php
declare(strict_types=1);

namespace App\Plugin\BuiltPay\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $trade_no
 * @property float $amount
 * @property float $acg_amount
 * @property string $return_url
 * @property string $notification_url
 * @property int $type
 * @property int $status
 * @property string $create_time
 * @property string $pay_time
 */
class BuiltPay extends Model
{

    /**
     * @var string
     */
    protected $table = "built_pay";

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $casts = ['id' => 'integer', 'amount' => 'float', 'acg_amount' => 'float', 'type' => 'integer', 'status' => 'integer'];

    /**
     * 获取可用金额
     * @param int $type
     * @param float $amount
     * @return float
     */
    public static function available(int $type, float $amount): float
    {
        if ($type == 2) {
            return $amount;
        }

        $order = self::query()->where("acg_amount", $amount)->where("type", $type)->where("status", 0)->where("create_time", ">", date("Y-m-d H:i:s", time() - 300))->first();
        if ($order) {
            return self::available($type, $amount + 0.01);
        }
        return $amount;
    }

    /**
     * 干掉无用订单
     */
    public static function clear(): void
    {
        self::query()->where("status", 0)->where("create_time", "<", date("Y-m-d H:i:s", time() - 300))->delete();
    }
}