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
	//responseText ����

	//����ͨ�� responseText ������ȡ���ɷ��������ص����ݡ�

	//�����ǵĴ����У����ǽ���ʱ���ı����ֵ����Ϊ���� responseText��

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
function validate_required(field, alerttxt) {
	with (field) {
		if (value == null || value == "") {
			alert(alerttxt);
			return false
		} else {
			return true
		}
	}
}

function validate_form(thisform) {
	with (thisform) {
		if (validate_required(user, "����д�û��� ") == false) {
			user.focus();
			return false
		}
		else
		{

			var r=confirm("ȷ�Ͻ�����");
			if (r==true)
			{
				//alert("You pressed OK!");
			}
			else
			{
				return false
				//alert("You pressed Cancel!");
			}

		}
	}
}

//function checkitem(iid) {
//alert(iid)
//var radio=id
//alert(radio)
//document.getElementById("itemname").value=name

//}
/*ѡ����Ʒ*/
$(function() {
	$(".png").click(
			function() {
				$(this).siblings(".itemname").children("input").attr('checked',
				'checked');

				$(".item").find(".png").css( {
					"background" : ""
				})
				$(this).css('background', '#003366');
				// alert();
			});
});
/*ѡ�����*/
$(function() {
	$(".itemall li").click(
			function() {
				var index=$(this).index();
				var l_num=index+1;
				//alert(l_num);
				$("#l_num").empty().append(l_num);		
			});
});
/*ѡ����Ʒ����
	     $("#type").clik(function() {
				//alert(1);	
			
				//���Բ鵽����checked������ֵ
	    	 var check=$(":checked");
			alert($("#selecttype").find(check).val());
				
			});
			
});
});*/

