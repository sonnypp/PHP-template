<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-08-07 16:52:26
  from "E:\docs\php\htdocs\smarty\templates\02.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-18',
  'unifunc' => 'content_59887eaa69bfc9_10075854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7a1de8b01eac15a8c41e7ec05fd31bb4dc50c2b' => 
    array (
      0 => 'E:\\docs\\php\\htdocs\\smarty\\templates\\02.html',
      1 => 1502117503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59887eaa69bfc9_10075854 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keyword" content="">
    <meta name="description" content="">
	<title>web</title>
</head>
<body> 
    <h2>保留变量使用</h2> 
    <div><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</div>
    <div><?php echo $_GET['name'];?>
</div>

</body>
</html><?php }
}
