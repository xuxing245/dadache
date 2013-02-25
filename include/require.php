<?php
	//登录验证,没有登录就跳转到登录页面
	session_start();
	$request_url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	$userid = $_SESSION['userid'];
	if(null == $userid){
		header('location:login.php?url='.$request_url);
	}
?>