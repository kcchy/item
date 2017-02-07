<?php
//初始化session
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GB2312">
<link rel="stylesheet" type="text/css" href="../css/item.css" />
<script language="javascript"> 
var times=3;
clock();
function clock(){  
	if(navigator.appName.indexOf("Explorer") > -1){
		window.setTimeout('clock()',1000);
		times=times-1;
		time.innerHTML =times;
	}else{
		window.setTimeout('clock()',1000);
		times=times-1;
		document.getElementById("time").textContent =times;
	}
}
</script>
<title>error</title>
</head>
<body>

<form action="includes/checklogin.php" method="post" name="login"
	id="login" onsubmit="return checklogin()">
<table align="center" border="0" cellpadding="10">

	<tr>
		<td style="text-align: center;""><font color="#000">
		<?php 
		header("refresh:2;url=../borrow.php");
		print('亲，仓库已经没有你要借的物品了。<br><br>请稍等..<font class="font" id="time">2</font> 秒后自动跳转...<br>');
		echo"<br><br>如果页面没有跳转，请点击此<a href='../borrowpage.php'>链接</a>";
		?>
		</font>
		</td>
	</tr>
</table>
</form>


</body>
</html>
