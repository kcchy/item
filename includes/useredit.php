<?php
header( 'Content-Type:text/html;charset=GB2312');
require '../includes/conndb.php';
$uid=$_GET['uid'];
$uid_array=explode(".",$uid);
$id=$uid_array['1'];
$username=ucwords($_GET['username']);//��ÿ�����ʵ�����ĸ��ɴ�д
$email=ucfirst($_GET['email']);//�ѵ�һ����ĸ��ɴ�д
$password=$_GET['password'];
//echo $username,$email,$password;
$usersql="UPDATE  `items`.`users` SET  `username` =  '$username',`email` =  '$email',`password` =  '$password' WHERE  `users`.`id` ='$id';";
if (isset($username))
{
	mysql_query($usersql);
}
echo "�Ѿ������˸��û�����Ϣ";
//echo $id."-".$username."-".$email."-".$password;