<?php
/* Smarty version 3.1.39, created on 2022-05-26 23:23:26
  from '/www/wwwroot/git/mm-acg-faka/app/View/Admin/Trade/Coupon.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_628f9b6ea0ebf4_20648351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6315f8697b9fac8abdb1abeb965191ba4d205575' => 
    array (
      0 => '/www/wwwroot/git/mm-acg-faka/app/View/Admin/Trade/Coupon.html',
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
function content_628f9b6ea0ebf4_20648351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <?php $_smarty_tpl->_subTemplateRender("file:../Toolbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <!--begin::Tables Widget 9-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <div class="card-toolbar">
                        <button class="btn btn-sm btn-light-primary btn-app-create me-3"><i class="fas fa-plus"></i>
                            生成优惠卷
                        </button>
                        <button class="btn btn-sm btn-light-danger btn-app-del me-3"><i class="fas fa-trash"></i>
                            移除选中优惠卷
                        </button>
                        <button class="btn btn-sm btn-light-dark btn-app-lock me-3"><i class="fa fa-lock"></i> 锁定选中优惠卷
                        </button>
                        <button class="btn btn-sm btn-light-success btn-app-unlock me-3"><i class="fa fa-lock-open"></i>
                            解锁选中优惠卷
                        </button>
                        <button class="btn btn-sm btn-light-primary btn-app-export me-3"><i
                                    class="fas fa-file-export"></i>
                            导出筛选优惠卷
                        </button>
                    </div>
                </div>
                <!--end::Header-->

                <div class="card-body py-3">
                    <form class="search-query"></form>
                    <table id="coupon" lay-filter="coupon"></table>
                </div>
            </div>

            <!--end::Tables Widget 9-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->

<?php echo '<script'; ?>
>

    $(function () {
        layui.use(['hex', 'form'], function () {
            let table = $("#coupon");
            let cao = layui.hex;
            let form = layui.form;
            let status = ['<span class="badge badge-light-success">正常使用</span>', '<span class="badge badge-light-danger">已失效</span>', '<span class="badge badge-light">锁定</span>'];

            let queryParams = null;
            table.bootstrapTable({
                url: '/admin/api/coupon/data',//请求的url地址
                method: "post",//请求方式
                // striped:true,//是否显示行间隔色
                pageSize: 15,//每页显示的数量
                pageList: [15, 25, 50, 100],
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
                columns: [
                    {checkbox: true},
                    {
                        field: 'secret', title: '卷代码', formatter: function (val, item) {
                            return '<span class="badge badge-light">' + item.code + '</span>';
                        }, width: 200
                    }
                    , {
                        field: 'mode', title: '抵扣模式', formatter: function (val, item) {
                            if (item.mode == 0) {
                                return '<span class="badge badge-light-success">金额</span>';
                            }

                            return '<span class="badge badge-light-primary">百分比</span>';
                        }
                    }
                    , {
                        field: 'money', title: '面值', formatter: function (val, item) {
                            return '<span class="badge badge-light-success">' + item.money + '</span>';
                        }
                    }
                    , {
                        field: 'commodity', title: '抵扣范围', formatter: function (val, item) {
                            if (!item.commodity && !item.category) {
                                return '<span class="text-danger">全场通用</span>';
                            }

                            if (!item.commodity && item.category) {
                                return '<span class="text-primary">[分类] </span>' + item.category.name;
                            }

                            let race = "";

                            if (item.race) {
                                race = " (<span style='color: #20b033;'>" + item.race + "</span>)";
                            }

                            return '<span class="text-success">[商品] </span>' + item.commodity.name + race;

                        }
                    }
                    , {field: 'create_time', title: '创建时间'}
                    , {
                        field: 'expire_time', title: '到期时间', formatter: function (val, item) {
                            if (!item.expire_time) {
                                return '<span class="badge badge-light">永久</span>';
                            }
                            return item.expire_time;
                        }
                    }
                    , {field: 'life', title: '剩余次数'}
                    , {field: 'use_life', title: '已使用次数'}
                    , {field: 'note', title: '备注信息'}
                    , {
                        field: 'status', title: '状态', formatter: function (val, item) {
                            return status[item.status];
                        }
                    }
                    , {
                        field: 'service_time', title: '使用时间', formatter: function (val, item) {
                            if (!item.service_time) {
                                return '-';
                            }
                            return item.service_time;
                        }
                    }
                    , {
                        field: 'trade_no', title: '订单号(最后使用)'
                    }
                    , {
                        field: 'owner', title: '所属者', formatter: function (val, item) {
                            if (!item.owner) {
                                return '<span class="badge badge-light-success owner" style="cursor: pointer;" >SYSTEM</span>';
                            }
                            return '<span class="badge badge-light-dark owner" style="cursor: pointer;" ><img src="' + item.owner.avatar + '"  style="width: 18px;border-radius: 100%;"/> ' + item.owner.username + '(' + item.owner.id + ')</span>'
                        },
                        events: {
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
                    },
                    {
                        field: 'operate',
                        title: '操作',
                        formatter: function (val, item) {
                            let html = '';

                            if (item.status == 0) {
                                html += '<button type="button"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 lock"><i class="fa fa-lock" style="color: #ffa361;"></i></button> ';
                            } else if (item.status == 2) {
                                html += '<button type="button"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 unlock"><i class="fa fa-lock-open" style="color: #3f425475;"></i></button> ';
                            }
                            html += '<button type="button"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 del"><i class="fas fa-trash"></i></button> ';
                            return html;
                        },
                        events: {
                            'click .del': function (event, value, row, index) {
                                layer.confirm('您是否要移除该优惠卷，这是无法恢复的？', {
                                    btn: ['确认移除', '取消']
                                }, function () {
                                    $.post('/admin/api/coupon/del', {list: [row.id]}, res => {
                                        layer.msg(res.msg);
                                        table.bootstrapTable('refresh', {silent: true});
                                    });
                                });
                            },
                            'click .lock': function (event, value, row, index) {
                                $.post('/admin/api/coupon/edit', {id: row.id, status: 2}, res => {
                                    layer.msg(res.msg);
                                    table.bootstrapTable('refresh', {silent: true});
                                });
                            },
                            'click .unlock': function (event, value, row, index) {
                                $.post('/admin/api/coupon/edit', {id: row.id, status: 0}, res => {
                                    layer.msg(res.msg);
                                    table.bootstrapTable('refresh', {silent: true});
                                });
                            }
                        }
                    }
                ]
            });


            let couponUnqueId = 0;
            let modal = (values = {}) => {
                cao.popup('/admin/api/coupon/save', [
                    {
                        title: "选择商品",
                        name: "commodity_id",
                        type: "select",
                        dict: "commodity->owner=0,id,name",
                        placeholder: "全场通用/选择商品分类",
                        search: true,
                        change: function (value) {
                            let element = cao.popupElement("category_id", "select", couponUnqueId).parent().parent();
                            if (value == 0 || !value) {
                                element.show();
                            } else {
                                element.hide();
                            }
                        }
                    },
                    {
                        title: "商品分类",
                        name: "category_id",
                        type: "select",
                        dict: "category->owner=0,id,name",
                        placeholder: "对商品分类下的所有商品进行折扣，不选则全场",
                        search: true
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
                        placeholder: "备注信息(可空)，方便查询某次生成的优惠卷"
                    },
                    {
                        title: "抵扣模式",
                        name: "mode",
                        type: "radio",
                        dict: [
                            {
                                id: 0,
                                name: "金额抵扣"
                            },
                            {
                                id: 1,
                                name: "百分比抵扣(按照商品价格)"
                            }
                        ],
                        default: 0
                    },
                    {title: "面值(金额/百分比)", name: "money", type: "input", placeholder: "金额或者百分比(小数代替范围：0~1)"},
                    {title: "过期时间", name: "expire_time", type: "date", placeholder: "过了该时间优惠卷自动失效，不填代表永不过期"},
                    {title: "可用次数", name: "life", type: "input", placeholder: "该优惠卷可以使用次数", default: "1"},
                    {title: "卷码前缀", name: "prefix", type: "input", placeholder: "请输入优惠卷代码前缀，可留空", default: "ACG"},
                    {title: "生成数量", name: "num", type: "input", placeholder: "你想生成多少张优惠卷", default: 1}
                ], res => {
                    table.bootstrapTable('refresh', {silent: true});
                    layer.open({
                        type: 1,
                        title: "优惠卷[成功:" + res.data.success + "/失败:" + res.data.error + "]",
                        area: cao.isPc() ? ['420px', '660px'] : ["100%", "100%"],
                        content: '<textarea class="layui-input" style="padding: 15px;height: 100%;">' + res.data.code + '</textarea>'
                    });
                }, values, '720px', false, "添加", unqueId => {
                    couponUnqueId = unqueId;
                });
            }

            $('.btn-app-create').click(function () {
                modal();
            });

            $('.btn-app-del').click(() => {
                let data = cao.listObjectToArray(table.bootstrapTable('getSelections'));
                if (data.length == 0) {
                    layer.msg("请至少勾选1个优惠卷再进行操作！");
                    return;
                }

                layer.confirm('您确定要删除已经选中的优惠卷吗？这是不可恢复的操作！', {
                    btn: ['确定', '取消']
                }, function () {
                    $.post("/admin/api/coupon/del", {list: data}, res => {
                        layer.msg(res.msg);
                        table.bootstrapTable('refresh', {silent: true});
                    });
                });
            });

            $('.btn-app-lock').click(() => {
                let data = cao.listObjectToArray(table.bootstrapTable('getSelections'));
                if (data.length == 0) {
                    layer.msg("请至少勾选1个优惠卷进行操作！");
                    return;
                }
                layer.confirm('您确定要锁定选中的优惠卷吗？', {
                    btn: ['确定', '取消']
                }, function () {
                    $.post("/admin/api/coupon/lock", {list: data}, res => {
                        layer.msg(res.msg);
                        table.bootstrapTable('refresh', {silent: true});
                    });
                });
            });

            $('.btn-app-unlock').click(() => {
                let data = cao.listObjectToArray(table.bootstrapTable('getSelections'));
                if (data.length == 0) {
                    layer.msg("请至少勾选1个优惠卷进行操作！");
                    return;
                }
                layer.confirm('您确定要解锁选中的优惠卷吗？', {
                    btn: ['确定', '取消']
                }, function () {
                    $.post("/admin/api/coupon/unlock", {list: data}, res => {
                        layer.msg(res.msg);
                        table.bootstrapTable('refresh', {silent: true});
                    });
                });
            });

            $('.btn-app-export').click(function () {
                let query = $('.search-query').serialize();
                window.open('/admin/api/coupon/export?exportStatus=' + query);
            });

            cao.query('.search-query', table, [
                {title: "卷代码", name: "equal-code", type: "input"},
                {title: "备注信息", name: "equal-note", type: "input"},
                {title: "卷面值", name: "equal-money", type: "input"},
                {
                    title: "状态", name: "equal-status", type: "select", dict: [
                        {id: 0, name: "未使用"},
                        {id: 1, name: "已使用"},
                        {id: 2, name: "锁定"},
                    ]
                },
                {title: "查询商品", name: "equal-commodity_id", type: "select", dict: "commodity,id,name", search: true},
                {title: "商品类别", name: "equal-race", type: "input"},
                {title: "会员ID，0=系统", name: "equal-owner", type: "input"},
            ], true, false);
        });
    });
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:../Footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
