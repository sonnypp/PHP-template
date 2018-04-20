<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-08-08 10:05:35
  from "E:\docs\php\htdocs\smarty\templates\06.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-18',
  'unifunc' => 'content_598970cfdb47f9_13833806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58e71152c79d6ac83fef9055ee94b0641d76bbeb' => 
    array (
      0 => 'E:\\docs\\php\\htdocs\\smarty\\templates\\06.html',
      1 => 1502179533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598970cfdb47f9_13833806 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_checkboxes')) require_once 'E:\\docs\\php\\htdocs\\smarty\\libs\\plugins\\function.html_checkboxes.php';
if (!is_callable('smarty_function_html_options')) require_once 'E:\\docs\\php\\htdocs\\smarty\\libs\\plugins\\function.html_options.php';
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
    <h2>复选框使用</h2> 
    爱好:<br>
    <?php echo smarty_function_html_checkboxes(array('name'=>"hobby",'options'=>$_smarty_tpl->tpl_vars['outval']->value,'selected'=>$_smarty_tpl->tpl_vars['seled']->value,'separator'=>"&nbsp;&nbsp;"),$_smarty_tpl);?>

 <!--    <input type="checkbox" name="hobby[]" value="a">篮球<br>
    <input type="checkbox" name="hobby[]" value="c">网球<br>
    <input type="checkbox" name="hobby[]" value="b">足球<br>
    <input type="checkbox" name="hobby[]" value="d">网球 -->
    <hr>
    <h2>下拉列表应用</h2>
    <?php echo smarty_function_html_options(array('name'=>"city",'options'=>$_smarty_tpl->tpl_vars['area']->value,'selected'=>$_smarty_tpl->tpl_vars['seled']->value,'class'=>"name"),$_smarty_tpl);?>

    城市:
       <select name="city">
             <option value="1">北京</option>
             <option value="2">上海</option>
             <option value="3">深圳</option>
             <option value="4">厦门</option>
       </select>
    <hr>

    You put the user:<br>
    username:<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<br>
    password:<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
<br>
</body>
</html><?php }
}
