<?php
header( 'Content-Type:text/html;charset=GB2312');
require '../includes/conndb.php';
$uid=$_GET['uid'];
$uid_array=explode(".",$uid);
//���ַ�����ֳ����飬�ѣ�Ϊ���֡�
//print_r($uid_array)."<br/>";
$count=count($uid_array);
//echo $count."<br/>";����������ж��ٸ�Ԫ��
if (isset($uid))
 {
	//for($i=0;$i<=$count;$i++){
		$id=$uid_array['1'];
		//echo $id."<br/>";
		$deleusersql="delete from users where id='$id';";
		$deleok=mysql_query($deleusersql);
		//if(!$deleok)
		//die ("ɾ��ʧ�ܣ�".mysql_error());
	//}���ܽ�������ɾ���ˣ������ᵼ��jquery����Ч��ʧЧ���пտ���������ʲô���⡣
}
//echo "�Ѿ�ɾ�����û�";
//print_r($uid_array)."<br/>";
print $uid;
?>