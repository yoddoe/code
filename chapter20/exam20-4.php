<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery/jquery-2.0.1.min.js"></script>
<script type="text/javascript">
$(function () {
   $("#btnSlideUp").click(function() {
	   $("#divData").slideUp(200);
   });
});

$(function () {
   $("#btnSlideDown").click(function() {
	   $("#divData").slideDown("slow");
   });
});

$(function () {
   $("#btnSlideToggle").click(function() {
	   $("#divData").slideToggle();
   });
});
</script>
</head>

<body>
<div id="divData">
การแสดงข้อมูลแบบสไลด์เลื่อนขึ้น-ลง (Slide) ด้วยเมธอดต่อไปนี้<br />
- เมธอด slideUp()<br />
- เมธอด slideDown()<br />
- เมธอด slideToggle()  
</div>

<input type="button" name="btnSlideUp" id="btnSlideUp" value="Slide Up" />
<input type="button" name="btnSlideDown" id="btnSlideDown" value="Slide Down" />
<input type="button" name="btnSlideToggle" id="btnSlideToggle" value="Slide Toggle" />    

</body>
</html>