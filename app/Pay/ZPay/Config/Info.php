<?php
declare (strict_types=1);

return [
    'version' => '1.0.0',
    'name' => 'Z支付',
    'author' => 'HarryVin',
    'website' => '#',
    'description' => '支持所有基于"Z支付"接口协议的平台。',
    'options' => [
        'alipay' => '支付宝',
//        'wxpay' => '微信',
    ],
    'callback' => [
        \App\Consts\Pay::IS_SIGN => true,
        \App\Consts\Pay::IS_STATUS => true,
        \App\Consts\Pay::FIELD_STATUS_KEY => 'trade_status',
        \App\Consts\Pay::FIELD_STATUS_VALUE => 'TRADE_SUCCESS',
        \App\Consts\Pay::FIELD_ORDER_KEY => 'out_trade_no',
        \App\Consts\Pay::FIELD_AMOUNT_KEY => 'amount',
        \App\Consts\Pay::FIELD_RESPONSE => 'success'
    ]
];