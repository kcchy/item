<?php
header( 'Content-Type:text/html;charset=GB2312');
require '../includes/conndb.php';
$uid=$_GET['uid'];
$uid_array=explode(".",$uid);
//把字符串拆分成数组，已，为区分。
//print_r($uid_array)."<br/>";
$count=count($uid_array);
//echo $count."<br/>";计算出数组有多少个元素
if (isset($uid))
 {
	//for($i=0;$i<=$count;$i++){
		$id=$uid_array['1'];
		//echo $id."<br/>";
		$deleusersql="delete from users where id='$id';";
		$deleok=mysql_query($deleusersql);
		//if(!$deleok)
		//die ("删除失败：".mysql_error());
	//}不能进行批量删除了，这样会导致jquery隐藏效果失效，有空看看究竟是什么问题。
}
//echo "已经删除该用户";
//print_r($uid_array)."<br/>";
print $uid;
?>