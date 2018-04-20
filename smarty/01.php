<?php


//第一次使用成熟smarty

include "./libs/Smarty.class.php";

$smarty = new Smarty;

//给smart做简单的配置
// $smarty -> left_delimiter = "<@@@";
// $smarty -> right_delimiter = "@@@>";
//$smarty -> template_dir = "./view/";   //模板文件目录
//$smarty -> compile_dir = "./view_c/";  //混编文件目录


//本质：把addr name 设置为smarty对象属性的一部分
//表面：把addr name 传递到模板使用
$smarty -> assign('addr','beijing');
$smarty -> assign('name','sue');
$smarty -> assign('age',19);

$smarty -> display("01.html");