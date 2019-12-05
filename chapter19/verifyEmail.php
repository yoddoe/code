<?php
$dbhost='localhost';	
$dbuser='root';			
$dbpass='1234';			
$dbname='memberDB';			
$conn=mysql_connect($dbhost, $dbuser, $dbpass) or die ("ไม่สามารถเชื่อมต่อโฮสต์ได้");
mysql_select_db($dbname) or die ("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");

$userEmail = trim($_GET['email']);
$sql="SELECT * FROM tbl_member WHERE m_Email='$userEmail' ";
$result=mysql_query($sql);
$num=mysql_num_rows($result);

if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
	echo "<font color=red>อีเมล์ไม่ถูกต้องตามรูปแบบ</font>";
} else {
	if ($num >=1) {
		echo "<font color=red>มีผู้ใช้อีเมล์ $userEmail แล้ว กรุณาตรวจสอบอีกครั้ง!</font>";
	} else {
		echo "<font color=green>ใช้อีเมล์ $userEmail ได้</font>";
	}
}
?>