<?php
	error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );
	$db_host = 'localhost';
	$db_username = 'root';
	$db_pwd = 'root';
	$db_name = 'dache';
	$db_connect = mysql_connect($db_host,$db_username,$db_pwd);
	mysql_select_db($db_name,$db_connect);
?>