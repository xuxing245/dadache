<?php
	$title = '管理请求';
	require_once('include/header.php');
	require_once('include/require.php');
?>    
<div id="content-wrapper" class="clearfix row">
	<div>
    	<table>
        	<tr>
            	<td>名称</td>
                <td>出发地</td>
                <td>目的地</td>
                <td>申请人</td>
                <td>操作</td>
            </tr>
            <?php 
				$query_join = 'select p.id,u.name username,t.name tripname,t.start_address,t.dest_address from core_partner p '
						.' left join core_trip t on p.trip=t.id '
						.' left join core_user u on p.user=u.id '
						.' where t.user=\''.$userid.'\' and p.status=0';
				$result_join = mysql_query($query_join);
				while($row = mysql_fetch_array($result_join)){
			?>
            	<tr>
                	<td><?php echo $row['tripname'] ?></td>
                    <td><?php echo $row['start_address'] ?></td>
                    <td><?php echo $row['dest_address'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><a href="#">接受</a><a href="#">拒绝</a></td>
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