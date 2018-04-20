<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-08-08 04:38:40
  from "E:\docs\php\htdocs\smarty\templates\03.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-18',
  'unifunc' => 'content_59892430c4f802_20978733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c562feea1797d5300b08b9fd0b413d2e676ceb73' => 
    array (
      0 => 'E:\\docs\\php\\htdocs\\smarty\\templates\\03.html',
      1 => 1502119121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59892430c4f802_20978733 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "site.conf", null, 0);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keyword" content="">
    <meta name="description" content="">
	<title>web</title>

	<!--
	   literal标签内不让smarty识别
	 -->
	 
	<?php echo '<script'; ?>
 type="text/javascript"><?php echo '</script'; ?>
>
    <style type="text/css"></style>

	
</head>
<body> 
    <h2>配置变量使用</h2> 
    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'NETWORK');?>
<br/>
    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'PUBLIC');?>
<br/>
    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'EAL');?>
<br/>
    <?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'NETWORK');?>
<br>
</body>
</html><?php }
}
