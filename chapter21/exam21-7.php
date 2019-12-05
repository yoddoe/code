<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>ตรวจสอบข้อมูลต้องตรงกัน</title>
<script type="text/javascript" src="jquery/jquery-2.0.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	$(".error").hide();
	$("#btnSubmit").click(function (e) {		
		var tPassword = $("#txtPwd").val();
		var tRePassword = $("#txtRePwd").val();
											
		if (tPassword == "") {
			$("#errPwd1").show();
			e.preventDefault();
		} else if (tRePassword == "") {
			$("#errPwd2").show();
			e.preventDefault();
		} else if (tPassword != tRePassword ) {
			$("#errPwd").html("คุณป้อน Password ไม่ตรงกัน").show().fadeOut(5000);
			$("#txtRePwd").attr("value","").focus();
			e.preventDefault();			
		} else {
			$(".error").hide();
		}						
	});
});
</script>
<style type="text/css">
.error {
	color: #FF0000;
	padding-left: 5px;
	font-size: 14px;
}
</style>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
ชื่อ-สกุล : <input type="text" name="txtName" id="txtName"><br>
อีเมล : <input type="text" name="txtEmail" id="txtEmail"><br>
ที่อยู่ <textarea name="txtAddr" cols="35" rows="4" id="txtAddr" maxlength='80'></textarea><br/>(จำนวนตัวอักษรสูงสุดที่รับ: 80)<br/><br />
รหัสไปรษณีย์ : <input type="text" name="txtZipcode" id="txtZipcode"><br>
Password <input type="password" name="txtPwd" id="txtPwd"><span id="errPwd1" class="error">กรุณาป้อน Password</span><br>
Re-password : <input type="password" name="txtRePwd" id="txtRePwd"><span id="errPwd2" class="error">กรุณาป้อน Re-Password</span><br>
 <div id="errPwd" class="error"></div>
<input type="checkbox" name="ChkAccept" id="ChkAccept">ยอมรับเงื่อนไข <a href="http://www.sawasdee-it.com/test.html" id="link">(คลิกอ่านเงื่อนไขที่นี้)</a><br>
<input name="btnSubmit"  id="btnSubmit" type="submit" value="ตกลง">
</form>

</body>
</html>