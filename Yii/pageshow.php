<?php
header("content-type:text/html;charset=utf-8");

//引入分页
include "./Page.class.php";

$link = mysql_connect('localhost','root','');
mysql_select_db('php0507',$link);
mysql_query('set names utf8');

$sql = "select count(*) as cnt from sw_goods";
$qry = mysql_query($sql);
$rzt = mysql_fetch_assoc($qry);


$cnt = $rzt['cnt']; //商品总的记录数目
$per = 2; //每页显示6条数目
// echo $cnt;
// 

//通过分页类实现数据的分页显示
//实例化分页类对象

$page = new Page($cnt,$per);

//重新拼装mysql语句 帮助我们获得每一页信息

$sqla = "select * from sw_goods $page->limit";


$qrya = mysql_query($sqla);

while($rzta = mysql_fetch_assoc($qrya)){
	echo $rzta['goods_id'],"-----",$rzta['goods_name'],'<br/>';
} 


echo $page->fpage();


?>