<?php
if($_POST['user']&&$_POST['pwd']){
	$user = strip_tags(trim($_POST['user']));
	$pwd = md5(strip_tags(trim($_POST['pwd'])));
	$link = mysql_connect('127.0.0.1','root','root','2050_sql');
	mysql_query($link,'set names utf8');
	$sql = "select * from admin where username='$user' and password='$pwd'";
	$row = mysql_query($link,$sql);
	$res = mysql_fetch_assoc($row);
	if($res){
		echo 1;
	}else{
		echo 0;
	}
}