/*$(document).ready(function() {
$("#nav1").click(function() 
{ 
    //alert(1);
	var IsIE = (navigator.appName == 'Microsoft Internet Explorer'); 
                     if(IsIE) 
                      {//如果是IE          
                             alert(document.frames(manage).document.getElementById(example).innerHTML);                                
                      } 
                     else 
                      {//如果是FF 
                              alert(document.getElementById(manage).contentDocument.title().innerHTML); 
                                   //FF下不支持innerText; 下面是解决方法                      
                                   //if(document.all){ 
                                   //　　alert(document.getElementById('div1').innerText); 
                                   //} else{ 
                                   //　 alert(document.getElementById('div1').textContent); 
                                   //} 
                      }      
} );
} );*/
/**导航条的动态效果**/
$(function() {
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
	/*计算打开网页页面的高度
	var browserHeight = document.body.clientHeight;
	document.getElementById("full-height-container").style.height = browserHeight+"px";*/
});
/**splitter插件布局**/
$().ready(function() {
		makeSplitter();
	});
function makeSplitter()
{
	$("#MySplitter").splitter({
		type:"v",
		splitVertical: true,
		//往左设置为sizeleft，往右设置为sizeright
		sizeRight: true,
		resizeToWidth: true,
		resizeTo: window,
		dock: "left",
		dockSpeed: 20,
		cookie: "docksplitter",
		dockKey: 'Z',	// Alt-Shift-Z in FF/IE
		accessKey: "I" // Alt-Shift-i in FF/IE
});
}
