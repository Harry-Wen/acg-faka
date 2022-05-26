<?php
declare (strict_types=1);

return [
    [
        "title" => "通讯密钥",
        "name" => "app_key",
        "type" => "input",
        "placeholder" => "挂监控的时候，请填写这个密钥",
        "default" => \App\Util\Str::generateRandStr()
    ],
    [
        "title" => "监控下载",
        "name" => "explain1",
        "type" => "explain",
        "placeholder" => '使用本插件之前，请先下载监控：<a href="https://wwe.lanzouy.com/b01j030aj" target="_blank">https://wwe.lanzouy.com/b01j030aj</a> 密码:<b>6kl0</b>',
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<b style="color: #229208;">┏━ <b style="color: red;">‹ 微信个码 › </b> 配置：个人二维码，需要输入金额</b>',
    ],
    [
        "title" => "微信收款码",
        "name" => "wx_qrcode",
        "type" => "image",
        "placeholder" => "请选择你的微信收款码",
        "width" => 100
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<b style="color: #229208;">┗━━━━━━━━━━━━━━━━━━</b>',
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<b style="color: #229208;">┏━ <b style="color: red;">‹ 微信手机转账 › </b> 配置：大额推荐</b>',
    ],
    [
        "title" => "微信手机号",
        "name" => "wx_account",
        "type" => "input",
        "placeholder" => "请输入绑定微信的手机号"
    ],
    [
        "title" => "微信姓名",
        "name" => "wx_realname",
        "type" => "input",
        "placeholder" => "大额可能需要姓名验证，也可不填写"
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<span style="color: red;">PS：需要在微信中的支付管理里面把允许通过手机号向我转账开启哦</span>',
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<b style="color: #229208;">┗━━━━━━━━━━━━━━━━━━</b>',
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<b style="color: #229208;">┏━ <b style="color: red;">‹ 微信赞赏码 › </b> 配置：赞赏码，需要自己上传赞赏码</b>',
    ],
    [
        "title" => "微信赞赏码",
        "name" => "wx_zs_qrcode",
        "type" => "image",
        "placeholder" => "请选择你的微信赞赏码",
        "width" => 100
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<b style="color: #229208;">┗━━━━━━━━━━━━━━━━━━</b>',
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<b style="color: #229208;">┏━ <b style="color: red;">‹ 支付宝主动补单 › </b> 这个功能需要【监控】所在的服务器IP拥有外网，可以被外网访问，如果你监控挂机的地方是家庭电脑的情况下，就用不了这个功能。</b><br><br><b style="color: red;">请注意，监控服务器必须开启【4123】端口，否则也是无法使用本功能的。</b>',
    ],
    [
        "title" => "监控服务器IP",
        "name" => "server_ip",
        "type" => "input",
        "placeholder" => "监控服务器的IP地址，如果你的监控服务器不支持外网，可不用填写"
    ],
    [
        "title" => "主动补单",
        "name" => "alipay_replenishment",
        "type" => "switch",
        "text" => "启用付款人主动补单功能"
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<span style="color: red;">本功能开启后，基本是不存在掉单，因为用户付完款不回调，他可以自己补单。</span>',
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<b style="color: #229208;">┗━━━━━━━━━━━━━━━━━━</b>',
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<b style="color: #229208;">┏━ <b style="color: red;">‹ 支付宝个码 › </b> 配置：免输入金额，金额不变动，自带订单号。</b>',
    ],
    [
        "title" => "支付宝ID",
        "name" => "alipay_id",
        "type" => "input",
        "placeholder" => "在监控上登录后就可以复制，然后粘贴到这里来"
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<b style="color: #229208;">┗━━━━━━━━━━━━━━━━━━</b>',
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<b style="color: #229208;">┏━ <b style="color: red;">‹ 支付宝商家码 › </b> 配置：适合每天收款比较频繁，二维码不容易异常</b>',
    ],
    [
        "title" => "二维码",
        "name" => "alipay_qrcode",
        "type" => "image",
        "hide" => true,
        "placeholder" => "请选择你的支付宝商家收款码",
        "width" => 100
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<b style="color: #229208;">┗━━━━━━━━━━━━━━━━━━</b>',
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<b style="color: #229208;">┏━ <b style="color: red;">‹ 支付宝转账 › </b> 配置：大额推荐</b>',
    ],
    [
        "title" => "支付宝账号",
        "name" => "alipay_account",
        "type" => "input",
        "placeholder" => "请输入你的支付宝账号"
    ],
    [
        "title" => "支付宝姓名",
        "name" => "alipay_realname",
        "type" => "input",
        "placeholder" => "大额可能需要姓名验证，也可不填写"
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<b style="color: #229208;">┗━━━━━━━━━━━━━━━━━━</b>',
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<b style="color: #229208;">┏━ <b style="color: red;">‹ QQ钱包 › </b> 配置：QQ钱包收款码</b>',
    ],
    [
        "title" => "QQ钱包收款码",
        "name" => "qq_qrcode",
        "type" => "image",
        "placeholder" => "请选择你的QQ钱包收款码",
        "width" => 100
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<b style="color: #229208;">┗━━━━━━━━━━━━━━━━━━</b>',
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<b style="color: #229208;">┏━ <b style="color: red;">‹ 对外易支付API › </b> 说明：这个功能让你可以很轻松让其他系统对接本插件。</b>',
    ],
    [
        "title" => "微信码",
        "name" => "easyPay_wecaht",
        "type" => "select",
        "placeholder" => "请选择微信",
        "dict" => [
            ["id" => 0, "name" => "微信个人码"],
            ["id" => 1, "name" => "微信转账"],
            ["id" => 5, "name" => "微信赞赏码"],
        ],
        "default" => 0
    ],
    [
        "title" => "支付宝码",
        "name" => "easyPay_alipay",
        "type" => "select",
        "placeholder" => "请选择支付宝",
        "dict" => [
            ["id" => 2, "name" => "支付宝个码"],
            ["id" => 3, "name" => "支付宝商家码"],
            ["id" => 4, "name" => "支付宝转账"],
        ],
        "default" => 2
    ],
    [
        "title" => "QQ钱包",
        "name" => "easyPay_qq",
        "type" => "select",
        "placeholder" => "请选择支付宝",
        "dict" => [
            ["id" => 6, "name" => "QQ钱包"],
        ],
        "default" => 6
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '易支付API：<b style="color: red;">' . \App\Util\Client::getUrl() . '/plugin/builtPay/exposed/easy#/</b>',
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '商户ID：<b style="color: red;">1314520</b>',
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '商户密钥：<b style="color: red;">填写最上方的通讯密钥即可</b>',
    ],
    [
        "title" => "暴露API",
        "name" => "easyPay_status",
        "type" => "switch",
        "text" => "启用外置API（对外提供易支付协议API）"
    ],
    [
        "title" => "",
        "name" => "explain",
        "type" => "explain",
        "placeholder" => '<b style="color: #229208;">┗━━━━━━━━━━━━━━━━━━</b>',
    ]
];