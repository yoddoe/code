<?
function checkemail($checkemail) {
	if (ereg( "^[^@ ]+@([a-zA-Z0-9\-]+\.)+([a-zA-Z0-9\-] {2} |net|com|org)$",$checkemail) ) {
		echo "<h3>รูปแบบอีเมลที่ถูกต้อง คือ </h3>";
		return;
	} else {
		echo "<h3>รูปแบบอีเมลที่ไม่ถูกต้อง คือ </h3>";
		return;
	}
}
?>