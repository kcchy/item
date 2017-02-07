<?php
require 'conndb.php';
$iid=$_GET['iid'];
//echo $iid;
//=12,13,13,none
$iid_array=explode(".",$iid);
//把字符串拆分成数组，已，为区分。
//print_r($iid_array)."<br/>";
$count=count($iid_array);
//echo $count."<br/>";计算出数组有多少个元素
if (!isset($iid))
{
header("Location: ../itemmanage.php");
}
else
{   
 for($i=0;$i<$count;$i++){
	$id=$iid_array[$i];
	echo $id."<br/>";
    $deleitemsql="delete from items where iid='$id';";
	$deleok=mysql_query($deleitemsql);
	if($deleok)
	{
		header("Location: ../itemmanage.php");
	}
	else{
	die ("删除失败：".mysql_error());
	}
}
}
?>