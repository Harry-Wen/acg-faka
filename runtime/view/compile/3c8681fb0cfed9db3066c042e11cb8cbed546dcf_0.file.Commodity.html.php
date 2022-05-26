<?php
/* Smarty version 3.1.39, created on 2022-05-26 21:28:44
  from '/www/wwwroot/git/mm-acg-faka/app/View/Admin/Trade/Commodity.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_628f808c582399_46151664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c8681fb0cfed9db3066c042e11cb8cbed546dcf' => 
    array (
      0 => '/www/wwwroot/git/mm-acg-faka/app/View/Admin/Trade/Commodity.html',
      1 => 1653569340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Header.html' => 1,
    'file:../Toolbar.html' => 1,
    'file:../Footer.html' => 1,
  ),
),false)) {
function content_628f808c582399_46151664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<style>
    .layui-layer-page .layui-layer-content {
        position: relative !important;
        overflow: auto !important;
    }

    .level_price_div .bootstrap-table {
        margin-top: 0 !important;
        padding-top: 0 !important;
    }

    .level_price_div .bootstrap-table .fixed-table-toolbar::after {
        clear: none !important;
        display: none;
    }

    .level_price_div .bootstrap-table .fixed-table-container {
        clear: none !important;
    }
</style>

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <?php $_smarty_tpl->_subTemplateRender("file:../Toolbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10">
                <div class="col-xl-2">
                    <!--begin::Statistics Widget 1-->
                    <div class="card bgi-no-repeat card-xl-stretch mb-xl-8"
                         style="background-position: right top; background-size: 30% auto; background-image: url(/assets/admin/images/svg/shapes/abstract-4.svg)">
                        <!--begin::Body-->
                        <div class="card-body">
                            <span class="card-title fw-bolder text-muted text-hover-primary fs-4">总商品</span>
                            <div class="fw-bolder fs-1 text-primary my-6"><?php echo $_smarty_tpl->tpl_vars['all']->value;?>
</div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 1-->
                </div>
                <div class="col-xl-2">
                    <!--begin::Statistics Widget 1-->
                    <div class="card bgi-no-repeat card-xl-stretch mb-xl-8"
                         style="background-position: right top; background-size: 30% auto; background-image: url(/assets/admin/images/svg/shapes/abstract-2.svg)">
                        <!--begin::Body-->
                        <div class="card-body">
                            <span class="card-title fw-bolder text-muted text-hover-primary fs-4">已上架</span>
                            <div class="fw-bolder fs-1 text-success my-6"><?php echo $_smarty_tpl->tpl_vars['shelves']->value;?>
</div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 1-->
                </div>
                <div class="col-xl-2">
                    <!--begin::Statistics Widget 1-->
                    <div class="card bgi-no-repeat card-xl-stretch mb-5 mb-xl-8"
                         style="background-position: right top; background-size: 30% auto; background-image: url(/assets/admin/images/svg/shapes/abstract-1.svg)">
                        <!--begin::Body-->
                        <div class="card-body">
                            <span class="card-title fw-bolder text-muted text-hover-primary fs-4">未上架</span>
                            <div class="fw-bolder fs-1 text-danger my-6"><?php echo $_smarty_tpl->tpl_vars['not']->value;?>
</div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 1-->
                </div>

                <div class="col-xl-2">
                    <!--begin::Statistics Widget 1-->
                    <div class="card bgi-no-repeat card-xl-stretch mb-5 mb-xl-8"
                         style="background-position: right top; background-size: 30% auto; background-image: url(/assets/admin/images/svg/shapes/abstract-3.svg)">
                        <!--begin::Body-->
                        <div class="card-body">
                            <span class="card-title fw-bolder text-muted text-hover-primary fs-4">主站商品</span>
                            <div class="fw-bolder fs-1 text-info my-6"><?php echo $_smarty_tpl->tpl_vars['main']->value;?>
</div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 1-->
                </div>
                <div class="col-xl-2">
                    <!--begin::Statistics Widget 1-->
                    <div class="card bgi-no-repeat card-xl-stretch mb-5 mb-xl-8"
                         style="background-position: right top; background-size: 30% auto; background-image: url(/assets/admin/images/svg/shapes/abstract-4.svg)">
                        <!--begin::Body-->
                        <div class="card-body">
                            <span class="card-title fw-bolder text-muted text-hover-primary fs-4">子站商品</span>
                            <div class="fw-bolder fs-1 text-dark my-6"><?php echo $_smarty_tpl->tpl_vars['child']->value;?>
</div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 1-->
                </div>
                <div class="col-xl-2">
                    <!--begin::Statistics Widget 1-->
                    <div class="card bgi-no-repeat card-xl-stretch mb-5 mb-xl-8"
                         style="background-position: right top; background-size: 30% auto; background-image: url(/assets/admin/images/svg/shapes/abstract-4.svg)">
                        <!--begin::Body-->
                        <div class="card-body">
                            <span class="card-title fw-bolder text-muted text-hover-primary fs-4">子站上架</span>
                            <div class="fw-bolder fs-1 text-success my-6"><?php echo $_smarty_tpl->tpl_vars['child_shelves']->value;?>
</div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 1-->
                </div>
            </div>
            <!--end::Row-->

            <!--begin::Tables Widget 9-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <div class="card-toolbar">
                        <button class="btn btn-sm btn-light-primary btn-app-create me-3"><i class="fas fa-plus"></i>
                            添加商品
                        </button>
                        <button class="btn btn-sm btn-light-success listed me-3"><i class="fas fa-cloud-upload-alt"></i>
                            上架选中商品
                        </button>
                        <button class="btn btn-sm btn-light-dark delist me-3"><i class="fas fa-cloud-download-alt"></i>
                            下架选中商品
                        </button>
                        <button class="btn btn-sm btn-light-primary handle me-3"><i class="fas fa-hand-paper"></i>
                            一键操作选中商品
                        </button>
                        <button class="btn btn-sm btn-light-danger btn-app-del me-3"><i class="fas fa-trash"></i> 移除选中商品
                        </button>
                        <!--start::HOOK-->
                        <?php echo hook(\App\Consts\Hook::ADMIN_VIEW_COMMODITY_TOOLBAR);?>

                        <!--end::HOOK-->
                    </div>
                </div>
                <!--end::Header-->

                <div class="card-body py-3">
                    <form class="search-query"></form>
                    <table id="commodity"></table>
                </div>
            </div>

            <!--end::Tables Widget 9-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->


<style>
    .commodity-modal-table tr {
        line-height: 24px;
    }

    .commodity-modal-table tr td:nth-child(1) {
        width: 90px;
        font-weight: bolder;
        color: #8b979c;
    }

    .commodity-modal-table tr td {
        font-size: 14px;
        display: inline-block;
        margin-right: 20px;
    }

    .commodity-cover {
        max-width: 220px;
        border-radius: 20px;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        margin-bottom: 10px;
    }

    .commodity-config {
        background: linear-gradient(to bottom right, #ddfffb8a, #eaaacf4d);
        padding: 10px 20px !important;
        border-radius: 20px;
        margin-left: -5px;
        margin-top: 10px;
    }
</style>
<div style="display: none" class="commodity-modal">
    <div style="padding: 10px;">
        <table class="commodity-modal-table">
            <tbody>
            <tr>
                <td colspan="2"><img src="[cover]" class="commodity-cover"></td>
            </tr>
            <tr>
                <td>商家</td>
                <td>[owner]</td>
            </tr>
            <tr>
                <td>商品分类</td>
                <td>[category_name]</td>
            </tr>
            <tr>
                <td>商品ID</td>
                <td>[commodity_id]</td>
            </tr>
            <tr>
                <td>商品名称</td>
                <td>[commodity_name]</td>
            </tr>
            <tr>
                <td>成本价</td>
                <td>[factory_price]</td>
            </tr>
            <tr>
                <td>商品单价</td>
                <td>[price]</td>
            </tr>
            <tr>
                <td>会员价</td>
                <td>[user_price]</td>
            </tr>
            <tr>
                <td>已出售</td>
                <td>[card_success_count]</td>
            </tr>
            <tr>
                <td>上架状态</td>
                <td>[status]</td>
            </tr>
            <tr>
                <td>创建时间</td>
                <td>[create_time]</td>
            </tr>
            <tr>
                <td>API对接</td>
                <td>[api_status]</td>
            </tr>
            <tr>
                <td>对接代码</td>
                <td>[code]</td>
            </tr>
            <tr>
                <td>发货模式</td>
                <td>[delivery_way]</td>
            </tr>
            <tr>
                <td>出卡方式</td>
                <td>[delivery_auto_mode]</td>
            </tr>
            <tr>
                <td>联系方式</td>
                <td>[contact_type]</td>
            </tr>
            <tr>
                <td>订单密码</td>
                <td>[password_status]</td>
            </tr>
            <tr>
                <td>优惠卷</td>
                <td>[coupon]</td>
            </tr>

            <tr>
                <td>对接平台</td>
                <td>[shared_id]</td>
            </tr>

            <tr>
                <td>对接-市价同步</td>
                <td>[shared_sync]</td>
            </tr>
            <tr>
                <td>商品秒杀</td>
                <td>[seckill_status]</td>
            </tr>
            <tr>
                <td>秒杀开始时间</td>
                <td>[seckill_start_time]</td>
            </tr>
            <tr>
                <td>秒杀结束时间</td>
                <td>[seckill_end_time]</td>
            </tr>
            <tr>
                <td>预选卡密</td>
                <td>[draft_status]</td>
            </tr>
            <tr>
                <td>预选溢价</td>
                <td>[draft_premium]</td>
            </tr>

            <tr>
                <td>隐藏库存</td>
                <td>[inventory_hidden]</td>
            </tr>
            <tr>
                <td>发送邮件</td>
                <td>[send_email]</td>
            </tr>
            <tr>
                <td>仅登录购买</td>
                <td>[only_user]</td>
            </tr>
            <tr>
                <td>限购数量</td>
                <td>[purchase_count]</td>
            </tr>
            <tr>
                <td>最低购买数量</td>
                <td>[minimum]</td>
            </tr>
            <tr>
                <td>禁用折扣</td>
                <td>[level_disable]</td>
            </tr>
            <tr>
                <td class="commodity-config" colspan="2" style="width: 100%;">
                    [config]
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</div>
<div style="display: none" class="commodity-modal-tips">
    <div style="padding: 0px;">
        <table class="commodity-modal-table">
            <tbody>
            <tr>
                <td>上架状态</td>
                <td>[status]</td>
            </tr>
            <tr>
                <td>已出售</td>
                <td>[card_success_count]</td>
            </tr>
            <tr>
                <td>发货模式</td>
                <td>[delivery_way]</td>
            </tr>
            <tr>
                <td>API对接</td>
                <td>[api_status]</td>
            </tr>
            <tr>
                <td>商品显示</td>
                <td>[hide]</td>
            </tr>
            </tbody>
        </table>
    </div>

</div>

<?php echo '<script'; ?>
>

    $(function () {
        layui.use(['hex'], function () {
            let table = $("#commodity");
            var cao = layui.hex;

            let contactType = ["任意", "手机", "邮箱", "QQ"];


            let queryParams = null;

            let action = {
                user(item) {
                    if (!item.owner) {
                        return '<span class="badge badge-light-success user" style="cursor: pointer;" >主站自营</span>';
                    }
                    return '<span class="badge badge-light-dark" style="cursor: pointer;" ><img src="' + item.owner.avatar + '"  style="width: 18px;border-radius: 5px;margin-top: -3px;"/> ' + item.owner.username + '(' + item.owner.id + ')</span>'
                },
                category(item) {
                    if (!item.category) {
                        return '<span class="badge badge-light-success category" style="cursor: pointer;" >NONE</span>';
                    }
                    return '<span class="badge badge-light-dark" style="cursor: pointer;" ><img src="' + item.category.icon + '"  style="width: 18px;border-radius: 5px;margin-top: -3px;"/> ' + item.category.name + '</span>';
                },
                status(item) {
                    if (item.status == 1) {
                        return '<span class="badge badge-light-success">上架</span>';
                    }
                    return '<span class="badge badge-light-danger">下架</span>';
                },
                apiStatus(item) {
                    if (item.api_status == 1) {
                        return '<span class="badge badge-light-success">已开启</span>';
                    }
                    return '<span class="badge badge-light-danger">已关闭</span>';
                },
                passwordStatus(item) {
                    if (item.password_status == 1) {
                        return '<span class="badge badge-light-success">已开启</span>';
                    }
                    return '<span class="badge badge-light-danger">已关闭</span>';
                },
                coupon(item) {
                    if (item.coupon == 1) {
                        return '<span class="badge badge-light-success">已开启</span>';
                    }
                    return '<span class="badge badge-light-danger">已关闭</span>';
                },
                deliveryWay(item) {
                    if (item.delivery_way == 0) {
                        return '<span class="badge badge-light-success">自动发货</span>';
                    }
                    return '<span class="badge badge-light-danger">手动/插件发货</span>';
                },
                deliveryAutoMode(item) {
                    if (item.delivery_auto_mode == 0) {
                        return '<span class="badge badge-light-success">旧卡先发</span>';
                    } else if (item.delivery_auto_mode == 1) {
                        return '<span class="badge badge-light-primary">随机发卡</span>';
                    }
                    return '<span class="badge badge-light-danger">新卡先发</span>';
                },
                contactType(item) {
                    return '<span class="badge badge-light-info">' + contactType[item.contact_type] + '</span>';
                },
                shared(item) {
                    if (!item.shared) {
                        return '<span class="badge badge-light">-</span>';
                    }
                    return '<span class="badge badge-light-dark"><img src="' + item.shared.domain + '/favicon.ico"  style="width: 18px;border-radius: 100%;"/> ' + item.shared.name + '</span>'
                },
                sharedSync(item) {
                    if (!item.shared) {
                        return '<span class="badge badge-light">-</span>';
                    }

                    if (item.shared_sync == 1) {
                        return '<span class="badge badge-light-success">已开启</span>';
                    }
                    return '<span class="badge badge-light-danger">已关闭</span>';
                },
                seckillStatus(item) {
                    if (item.seckill_status == 1) {
                        return '<span class="badge badge-light-success">已开启</span>';
                    }
                    return '<span class="badge badge-light-danger">已关闭</span>';
                },
                draftStatus(item) {
                    if (item.draft_status == 1) {
                        return '<span class="badge badge-light-success">已开启</span>';
                    }
                    return '<span class="badge badge-light-danger">已关闭</span>';
                },
                hide(item) {
                    if (item.hide == 0) {
                        return '<span class="badge badge-light-success"><i class="fas fa-eye text-success"></i> 显示</span>';
                    }
                    return '<span class="badge badge-light"><i class="fas fa-eye-slash"></i> 隐藏</span>';
                },
                inventoryHidden(item) {
                    if (item.draft_status == 1) {
                        return '<span class="badge badge-light-success">是</span>';
                    }
                    return '<span class="badge badge-light-danger">否</span>';
                },
                sendEmail(item) {
                    if (item.send_email == 1) {
                        return '<span class="badge badge-light-success">是</span>';
                    }
                    return '<span class="badge badge-light-danger">否</span>';
                },
                onlyUser(item) {
                    if (item.only_user == 1) {
                        return '<span class="badge badge-light-success">是</span>';
                    }
                    return '<span class="badge badge-light-danger">否</span>';
                },
                levelDisable(item) {
                    if (item.level_disable == 1) {
                        return '<span class="badge badge-light-success">是</span>';
                    }
                    return '<span class="badge badge-light-danger">否</span>';
                },
                draftPremium(item) {
                    if (item.draft_status == 0) {
                        return '<span class="badge badge-light">-</span>';
                    }
                    return '<span class="badge badge-light-danger">￥' + item.draft_premium + '</span>';
                },
                seckillStartTime(item) {
                    if (item.seckill_status == 0) {
                        return '<span class="badge badge-light">-</span>';
                    }
                    return '<span class="badge badge-light-success">' + item.seckill_start_time + '</span>';
                },
                seckillEndTime(item) {
                    if (item.seckill_status == 0) {
                        return '<span class="badge badge-light">-</span>';
                    }
                    return '<span class="badge badge-light-danger">' + item.seckill_end_time + '</span>';
                },
                config(item) {
                    if (!item.config) {
                        return '-';
                    }
                    return item.config
                        .replace('[category]', '<span style="font-weight: bolder;color: #0d8ddc;border-bottom: 1px dashed #d0979ea3;">商品种类列表</span>')
                        .replace('[category_wholesale]', '<span style="font-weight: bolder;color: #0d8ddc;border-bottom: 1px dashed #d0979ea3;">种类批发配置</span>')
                        .replace('[wholesale]', '<span style="font-weight: bolder;color: #12d37e;border-bottom: 1px dashed #d0979ea3;">商品批发配置</span>')
                        .replaceAll('\n', '<br>');
                }
            }

            table.bootstrapTable({
                url: '/admin/api/commodity/data',//请求的url地址
                method: "post",//请求方式
                // striped:true,//是否显示行间隔色
                pageSize: 13,//每页显示的数量
                pageList: [13, 25, 50, 100, 500, 1000, 2000],
                showRefresh: false,//是否显示刷新按钮
                cache: false,//是否使用缓存
                showToggle: false,//是否显示详细视图和列表视图的切换按钮
                cardView: false,
                pagination: true,//是否显示分页
                pageNumber: 1,//初始化显示第几页，默认第1页
                singleSelect: false,//复选框只能选择一条记录
                sidePagination: 'server',//分页显示方式，可以选择客户端和服务端（server|client）
                contentType: "application/x-www-form-urlencoded",//使用post请求时必须加上
                dataType: "json",//接收的数据类型
                queryParamsType: 'limit',//参数格式，发送标准的Restful类型的请求
                queryParams: function (params) {
                    params.page = (params.offset / params.limit) + 1;
                    if (queryParams) {
                        for (const key in params) {
                            queryParams[key] = params[key];
                        }
                    } else {
                        queryParams = params;
                    }
                    return queryParams;
                },
                //回调函数
                responseHandler: function (res) {
                    return {
                        "total": res.count,
                        "rows": res.data
                    }
                },
                rowAttributes: function (item, index) {
                    setTimeout(() => {
                        let layerIndex = 0;
                        $('tr[data-index=' + index + ']').hover(function () {
                            layerIndex = layer.tips(
                                $('.commodity-modal-tips').html()
                                    .replace('[status]', action.status(item))
                                    .replace('[delivery_way]', action.deliveryWay(item))
                                    .replace('[card_success_count]', '<span class="badge badge-light text-primary">' + item.card_success_count + '</span>')
                                    .replace('[api_status]', action.apiStatus(item))
                                    .replace('[hide]', action.hide(item))
                                , this, {
                                    tips: [4, '#501536'],
                                    skin: 'layui-tips-skin',
                                    time: 0,
                                    area: 460
                                });
                        }, function () {
                            layer.close(layerIndex);
                        });
                    }, 300); //渲染最大300ms
                },
                detailView: true,
                detailViewIcon: true,
                detailFormatter: function (index, item, element) {
                    return $('.commodity-modal').html()
                        .replace('[cover]', item.cover)
                        .replace('[owner]', action.user(item))
                        .replace('[commodity_id]', '<span class="badge badge-light">' + item.id + '</span>')
                        .replace('[commodity_name]', '<span class="badge badge-light-dark text-primary" style="cursor: pointer;" >' + item.name + '</span>')
                        .replace('[category_name]', action.category(item))
                        .replace('[factory_price]', '<span class="badge badge-light">￥' + item.factory_price + '</span>')
                        .replace('[price]', '<span class="badge badge-light text-success">￥' + item.price + '</span>')
                        .replace('[user_price]', '<span class="badge badge-light text-primary">￥' + item.user_price + '</span>')
                        .replace('[status]', action.status(item))
                        .replace('[api_status]', action.apiStatus(item))
                        .replace('[delivery_way]', action.deliveryWay(item))
                        .replace('[delivery_auto_mode]', action.deliveryAutoMode(item))
                        .replace('[contact_type]', action.contactType(item))
                        .replace('[password_status]', action.passwordStatus(item))
                        .replace('[coupon]', action.coupon(item))
                        .replace('[shared_id]', action.shared(item))
                        .replace('[shared_sync]', action.sharedSync(item))
                        .replace('[seckill_status]', action.seckillStatus(item))
                        .replace('[seckill_start_time]', action.seckillStartTime(item))
                        .replace('[seckill_end_time]', action.seckillEndTime(item))
                        .replace('[draft_status]', action.draftStatus(item))
                        .replace('[draft_premium]', action.draftPremium(item))
                        .replace('[inventory_hidden]', action.inventoryHidden(item))
                        .replace('[send_email]', action.sendEmail(item))
                        .replace('[only_user]', action.onlyUser(item))
                        .replace('[level_disable]', action.levelDisable(item))
                        .replace('[create_time]', '<span class="badge badge-light">' + item.create_time + '</span>')
                        .replace('[minimum]', '<span class="badge badge-light text-primary">' + item.minimum + '</span>')
                        .replace('[code]', '<span class="badge badge-light text-info">' + item.code + '</span>')
                        .replace('[config]', action.config(item))
                        .replace('[purchase_count]', '<span class="badge badge-light text-danger">' + item.purchase_count + '</span>')
                        .replace('[card_success_count]', '<span class="badge badge-light text-primary">' + item.card_success_count + '</span>')
                        ;
                },
                columns: [
                    {checkbox: true}
                    , {
                        field: 'category', title: '商品分类', formatter: function (val, item) {
                            if (!item.category) {
                                return '<span class="btn-badge badge-light category" style="cursor: pointer;" >NONE</span>';
                            }
                            return '<span class="btn-badge badge-light category" style="cursor: pointer;" ><img src="' + item.category.icon + '"  style="width: 18px;border-radius: 100%;"/> ' + item.category.name + '</span>'
                        }
                    }
                    , {
                        field: 'name', title: '商品名称', formatter: function (val, item) {
                            return '<span class="btn-badge badge-light"><img src="' + item.cover + '"  style="width: 18px;border-radius: 100%;margin-top: -3px;"/> ' + item.name + '</span>'
                        }
                    }
                    , {
                        field: 'card_count', title: '库存', formatter: function (val, item) {
                            if (item.delivery_way == 0 && !item.shared_id) {
                                return item.card_count + " <a class='add-card' style='color: green;' href='javascript:void(0);'>加卡</a>";
                            }
                            return '-';
                        }
                        ,
                        events: {
                            'click .add-card': function (event, value, row, index) {
                                addCard({
                                    commodity_id: row.id
                                });
                            }
                        }
                    }
                    , {field: 'price', title: '零售价'}
                    , {field: 'user_price', title: '会员价'}
                    , {field: 'order_today_amount', title: '今日'}
                    , {field: 'order_yesterday_amount', title: '昨日'}
                    , {field: 'order_week_amount', title: '本周'}
                    , {field: 'order_all_amount', title: '全部'}
                    , {field: 'sort', title: '排序'}
                    , {
                        field: 'share_url', title: '推广链接', formatter: function (val, item) {
                            return '<span  class="badge badge-light clipboard clipboard-' + item.id + '" data-clipboard-text="' + item.share_url + '" style="cursor: pointer;">复制</span>';
                        },
                        events: {
                            'click .clipboard': function (event, value, row, index) {
                                let clipboard = new ClipboardJS(".clipboard-" + row.id);
                                clipboard.on('success', function (e) {
                                    layer.msg("分享链接已经复制成功了，赶快发给好友吧！");
                                });
                            }
                        }
                    }
                    , {
                        field: 'owner', title: '商家', formatter: function (val, item) {
                            if (!item.owner) {
                                return '<span class="btn-badge badge-light-success owner" style="cursor: pointer;" >主站自营</span>';
                            }
                            return '<span class="btn-badge badge-light owner" style="cursor: pointer;" ><img src="' + item.owner.avatar + '"  style="width: 18px;border-radius: 100%;"/> ' + item.owner.username + '(' + item.owner.id + ')</span>'
                        }
                        , events: {
                            'click .owner': function (event, value, row, index) {
                                let id = row.owner ? row.owner.id : 0;
                                $("input[name='equal-owner']").val(id);
                                table.bootstrapTable('refresh', {
                                    silent: true,
                                    pageNumber: 1,
                                    query: {"equal-owner": id}
                                });
                            }
                        }
                    }
                    , {
                        field: 'shared', title: '对接平台', formatter: function (val, item) {
                            if (!item.shared) {
                                return '<span class="btn-badge badge-light">-</span>';
                            }
                            return '<span class="btn-badge badge-light"><img src="' + item.shared.domain + '/favicon.ico"  style="width: 18px;border-radius: 100%;"/> ' + item.shared.name + '</span>'
                        }
                    },
                    <!--start::HOOK-->
                    <?php echo hook(\App\Consts\Hook::ADMIN_VIEW_COMMODITY_TABLE);?>

                    <!--end::HOOK-->
                    {
                        field: 'operate',
                        title: '操作',
                        formatter: function (val, item) {

                            let html = '<button type="button"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 edit" title="编辑"><i class="fa fa-edit"></i></button> ';

                            if (item.recommend == 0) {
                                html += '<button type="button"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 like" title="上推荐"><i class="fa fa-star" style="color: #a8a5a5;"></i></button> ';
                            } else {
                                html += '<button type="button"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 unlike" title="取消推荐"><i class="fa fa-star" style="color: #e658ea;"></i></button> ';
                            }

                            if (item.status == 0) {
                                html += '<button type="button"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 start" title="上架"><i class="fa fa-play" style="color: #61ff61;"></i></button> ';
                            } else {
                                html += '<button type="button"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 stop" title="下架"><i class="fa fa-pause" style="color: #fdbea7;"></i></button> ';
                            }


                            html += '<button type="button"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 clone" title="克隆商品"><i class="fas fa-clone"></i></button> ';
                            html += '<button type="button"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 del" title="删除"><i class="fas fa-trash"></i></button> ';
                            return html;
                        },
                        events: {
                            'click .edit': function (event, value, row, index) {
                                modal(row);
                            },
                            'click .clone': function (event, value, row, index) {
                                delete row.id;
                                delete row.shared_code;
                                delete row.code;
                                delete row.shared_id;
                                delete row.shared;
                                modal(row);
                            },
                            'click .del': function (event, value, row, index) {
                                layer.confirm('您正在移除该商品，无法恢复哦，是否要继续？', {
                                    btn: ['确认移除', '取消']
                                }, function () {
                                    cao.$post('/admin/api/commodity/del', {list: [row.id]}, res => {
                                        table.bootstrapTable('refresh', {silent: true});
                                        layer.msg("删除成功");
                                    });
                                });
                            },
                            'click .start': function (event, value, row, index) {
                                cao.$post('/admin/api/commodity/save', {id: row.id, status: 1}, res => {
                                    layer.msg("商品上架成功");
                                    table.bootstrapTable('refresh', {silent: true});
                                });
                            },
                            'click .stop': function (event, value, row, index) {
                                cao.$post('/admin/api/commodity/save', {id: row.id, status: 0}, res => {
                                    layer.msg("商品下架成功");
                                    table.bootstrapTable('refresh', {silent: true});
                                });
                            },
                            'click .like': function (event, value, row, index) {
                                cao.$post('/admin/api/commodity/save', {id: row.id, recommend: 1}, res => {
                                    layer.msg("已推荐");
                                    table.bootstrapTable('refresh', {silent: true});
                                });
                            },
                            'click .unlike': function (event, value, row, index) {
                                cao.$post('/admin/api/commodity/save', {id: row.id, recommend: 0}, res => {
                                    layer.msg("已取消推荐");
                                    table.bootstrapTable('refresh', {silent: true});
                                });
                            }
                        }
                    }
                ]
            });

            let levelPriceModal = (values = {}, levelPriceWidget) => {
                let levelPriceWidgetJson = {};
                try {
                    levelPriceWidgetJson = JSON.parse(decodeURIComponent(levelPriceWidget.val()));
                } catch (e) {
                }

                if (levelPriceWidgetJson.hasOwnProperty(values.id)) {
                    values.amount = levelPriceWidgetJson[values.id].amount;
                    values.config = levelPriceWidgetJson[values.id].config;
                    values.show = levelPriceWidgetJson[values.id].show;
                }

                cao.popup((res, index) => {
                    //初始化
                    levelPriceWidgetJson[res.id] = {};

                    let amount = parseFloat(res.amount);

                    if (isNaN(amount) || amount <= 0) {
                        delete values["amount"];
                        $(".level_price_show_" + res.id).html("继承系统");
                    } else {
                        levelPriceWidgetJson[res.id]["amount"] = amount;
                        $(".level_price_show_" + res.id).html(amount);
                    }

                    if (!res.config) {
                        delete values["config"];
                    } else {
                        levelPriceWidgetJson[res.id]["config"] = res.config;
                    }

                    levelPriceWidgetJson[res.id]["show"] = res.show;
                    levelPriceWidget.val(encodeURIComponent(JSON.stringify(levelPriceWidgetJson)));
                    layer.close(index);
                }, [
                    {
                        title: "单价",
                        name: "amount",
                        type: "input",
                        placeholder: "请输入单价，仅针对普通商品",
                        tips: "如果你使用了《商品种类配置》，那么这个单价就算设置了也会失效。"
                    },
                    {
                        title: "显示商品",
                        name: "show",
                        type: "switch",
                        text: "是",
                        tips: "当这个商品被隐藏时，你可以通过这个选项来对当前会员等级进行显示"
                    },
                    {
                        title: "配置参数",
                        name: "config",
                        type: "textarea",
                        placeholder: "独立配置参数，不配置则继承商品",
                        height: 260
                    },
                    {
                        title: "",
                        name: "explain",
                        type: "explain",
                        placeholder: "<b style='color: red;'>配置参数是一个强大又好用的功能，学习文档：<a href='https://faka.wiki/#/zh-cn/goods-config' target='_blank'>https://faka.wiki/#/zh-cn/goods-config</a></b>"
                    },
                ], res => {
                    table.bootstrapTable('refresh', {silent: true});
                }, values, "460px", false, values.name + ' - 配置');
            }

            let commodityUnqueId = 0;
            let modalAction = {
                showShared(unqueId) {
                    //共享平台
                    cao.popupElement("shared_sync", "input", unqueId).parent().show();
                    cao.popupElement("shared_code", "input", unqueId).parent().parent().show();
                    cao.popupElement("shared_premium", "input", unqueId).parent().parent().show();
                    cao.popupElement("shared_premium_type", "input", unqueId).parent().parent().show();


                    cao.popupElement("delivery_way", "select", unqueId).parent().parent().hide();
                    cao.popupElement("delivery_auto_mode", "select", unqueId).parent().parent().hide();
                    cao.popupElement("delivery_message", "textarea", unqueId).parent().parent().hide();
                },
                hideShared(unqueId) {
                    cao.popupElement("shared_sync", "input", unqueId).parent().hide();
                    cao.popupElement("shared_code", "input", unqueId).parent().parent().hide();
                    cao.popupElement("shared_premium", "input", unqueId).parent().parent().hide();
                    cao.popupElement("shared_premium_type", "input", unqueId).parent().parent().hide();

                    cao.popupElement("delivery_way", "select", unqueId).parent().parent().show();
                    cao.popupElement("delivery_auto_mode", "select", unqueId).parent().parent().show();
                    cao.popupElement("delivery_message", "textarea", unqueId).parent().parent().show();
                }
            }
            let modal = (values = {}) => {
                cao.popup('/admin/api/commodity/save', [
                    {title: "商品图标", name: "cover", type: "image", placeholder: "请选择图片(推荐64*64)"},
                    {title: "商品名称", name: "name", type: "input", placeholder: "商品名称", required: true},
                    {title: "商品说明", name: "description", type: "editor", placeholder: "商品说明", required: true},
                    {
                        title: "商品分类",
                        name: "category_id",
                        type: "select",
                        dict: "category->owner=0,id,name",
                        placeholder: "请选择分类", required: true,
                        search: true
                    },
                    {title: "成本价", name: "factory_price", type: "input", default: 0.00},
                    {title: "商品单价", name: "price", type: "input", placeholder: "商品单价(未登录游客购买价)/0=免费", required: true},
                    {
                        title: "会员价",
                        name: "user_price",
                        type: "input",
                        placeholder: "会员价(登录注册后购买的价格)/0=免费",
                        required: true
                    },
                    {
                        title: "禁用折扣",
                        name: "level_disable",
                        type: "switch",
                        text: "禁用",
                        tips: "如果禁用会员等级后，那么登录用户购买该商品将无法应用会员折扣，不包含会员价。"
                    },
                    {
                        title: "隐藏商品",
                        name: "hide",
                        type: "switch",
                        text: "是",
                        default: 0,
                        tips: "隐藏商品后，游客将看不见该商品，但你可以通过下面的《会员配置》来进行对指定的会员等级显示。"
                    },
                    {
                        title: "首页推荐",
                        name: "recommend",
                        type: "switch",
                        text: "上推荐",
                        tips: "该功能需要在'网站设置'->'其他设置'中开启首页推荐功能才会显示"
                    },
                    {
                        title: "会员配置",
                        name: "level_price",
                        type: "textarea",
                        hide: true
                    },
                    {
                        title: "会员配置",
                        name: "level_price_table",
                        type: "explain",
                        placeholder: '<div class="level_price_div"><table class="level_price_table"></table></div>'
                    },
                    {
                        title: "共享平台",
                        name: "shared_id",
                        type: "select",
                        placeholder: "本地自营(LOCAL)",
                        dict: "shared,id,name", change: function (value) {
                            let sharedCodeElement = cao.popupElement("shared_code", "input", commodityUnqueId).parent().parent();
                            if (value == 0 || !value) {
                                modalAction.hideShared(commodityUnqueId);

                            } else {
                                layer.msg("(´・ω・｀)请输入对方店铺共享商品的代码");
                                modalAction.showShared(commodityUnqueId);
                            }
                        }
                    },
                    {title: "共享代码", name: "shared_code", type: "input", placeholder: "请输入对方店铺共享商品的代码", hide: true},
                    {
                        title: "加价模式",
                        name: "shared_premium_type",
                        type: "radio",
                        dict: [
                            {id: 0, name: "普通金额加价"},
                            {id: 1, name: "百分比加价"}
                        ],
                        default: 0,
                        hide: true
                    },
                    {
                        title: "自动加价",
                        name: "shared_premium",
                        type: "input",
                        default: "0.00",
                        hide: true,
                        tips: "需要开启自动同步价格才会生效"
                    },
                    {
                        title: "同步价格",
                        name: "shared_sync",
                        type: "switch",
                        text: "开启",
                        tips: "开启后，自动同步共享平台的价格，防止对方商品价格变动时，导致盈亏"
                    },
                    {
                        title: "发货方式",
                        name: "delivery_way",
                        type: "select",
                        placeholder: "请选择",
                        dict: [{id: 0, name: "自动发货"}, {id: 1, name: "手动发货/插件"}],
                        default: 0,
                        required: true,
                        change: function (value) {
                            let d1 = cao.popupElement("delivery_message", "textarea", commodityUnqueId).parent().parent();
                            let d2 = cao.popupElement("delivery_auto_mode", "select", commodityUnqueId).parent().parent();
                            if (value == 1) {
                                d1.show();
                                d2.hide();
                            } else {
                                d1.hide();
                                d2.show();
                            }
                        }
                    },
                    {
                        title: "卡密排序",
                        name: "delivery_auto_mode",
                        type: "select",
                        placeholder: "请选择",
                        dict: [{id: 0, name: "优先旧卡(有序)"}, {id: 1, name: "随机发卡(无序)"}, {id: 2, name: "优先新卡(有序)"}],
                        default: 0,
                        hide: true
                    },
                    {
                        title: "发货信息",
                        name: "delivery_message",
                        type: "textarea",
                        placeholder: "手动发货信息，可以是一些固定的卡密或者软件下载链接等..",
                        hide: true
                    },
                    {
                        title: "发货留言",
                        name: "leave_message",
                        type: "textarea",
                        placeholder: "当用户购买商品后，该留言会显示在订单中",
                        tips: "当用户购买商品后，该留言会显示在订单中"
                    },
                    {
                        title: "联系方式",
                        name: "contact_type",
                        type: "select",
                        placeholder: "请选择",
                        dict: [{id: 0, name: "任意"}, {id: 1, name: "手机号"}, {id: 2, name: "邮箱"}, {id: 3, name: "QQ号"}],
                        default: 0,
                        required: true
                    },
                    {
                        title: "邮件发送",
                        name: "send_email",
                        type: "switch",
                        text: "启用",
                        tips: "用户购买商品后，会将卡密信息发送至邮箱，仅联系方式为邮箱状态下有效。"
                    },
                    {
                        title: "查询密码",
                        name: "password_status",
                        type: "switch",
                        text: "启用",
                        tips: "开启后，下单时需要设置查询订单的密码，更强的保护用户隐私"
                    },
                    {title: "排序", name: "sort", type: "input", placeholder: "排序，越小越靠前"},
                    {
                        title: "最低购买数量",
                        name: "minimum",
                        type: "input",
                        placeholder: "单次最低购买数量，0=不限制，默认0"
                    },
                    {
                        title: "最大购买数量",
                        name: "maximum",
                        type: "input",
                        placeholder: "单次最大购买数量，0=不限制，默认0"
                    },
                    {title: "优惠卷", name: "coupon", type: "switch", text: "启用"},
                    {
                        title: "限时秒杀", name: "seckill_status", type: "switch", text: "启用", change: function (value) {
                            let d1 = cao.popupElement("seckill_start_time", "date", commodityUnqueId).parent().parent();
                            let d2 = cao.popupElement("seckill_end_time", "date", commodityUnqueId).parent().parent();
                            if (value == 1) {
                                d1.show();
                                d2.show();
                            } else {
                                d1.hide();
                                d2.hide();
                            }
                        }
                    },
                    {title: "秒杀开始时间", name: "seckill_start_time", type: "date", placeholder: "开始时间", hide: true},
                    {title: "秒杀结束时间", name: "seckill_end_time", type: "date", placeholder: "结束时间", hide: true},
                    {
                        title: "卡密预选", name: "draft_status", type: "switch", text: "启用", change: function (value) {
                            let d1 = cao.popupElement("draft_premium", "input", commodityUnqueId).parent().parent();
                            if (value == 1) {
                                d1.show();
                            } else {
                                d1.hide();
                            }
                        }, tips: "顾名思义，意思就是顾客在购买时，可以预先选择想要购买的那个卡密，一般针对于出售游戏账号等用途。"
                    },
                    {
                        title: "预选时加价",
                        name: "draft_premium",
                        type: "input",
                        placeholder: "请输入预选时加价的金额",
                        hide: true
                    },
                    {
                        title: "强制登录",
                        name: "only_user",
                        type: "switch",
                        text: "启用",
                        tips: "用户必须登录后才能购买商品"
                    },
                    {
                        title: "会员限购",
                        name: "purchase_count",
                        type: "input",
                        placeholder: "0代表不限制",
                        tips: "0代表不限制，如果限制了购买数量，那么用户必须登录才能购买。",
                        default: 0,
                    },
                    {
                        title: "API对接",
                        name: "api_status",
                        type: "switch",
                        text: "启用",
                        tips: "如果你需要别人的店铺来对接这个商品，那么你就需要开启该选项"
                    },
                    {
                        title: "隐藏库存",
                        name: "inventory_hidden",
                        type: "switch",
                        text: "启用",
                        tips: "该功能开启后，自动发货的商品将不会再显示具体库存"
                    },
                    {
                        title: "控件",
                        name: "widget",
                        type: "custom",
                        tips: "该功能可以在店铺前台自定义输入框<br><p>1.中文名：推荐4个字</p><p>2.键名：外部插件可以通过这个名称获取到值</p><p>3.提示内容：控件提示的内容</p><p>4.正则：通过正则表达式来限制用户提交内容，正则表达式可以网上搜索如何使用，不限制可留空</p><p>5.匹配错误提示：正则匹配失败，将会这里填写的错误信息</p>"
                    },
                    {title: "配置参数", name: "config", type: "textarea", placeholder: "配置参数", height: 260},
                    {
                        title: "",
                        name: "explain",
                        type: "explain",
                        placeholder: "<b style='color: red;'>配置参数是一个强大又好用的功能，学习文档：<a href='https://faka.wiki/#/zh-cn/goods-config' target='_blank'>https://faka.wiki/#/zh-cn/goods-config</a></b>"
                    },
                    {title: "状态", name: "status", type: "switch", text: "上架"},
                    <?php echo hook(\App\Consts\Hook::ADMIN_VIEW_COMMODITY_POST);?>

                ], res => {
                    table.bootstrapTable('refresh', {silent: true});
                }, values, ["720px", "720px"], false, "添加", unqueId => {
                    commodityUnqueId = unqueId;

                    //success
                    let d = cao.popupElement("draft_premium", "input", unqueId).parent().parent();
                    cao.popupElement("draft_status", "input", unqueId).val() == 1 ? d.show() : d.hide();

                    let d1 = cao.popupElement("delivery_auto_mode", "select", unqueId).parent().parent();
                    cao.popupElement("delivery_way", "select", unqueId).val() == 0 ? d1.show() : d1.hide();

                    //限时秒杀 seckill_start_time seckill_end_time
                    let seckill = cao.popupElement("seckill_status", "checkbox", unqueId);
                    let seckillStartTime = cao.popupElement("seckill_start_time", "input", unqueId).parent().parent();
                    let seckillEndTime = cao.popupElement("seckill_end_time", "input", unqueId).parent().parent();
                    if (seckill.val() == 1) {
                        seckillStartTime.show();
                        seckillEndTime.show();
                    } else {
                        seckillStartTime.hide();
                        seckillEndTime.hide();
                    }

                    let levelPriceWidget = cao.popupElement("level_price", "textarea", unqueId);
                    levelPriceWidget.parent().parent().hide();

                    let levelPriceWidgetJson = {};
                    try {
                        levelPriceWidgetJson = JSON.parse(decodeURIComponent(levelPriceWidget.val()));
                    } catch (e) {
                    }

                    //初始化表格
                    let queryParamsLevel = null;
                    $('.level_price_table').bootstrapTable({
                        url: '/admin/api/group/data',//请求的url地址
                        method: "post",//请求方式
                        // striped:true,//是否显示行间隔色
                        pageSize: 500,//每页显示的数量
                        showRefresh: false,//是否显示刷新按钮
                        cache: false,//是否使用缓存
                        showToggle: false,//是否显示详细视图和列表视图的切换按钮
                        cardView: false,
                        pagination: false,//是否显示分页
                        pageNumber: 1,//初始化显示第几页，默认第1页
                        singleSelect: false,//复选框只能选择一条记录
                        sidePagination: 'server',//分页显示方式，可以选择客户端和服务端（server|client）
                        contentType: "application/x-www-form-urlencoded",//使用post请求时必须加上
                        dataType: "json",//接收的数据类型
                        queryParamsType: 'limit',//参数格式，发送标准的Restful类型的请求
                        queryParams: function (params) {
                            params.page = (params.offset / params.limit) + 1;
                            if (queryParamsLevel) {
                                for (const key in params) {
                                    queryParamsLevel[key] = params[key];
                                }
                            } else {
                                queryParamsLevel = params;
                            }
                            return queryParamsLevel;
                        },
                        //回调函数
                        responseHandler: function (res) {
                            return {
                                "total": res.count,
                                "rows": res.data
                            }
                        },
                        columns: [
                            {
                                field: "icon", title: "LOGO", formatter: function (val, item) {
                                    if (!item.icon) {
                                        return "-";
                                    }
                                    return '<img src="' + item.icon + '"  style="height: 32px;"/>';
                                }
                            },
                            {
                                field: "name", title: "等级", formatter: function (val, item) {
                                    return '<span class="badge badge-light">' + item.name + '</span>'
                                }
                            },
                            {
                                field: "price", title: "自定义单价", formatter: function (val, item) {
                                    if (levelPriceWidgetJson.hasOwnProperty(item.id) && levelPriceWidgetJson[item.id].hasOwnProperty('amount')) {
                                        return '<span class="level_price_show_' + item.id + '">' + levelPriceWidgetJson[item.id].amount + '</span>';
                                    }
                                    return '<span class="level_price_show_' + item.id + '">继承系统</span>';
                                }
                            },
                            {
                                field: 'operate',
                                title: '配置',
                                formatter: function (val, item) {
                                    return '<span class="level_price_config" style="cursor: pointer"><i class="fas fa-cog text-primary"></i></span>';
                                },
                                events: {
                                    'click .level_price_config': function (event, value, row, index) {
                                        levelPriceModal(row, levelPriceWidget);
                                    }
                                }
                            }
                        ]
                    });

                    //共享平台
                    if (cao.popupElement("shared_code", "input", unqueId).val() != "") {
                        modalAction.showShared(unqueId);
                    } else {
                        modalAction.hideShared(unqueId);
                    }
                });
            }

            let addCard = (values = {}) => {
                cao.popup('/admin/api/card/save', [
                    {
                        title: "选择商品",
                        name: "commodity_id",
                        type: "hidden",
                    },
                    {
                        title: "商品类别",
                        name: "race",
                        type: "input",
                        placeholder: "商品类别，一般你用不着，而且不懂不要乱填哦，想用请查看说明文档"
                    },
                    {
                        title: "备注信息",
                        name: "note",
                        type: "input",
                        placeholder: "备注信息(可空)，方便查询某次添加的卡密"
                    },
                    {
                        title: "卡密信息",
                        name: "secret",
                        type: "textarea",
                        placeholder: "卡密信息+预选信息（多个），一行即算一个卡密信息+预选信息\n\n" +
                            "例子1（游戏账号+预选信息）：\n大区:神境之地----等级:100----ID:逆天而行----觉醒:已觉醒----段位:无人之境----账号:admin----密码:123456#[大区:神境之地----等级:100----ID:逆天而行----觉醒:已觉醒----段位:无人之境]#\n\n" +
                            "例子2（卡密信息+无预选）：\nAAKvSsfWGnFdnqP\nf5V61wpeAIuX35t\n1a9Xn35qsEQwp32\n\n提示：#[我是预选信息内容]#，预选信息代表买家在购买的时候可以通过加价的方式预选自己想购买的卡密信息，一般用作与购买自己想要的账号等",
                        height: 420
                    },
                    {
                        title: "",
                        name: "explain",
                        type: "explain",
                        placeholder: '<input class="draft-input" style="border:1px solid #fdabe678;border-radius: 5px;padding: 0 0 0 5px;" type="text" placeholder="预选卡密隐藏正则，可不填"><button type="button" style="border: none;margin-left: 5px;padding: 0 5px 0 5px;background: #fd6ace96;border-radius: 5px;color: whitesmoke;" class="draft-btn">处理</button>'
                    },
                    {
                        title: "去除重复",
                        name: "unique",
                        type: "switch",
                        text: "启用（保持数据唯一，会占用CPU资源）"
                    },
                ], res => {
                    table.bootstrapTable('refresh', {silent: true});
                }, values, ["660px", "770px"], false, "添加库存", unqueId => {
                    $('.draft-btn').click(function () {
                        let regx = $('.draft-input').val();
                        let cards = cao.popupElement("secret", "textarea", unqueId).val().trim();
                        let newCards = "";
                        let success = 0;
                        let error = 0;
                        cards.split('\n').forEach(item => {
                            item = item.trim();
                            if (/#\[(.*?)\]#/.test(item)) {
                                newCards += item + "\n";
                                error++;
                            } else {
                                newCards += item + '#[' + item.replace(eval("/" + regx + "/i"), "") + ']#\n';
                                success++;
                            }
                        });
                        cao.popupElement("secret", "textarea", unqueId).val(newCards.trim());
                        layer.msg("预选卡密处理完成，已处理：" + success + "，未处理：" + error);
                    });
                });
            }


            $('.btn-app-create').click(function () {
                modal();
            });

            $('.btn-app-del').click(() => {
                var data = cao.listObjectToArray(table.bootstrapTable('getSelections'));
                if (data.length == 0) {
                    layer.msg("请至少勾选1个商品进行操作！");
                    return;
                }
                layer.confirm('您确定要删除已经选中的商品吗？这是不可恢复的操作！', {
                    btn: ['确定', '取消']
                }, function () {
                    cao.$post("/admin/api/commodity/del", {list: data}, res => {
                        layer.msg("全部删除成功");
                        table.bootstrapTable('refresh', {silent: true});
                    });
                });
            });

            $('.listed').click(() => {
                let data = cao.listObjectToArray(table.bootstrapTable('getSelections'));
                if (data.length == 0) {
                    layer.msg("请至少勾选1个商品进行操作！");
                    return;
                }
                layer.confirm('您确定要上架选中的商品吗？', {
                    btn: ['确定', '取消']
                }, function () {
                    cao.$post("/admin/api/commodity/status", {list: data, status: 1}, res => {
                        layer.msg("全部上架完成");
                        table.bootstrapTable('refresh', {silent: true});
                    });
                });
            });

            $('.delist').click(() => {
                let data = cao.listObjectToArray(table.bootstrapTable('getSelections'));
                if (data.length == 0) {
                    layer.msg("请至少勾选1个商品进行操作！");
                    return;
                }
                layer.confirm('您确定要下架选中的商品吗？', {
                    btn: ['确定', '取消']
                }, function () {
                    cao.$post("/admin/api/commodity/status", {list: data, status: 0}, res => {
                        layer.msg("全部下架完成");
                        table.bootstrapTable('refresh', {silent: true});
                    });
                });
            });

            $('.handle').click(() => {
                let data = cao.listObjectToArray(table.bootstrapTable('getSelections'));
                if (data.length == 0) {
                    layer.msg("请至少勾选1个商品进行操作！");
                    return;
                }

                let join = data.join(",");

                cao.popup('/admin/api/commodity/fastEnable', [
                    {
                        title: "",
                        name: "list",
                        type: "hidden",
                        default: join
                    },
                    {
                        title: "启用API对接",
                        name: "api_status",
                        type: "switch",
                        text: "启用"
                    },
                    {
                        title: "下单密码",
                        name: "password_status",
                        type: "switch",
                        text: "启用"
                    },
                    {
                        title: "优惠卷",
                        name: "coupon",
                        type: "switch",
                        text: "启用"
                    },
                    {
                        title: "隐藏库存",
                        name: "inventory_hidden",
                        type: "switch",
                        text: "启用"
                    },
                    {
                        title: "推荐商品",
                        name: "recommend",
                        type: "switch",
                        text: "启用"
                    },
                    {
                        title: "说明",
                        name: "explain",
                        type: "explain",
                        placeholder: "上面的每个选项都会被强制应用到选中的商品，无论你有没有启用。"
                    }
                ], res => {
                    table.bootstrapTable('refresh', {silent: true});
                }, {}, '420px', false, "一键操作选中商品");
            });

            cao.query('.search-query', table, [
                {title: "商品分类", name: "equal-category_id", type: "select", dict: "category,id,name", search: true},
                {title: "商品名称(模糊搜索)", name: "search-name", type: "input"},
                {
                    title: "上架状态", name: "equal-status", type: "select", dict: [
                        {id: 0, name: "停用"},
                        {id: 1, name: "启用"}
                    ]
                },
                {title: "所属会员ID，0=系统", name: "equal-owner", type: "input"},
                {title: "对接平台", name: "equal-shared_id", type: "select", dict: "shared,id,name"},
            ], true, false);
        });
    });
<?php echo '</script'; ?>
>
<!--start::HOOK-->
<?php echo hook(\App\Consts\Hook::ADMIN_VIEW_COMMODITY_FOOTER);?>

<!--end::HOOK-->
<?php $_smarty_tpl->_subTemplateRender("file:../Footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
