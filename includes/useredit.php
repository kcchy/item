<?php
header( 'Content-Type:text/html;charset=GB2312');
require '../includes/conndb.php';
$uid=$_GET['uid'];
$uid_array=explode(".",$uid);
$id=$uid_array['1'];
$username=ucwords($_GET['username']);//把每个单词的首字母变成大写
$email=ucfirst($_GET['email']);//把第一个字母变成大写
$password=$_GET['password'];
//echo $username,$email,$password;
$usersql="UPDATE  `items`.`users` SET  `username` =  '$username',`email` =  '$email',`password` =  '$password' WHERE  `users`.`id` ='$id';";
if (isset($username))
{
	mysql_query($usersql);
}
echo "已经更新了该用户的信息";
//echo $id."-".$username."-".$email."-".$password;