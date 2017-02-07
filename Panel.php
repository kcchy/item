<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<LINK REL="SHORTCUT ICON" HREF="http://item.movit-tech.com/favicon.ico">

<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<script src="ajax/jquery1.3.js"></script>
<script type="text/javascript" src="ajax/splitter.js"></script>
<script src="ajax/panel.js"></script>
<script type="text/javascript">
/*$(function() {
	$("#linkall a").click(function() {
        //给所有元素加上此样式
		$("#linkall a").css({ 
			"color" :"#000",
			'font-size':'18px',
			'font-weight':'normal'
		})
		//给点击的加上样式，区分开来
		$(this).css({'color':'#003366','font-size':'22px','font-weight':'bold'});
		// alert();
	});
	计算打开网页页面的高度
	var browserHeight = document.body.clientHeight;
	document.getElementById("full-height-container").style.height = browserHeight+"px";
});*/
</script>
<style>    
#linkall .ui-selecting { background: #FECA40; }    
#linkall .ui-selected { background: #F39814; color: white; }      
 </style>    
<script>  
//splitter布局
/*$().ready(function() {
		makeSplitter();
	});
function makeSplitter()
{
	$("#MySplitter").splitter({
		type:"v",
		splitVertical: true,
		sizeLeft: 270,
		resizeToWidth: true,
		resizeTo: window,
		dock: "right",
		dockSpeed: 200,
		cookie: "docksplitter",
		dockKey: 'Z',	// Alt-Shift-Z in FF/IE
		accessKey: "I"
});
}*/

</script>
<link rel="stylesheet" type="text/css" href="./css/panel.css" />
<title>物品借用系统-扬州ISS</title>
</head>
<body style="overflow: hidden;">  
<!--<div id="full-height-container">-->
<div id="header" class="sectionbottom ">
<div id="panel_login"><?php include 'header_login.php';?></div>
<div id="tree"><a href="javascript:void($('#MySplitter').trigger('toggleDock'))"><img src="img/images/tree.png" align="middle"></a></div>
</div>
<div id="MySplitter">

<div id="LeftPane"><?php
if(isset($_SESSION['user']))
{
	?>
<div id="nav1"><?php include 'nav.php';?></div>
	<?php }
	else{
		include 'time.php';
	} ?>
	
	</div>

<div id="RightPane">
<!-- <div id="TopPane"> -->
<div id="panel"><iframe id="frame_content" src="borrowpage.php"
	name="manage" width="1000px" scrolling="no" frameborder="0"></iframe>
<!--  <iframe
	id="frame_content" src="iframe_b.html" scrolling="no" frameborder="0"
	onload="this.height=100"></iframe>--> <script type="text/javascript">
          function reinitIframe(){
           var iframe = document.getElementById("frame_content");
             try{
             var bHeight = iframe.contentWindow.document.body.scrollHeight;
             var dHeight = iframe.contentWindow.document.documentElement.scrollHeight;
             var height = Math.max(bHeight, dHeight);
             iframe.height =  height;
            }catch (ex){}
         }
       window.setInterval("reinitIframe()", 200);
</script></div>
<!--</div>
<div id="BottomPane "></div>-->
</div>
</div>
<div id="footer"></div>


</body>
</html>
