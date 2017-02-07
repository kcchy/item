<?php
require 'includes/conndb.php';
session_start();
if (isset( $_SESSION['user']))
{
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<script type="text/javascript" language="javascript"
	src="ajax/jquery.js"></script>
<script type="text/javascript" language="javascript"
	src="ajax/jquery.dataTables.js"></script>
<script type="text/javascript" charset="gb2312">
			$(document).ready(function() {
				//alert(1);
				$('#example').dataTable( {
					"bProcessing": true,
					"bServerSide": true,
					"sAjaxSource": "includes/borrowlog_ajax.php",
						"oLanguage": {
						 "sLengthMenu": "每页显示 _MENU_ 条记录",
						 "sZeroRecords": "抱歉， 没有找到",
						 "sInfo": "从 _START_ 到 _END_ /共 _TOTAL_ 条数据",
						 "sInfoEmpty": "没有数据",
						 "sInfoFiltered": "(从 _MAX_ 条数据中检索)",
						"oPaginate": {
						 "sFirst": "首页",
						 "sPrevious": "上一页",
						 
						"sNext": "下一页",
						 "sLast": "尾页"
						 },
						"sZeroRecords": "没有检索到数据",
						"sProcessing": "<img src='img/ajax_load_2.gif' />"
						}		
				} );
			} );
		</script>
<link rel="stylesheet" type="text/css" href="css/item.css" />
<style type="text/css" title="currentStyle">
<!--
@import "css/demo_page.css";

-->
@import "css/demo_table.css";
</style>

<title>查看记录</title>

</head>
<body>
<div id="title">
<h1><img src="img/images/kcc_icon.png" id="icon"> <script
	type="text/javascript">
document.write(document.title)
</script></h1>
</div>
<table id='borrow' border="0" style="margin-top:20px;">
	<tr>
		<td colspan="2" style="height: 20px; text-align: center;"><?php //if(isset($_SESSION['user'])) {
	?>
		<div id="nav"><?php //include 'nav.php'; ?></div>
		<?php //}
		/*else {
			echo "<div align='right'><a href='login.php' style='text-decoration: none'><font
			color='#4A96F1'>登陆</font></a></div><div id='nav'><font color:'#4A96F1'>扬州ISS</font></div>";
			}*/?></td>
	</tr>




	<?php /*
	<tr>
	<td style=" height: 50px; text-align: center;"><input
	type="text" name="search"></td>
	</tr>
	<tr>
	<td style="height: auto; text-align: top;">
	<div id="cneter1">

	<form id="returnGoods" name="returnGoods"
	action="./includes/returnok.php" method="get"><input type="hidden"
	name="operatorId" id="operatorId" value="" />
	<table id="return_t" width="650" border="0">

	<tr id="return_t_tr"
	style="background-color:  #1b2526; height: 30px; text-align: center;">
	<th>领用人</th>
	<th>物品</th>
	<th>资产编号</th>
	<th>数量</th>
	<th>领用时间</th>
	<th>归还时间</th>
	<th>归还人</th>
	<th>备注</th>
	</tr>

	<?php
	$perNumber=6; //每页显示的记录数
	$page=$_GET['page']; //获得当前的页面值
	$count=mysql_query("select count(*) from borrow_log"); //获得记录总数
	$rs=mysql_fetch_array($count);
	//print_r($rs);
	$totalNumber=$rs[0];
	$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
	if (!isset($page)) {
	$page=1;
	} //如果没有值,则赋值1
	$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
	$result="SELECT * FROM `borrow_log`  order by blid desc limit $startCount,$perNumber";
	$borrow_inf=mysql_query($result);
	while ($row=mysql_fetch_assoc($borrow_inf))
	{

	echo "<tr>
	<td name=".$row['user']." style='text-align:center;'>".$row['user']."</td>
	<td name=".$row['name']." style='text-align:center;'>".$row['name']."-".$row['type']."</td>
	<td name=".$row['identifier']." style='text-align:center;'>".$row['identifier']."</td>
	<td name=".$row['num']." style='text-align:center;'>".$row['num']."</td>

	<td name=".$row['borrow_time']." style='text-align:center;'>".$row['borrow_time']."</td>
	<td name=".$row['return_time']." style='text-align:center;'>".$row['return_time']."</td>
	<!--<td name=".$row['return_user']." style='text-align:center;'>".$row['return_user']."</td>-->
	<td name=".$row['note']." style='text-align:center;'>".$row['note']."</td>

	</tr>";

	//returnitem($row['user'],$row['name']);
	}

	?>

	</table>
	</form>
	</div>
	<div class="page">
	<?php
	if ($page != 1) { //页数不等于1
	?>
	<a href="borrowlog.php?page=<?php echo $page - 1;?>" style="text-decoration:none">上一页</a><!--显示上一页-->
	<?php
	}
	for ($i=1;$i<=$totalPage;$i++) {  //循环显示出页面
	?>
	<a href="borrowlog.php?page=<?php echo $i;?>" style="text-decoration:none"><?php echo $i ;?></a>
	<?php
	}
	if ($page<$totalPage) { //如果page小于总页数,显示下一页链接
	?>
	<a href="borrowlog.php?page=<?php echo $page + 1;?>" style="text-decoration:none">下一页</a>
	<?php
	}
	?>
	</div>
	</td>
	</tr> */?>
	<tr>
		<td>
		<div id="dynamic">
		<table cellpadding="0" cellspacing="0" border="0" class="display"
			id="example">
			<thead>
				<tr>
					<th width="5%">序号</th>
					<th width="10%">用户名</th>
					<th width="10%">部门</th>
					<th width="10%">物品名</th>
					<th width="5%">类型</th>
					<th width="10%">编号</th>
					<th width="5%">数量</th>
					<th width="15%">借用时间</th>
					<th width="15%">归还时间</th>
					<th width="5%">备注</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td colspan="10" class="dataTables_empty">Loading data from server</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="10" height="10px"></td>
				</tr>
			</tfoot>
		</table>
		</div>
		<div class="spacer"></div>
		</td>
	</tr>

</table>

</body>
</html>
	<?php }?>
