<?php
//��ʼ��session
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GB2312">
<script src="ajax/jquery-1.8.2.js"></script>
<script src="ajax/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="./css/item.css" />
<script language="javascript"> 
    /*function checklogin() 
    { 
        //alert(1)
      if ((login.username.value!="") && (login.password.value!=""))
        // ����ǳƺ��������Ϊ��,�򷵻�true
         return true
      else {
        // ����ǳƻ�����Ϊ��,����ʾ������Ϣ
         alert("����д�û���������") 
         return false
      }     
    } */
</script>
<script type="text/javascript">
$(document).ready(function(){
	  $("#submit").click(function(){
		  var username=$("#name").val();
		  var password=$("#password").val();
		  var data="username="+username+"&password="+password;
			$.ajax( {
				type : "GET",
				url : "includes/checklogin.php",
				data : data,
				success : function(html) {
				     //alert(html);
				     //��ߵ�1����Ҫ��"".���˾Ͳ����ж���
				     if(html==1){
					    
					  location.href ="index.php";
				    }
				    else{
				    	$("#tips").html(html);
					}
			          }
			  });
	  });
	});
</script>
<title>��½����</title>
</head>
<body style="background-color:#fafafa">
<div style="width: 500px;height:auto; margin: 100px auto;"><div style="font-family:����;height:48px; line-height:48px; color:#003366;"><img src="img/images/kcc_icon.png" align="left"><h1>��Ʒ����ϵͳ</h1></div>           
<form action="includes/checklogin.php" method="post" name="login"
	id="login" onsubmit="return checklogin()">
<table align="center" border="0" cellpadding="10">
	<tr><td colspan="2" id="tips"></td></tr>
	<tr>
		<td style="text-align: right;""><font color="#000">�˺�</font></td>
		<td style="text-align: left;"><input type="text" name="username"
			size="50" value="Damon Chencheng Kong" id="name"></td>
	</tr>
	<tr>
		<td style="text-align: right;"><font color="#000">����</font></td>
		<td style="text-align: left;"><input type="password" name="password"
			size="50" id="password"></td>
	</tr>

	<tr>
		<td></td>
		<td style="text-align: left;">
		<button type="button" id="submit"><font style="line-heignt: 22px;">��¼</font></button>
		</td>
	</tr>
</table>
</form>

</div>
</body>
</html>
