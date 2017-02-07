<?
//初始化session
header( 'Content-Type:text/html;charset=gb2312 ');
session_start();
require 'conndb.php';
// 获得参数
$username=$_GET['username'];
$password=$_GET['password'];/**/
/*$username="Damon Chencheng Kong";
$password="YZ-it418";*/
//$password=md5($password);

// 检查帐号和密码是否正确,
$sql="select * from users where username='$username' and password='$password'";
$re=mysql_query($sql);
$result=mysql_fetch_array($re);
// 如果用户登录正确
if( !empty($result)) {
	//注册session变量，保存当前会话用户的昵称
	$_SESSION['user']=$username;
	echo "1";//不要设置为字符串。用数字
}
else { 
    echo "用户名或密码错误";
	//header("Location: error.php");
    //exit();
}
?>

