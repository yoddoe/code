<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>��èӡѴ�ӹǹ����ѡ�� � textarea</title>
<script type="text/javascript" src="jquery/jquery-2.0.1.min.js"></script>
<script type="text/javascript">
$(function(){
	$("#txtAddr").keyup(function() { 
	var text = $(this).val();
	var chars = text.length;
	var limit = parseInt($(this).attr('maxlength'));
	var now_length = limit  - chars ;  

	if (chars > limit) {
		var new_text = text.substr(0, limit); 
		$(this).val(new_text);
	} else {
		$("#charLeft").html(now_length+" ����ѡ��"); 
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
����-ʡ�� : <input type="text" name="txtName" id="txtName"><br>
����� : <input type="text" name="txtEmail" id="txtEmail"><br>
������� <textarea name="txtAddr" cols="35" rows="4" id="txtAddr" maxlength='80'></textarea><br/>(�ӹǹ����ѡ���٧�ش����Ѻ: 80)<br/><div id="charLeft" class="error"></div><br />
������ɳ��� : <input type="text" name="txtZipcode" id="txtZipcode"><div id="errNum" class="error"></div><br>
Password <input type="password" name="txtPwd" id="txtPwd"><br>
Re-password : <input type="password" name="txtRePwd" id="txtRePwd"><br>
<input type="checkbox" name="ChkAccept" id="ChkAccept">����Ѻ���͹� <a href="http://www.sawasdee-it.com/test.html" id="link">(��ԡ��ҹ���͹䢷����)</a><br>
<input name="btnSubmit"  id="btnSubmit" type="submit" value="��ŧ">
</form>

</body>
</html>