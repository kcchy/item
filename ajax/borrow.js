/** ******************借用********************** */
$(function() {
	var name = $(".user"), email = $("#email"), password = $("#password"), allFields = $(
			[]).add(name).add(email).add(password), tips = $(".validateTips");
	
	function updateTips(t) {
		tips.text(t).addClass("ui-state-highlight");
		setTimeout(function() {
			tips.removeClass("ui-state-highlight", 1500);
		}, 500);
	}

	function checkLength(o, n, min, max) {
		if (o.val().length > max || o.val().length < min) {
			o.addClass("ui-state-error");
			updateTips("请填写用户名");
			return false;
		} else {
			return true;
		}
	}
	$("#dialog-borrow").dialog(
			{
						autoOpen : false,
						height : 'auto',
						width : 350,
						modal : true,
						buttons : {
							"借用" : function() {
				var bValid = true;
				allFields.removeClass("ui-state-error");

				bValid = bValid
						&& checkLength(name, "user", 3, 50);
				/*
				bValid = bValid
						&& checkLength(email, "email", 6, 80);
				bValid = bValid
						&& checkLength(password, "password", 0,
								16);
                                     
				// bValid = bValid && checkRegexp( name,
				// /^[a-z]([0-9a-z_])+$/i, "Username may consist
				// of a-z, 0-9, underscores, begin with a
				// letter." );
				// From jquery.validate.js (by joern),
				// contributed by Scott Gonzalez:
				// http://projects.scottsplayground.com/email_address_validation/
				bValid = bValid
						&& checkRegexp(
								email,
								/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i,
								"Damon.Kong@movit-tech.com");
				// bValid = bValid && checkRegexp( password,
				// /^([0-9a-zA-Z])+$/, "Password field only
				// allow : a-z 0-9" );*/

				if (bValid) {
				                                $(document).ready( function() {
														// alert(2);
					                                    var num=$('#l_num').text();
														var itemname = $('#itemname_r'+num).val();
														//var type = $('#selecttype input').val();
														var type = $('#i_type').val();
														var identifier = $('#identifier').val();
														var department = $('#department').val();
														var num = $('#num').val();
														var user = $('.user').val();
														var note = $('#note').val();
														/* 
											            alert(itemname); 
											            alert(type);  
											            alert(identifier);   
											            alert(department);   
											            alert(num);
											            alert(user);
											            alert(note );*/
														var data = 'itemname='+itemname+ '&type='+type+ '&identifier='+identifier +'&department='+department+'&user='+user+'&num='+num+'&note ='+note ;
														$.ajax( {
																	type : "GET",
																	url : "includes/borrowok.php",
																	data : data,
																	success : function(
																			html) {
																		// location.replace(document.referrer);
															            //document.execCommand('Refresh');
															             //window.history.back(-1);
															             alert('您已借用成功');
															             window.location.href="borrowpage.php";
																	
																		// $("#message").html(html);
																	}
																});
														return false;
													});

									$(this).dialog("close");
									
				                    }	
							},
							取消 : function() {
								$(".item").find(".png").css( {
									"background" : ""
								});
								$(this).dialog("close");
							}
						},
						close : function() {
							allFields.val("").removeClass("ui-state-error");
						}
					});

	$(".item").button().click(function() {
		$("#dialog-borrow").dialog("open");
	});
});
