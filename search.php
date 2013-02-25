<?php
	$start = $_GET['start'];
	$dest = $_GET['dest'];
	$title = '搜索结果 - '.$start.' 到 '.$dest;
	require_once('include/header.php');
	require_once('include/db.php');
?>

<div id="content-wrapper" class="clearfix row">
    <div>
        <div>
            <form id="index_search_form" action="search.php" method="get">
                <table align="left">
                    <tr>
                        <td>
                            <label>出发</label>&nbsp;<input id="search_start_input" type="text" name="start" value="<?php echo $start ?>" 
                            class="text ui-widget-content ui-corner-all"/>
                        </td>
                        <td>&nbsp;&nbsp;</td>
                        <td>
                            <label>到达</label>&nbsp;<input id="search_dest_input" type="text" name="dest" value="<?php echo $dest ?>" 
                            class="text ui-widget-content ui-corner-all"/>
                        </td>
                        <td>&nbsp;&nbsp;</td>
                        <td>
                            <input id="index_search_btn" type="button" class="cls_button" value="搜索"/>
                            <a class="cls_button" href="publish.php">发布</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div style="clear:left">
            <table align="left">
                <tr>
                    <td>编号</td>
                    <td>名称</td>
                    <td>出发地点</td>
                    <td>到达地点</td>
                    <td>出发时间</td>
                    <td>备注</td>
                </tr>
                <?php
					$query = 'select * from core_trip where status=1 and start_address like \'%'.$start.'%\''
							.' and dest_address like \'%'.$dest.'%\''
							.' order by create_date desc';
					$result = mysql_query($query);
					while($row = mysql_fetch_array($result)){
				?>
                    <tr>
                    	<td><?php echo $i ?></td>
                    	<td><a href="trip.php?trip=<?php echo $row['id'] ?>" target="_blank"><?php echo $row['name'] ?></a></td>
                        <td><?php echo $row['start_address'] ?></td>
                        <td><?php echo $row['dest_address'] ?></td>
                    	<td><?php echo date('Y-m-d H:i:s') ?></td>
                        <td><?php echo $row['descr']?></td>
                    </tr>
                <?php
                    }
					mysql_close($db_connect);
                ?>
                
            </table>
        
        </div>
    </div>
</div>

<?php
	require_once('include/footer.php');
?> 