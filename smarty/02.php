<?php


include "./libs/Smarty.class.php";


$smarty = new Smarty;

$smarty -> assign('name',$_GET['name']);
$smarty -> display("02.html");