/** ******************添加用户********************** */
$(function() {
	var name = $("#name"), email = $("#email"), password = $("#password"), allFields = $(
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
			updateTips("Length of " + n + " must be between " + min + " and "
					+ max + ".");
			return false;
		} else {
			return true;
		}
	}

	function checkRegexp(o, regexp, n) {
		if (!(regexp.test(o.val()))) {
			o.addClass("ui-state-error");
			updateTips(n);
			return false;
		} else {
			return true;
		}
	}

	$("#dialog-form")
			.dialog({
				 position: {                
		         my: "center top",                
		         at: "center top"            
		         },
						autoOpen : false,
						height : 'auto',
						width : 350,
						modal : true,
						buttons : {
							"添加" : function() {
								var bValid = true;
								allFields.removeClass("ui-state-error");

								bValid = bValid
										&& checkLength(name, "username", 6, 50);
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
								// allow : a-z 0-9" );

								if (bValid) {
									// alert(1);
									/*
									 * $( "#users tbody" ).append( "<tr>" + "<td>" +
									 * name.val() + "</td>" + "<td>" +
									 * email.val() + "</td>" + "<td>" +
									 * password.val() + "</td>" + "</tr>" );
									 */

									$(document).ready(function() {
														// alert(2);
														var username = $(
																'#name').val();
														var email = $('#email')
																.val();
														var password = $(
																'#password')
																.val();
														var data = 'username='
																+ username
																+ '&email='
																+ email
																+ '&password='
																+ password;
														//alert('ok');
														$.ajax( {
																	type : "GET",
																	url : "includes/userok.php",
																	data : data,
																	success : function(html) {
																		// location.replace(document.referrer);
																		//document.execCommand('Refresh');
																	    //window.location.href="usermanage.php";
															            //alert(1);
																		//window.location.reload()
																		
																		//$("#message").html(html);
															            //把tr加在thead里面这样就会显示在最上面了
																		$("#adduser").append(html);
																	}
																});
														return false;
													});

									$(this).dialog("close");
								}
							},
							取消 : function() {
								$(this).dialog("close");
							}
						},
						close : function() {
							allFields.val("").removeClass("ui-state-error");
						}
					
					});

	$("#create-user").button().click(function() {
		$("#dialog-form").dialog("open");
	});

	/***************************************************************************
	 * 分页****************** var rows = $('table').find('tbody tr').length; var
	 * no_rec_per_page = 1; var no_pages = Math.ceil(rows / no_rec_per_page);
	 * var $pagenumbers = $('<div id="pages"></div>'); for (i = 0; i <
	 * no_pages; i++) { $('<span class="page">' + (i + 1) + '</span>').appendTo($pagenumbers); }
	 * $pagenumbers.insertBefore('table'); $('.page').hover(function() {
	 * $(this).addClass('hover'); }, function() { $(this).removeClass('hover');
	 * }); $('table').find('tbaody tr').hide(); var tr = $('tbale tbody tr');
	 * for(var i=0;i<=no_rec_per_page-1;i++) { $(tr[i]).show(); }
	 * $('span').click( function(event) { $('tbale').find('tbody tr').hide();
	 * for ( var i = ($('this').text() - 1) * no_rec_per_page; i <
	 * $(this).text()* no_rec_per_page - 1; i++) { $(tr[i]).show(); //alert(1); }
	 * });
	 */
});

/** ***********************选择用户********************************* */
$(function() {
	$("#selectuser").selectable( {
		stop : function() {
			var result = $("#select-result").empty();
			$(".ui-selected", this).each(function() {
				var index = $("#selectuser tr").index(this);
				/* result.append( " #" + (index+1) ); */
				var id = $("#selectid" + (index + 1)).get(0);
				var uid = id.innerHTML;
				result.append( '.'+uid );
				// 把表格里面的用户值加入到用户编辑的页面中
				var uvalue = $('#username' + uid).text();
				var evalue = $('#email' + uid).text();
				var pvalue = $('#password' + uid).text();
				// alert(uvalue);1·22 ZXC V1
				// 把获取到得值赋给value编辑页面中
				$("#nameedit").val(uvalue);
				$("#emailedit").val(evalue);
				$("#passwordedit").val(pvalue);
			});
		}
	});
});
/** ***********************删除用户********************************* */
$(function() {
	$("#dialog-confirm").dialog( {
		position: {                
        my: "center top",                
        at: "center top"            
        },
		autoOpen : false,
		height : 'auto',
		width : 350,
		modal : true,
		buttons : {
			"删除" : function() {
				$(document).ready(function() {
					var uid = $('#select-result').text();
					var data = "uid=" + uid;
					$.ajax( {
						type : "GET",
						url : "includes/deleteuser.php",
						data : data,
						success : function(html) {
						    /*模拟删除数据，当后台删除的时候把需要删除的数据隐藏起来。
						     var x;
						    split js把字符转换成数据，然后取值
						    var idarray1=[1,2,];
						    var idarray3=idarray1.concat(idarray2);
							合并两个数组
						      var id=idarray.join();
							把数组中的每个元素加入到字符串中
							alert(idarray);*/
						    var idarray=html.split(".");
							var count=idarray.length;
							//for (x in idarray)
						     for (i=0;i<count;i++)
							{
							//document.write(idarray[x] + "<br />")
							$("#delete"+idarray[i]).hide();
							//alert(idarray[i]);
							}
							//window.location.reload()
							//("#message").html(html);
						}
					});
					return false;
				});

				$(this).dialog("close");
			},
			"取消" : function() {
				$(this).dialog("close");
			}
		}
	});
	$("#delete-user").button().click(function() {
		$("#dialog-confirm").dialog("open");
	});
});
/** *************************编辑用户****************************** */
$(function() {
	$("#dialog-edit").dialog( {
		position: {                
        my: "center top",                
        at: "center top"            
        },
		autoOpen : false,
		height : 'auto',
		width : 350,
		modal : true,
		buttons : {
			"更新" : function() {
		$(document).ready(function() {
			        var uid = $('#select-result').text();
			        //alert(uid);
					var username = $(
							'#nameedit').val();
					var email = $('#emailedit')
							.val();
					var password = $(
							'#passwordedit')
							.val();
					var data = 'uid='+uid+'&username='+ username+ '&email='+ email+ '&password='+ password;
					$.ajax( {
								type : "GET",
								url : "includes/useredit.php",
								data : data,
								success : function(html) {
	 
						             window.location.reload()
						            /* var userarray=html.split("-");
									
						             var id=userarray[0];
						             alert(id);
									 var username=userarray[1];
									 var email=userarray[2];
									 var password=userarray[3];
									 $("#delete196").hide();
									 alert(id+username+email+password);
									 $("#username"+id).val(username);
                                     $("#email"+id).val(email);
                                     $("#password"+id).val(password);
                                     $("#delete196").show(); */
									 $("#message").html(html);
									        
								}
							});
					return false;
				});

				$(this).dialog("close");
			},
			"取消" : function() {
				$(this).dialog("close");
			}
		}
	});

	$("#edit-user").button().click(function() {
		$("#dialog-edit").dialog("open");
	});

});
