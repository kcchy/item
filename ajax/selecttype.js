$(document).ready(function() {

	$(".png img").click(function() {

		var param = $(this).attr('src');
		if ($.browser.msie && $.browser.version == '6.0') {
			param = $(this).attr('style').match(/src=\"([^\"]+)\"/);
			param = param[1];
		}
		//alert(param)
		addlist(param);
	});
});

function addlist(param)// param=image/products/img.png
{
	var data = 'img=' + encodeURIComponent(param);
	//alert(data)
	$.ajax( {
		type : 'POST',
		url : "./includes/type.php",
		data : data,// img=image%2Fproducts%2Fimg.png
		success : function(html) {
			//alert(html)
			$('#selecttype').html(html);
		}
	});
}
