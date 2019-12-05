<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery/jquery-2.0.1.min.js"></script>
<script type="text/javascript">
$(function() {
	$("#btnShow").click(function() {
		$("#divData").show("fast");
	});
});

$(function() {
	$("#btnHide").click(function() {
		$("#divData").hide(3000);
	});	
});
</script>
</head>

<body>
<div id="divData">
เมธอด show() ใช้สำหรับแสดงข้อมูลในอิลิเมนต์<br />
เมธอด hide() ใช้สำหรับซ่อนข้อมูลในอิลิเมนต์
</div>

<input type="button" name="btnShow" id="btnShow" value="Show Data" />
<input type="button" name="btnHide" id="btnHide"  value="Hide Data"/>
</body>
</html>