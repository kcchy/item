<?php
//��ʼ��session
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

<form action="checklogin.php" method="post" name="login"
	id="login" onsubmit="return checklogin()">
<table align="center" border="0" cellpadding="10">

	<tr>
		<td style="text-align: center;""><font color="#fffff">
		<?php 
	
		print('���óɹ�<br><br>���ڼ���.���Ե�..<font class="font" id="time">2</font> ����Զ���ת...<br>');
			header("refresh:2;url=../borrow.php");
		echo"<br><br>���ҳ��û����ת��������<a href='../borrow.php'>����</a>";
		?>
		</font>
		</td>
	</tr>
</table>
</form>


</body>
</html>
