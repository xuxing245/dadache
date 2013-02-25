<?php
	$title = '用户登录';
	require_once('include/header.php');
	
	$user = $_POST['account'];
	$pwd = $_POST['pwd'];
	$get_request_url = $_GET['url'];
	
	if(null != $user && '' != $user && null != $pwd && '' != $pwd){
		//登录后跳转的url
		$login_ok = 'main.php';
		$login_fail = 'login.php';
		$post_request_url = $_POST['url'];
		if('' != $post_request_url){
			$login_ok = $post_request_url;
			$login_fail = $redirect_fail.'?url='.$post_request_url;
		}
		
		require_once('include/db.php');
	
		$query = "select id,account,name from core_user where status=1 and account='".$user."' and pwd='".$pwd."'";
		$result = mysql_query($query,$db_connect);
		if($row = mysql_fetch_array($result)){
			$_SESSION['userid'] = $row['id'];
			$_SESSION['username'] = $row['name']==""?$row['account']:$row['name'];
			echo $login_ok;
			header('location:'.$login_ok);
		}else{
			echo $redirect_fail;
			header('location:'.$login_fail);
		}
		mysql_close($db_connect);
	}
	
?>

<div id="content-wrapper" class="clearfix row">
    <div>
        <form id="login_form" action="login.php" method="post">
            <table align="center">
                <tr>
                    <td align="right">用户名</td>
                    <td>
                        <input type="text" name="account" value=""/>
                    </td>
                </tr>
                <tr>
                    <td align="right">密码</td>
                    <td>
                        <input type="password" name="pwd" value=""/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    	<input type="hidden" name="url" value="<?php echo $get_request_url ?>" />
                        <input type="button" class="cls_button" value="登录" onClick="javascript:$('#login_form').submit();" />
                        <a href="#" class="cls_button cls_goback">返回</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php
	require_once('include/footer.php');
?> 