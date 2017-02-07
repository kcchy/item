<?php
header( 'Content-Type:text/html;charset=gb2312 ');
require ("includes/conndb.php");
session_start();
if (isset($_SESSION['user']))
{
?>
<html>
<head>
<title>用户管理</title>
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="ajax/jquery-1.8.2.js"></script>
<script src="ajax/jquery-ui.js"></script>
<link rel="stylesheet" href="css/admin.css" /> 
<link rel="stylesheet" href="/resources/demos/style.css" />
<link rel="stylesheet" type="text/css" href="css/item.css" />
<script src="ajax/usermanage.js"></script>
</head>
<body>
<div id="title"><h1><img src="img/images/kcc_icon.png" id="icon">
<script type="text/javascript">
document.write(document.title)
</script></h1></div>
<div style="display:none;">
<!--编辑用户-->

<div id="dialog-edit" title="更新用户">
<form>
<fieldset>
<label for="name">用户名</label> 
<input type="text" name="name" id="nameedit" value="" class="text ui-widget-content ui-corner-all" /> 
<label for="email">邮箱</label> 
<input type="text" name="email" id="emailedit" value="" class="text ui-widget-content ui-corner-all" /> 
<label for="password">密码</label> 
<input type="text" name="password" id="passwordedit" value="" class="text ui-widget-content ui-corner-all" />
</fieldset>
</form>
</div>
<!--删除用户-->
<div id="dialog-confirm" title="删除用户">
    <p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>请确认您的操作，确定删除吗？</p>
</div>
<!--添加用户-->
<div id="dialog-form" title="添加一个新用户">
<p class="validateTips">All form fields are required.</p>
<form>
<fieldset>
<label for="name">用户名</label> 
<input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all" /> 
<label for="email">邮箱</label> 
<input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all" /> 
<label for="password">密码</label> 
<input type="text" name="password" id="password" value="" class="text ui-widget-content ui-corner-all" />
</fieldset>
</form>
</div>
</div>
<!--操作页面 -->
<div id="usermanage">

<div id="nav"><?php // include 'nav.php'; ?></div>

<div id="action">
<button id="create-user">添加用户</button>
<button id="edit-user">编辑用户</button>
<button id="delete-user">删除用户</button>
</div>
<div id="message"></div>
<p id="feedback">
<span>选择:</span> <span id="select-result"></span>
</p>

<h2>Existing Users:</h2>
<div id="users-contain" class="ui-widget">
<table id="users" class="ui-widget ui-widget-content">
	<thead id="adduser">
		<tr class="ui-widget-header ">
		    <th width="10%">ID</th>
			<th width="30%">用户名</th>
			<th width="35%">邮箱</th>
			<th width="25%">密码</th>
		</tr>
	</thead>
	<tbody id="selectuser">
	<?php
	$sql="select * from users order by id desc ";
	$result=mysql_query($sql);
	$i=0;
	while ($row=mysql_fetch_array($result)){
		$id= $row['id'];
		$username= $row['username'];
		$email= $row['email'];
		$password= $row['password'];
		$i++;
		echo "<tr id='delete$id'>
		<td id='selectid$i'>$id</td>
		<td id='username$id'>$username</td>
		<td id='email$id'>$email</td>
		<td id='password$id'>$password</td>			
		</tr>";
	}
	?>
	</tbody>
</table>

</div>
<div id="totaluser" style=" position: absolute; left: 900px; top: 50px;">共<<?php echo $i; ?>>个用户</div>
</div>
</body>
</html>
<?php }?>