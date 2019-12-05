<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery/jquery-2.0.1.min.js"></script>
<script type="text/javascript">
$(function () {
   $("#btnAnimate").click(function() {
	   $("#divData").animate({
		   opacity: 0.50,
		   height: "toggle"
	   }, 1200, function() {
	   });
   });
});

</script>
</head>

<body>
<div id="divData">
การกำหนดการเคลื่อนไหวของอิลิเมนต์ด้วย animate()<br />
<img src="image/pic1.jpg" />
</div>

  <input type="button" name="btnAnimate" id="btnAnimate" value="Animate" />  

</body>
</html>