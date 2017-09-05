<?php


include "./libs/Smarty.class.php";

$smarty = new Smarty;

$smarty -> assign('seled','c');
$smarty -> assign('outval',array('a'=>'篮球','b'=>'足球','c'=>'网球','d'=>'排球'));

$smarty -> assign('area',array(1=>'沈阳',2=>'大连',3=>'铁岭',4=>'开源'));
$smarty -> assign('seled',3);

$smarty -> assign('username',$_GET['username']);
$smarty -> assign('password',$_GET['pwd']);

$smarty ->display('06.html');