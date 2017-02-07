<?php
require '../includes/conndb.php';
//在borrow表中插入数据

$itemname=$_GET['itemname'];
//$itemname='u盘';
//echo $itemname;
//var_dump(isset($itemname));

if (!isset($itemname))
{
	header("Location: ../borrowpage.php");
	exit;
}

else
{
	//更新items表中的数量减去购买的
	$num_sql="SELECT * FROM `items` WHERE `name` ='$_GET[itemname]'";
	$num=mysql_query($num_sql);
	$row=mysql_fetch_assoc($num);
	$total_num=$row['num'];
	$leave_num=$total_num-$_GET['num'];
	if ($leave_num>=0)
	{
		$reducenum="UPDATE `items` SET `num` = '$leave_num' WHERE `name` ='$_GET[itemname]'";
		$reducenumok=mysql_query($reducenum);
	 if (!$reducenumok){
	 	die('数据更新失败' . mysql_error());
	 }
	}
	else
	{
		header("Location:borrowerror.php");
		exit;
	}
    //选择时区
	date_default_timezone_set('Asia/Shanghai');
	$bnow = date("Y-m-d H:i:s");
	echo $bnow;
	$borrow ="INSERT INTO `items`.`borrow` (`id`, `name`, `identifier`, `type`, `num`, `user`, `department`, `btime`, `note`) VALUES (NULL, '$_GET[itemname]', '$_GET[identifier]', '$_GET[type]', '$_GET[num]', '$_GET[user]','$_GET[department]', '$bnow', '$_GET[note]');";
	$borrowok=mysql_query($borrow);
	/*if (!$borrowok)
	{
		echo "无法借用:".mysql_error();
		echo "<a href='../borrow.php'>返回借用页面<a>";
		//header("Location: http://localhost/item/borrow.php");
	}*/
	//同时在borrowlog中插入相同的数据
	echo $bnow;
	$borrowsql="select borrow.id from borrow where `name` ='$_GET[itemname]' and `btime`='$bnow'";
	$idsql=mysql_query($borrowsql);
	$row_id=mysql_fetch_array($idsql);
	$borrow_id=$row_id['id'];
	$borrowlog="INSERT INTO `items`.`borrow_log` (`blid`,`bid`, `name`, `identifier`, `type`, `num`, `user`, `department`, `borrow_time`, `note`) VALUES (NULL, '$borrow_id', '$_GET[itemname]', '$_GET[identifier]', '$_GET[type]', '$_GET[num]', '$_GET[user]','$_GET[department]', '$bnow', '$_GET[note]');";
	$borrowlogok=mysql_query($borrowlog);
	if (!$borrowlogok)
	{
		echo "保存记录失败:".mysql_error();
		echo "<a href='../borrowpage.php'>返回借用页面<a>";
		//header("Location: http://localhost/item/borrow.php");
	}

	else
	{
		//$db->__destruct;
		header("Location: borrowsuccess.php");
		exit;
	}
}

?>