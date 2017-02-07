/*function clickuser(user)
{ 
	alert(user);
	document.getElementById("user").value = user;
	//alert("2");
	//document.getElementById("returnGoods").submit();
}
var xmlHttp

function showuser(str)
{ 
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="./includes/users.php"
url=url+"?q="+str+"&sid="+Math.random()
xmlHttp.onreadystatechange=stateChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
	//responseText 属性

	//可以通过 responseText 属性来取回由服务器返回的数据。

	//在我们的代码中，我们将把时间文本框的值设置为等于 responseText：

 document.getElementById("showuser").innerHTML=xmlHttp.responseText 
 } 
}

function GetXmlHttpObject()
{
var xmlHttp=null;
try
 {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 }
catch (e)
 {
 // Internet Explorer
 try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}
 */


//function checkitem(iid) {
    //alert(iid)
    //var radio=id
    //alert(radio)
    //document.getElementById("itemname").value=name
    

   
$(document).ready(function() {
	//alert(1)
	$('.showuser').hide();
	$('.user').keyup(function(){
		var uid=$('.user').val();
		var data='username='+uid;
		//alert( data);
		$.ajax({
			type:"post",
			url:"./includes/users.php",
			data:data,
			success : function(html) {
			//alert(1);
			$('.showuser').show();
			$('.namelist').html(html);
			$('li').hover(function(){
				$(this).addClass('hover');

			},function(){
				$(this).removeClass('hover');
			});
			$('li').click(function(){
				$('.user').val($(this).text());
				$('.showuser').hide();
			});
		}
		});
		return false;
	});
});


