<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-08-08 08:38:32
  from "E:\docs\php\htdocs\smarty\templates\05.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-18',
  'unifunc' => 'content_59895c68bc5406_67269063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a08c570cce65a0e26de6a8693c0c856b744ea944' => 
    array (
      0 => 'E:\\docs\\php\\htdocs\\smarty\\templates\\05.html',
      1 => 1502174265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59895c68bc5406_67269063 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h2>分支结构使用</h2> 
    <?php if ($_smarty_tpl->tpl_vars['week']->value == 1) {?>
         Mon<br/>
    <?php } elseif ($_smarty_tpl->tpl_vars['week']->value == 2) {?>
         Tue<br>
    <?php } elseif ($_smarty_tpl->tpl_vars['week']->value == 3) {?> Wen<br>
    <?php } elseif ($_smarty_tpl->tpl_vars['week']->value == 4) {?> Thursday<br>
    <?php } elseif ($_smarty_tpl->tpl_vars['week']->value == 5) {?> Friday<br>
    <?php } else { ?> weekend
    <?php }?>

</body>
</html><?php }
}
