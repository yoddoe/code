<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery/jquery-2.0.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#txtUsername").keyup(function()  {
		var strUser = $(this).val();
		$("#showHtml").html("Username : <b>"+ strUser+"</b>");
	});

	$("#txtPassword").keyup(function()  {
		var strPwd = $(this).val();
		$("#showText").text("Password : <b>"+ strPwd+"</b>");
	});	
});
</script>
</head>

<body>
<form  id="form1" name="form1" method="post" action="">
  Username : <input name="txtUsername" type="text" size="10" maxlength="10"  id="txtUsername"><br>
  Password : <input name="txtPassword" type="password" size="10" maxlength="8" id="txtPassword">
  <div id="showHtml"></div>
  <span id="showText"></span>
</form>

</body>
</html>