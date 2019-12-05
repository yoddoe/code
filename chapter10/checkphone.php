<?
$phone=$_POST[txtPhone];
if(!ereg("([08]{2})-([0-9]{4})-([0-9]{4})",$phone))  {
	echo $phone . "ไม่ถูกรูปแบบ 08-XXXX-XXX <br>";
} else {
	echo "เบอร์โทรศัพท์ของคุณ : $phone";	
}
?>