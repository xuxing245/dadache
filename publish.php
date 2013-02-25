<?php
	$title = '发布行程';
	require_once('include/header.php');
	require_once('include/require.php');
?>    
<div id="content-wrapper" class="clearfix row">
	<div>
    	<form id="publish_form" action="savetrip.php" method="post">
        	<table>
            	<tr>
                	<td>名称</td>
                    <td><input type="text" name="name"  value=""/></td>
                    <td></td>
                </tr>
                <tr>
                	<td>出发地点</td>
                    <td>
                    	<input type="text" name="start_address"/>
                    </td>
                    <td></td>
                </tr>
                <tr>
                	<td>到达地点</td>
                    <td>
                    	<input type="text" name="dest_address"/>
                    </td>
                    <td></td>
                </tr>
                <tr>
                	<td>出发时间</td>
                    <td><input type="text" name="start_date"/></td>
                    <td></td>
                </tr>
                <tr>
                	<td>人数</td>
                    <td><input type="text" name="p_num"/></td>
                    <td></td>
                </tr>
                <tr>
                	<td>备注</td>
                    <td><textarea name="descr"></textarea></td>
                    <td></td>
                </tr>
                <tr>
                	<td>
                    	<input type="button" class="cls_button" value="发布" onclick="javascript:$('#publish_form').submit();"/>
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
   