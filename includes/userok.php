<?php
header( 'Content-Type:text/html;charset=GB2312');
require '../includes/conndb.php';
$username=ucwords($_GET['username']);//把每个单词的首字母变成大写
$email=ucfirst($_GET['email']);//把第一个字母变成大写
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
//不能放页面跳转，传到前台dialog会出错的。
echo "<tr>
		<td >$id</td>
		<td >$username</td>
		<td >$email</td>
		<td >$password</td>			
		</tr>";