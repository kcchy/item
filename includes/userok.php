<?php
header( 'Content-Type:text/html;charset=GB2312');
require '../includes/conndb.php';
$username=ucwords($_GET['username']);//��ÿ�����ʵ�����ĸ��ɴ�д
$email=ucfirst($_GET['email']);//�ѵ�һ����ĸ��ɴ�д
$password=$_GET['password'];
$usersql="insert into items.users (id,username,email,password) values('','$username','$email','$password');";
if (isset($username))
{
	mysql_query($usersql);
	//header("Location: ../usermanage.php");
}
$queryid=mysql_query("SELECT * FROM `users` WHERE `username` = '$username'");
$row=mysql_fetch_array($queryid);
//print_r($row);
$id=$row['id'];
//���ܷ�ҳ����ת������ǰ̨dialog�����ġ�
echo "<tr>
		<td >$id</td>
		<td >$username</td>
		<td >$email</td>
		<td >$password</td>			
		</tr>";