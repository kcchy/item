/*$(document).ready(function() {
$("#nav1").click(function() 
{ 
    //alert(1);
	var IsIE = (navigator.appName == 'Microsoft Internet Explorer'); 
                     if(IsIE) 
                      {//�����IE          
                             alert(document.frames(manage).document.getElementById(example).innerHTML);                                
                      } 
                     else 
                      {//�����FF 
                              alert(document.getElementById(manage).contentDocument.title().innerHTML); 
                                   //FF�²�֧��innerText; �����ǽ������                      
                                   //if(document.all){ 
                                   //����alert(document.getElementById('div1').innerText); 
                                   //} else{ 
                                   //�� alert(document.getElementById('div1').textContent); 
                                   //} 
                      }      
} );
} );*/
/**�������Ķ�̬Ч��**/
$(function() {
	$("#linkall a").click(function() {
        //������Ԫ�ؼ��ϴ���ʽ
		$("#linkall a").css({ 
			"color" :"#000",
			'font-size':'18px',
			'font-weight':'normal'
		})
		//������ļ�����ʽ�����ֿ���
		$(this).css({'color':'#003366','font-size':'22px','font-weight':'bold'});
		// alert();
	});
	/*�������ҳҳ��ĸ߶�
	var browserHeight = document.body.clientHeight;
	document.getElementById("full-height-container").style.height = browserHeight+"px";*/
});
/**splitter�������**/
$().ready(function() {
		makeSplitter();
	});
function makeSplitter()
{
	$("#MySplitter").splitter({
		type:"v",
		splitVertical: true,
		//��������Ϊsizeleft����������Ϊsizeright
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
