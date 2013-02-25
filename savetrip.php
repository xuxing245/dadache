<?php
	//创建行程
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	require_once('include/require.php');
	session_start();
	
	$userid = $_SESSION['userid'];
	$name = $_POST['name'];
	$start_address = $_POST['start_address'];
	$dest_address = $_POST['dest_address'];
	$start_date = $_POST['start_date'];
	$p_num = $_POST['p_num'];
	$descr = $_POST['descr'];
	
	if(null!=$name && ''!=$name && null!=$start_address && ''!=$start_address && null!=$dest_address && ''!=$dest_address){
		require_once('include/db.php');
		$id = uniqid();
		$insert = 'insert into core_trip(id,name,start_address,dest_address,p_num,start_date,create_date,descr,user,status)'
				.' values(\''.$id.'\',\''.$name.'\',\''.$start_address.'\',\''.$dest_address.'\','.$p_num
				.',\''.$start_date.'\',\''.date('Y-m-d H:i:').'\',\''.$descr.'\',\''.$userid.'\',1)';
		if(mysql_query($insert)){
			header('location:mytrip.php');
		}else{
			header('publish.php');	
		}
		mysql_close($db_connect);
	}
?>