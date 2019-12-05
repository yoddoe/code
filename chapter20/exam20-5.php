<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery/jquery-2.0.1.min.js"></script>
<script type="text/javascript">
$(function () {
   $("#btnFadeIn").click(function() {
	   $("#divData").fadeIn();
   });
});

$(function () {
   $("#btnFadeOut").click(function() {
	   $("#divData").fadeOut();
   });
});

$(function () {
   $("#btnFadeTo").click(function() {
	   $("#divData").fadeTo("slow", 0.5);
   });
});
</script>
</head>

<body>
<div id="divData">
การแสดงข้อมูลแบบค่อยๆ ปรากฏขึ้นมาและจางหายไป<br />
<img src="image/pic1.jpg" />
</div>

<input type="button" name="btnFadeIn" id="btnFadeIn" value="Fade In" />
<input type="button" name="btnFadeOut" id="btnFadeOut" value="Fade Out" />
<input type="button" name="btnFadeTo" id="btnFadeTo" value="Fade To" />    

</body>
</html>