<?php 
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	session_start();
	$userid = $_SESSION['userid'];
	$username = $_SESSION['username'];
	require_once('include/db.php');
?>
<!DOCTYPE HTML PUBLIC "">
<!-- [if IE 7 ]><html class="no-js ie ie7 lte7 lte8 lte9" lang="en-US"> <![endif] -->
<!-- [if IE 8 ]><html class="no-js ie ie8 lte8 lte9" lang="en-US"> <![endif] -->
<!-- [if IE 9 ]><html class="no-js ie ie9 lte9>" lang="en-US"> <![endif] -->
<!-- [if (gt IE 9)|!(IE)]><! -->
<html>
<!-- <![endif] -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo $title ?></title>
<link rel="stylesheet" href="css/base_chrome.css" >
<link rel="stylesheet" href="css/sunny/jquery-ui.css">
<link rel="stylesheet" href="css/me.css" >
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/me.js"></script>
</head>

<body class="jquery-ui home page page-id-33 page-template-default page-slug-index single-author singular">
	<!-- [if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif] -->
	<header>
    	<section id="global-nav">
        	<nav>
            	<div class="constrain">
                	<ul class="projects">
                    	<li><a href="main.php">搭搭车 dadache.cn</a></li>
                    </ul>
                    <ul class="links l_tinynav2">
                    <?php
						
						if(null == $userid){
							//未登录
					?>
                    	<li><a href="login.php">登录</a></li>
                        <li><a href="register.php">注册</a></li>
                    <?php
						}else{
							//已登录
							
							$num = 0;
							$query = 'select count(*) n from core_partner p left join core_trip t on p.trip = t.id'
									.' where t.user=\''.$userid.'\' and p.status=0';
							$result = mysql_query($query);
							
							if($row = mysql_fetch_array($result)){
								$num = $row['n'];
							}
							//mysql_close($db_connect);
					?>
                    	<li><a href="#">用户名：<?php echo $username ?></a></li>
                    	<li><a href="applymanage.php">加入请求<span title="新请求" style="color:#F00">(<?php echo $num ?>)</span></a></li>
                        <li class="dropdown">
                        	<a>我的行程</a>
                        	<ul>
                            	<li><a href="mytrip.php?type=1">已参加行程</a></li>
                                <li><a href="mytrip.php?type=2">已发布行程</a></li>
                            </ul>
                        </li>
                        <li><a href="logout.php">登出</a></li>
                    <?php
						}
					?>
                    </ul>
                </div>
            </nav>
        </section>
    </header>
    
    <div id="container">
        <div id="logo-events" class="constrain clearfix">
            <h2 class=""><a href="#"></a></h2>
        </div>