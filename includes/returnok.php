<?php
require '../includes/conndb.php';
$id=$_GET["operatorId"];
date_default_timezone_set('Asia/Shanghai');
$now = date("Y-m-d H:i:s");
echo $now;
//$note1=$_GET["note"];
//echo $note1;
//echo $id;
//$note_id="note_".$id;
//echo $note_id;
//$note=$_POST["note1"];
//$note1=$_GET["notea"];
//echo $id;
//echo $note;
//echo $note1;

if (strlen($id) > 0)
{
	//��ѯ���õ�����
	$bsql="SELECT * FROM `borrow` WHERE id='$id'";
	$bresult_num=mysql_query($bsql);
	$row_n=mysql_fetch_assoc($bresult_num);
	$bnum=$row_n['num'];
	$bname=$row_n['name'];
	//echo "a".$bnum;
	//echo "b".$bname;
	//��items��������һ������
	$num_sql="SELECT * FROM `items` WHERE `name` ='$bname';";
	$num=mysql_query($num_sql);
	$row=mysql_fetch_assoc($num);
	$total_num=$row['num'];
	$leave_num=$total_num+$bnum;
	//echo "c".$leave_num;
	$addnum="UPDATE `items` SET `num` = '$leave_num' WHERE `name` ='$bname'";
	$addnumok=mysql_query($addnum);
	if (!$addnumok){
		echo "<a href='../return.php?page=1'>���ع黹ҳ��<a>";
		die ("��������ʧ�ܣ�".mysql_error());
		//header("Location: ../return.php?page=1");
	}
	$logsql="update borrow_log set return_time='$now' where bid='$id'";
	$logsqlok=mysql_query($logsql);

	if (!$logsqlok){
		die ("�����¼ʧ�ܣ�".mysql_error());
		echo "<a href='../return.php'>���ع黹ҳ��<a>";
		//header("Location: ../return.php?page=1");
	}

	//ɾ��borrow�е����ݡ��黹��Ʒ
	$returnsql="delete from borrow where id='$id';";
	$returnsqlok=mysql_query($returnsql);

	if (!$returnsqlok){
		die ("�黹ʧ�ܣ�".mysql_error());
		//echo "<a href='../return.php?page=1'>���ع黹ҳ��<a>";
	}
	else{
		header("Location: ../return.php");
		exit;
	}
}
?>