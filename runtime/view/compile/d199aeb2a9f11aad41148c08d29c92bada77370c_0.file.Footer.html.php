<?php
/* Smarty version 3.1.39, created on 2022-05-26 21:20:44
  from '/www/wwwroot/git/mm-acg-faka/app/View/User/Theme/Cartoon/Index/Footer.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_628f7eacd69ba0_38134385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd199aeb2a9f11aad41148c08d29c92bada77370c' => 
    array (
      0 => '/www/wwwroot/git/mm-acg-faka/app/View/User/Theme/Cartoon/Index/Footer.html',
      1 => 1653569340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628f7eacd69ba0_38134385 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-icp"><?php echo $_smarty_tpl->tpl_vars['setting']->value['icp'];?>
</div>
<!--start::HOOK-->
<?php echo hook(\App\Consts\Hook::USER_GLOBAL_VIEW_BODY);?>

<?php echo hook(\App\Consts\Hook::USER_VIEW_INDEX_BODY);?>

<!--end::HOOK-->
</body>
<!--start::HOOK-->
<?php echo hook(\App\Consts\Hook::USER_GLOBAL_VIEW_FOOTER);?>

<?php echo hook(\App\Consts\Hook::USER_VIEW_INDEX_FOOTER);?>

<!--end::HOOK-->
</html><?php }
}
