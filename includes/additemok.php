<?php
require ("conndb.php");
$uploaddir = dirname(__FILE__)."/../img/products/";
if ((($_FILES["file"]["type"] == "image/gif") ||
($_FILES["file"]["type"] == "image/jpeg") ||
($_FILES["file"]["type"] == "image/png")  ||
($_FILES["file"]["type"] == "image/x-png")) &&
($_FILES["file"]["size"] < 2000000)) {
	if ($_FILES["file"]["error"] > 0) {
		echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
	} else {
		echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		echo "Type: " . $_FILES["file"]["type"] . "<br />";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

		if (file_exists("$uploaddir" . $_FILES["file"]["name"])) {
			echo $_FILES["file"]["name"] . " already exists. ";
		} else {
			move_uploaded_file($_FILES["file"]["tmp_name"], "$uploaddir" . $_FILES["file"]["name"]);
			echo "Stored in: " . "$uploaddir" . $_FILES["file"]["name"];
		}
	}
} else {
	echo '图片格式不正确';
}
echo '<br />';
$image = $_FILES["file"]["name"];
$name=$_POST['name'];
$description=$_POST['description'];
$num=$_POST['num'];
$totalnum=$_POST['totalnum'];
$insert = "INSERT INTO items
           (iid, img, name, description,num,totalnum)
           VALUES
		   ('', '$image','$name','$description','$num','$totalnum')";

if (!isset($name)&&!isset($num)&&!isset($totalnum)&&!isset($image)) {
 header('location:../itemmanage.php');
 exit();
}
else{
mysql_query($insert);
header('location:../itemmanage.php');
}

?>
