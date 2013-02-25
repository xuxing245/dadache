<?php
	//加入行程 或者 审批行程
	require_once('include/require.php');
	require_once('include/db.php');
	
	
	$tripid = $_GET['trip'];
	$userid = $_SESSION['userid'];
	$id = uniqid();
	$insert = 'insert into core_partner (id,trip,user,create_date,status)'
			.' values(\''.$id.'\',\''.$tripid.'\',\''.$userid.'\',\''.date('Y-m-d H:i:s').'\',0)';
	//echo $insert;
	if(mysql_query($insert)){}
	mysql_close($db_connect);
	//echo $insert;
	header('location:trip.php?trip='.$tripid);
?>