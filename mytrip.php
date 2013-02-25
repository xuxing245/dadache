<?php
	$title = '我的行程';
	require_once('include/header.php');
	require_once('include/require.php');
	require_once('include/db.php');
?>    
<div id="content-wrapper" class="clearfix row">
	<h3>我的行程</h3>
	<div>
    	<table align="center">
        	<tr>
            	<td>名称</td>
                <td>出发地</td>
                <td>目的地</td>
                <td>出发时间</td>
                <td>人数</td>
                <td>备注</td>
                <td>操作</td>
            </tr>
            <?php
				$userid = $_SESSION['userid'];
				$query = 'select * from core_trip where user=\''.$userid.'\' order by create_date desc';
				$result = mysql_query($query);
				while($row = mysql_fetch_array($result)){
			?>
            	<tr>
                	<td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['start_address'] ?></td>
                    <td><?php echo $row['dest_address'] ?></td>
                    <td><?php echo $row['start_date'] ?></td>
                    <td><?php echo $row['p_num'] ?></td>
                    <td><?php echo $row['descr'] ?></td>
                    <td><a href="#">修改</a><a href="#">删除</a></td>
                </tr>
            <?php
				}
				mysql_close($db_connect);
			?>
        </table>
    </div>
</div>
<?php
	require_once('include/footer.php');
?> 