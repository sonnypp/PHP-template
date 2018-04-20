<?php


include "./libs/Smarty.class.php";


$smarty = new Smarty;

//索引数组
$smarty -> assign('fruit',array('banana','apple','pear','watermelon'));
$smarty ->assign('animal',array('huashan'=>'monkey','east'=>'pig','anxi'=>'cat','deguo'=>'dog'));

$smarty -> display("04.html");