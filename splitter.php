<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">  
<html>  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>jQuery splitter demo</title>  
<script type="text/javascript" src="ajax/jquery.js"></script>  
<script type="text/javascript" src="ajax/splitter1.js"></script>  
<style type="text/css" media="all">  
  
html, body{  
height:100%;width:100%;   
margin:0;padding:0;overflow: hidden;  
}  
#header{background:#c4dcfb;height:5%;}/* Header */  
  
#splitterContainer {/* Main splitter element */  
height:95%;width:100%;margin:0;padding:0;  
}  
#leftPane{  
float:left;width:15%;height:100%;border-top:solid 1px #9cbdff;  
background:#c4dcfb;  
overflow: auto;  
}  
#rightPane{ /*Contains toolbar and horizontal splitter*/  
float:right;width:85%;height:100%;  
background:#f4f4f4;  
}  
#rightSplitterContainer{/*horizontal splitter*/   
width:100%;  
background:#FFFFFF;border-top:solid 1px #9cbdff;  
}   
  
#rightTopPane{/*Top nested in horizontal splitter */  
width:100%;height:50%;overflow:auto;background:#f4f4f4;  
}  
#rightBottomPane{/*Bottom nested in horizontal splitter */  
background:#f4f4f4;width:100%;overflow:auto;  
}  
  
  
/* Splitbar styles; these are the default class names and required styles */  
.splitbarV {  
float:left;width:6px;height:100%;  
line-height:0px;font-size:0px;  
border-left:solid 1px #9cbdff;border-right:solid 1px #9cbdff;  
background:#cbe1fb url(img/panev.gif) 0% 50%;  
}  
.splitbarH {  
height:6px;text-align:left;line-height:0px;font-size:0px;  
border-top:solid 1px #9cbdff;border-bottom:solid 1px #9cbdff;  
background:#cbe1fb url(img/paneh.gif) 50% 0%;  
}  
  
.splitbuttonV{  
margin-top:-41px;margin-left:-4px;top:50%;position:relative;  
height:83px;width:10px;  
background:transparent url(img/panevc.gif) 10px 50%;  
}  
.splitbuttonV.invert{  
margin-left:0px;background:transparent url(img/panevc.gif) 0px 50%;  
}  
.splitbuttonH{  
margin-left:-41px;left:50%;position:relative;  
height:10px !important;width:83px;  
background:transparent url(img/panehc.gif) 50% 0px;  
}  
.splitbuttonH.invert{  
margin-top:-4px;background:transparent url(img/panehc.gif) 50% -10px;  
}  
.splitbarV.working,.splitbarH.working,.splitbuttonV.working,.splitbuttonH.working{  
 -moz-opacity:.50; filter:alpha(opacity=50); opacity:.50;  
}  
</style>  
<script type="text/javascript">  
  
$(document).ready(function() {  
$("#splitterContainer").splitter({minAsize:100,maxAsize:300,splitVertical:true,A:$('#leftPane'),B:$('#rightPane'),slave:$("#rightSplitterContainer"),closeableto:0});  
$("#rightSplitterContainer").splitter({splitHorizontal:true,A:$('#rightTopPane'),B:$('#rightBottomPane'),closeableto:100});  
});  
</script>  
</head>  
  
<body>  
  
<div id="header">  
jQuery splitter v1.1 demo. Download&nbsp; <a href="splitter.zip">here</a></div>  
<div id="splitterContainer">  
    <div id="leftPane">  
        <p>This pane limited to a range of 100 to 300 pixels wide with the minAsize / maxAsize   
        properties of the plugin..</p>  
        <p>&nbsp;</p>  
  
    </div>  
    <!-- #leftPane -->  
    <div id="rightPane">  
    <div style="height:5%;background:#bac8dc">Toolbar?</div>  
        <div id="rightSplitterContainer" style="height:95%">  
            <div id="rightTopPane">  
                <p>testing</p>  
                <p>testing</p>  
                <p>testing</p>  
                <p>testing</p>  
            </div>  
            <!-- #rightTopPane-->  
            <div id="rightBottomPane">  
                <div>  
                    <p>some content</p>  
                    <p>some content</p>  
                    <p>some content</p>  
                    <p>some content</p>  
                    <p>some content</p>  
                    <p>some content</p>  
                </div>  
            </div>  
            <!-- #rightBottomPane--></div>  
        <!-- #rightSplitterContainer--></div>  
    <!-- #rightPane --></div>  
<!-- #splitterContainer -->  
  
</body>  
  
</html>  