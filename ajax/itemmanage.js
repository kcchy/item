/** ******************�����Ʒ********************** */
$(function() {
	$("#item-form").dialog({
				autoOpen : false,
				height : 'auto',
				width : 350,
				modal : true,
				buttons : {
					"���" : function() {
						/*
						 * $(document).ready( function() { // alert(2); var
						 * username = $('#name').val(); var email =
						 * $('#email').val(); var password =
						 * $('#password').val(); var data = 'username=' +
						 * username + '&email=' + email + '&password=' +
						 * password; $.ajax( { type : "GET", url :
						 * "includes/userok.php", data : data, success :
						 * function(html) { //
						 * location.replace(document.referrer);
						 * document.execCommand('Refresh'); // alert('ok'); //
						 * $("#message").html(html); } }); return false; });
						 */
				        document.getElementById("additem").submit();
				        //window.location.href="itemmanage.php";
						$(this).dialog("close");

					},
					ȡ�� : function() {
						$(this).dialog("close");
				}
					
				}//�������һ�����ţ�����js���ִ���
	});
	$("#create-item").button().click(function() {
		$("#item-form").dialog("open");
	});
});

/** ***********************ѡ����Ʒ********************************* */
$(function() {
	$("#selectitem").selectable( {
		stop : function() {
			var result = $("#select-result").empty();
			$(".ui-selected", this).each(function() {
				var index = $("#selectitem tr").index(this);
				/* result.append( " #" + (index+1) ); */
				var id = $("#selectid" + (index + 1)).text();
				var iid = id;
				result.append(iid + '.');
				// �ѱ���������Ʒֵ���뵽��Ʒ�༭��ҳ����
				var ivalue = $('#img' + iid).text();
				var nvalue = $('#name' + iid).text();
				var dvalue = $('#description' + iid).text();
				var numvalue = $('#num' + iid).text();
				var tnvalue = $('#totalnum' + iid).text();
				// alert(uvalue);1��22 ZXC V1
				// �ѻ�ȡ����ֵ����value�༭ҳ����
				$("#imgedit").val(ivalue);
				$("#nameedit").val(nvalue);
				$("#descriptionedit").val(dvalue);
				$("#numedit").val(numvalue);
				$("#totalnumedit").val(tnvalue);
			});
		}
	});
});
/** ***********************ɾ����Ʒ********************************* */
$(function() {
	$("#item-confirm").dialog( {
		autoOpen : false,
		height : 'auto',
		width : 350,
		modal : true,
		buttons : {
			"ɾ��" : function() {
				$(document).ready(function() {
					var iid = $('#select-result').text();
					var data = "iid=" + iid;
					// alert(iid)
					$.ajax( {
						type : "GET",
						url : "includes/deleteitem.php",
						data : data,
						success : function(html) {
						window.location.reload()
						}
					});
					return false;
				});
				$(this).dialog("close");
			},
			"ȡ��" : function() {
				$(this).dialog("close");
			}
		}
	});
	$("#delete-item").button().click(function() {
		$("#item-confirm").dialog("open");
	});
});
/** *************************�༭��Ʒ****************************** */
$(function() {
	$("#item-edit").dialog(
			{
				autoOpen : false,
				height : 'auto',
				width : 350,
				modal : true,
				buttons : {
					"����" : function() {
						$(document).ready(
								function() {
									var iid = $('#select-result').text();
									// alert(uid);
									var img = $('#imgedit').val();
									var name = $('#nameedit').val();
									var description = $('#descriptionedit').val();
									var num = $('#numedit').val();
									var totalnum = $('#totalnumedit').val();
									var data = 'iid=' + iid + '&img='
											+ img + '&name=' + name
											+ '&description=' + description + '&num=' + num + '&totalnum=' + totalnum;
									// alert(data);
									$.ajax( {
										type : "GET",
										url : "includes/itemedit.php",
										data : data,
										success : function(html) {
											// location.replace(document.referrer);
											// document.execCommand('Refresh');
											//alert('ok');
										    window.location.reload()
											// $("#message").html(html);
										}
									});
									return false;
								});
						$(this).dialog("close");
					},
					"ȡ��" : function() {
						$(this).dialog("close");
					}
				}
			});

	$("#edit-item").button().click(function() {
		$("#item-edit").dialog("open");
	});

});
