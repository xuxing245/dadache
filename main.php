<?php
	$title = '搭搭车 - 寻找发布出行信息';
	require_once('include/header.php');
?>    
<div id="content-wrapper" class="clearfix row">
    <div class="index_query">
        <form id="index_search_form" action="search.php" method="get">
            <table align="center">
                <tr>
                    <td>
                        <label>出发</label>&nbsp;<input id="search_start_input" type="text" name="start" class="text ui-widget-content ui-corner-all"/>
                    </td>
                    <td>&nbsp;&nbsp;</td>
                    <td>
                        <label>到达</label>&nbsp;<input id="search_dest_input" type="text" name="dest" class="text ui-widget-content ui-corner-all"/>
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
</div>

<?php
	require_once('include/footer.php');
?> 
    
