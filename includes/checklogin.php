<?
//��ʼ��session
header( 'Content-Type:text/html;charset=gb2312 ');
session_start();
require 'conndb.php';
// ��ò���
$username=$_GET['username'];
$password=$_GET['password'];/**/
/*$username="Damon Chencheng Kong";
$password="YZ-it418";*/
//$password=md5($password);

// ����ʺź������Ƿ���ȷ,
$sql="select * from users where username='$username' and password='$password'";
$re=mysql_query($sql);
$result=mysql_fetch_array($re);
// ����û���¼��ȷ
if( !empty($result)) {
	//ע��session���������浱ǰ�Ự�û����ǳ�
	$_SESSION['user']=$username;
	echo "1";//��Ҫ����Ϊ�ַ�����������
}
else { 
    echo "�û������������";
	//header("Location: error.php");
    //exit();
}
?>

