<?php
	session_start();
	$user = $_POST['account'];
	$pwd = $_POST['pwd'];
	
	require_once('../include/db.php');
	
	$query = "select * from t_user where account='".$user."' and pwd='".$pwd."'";
	$result = mysql_query($query,$db_connect);
	if($row = mysql_fetch_array($result)){
		$_SESSION['user_id'] = $row['id'];
		$_SESSION['user_name'] = $row['name'];
		
		header('location:index.php');
	}else{
		header('location:../login.html');
	}
	mysql_close($db_connect);
?>
