//var xmlHttp

function returnitem(id)
{ 
	//alert("1");
	var r=confirm("是否确认归还");
	if (r==true)
	  {
      document.getElementById("operatorId").value = id;
	  document.getElementById("returnGoods").submit();
	  }
	//alert("2");
	
}

/*function returnitem(id)
{ 
xmlHttp=GetXmlHttpObject()
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request")
 return
 }
var url="./includes/returnok.php"
url=url+"?q="+id
xmlHttp.open("GET",url,true)
xmlHttp.send(null)

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
/*
$(document).ready(function() {

	$("#ghbutton").click(function() {
        alert(1)
		var note = $("#note1").val();
		
		//alert(param)
		updatenote(note);
	});
});

function updatenote(note)// param=image/products/img.png
{
	var data = "note=" + note;
	alert(data)
	$.ajax( {
		type : 'GET',
		url : "./includes/returnok.php",
		data : data,
		success : function(ok) {
			alert('归还成功');
		}
	});
}
*/
