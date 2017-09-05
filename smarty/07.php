<?php

include "./libs/Smarty.class.php";

$smarty = new Smarty;

$smarty -> caching=1;
$smarty -> cache_lifetime = 20;
$smarty -> assign("pic",array(1,1,1,1,1,1,1,1,1,1,1,1));

$smarty -> display('07.html');

