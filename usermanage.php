<?php
header( 'Content-Type:text/html;charset=gb2312 ');
require ("includes/conndb.php");
session_start();
if (isset($_SESSION['user']))
{
?>
<html>
<head>
<title>�û�����</title>
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
<!--�༭�û�-->

<div id="dialog-edit" title="�����û�">
<form>
<fieldset>
<label for="name">�û���</label> 
<input type="text" name="name" id="nameedit" value="" class="text ui-widget-content ui-corner-all" /> 
<label for="email">����</label> 
<input type="text" name="email" id="emailedit" value="" class="text ui-widget-content ui-corner-all" /> 
<label for="password">����</label> 
<input type="text" name="password" id="passwordedit" value="" class="text ui-widget-content ui-corner-all" />
</fieldset>
</form>
</div>
<!--ɾ���û�-->
<div id="dialog-confirm" title="ɾ���û�">
    <p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>��ȷ�����Ĳ�����ȷ��ɾ����</p>
</div>
<!--����û�-->
<div id="dialog-form" title="���һ�����û�">
<p class="validateTips">All form fields are required.</p>
<form>
<fieldset>
<label for="name">�û���</label> 
<input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all" /> 
<label for="email">����</label> 
<input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all" /> 
<label for="password">����</label> 
<input type="text" name="password" id="password" value="" class="text ui-widget-content ui-corner-all" />
</fieldset>
</form>
</div>
</div>
<!--����ҳ�� -->
<div id="usermanage">

<div id="nav"><?php // include 'nav.php'; ?></div>

<div id="action">
<button id="create-user">����û�</button>
<button id="edit-user">�༭�û�</button>
<button id="delete-user">ɾ���û�</button>
</div>
<div id="message"></div>
<p id="feedback">
<span>ѡ��:</span> <span id="select-result"></span>
</p>

<h2>Existing Users:</h2>
<div id="users-contain" class="ui-widget">
<table id="users" class="ui-widget ui-widget-content">
	<thead id="adduser">
		<tr class="ui-widget-header ">
		    <th width="10%">ID</th>
			<th width="30%">�û���</th>
			<th width="35%">����</th>
			<th width="25%">����</th>
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
<div id="totaluser" style=" position: absolute; left: 900px; top: 50px;">��<<?php echo $i; ?>>���û�</div>
</div>
</body>
</html>
<?php }?>