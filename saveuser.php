<?php
	//创建用户
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	require_once('include/require.php');
	//保存或者修改用户
	$account = $_POST['account'];
	$pwd = $_POST['pwd'];
	$pwd2 = $_POST['pwd2'];
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	
	if(null==$account || null == $pwd || $pwd!=$pwd2){
		header('location:register.php');
	}else{
		require_once('include/db.php');
		$id = uniqid();
		$insert = 'insert into core_user (id,account,name,pwd,gender,mobile,age,status,create_date) '
				.'values(\''.$id.'\',\''.$account.'\',\''.$name.'\',\''.$pwd.'\','.$gender.',\''.$mobile.'\','.$age.',1,\''.date('Y-m-d H:i:s').'\')';
		if(mysql_query($insert)){
			$_SESSION['userid'] = $id;
			$_SESSION['username'] = $name;
			header('location:main.php');
		}else{
			header('location:register.php');
		}
		mysql_close($db_connect);
		
	}
	
?>