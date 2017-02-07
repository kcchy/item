<?php

/*require '../includes/conndb.php';
$q=$_POST['username'];
$result = mysql_query("SELECT * FROM users where username like '$q%'");
while ($row = mysql_fetch_assoc($result))
{
    //print_r($row); 
    $a[]='' . $row['username'] . '';
    
	//echo '' . $row['usersname'] . '';
    //echo"<br>"
}

//echo ("$q");
if (strlen($q) > 0)
{
$user="";
for($i=0; $i<count($a); $i++)//count() 函数计算数组中的单元数目或对象中的属性个数。
  {
  if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))//strtolower() 函数把字符串转换为小写。
   //substr() 函数返回字符串的一部分。
  {
    if ($user=="")
      {
      $user=$a[$i];
      }
    else
      {
      $user=$user."<br>".$a[$i];
      }
    }
  }
}

//Set output to "no suggestion" if no user were found
//or to the correct values
if ($q == "")
{
$response="Please input your name";
}
else
{
while ($row = mysql_fetch_assoc($result))
{    
    extract($row);
    echo "<li>".$response."</li>";
    
}
}

//output the response
//echo $response;
*/
$name=$_POST['username'];
//echo $name;
//$name="damon";
require 'conndb.php';
$result = mysql_query("SELECT * FROM users where username like '$name%'");
while ($row = mysql_fetch_array($result))
{    
	//extract($row);
    echo "<li>".$row['username']."</li>";
    
}
/*echo"
<li>damon chencheng kong</li>
<li>damon chencheng wan</li>
<li>damon chencheng asdasd</li>
";*/
?>