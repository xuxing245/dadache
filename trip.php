<?php
	$title = '查看行程';
	require_once('include/header.php');
	require_once('include/db.php');
	
	$id = $_GET['trip'];
	$query = 'select t.*,u.name username from core_trip t left join core_user u on t.user = u.id where t.id=\''.$id.'\'';
	$result = mysql_query($query);
?>
<div id="content-wrapper" class="clearfix row">
	<div>
<?php
	if($row = mysql_fetch_array($result)){
		
		$inner_query = 'select * from core_partner where trip=\''.$id.'\'';
		$inner_result = mysql_query($inner_query);
		$status = '';
		if($inner_row = mysql_fetch_array($inner_result)){
			$status = $inner_row['status'];
		}
?>
    <table align="center">
        <tr>
            <td>名称</td>
            <td><?php echo $row['name'] ?></td>
        </tr>
        <tr>
            <td>出发地</td>
            <td><?php echo $row['start_address'] ?></td>
        </tr>
        <tr>
            <td>目的地</td>
            <td><?php echo $row['dest_address'] ?></td>
        </tr>
        <tr>
            <td>出发时间</td>
            <td><?php echo $row['start_date'] ?></td>
        </tr>
        <tr>
            <td>人数</td>
            <td><?php echo $row['p_num'] ?></td>
        </tr>
        <tr>
            <td>备注</td>
            <td><?php echo $row['descr'] ?></td>
        </tr>
        <tr>
        	<td>创建人</td>
            <td><?php echo $row['username'] ?></td>
        </tr>
        <tr>
            <td colspan="2">
            	<?php
					if(null!=$status && $status == '1'){
						echo '<a href=\'#\' class=\'cls_button\'>已加入</a>';
					}else if(null!=$status && $status == 0){
						echo '<a href=\'#\' class=\'cls_button\'>已申请</a>';
					}else{
						echo '<a href=\'join.php?trip='.$id.'\' class=\'cls_button\'>加入</a>';
					}
				?>
                
            </td>
        </tr>
    </table>
   
<?php
	}else{
		echo '<h3>没有此行程</h3><br/>';	
	}
	mysql_close($db_connect);
?>
		<a href="#" class="cls_button cls_closepage">关闭</a>
	</div>
</div>
<?php
	require_once('include/footer.php');
?> 