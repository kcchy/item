<?php
require '../includes/conndb.php';
$iid=$_GET['iid'];
$img=$_GET['img'];
$name=$_GET['name'];
$description=$_GET['description'];
$num=$_GET['num'];
$totalnum=$_GET['totalnum'];
//echo $name,$img;
$itemsql="UPDATE  `items`.`items` SET  `img` =  '$img',`name` =  '$name',`description` =  '$description',`num` =  '$num',`totalnum` =  '$totalnum' WHERE  `items`.`iid` ='$iid';";
if (isset($name)&&isset($num)&&isset($totalnum))
{
	mysql_query($itemsql);
	header("Location: ../itemmanage.php");
}