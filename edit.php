<?php
header('content-type:text/html;charset=utf-8');
require('./conn.php');

if(isset($_GET['id'])&&$_GET['id']!=""){
	$id=$_GET['id'];
	if(empty($_POST)){    //一种状态：进入修改页面
		$sql="select * from bookinfo where id='$id'";
		$res=mysql_query($sql);
		if(!$res){
			echo mysql_error();
			exit();
		}
		$arr=mysql_fetch_assoc($res);
		//print_r($arr);
		require('./edit.html');
	}else{
		require('./conn.php');
		$sql="UPDATE bookinfo SET number='$_POST[number]',name='$_POST[name]',price='$_POST[price]',publish='$_POST[publish]' WHERE id='$id'";
		$res=mysql_query($sql);
		if(!$res){
			echo mysql_error();
			exit();
		}else{
			//echo "修改成功";
			header('location:show.php');
		}

	}
}else{
	echo "不存在，有错误";
}




?>