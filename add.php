<?php

header('content-type:text/html;charset=utf-8');

/*1.打开文件 $fh=fopen('./info,txt', 'a');
2.写入内容 fwrite($fh,'helloworld');
3.关闭文件 fclose($fh);*/
/*
$str=$_POST['number']. "," .$_POST['name']. "," .$_POST['price']. "," .$_POST['from']. "\n";

$fh=fopen('./info.txt','a');
fwrite($fh,$str);
fcolse($fh);
echo 'ok';*/


if(empty($_POST)){
		require('./index1.html');
}else{
	require('./conn.php');
	$sql="insert into bookinfo(number,name,price,publish) values('$_POST[number]','$_POST[name]','$_POST[price]','$_POST[publish]')";
	$result=mysql_query($sql);
	if($result===false){
		echo mysql_error();
		exit();
	}else{
		echo "插入成功";
	}
}

?>