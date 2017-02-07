<?php
require './includes/conndb.php';
session_start();
if (isset($_SESSION['user']))
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GB2312">
<script src="ajax/jquery-1.8.2.js"></script>
<script src="ajax/jquery-ui.js"></script>
<script src="ajax/return.js"></script>
<link rel="stylesheet" type="text/css" href="css/item.css" />
<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#return_t tbody tr').hover(function(){
		$(this).find('td').addClass('hover');

	},function(){
		$(this).find('td').removeClass('hover');
	});
    //没有测试这个是干嘛的
    $("#center").tabs();
    $("#center").show();
    //先把数据克隆放到selectinf下面selectinf表格是隐藏的
    $("#return_t tbody").clone().appendTo('#selectinf');
    //alert(1);
    //输入信息进行过滤
    $("#filter").keyup(function () {
        var filter = $(this).val(), count = 0;
        if (filter=='') { //empty filter, re-copy all from selitems2
	           $("#return_t tbody").remove();
	           $("#selectinf tbody").clone().appendTo('#return_t');
	          }   
         else { 
	           $("#return_t tbody").remove();	           
	           $("#selectinf tr").each(function () {//.each遍历搜索
	           //document.write($(this).text().search(new RegExp(filter, "i"))>0)
	           //document.write('<br>')
	           //document.write($(this));	 	
	 	    if ($(this).text().search(new RegExp(filter, "i"))>0) 
		 	  { 
	 		   //alert($(this).text());
	 		   //search() 方法用于检索字符串中指定的子字符串，或检索与正则表达式相匹配的子字符串。
	 		   //appendto直接放在表格下面，不要放在#return_t tbody下面	   
	 	       $(this).clone().appendTo('#return_t');
	 	       count++;
	 	       //alert(count);
		       }
	    else {
		     //alert(ok);
	    	 //$(this).clone().appendTo('#return_t tbody');
	    	 //$("#selectinf  tbody").remove();
	    	 }
	    });
       } 
	//else
	$("#filter-count").text(count+ '物品');
    });
   
  });

</script>

<title>归还物品</title>

</head>
<body>
<div id="title"><h1><img src="img/images/kcc_icon.png" id="icon">
<script type="text/javascript">
document.write(document.title)
</script></h1></div>
<table id="selectinf">
	<tbody></tbody>
</table>
<div id="return">
<div class='search_f'>搜索<input type="text" name="search" id="filter"></div>
<div id="filter-count"></div>
<form id="returnGoods" name="returnGoods"
	action="./includes/returnok.php" method="get"><input type="hidden"
	name="operatorId" id="operatorId" value="" />
<table id="return_t">
	<thead>
		<tr>
			<th>领用人</th>
			<th>编号</th>
			<th>物品</th>
			<th>数量</th>
			<th>领用时间</th>
			<th>备注</th>
			<!--<th>更新备注</th>-->
			<th>操作</th>
		</tr>
	</thead>

	<tbody id="return_tbody">

	<?php
	$result="SELECT * FROM `borrow` order by id desc";
	$borrow_inf=mysql_query($result);
	while ($row=mysql_fetch_assoc($borrow_inf))
	{
			
		//$note= "note".$row['name'];
		//echo $note;
		echo "<tr>
             <td name='uer'  >".$row['user']."</td>
             <td name='identifier' >".$row['identifier']."</td>
             <td name='name'  >".$row['name']."-".$row['type']."</td>
             <td name='num'  >".$row['num']."</td>
             <td name='btime'  >".$row['btime']."</td>
             <td name='note'  >".$row['note']."</td>
             <!--<td  ><textarea rows='2' cols='10' name='note' id='note1'></textarea></td>-->
             <td   ><button type='button' role='button' onclick='returnitem(".$row['id'].")' id='ghbutton'>归还</td>
             </tr>";
		// echo "note_".$row['id'];
		//returnitem($row['user'],$row['name']);
	}

	?>
	</tbody>
</table>
</form>
</div>
</body>
</html>
<?php }?>
