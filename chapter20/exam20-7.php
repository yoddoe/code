<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Basic Tab jQuery UI</title>
<link rel="stylesheet" type="text/css" href="jquery-ui/css/smoothness/jquery-ui-1.8.20.custom.css">
<script type="text/javascript" src="jquery/jquery-2.0.1.min.js"></script>
<script type="text/javascript" src="jquery-ui/js/jquery-ui-1.8.20.custom.min.js"></script>
<style type="text/css">
.divTab {
	font-size: 14px;
	color: #09F;
}
</style>

<script type="text/javascript">
$(function() {
	$("#tabs").tabs();
});
</script>
</head>

<body>
<div id="tabs">
	<ul>
		<li><a href="#tabs-1">หมวด Adobe CS6</a></li>
		<li><a href="#tabs-2">หมวด Social Media</a></li>
	</ul>
  
	<div id="tabs-1" class="divTab">
		<li>คู่มือใช้งาน Dreamweaver CS6</li>
		<li>คู่มือใช้งาน Premiere Pro CS6</li>
		<li>คู่มือใช้งาน After Effects CS6</li>
		<li>คู่มือใช้งาน Photoshop CS6</li>
	</div>

	<div id="tabs-2" class="divTab">
 	<li>จัดไป Like Ment Share  facebook+Instagram</li>
    <li>สร้างร้านค้าออนไลน์ง่ายๆ บน facebook</li>
	</div>

</div>
</body>
</html>