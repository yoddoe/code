<?
$name=$_POST[txtName];
if (eregi("[[:punct:]]|[[:alnum:]]",$name)) {
	echo "เฉพาะตัวอักษรภาษาไทยเท่านั้น!!<br>Sorry, Thai character only!!";
} else {
	echo "ยินดีต้อนรับคุณ $name";
}
?>