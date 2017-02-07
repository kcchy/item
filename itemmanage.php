<?php
header( 'Content-Type:text/html;charset=gb2312 ');
require ("includes/conndb.php");
session_start();
if (isset($_SESSION['user']))
{
	?>
<html>
<head>
<title>物品管理</title>
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="ajax/jquery-1.8.2.js"></script>
<script src="ajax/jquery-ui.js"></script>
<link rel="stylesheet" href="css/admin.css" />
<link rel="stylesheet" type="text/css" href="css/item.css" />
<script src="ajax/itemmanage.js"></script>
<script>
    $(function() {
        $( "#tabs" ).tabs();
    });
</script>
</head>
<body>
<div id="title">
<h1><img src="img/images/kcc_icon.png" id="icon"> <script
	type="text/javascript">
document.write(document.title)
</script></h1>
</div>
<div style="display: none;"><!--编辑物品-->
<div id="item-edit" title="更新物品">
<form>
<fieldset><label for="img">图片名称</label> <input type="text" name="img"
	id="imgedit" value="" class="text ui-widget-content ui-corner-all"> <label
	for="name">物品名称</label> <input type="text" name="name" id="nameedit"
	value="" class="text ui-widget-content ui-corner-all"> <label
	for="description">物品介绍</label> <input type="text" name="description"
	id="descriptionedit" value=""
	class="text ui-widget-content ui-corner-all"> <label for="num">剩余数量</label>
<input type="text" name="num" id="numedit" value=""
	class="text ui-widget-content ui-corner-all"> <label for="totalnum">总数</label>
<input type="text" name="totalnum" id="totalnumedit" value=""
	class="text ui-widget-content ui-corner-all"></fieldset>
</form>
</div>
<!--删除物品-->
<div id="item-confirm" title="删除物品">
<p><span class="ui-icon ui-icon-alert"
	style="float: left; margin: 0 7px 20px 0;"></span>请确认您的操作，确定删除吗？</p>
</div>
<!--添加物品-->
<div id="item-form" title="添加一个新物品">
<form action="includes/additemok.php" method="post"
	enctype="multipart/form-data" id="additem">
<fieldset><label for="img">上传图片</label> <input type="file" name="file"
	id="img" class="text ui-widget-content ui-corner-all"> <label
	for="name">物品名称</label> <input type="text" name="name" id="name"
	value="" class="text ui-widget-content ui-corner-all"> <label
	for="description">物品介绍</label> <input type="text" name="description"
	id="description" value="" class="text ui-widget-content ui-corner-all">
<label for="num">剩余数量</label> <input type="text" name="num" id="num"
	value="" class="text ui-widget-content ui-corner-all"> <label
	for="totalnum">总数</label> <input type="text" name="totalnum"
	id="totalnum" value="" class="text ui-widget-content ui-corner-all"></fieldset>
</form>
</div>
</div>
<div id="tabs">
<ul>
	<li><a href="#usermanage">物品管理</a></li>
	<li><a href="#itemtype">物品类型</a></li>
</ul>
<div id="usermanage">
<div id="message"></div>
<div id="action">
<button id="create-item">添加物品</button>
<button id="edit-item">编辑物品</button>
<button id="delete-item">删除物品</button>
</div>
<p id="feedback"><span>选择:</span> <span id="select-result"></span></p>

<h2 id="Existing">Existing items:</h2>
<div id="users-contain" class="ui-widget">
<table id="users" class="ui-widget ui-widget-content">
	<thead>
		<tr class="ui-widget-header ">
			<th width="5%">ID</th>
			<th width="20%">图片名称</th>
			<th width="20%">物品名称</th>
			<th width="30%">物品介绍</th>
			<th width="15%">剩余数量</th>
			<th width="10%">总数</th>
		</tr>
	</thead>
	<tbody id="selectitem">
	<?php
	$sql="select * from items";
	$result=mysql_query($sql);
	$i=0;
	while ($row=mysql_fetch_array($result)){
		$iid= $row['iid'];
		$img= $row['img'];
		$name= $row['name'];
		$description= $row['description'];
		$num= $row['num'];
		$totalnum= $row['totalnum'];
		$i++;
		echo "<tr>
		<td id='selectid$i'>$iid</td>
		<td id='img$iid'>$img</td>
		<td id='name$iid'>$name</td>
		<td id='description$iid'>$description</td>
		<td id='num$iid'>$num</td>		
		<td id='totalnum$iid'>$totalnum</td>					
		</tr>";
	}
	?>
	</tbody>
</table>
</div>
<div id="totaluser" style="position: absolute; left: 900px; top: 50px;">共<<?php
echo $i; ?>>个物品</div>
</div>
<div id="itemtype">
<table id="types" class="ui-widget ui-widget-content">
	<thead>
		<tr class="ui-widget-header ">
			<th width="30%">ID</th>
			<th width="30%">iid</th>
			<th width="40%">物品类型</th>
		</tr>
	</thead>
	<tbody id="selecttype">
	<?php
	$sqltype="select * from types order by iid asc";
	$resulttype=mysql_query($sqltype);
	$i=0;
	while ($rowtype=mysql_fetch_array($resulttype)){
		$idtype= $rowtype['id'];
		$iidtype= $rowtype['iid'];
		$type= $rowtype['type'];
		$i++;
		echo "<tr>
		<td id='selectid$i'>$idtype</td>
		<td id='iid$idtype'>$iidtype</td>
		<td id='type$idtype'>$type</td>				
		</tr>";
	}
	?>
	</tbody>
</table>
</div>
</div>
</body>
</html>
	<?php }?>