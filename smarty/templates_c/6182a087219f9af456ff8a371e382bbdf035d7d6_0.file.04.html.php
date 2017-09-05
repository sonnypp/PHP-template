<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-08-08 05:07:02
  from "E:\docs\php\htdocs\smarty\templates\04.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-18',
  'unifunc' => 'content_59892ad6699963_62349986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6182a087219f9af456ff8a371e382bbdf035d7d6' => 
    array (
      0 => 'E:\\docs\\php\\htdocs\\smarty\\templates\\04.html',
      1 => 1502161616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59892ad6699963_62349986 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h2>数组使用</h2> 
    <?php echo $_smarty_tpl->tpl_vars['fruit']->value[2];?>
<br>
    <?php echo $_smarty_tpl->tpl_vars['fruit']->value[3];?>
<br>
    <?php echo $_smarty_tpl->tpl_vars['animal']->value['deguo'];?>
<br>
    <?php echo $_smarty_tpl->tpl_vars['animal']->value['anxi'];?>
<br>
    <hr/>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fruit']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
         <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
---<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<br>
       <?php
}
} else {
?>

         数组没有任何元素!<br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    <hr/>
    <h2>关联数组</h2>
    <pre>
         foreach遍历数组内部关键字：
         { 值变量@iteration }-------1开始
         { 值变量@index }----------0开始
         { 值变量@first }---------判断第一个元素，返回boolea值
         { 值变量@total }------获取数组元素长度个数
         { 值变量@show }-------判断当前数组是否遍历元素出来，返回bool值
    </pre>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['animal']->value, 'n', true, 'm');
$_smarty_tpl->tpl_vars['n']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->iteration++;
$__foreach_n_1_saved = $_smarty_tpl->tpl_vars['n'];
?>
       <?php echo $_smarty_tpl->tpl_vars['n']->iteration;?>
::<?php echo $_smarty_tpl->tpl_vars['m']->value;?>
----<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
<br/>
    <?php
$_smarty_tpl->tpl_vars['n'] = $__foreach_n_1_saved;
}
} else {
?>

       没有任何记录！
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    数组元素总个数:<?php echo $_smarty_tpl->tpl_vars['n']->total;?>
<br>
    <?php
$__section_wo_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_wo']) ? $_smarty_tpl->tpl_vars['__smarty_section_wo'] : false;
$__section_wo_0_loop = (is_array(@$_loop="animal") ? count($_loop) : max(0, (int) $_loop));
$__section_wo_0_total = $__section_wo_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_wo'] = new Smarty_Variable(array());
if ($__section_wo_0_total != 0) {
for ($__section_wo_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_wo']->value['index'] = 0; $__section_wo_0_iteration <= $__section_wo_0_total; $__section_wo_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_wo']->value['index']++){
?>
           
        
    <?php
}
}
if ($__section_wo_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_wo'] = $__section_wo_0_saved;
}
?>

</body>
</html><?php }
}
