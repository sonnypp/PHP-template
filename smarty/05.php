<?php


include "./libs/Smarty.class.php";

$smarty = new Smarty;

$smarty -> assign('week',5);

$smarty ->display('05.html');