<?php
require 'conndb.php';
$iid=$_GET['iid'];
//echo $iid;
//=12,13,13,none
$iid_array=explode(".",$iid);
//���ַ�����ֳ����飬�ѣ�Ϊ���֡�
//print_r($iid_array)."<br/>";
$count=count($iid_array);
//echo $count."<br/>";����������ж��ٸ�Ԫ��
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
	die ("ɾ��ʧ�ܣ�".mysql_error());
	}
}
}
?>