<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery/jquery-2.0.1.min.js"></script>
<script type="text/javascript">
$(function () {
   $("#btnHideShow").click(function() {
	   $("#divData").toggle("fast");
   });
});
</script>
</head>

<body>
<div id="divData">
เมธอด show() ใช้สำหรับแสดงข้อมูลในอิลิเมนต์<br />
เมธอด hide() ใช้สำหรับซ่อนข้อมูลในอิลิเมนต์
</div>

<input type="button" name="btnHideShow" id="btnHideShow" value="Show/Hide Data" />
</body>
</html>