<?php
header('content-type:text/html;charset=utf-8');
require('./conn.php');
$id=$_GET['id'];
$sql="delete from bookinfo where id='$id'";
$res=mysql_query($sql);

if(!$res){
	echo mysql_error();
	exit();
}else{
	//echo "删除成功";
	header('location:show.php'); //这里不再是require引进页面了
}


?>