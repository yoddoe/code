<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>����Ѻ-�觢�����Ẻ POST �������ʹ ajax()</title>
<script type="text/javascript" src="jquery/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	$("#btnSubmit").click(function (e) {
		var tName = $("#txtName").val();
		var tEmail = $("#txtEmail").val();
		var tAddr = $("#txtAddr").val();
		var tZipcode = $("#txtZipcode").val();
		var tPassword= $("#txtPwd").val();			
			
		$.ajax ({
			type: "POST", 
			url: "showData.php" , 
			cache: false, 
			data:  {name: tName, email: tEmail, addr: tAddr, zipcode: tZipcode, pwd: tPassword},
			success: function(data) {
				$("#displayData").html(data); 
			}
		});
	});
		
	$("#ChkAccept").click(function() { 
		if($(this).attr("checked")=="checked") { 
			$("#btnSubmit").removeAttr("disabled"); 
		} else { 
			$("#btnSubmit").attr("disabled","disabled");  
		}
	});
		
});
</script>
<style type="text/css">
.show {
	color: #039;
	padding-left: 5px;
	font-size: 14px;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
����-ʡ�� : <input type="text" name="txtName" id="txtName"><br>
����� : <input type="text" name="txtEmail" id="txtEmail"><br>
������� <textarea name="txtAddr" cols="35" rows="4" id="txtAddr" maxlength='80'></textarea><br />
������ɳ��� : <input type="text" name="txtZipcode" id="txtZipcode"><br>
Password <input type="password" name="txtPwd" id="txtPwd"><br>
Re-password : <input type="password" name="txtRePwd" id="txtRePwd"><br>
<input type="checkbox" name="ChkAccept" id="ChkAccept">����Ѻ���͹�<a href="http://www.sawasdee-it.com/test.html" id="link">(��ԡ��ҹ���͹䢷����)</a><br>
<input name="btnSubmit"  id="btnSubmit" type="button" value="��ŧ" disabled="disabled" >
</form>
<div id ="displayData" class="show"></div>
</body>
</html>