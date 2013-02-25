<?php
	$title = '注册新用户';
	require_once('include/header.php');
?>    
<div id="content-wrapper" class="clearfix row">
	<div>
    	<form id="register_form" action="saveuser.php" method="post">
        	<table>
            	<tr>
                	<td>登录帐号</td>
                    <td><input type="text" name="account"/></td>
                    <td></td>
                </tr>
                <tr>
                	<td>密码</td>
                    <td><input type="password" name="pwd"/></td>
                    <td></td>
                </tr>
                <tr>
                	<td>确认密码</td>
                    <td><input type="password" name="pwd2"/></td>
                    <td></td>
                </tr>
                <tr>
                	<td>昵称</td>
                    <td><input type="text" name="name"/></td>
                    <td></td>
                </tr>
                <tr>
                	<td>手机号码</td>
                    <td><input type="text" name="mobile"/></td>
                    <td></td>
                </tr>
                <tr>
                	<td>性别</td>
                    <td>
                    	<input type="radio" name="gender" value="0"/>男
                        <input type="radio" name="gender" value="1"/>女
                    </td>
                    <td></td>
                </tr>
                <tr>
                	<td>年龄</td>
                    <td><input type="text" name="age"/></td>
                    <td></td>
                </tr>
                <tr>
                	<td colspan="3">
                    	<input type="button" class="cls_button" value="创建" onClick="javascript:$('#register_form').submit();"/>
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