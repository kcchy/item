<?php
require './includes/conndb.php';
//session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GB2312">
<script src="ajax/jquery-1.8.2.js"></script>
<script src="ajax/jquery-ui.js"></script>
<!-- <script src="ajax/time.js"></script> -->
<script src="ajax/selectuser.js"></script>
<script src="ajax/borrow.js"></script>
<script src="ajax/selectitem.js"></script>
<script src="ajax/selecttype.js"></script>
<link rel="stylesheet" type="text/css" href="css/item.css" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<title>��Ʒ����</title>
</head>
<body>
<!--  ��������Ҫ�����Ĵ��ڷŽ�һ��div����Ȼ�����ظ�div���Է������������û��Ӱ�죬������������ʱ��Ͳ�������� -->
<div style="display:none;">
<!--����ҳ��-->
<div id="dialog-borrow" title="��д��Ϣ">
<p class="validateTips" >�ʲ����,��ע�ɲ���д</p>
<form>
<table>
	<tr>
		<td ><span>��Ʒ����:</span></td>
		<td >
		<div id="selecttype"></div>
		</td>
	</tr>
	<tr>
		<td ><span>�ʲ����:</span></td>
		<td><input type="text" name="identifier" id="identifier"></td>
	</tr>
	<tr>
		<td ><span>����: </span></td>
		<!--  <td><input type="text" name="department" id="department"></td>-->
		<td><select name="department" id="department">
			<option value="Support" selected="selected">Support</option>
			<option value="Trilogy">Trilogy</option>
			<option value="Java">Java</option>
			<option value=".Net">.Net</option>
			<option value="Finance">Finance</option>
			<option value="PC">PC</option>
			<option value="����">����</option>
			<option value="others">others</option>
		</select></td>
	</tr>
	<tr>
		<td><span>����:</span></td>
		<td><select name="num" id="num">
			<option value="1" selected="selected">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select></td>
	</tr>
	<!--  <tr>
        <td align="right"><span>����ʱ��:</span></td>
        <td><input type="text" name="btime" id="sDate1" value=""
            onClick="return Calendar('sDate1','sDate2');" /></td>
    </tr>
    -->
	<tr>
		<td ><span>������:</span></td>
		<!-- onkeyup="showuser(this.value) -->
		<td><input type="text" name="user" class="user">
		<div class="showuser">
		<div class="namelist"></div>
		</div>
		</td>
	</tr>
	<tr>
		<td></td>
		<td ></td>
	</tr>
	<tr>
		<td>��ע:</td>
		<td><textarea rows="3" cols="20" name="note" id="note"></textarea></td>
	</tr>
</table>
</form>
</div>
</div>
<div id="title">
<h1><img src="img/images/kcc_icon.png" id="icon"> <script
	type="text/javascript">
document.write(document.title)
</script></h1>

</div>
<p id="feedback" style="margin-left:10px; display:none;"><span>�����õ��ǵ�</span><span id="l_num" style="color:red;">__</span><span>����Ʒ</span></p>
<div class="itemall">

<?php
$result = mysql_query("SELECT * FROM items");
$i=0;
while ($row = mysql_fetch_assoc($result)) {
	$nd=$row['description'] ;
	$img=$row['img'];
	$name=$row['name'];
	$num=$row['num'];
	//$id=$row['iid'] ;
	$i++;
	echo "
              <li class='item'>
              <div class='png'><img src='img/products/$img'
              alt=$nd
              width='128' height='128' class='pngfix' /> </div>
              <div class='itemname'>
              <input type='radio' name='itemname' value=$name id='itemname_r$i'>$name
              </div>
              <div><h5 class=item_num><font>�������</font>$num</h5></div>
              </li>";
}
?> <script>
         $( "li" ).tooltip({ 
         position: {                
         my: "left top",                
         at: "left top"            
         },
         items: "img[alt]",    
         content: function() 
         {        
         return $( this ).attr( "alt" );    
         }
         });
         </script></div>
</body>
</html>
