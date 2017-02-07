<?php
header( 'Content-Type:text/html;charset=gb2312 ');
require 'conndb.php';
//$img="note.png";
$img = mysql_real_escape_string(current(array_reverse(explode('/', $_POST['img']))));
//$_POST['img']=image/products/img.png
$row = mysql_fetch_assoc(mysql_query("SELECT * FROM items WHERE img like '$img'"));
$itemid=$row['iid'];
//echo $itemid;
$typesql="SELECT *FROM `types` WHERE `iid` = '$itemid'";
$typeresult = mysql_query($typesql);

//echo $type;
echo "<select id='i_type'>";
$i=0;
while ($rowt = mysql_fetch_assoc($typeresult)){
	$i++;
	$type=$rowt['type'];
	//echo "<input type='radio' name='type' value='.$type.' id='type'>".$type;
	echo "<option  value=$type id='type'>$type</option>";
}
echo "</select>";
?>