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
						 "sLengthMenu": "ÿҳ��ʾ _MENU_ ����¼",
						 "sZeroRecords": "��Ǹ�� û���ҵ�",
						 "sInfo": "�� _START_ �� _END_ /�� _TOTAL_ ������",
						 "sInfoEmpty": "û������",
						 "sInfoFiltered": "(�� _MAX_ �������м���)",
						"oPaginate": {
						 "sFirst": "��ҳ",
						 "sPrevious": "��һҳ",
						 
						"sNext": "��һҳ",
						 "sLast": "βҳ"
						 },
						"sZeroRecords": "û�м���������",
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

<title>�鿴��¼</title>

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
			color='#4A96F1'>��½</font></a></div><div id='nav'><font color:'#4A96F1'>����ISS</font></div>";
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
	<th>������</th>
	<th>��Ʒ</th>
	<th>�ʲ����</th>
	<th>����</th>
	<th>����ʱ��</th>
	<th>�黹ʱ��</th>
	<th>�黹��</th>
	<th>��ע</th>
	</tr>

	<?php
	$perNumber=6; //ÿҳ��ʾ�ļ�¼��
	$page=$_GET['page']; //��õ�ǰ��ҳ��ֵ
	$count=mysql_query("select count(*) from borrow_log"); //��ü�¼����
	$rs=mysql_fetch_array($count);
	//print_r($rs);
	$totalNumber=$rs[0];
	$totalPage=ceil($totalNumber/$perNumber); //�������ҳ��
	if (!isset($page)) {
	$page=1;
	} //���û��ֵ,��ֵ1
	$startCount=($page-1)*$perNumber; //��ҳ��ʼ,���ݴ˷����������ʼ�ļ�¼
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
	if ($page != 1) { //ҳ��������1
	?>
	<a href="borrowlog.php?page=<?php echo $page - 1;?>" style="text-decoration:none">��һҳ</a><!--��ʾ��һҳ-->
	<?php
	}
	for ($i=1;$i<=$totalPage;$i++) {  //ѭ����ʾ��ҳ��
	?>
	<a href="borrowlog.php?page=<?php echo $i;?>" style="text-decoration:none"><?php echo $i ;?></a>
	<?php
	}
	if ($page<$totalPage) { //���pageС����ҳ��,��ʾ��һҳ����
	?>
	<a href="borrowlog.php?page=<?php echo $page + 1;?>" style="text-decoration:none">��һҳ</a>
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
					<th width="5%">���</th>
					<th width="10%">�û���</th>
					<th width="10%">����</th>
					<th width="10%">��Ʒ��</th>
					<th width="5%">����</th>
					<th width="10%">���</th>
					<th width="5%">����</th>
					<th width="15%">����ʱ��</th>
					<th width="15%">�黹ʱ��</th>
					<th width="5%">��ע</th>
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
