<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
</head>

<body>
<?php
echo "ข้อมูลของไฟล์ที่ Upload : <br>" ;
echo "ชื่อไฟล์ : " .  $_FILES['fileField']['name'] . "<br>" ;
echo "ขนาดของไฟล์" .  $_FILES['fileField']['size'] . "<br>" ;
echo "ประเภทของไฟล์" .  $_FILES['fileField']['type'] . "<br>" ;
echo "ตำแหน่งของไฟล์" .  $_FILES['fileField']['tmp_name'] . "<br>" ;
?>
</body>
</html>