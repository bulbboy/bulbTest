<?php
header('content-type:text/html;charset=utf-8');

require('./conn.php');

$sql='select * from bookinfo';
$res=mysql_query($sql);

if(!$res){
	echo mysql_error();
	exit();
}
$data=array();
while($row=mysql_fetch_assoc($res)){ //关联数组
	$data[]=$row;

}
//print_r($data);
require('./show.html');


?>