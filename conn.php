<?php

	header('content-type:text/html;charset=utf-8');
	$conn=mysql_connect('localhost','root','root');
	mysql_query('use test',$conn);
	mysql_query('set names utf-8',$conn);

?>