<?
$username=$_POST['txtUsername'];
if(preg_match("/^([a-zA-Z0-9]|[-_])+$/", $username)) {
	 echo "ยินดีต้อนรับคุณ $username";
} else {	
	 echo "Username ที่ตั้งจะต้องขึ้นต้นด้วยตัวอักษร a-z, A-Z, ตัวเลข 0-9 หรือ มีเครื่องหมายได้เฉพาะเครื่องหมาย - , _  เท่านั้น";
}
?>