<?
echo "ข้อมูลที่ผู้ใช้กรอก มีดังนี้<br>";
echo "Username : $_POST[txtUsername]<br>";
echo "Password : $_POST[txtPassword]<br>";
echo "ชื่อ-นามสกุล : $_POST[txtName]<br>";
echo "ที่อยู่ : $_POST[txtAddr]<br>";

if ($_POST[rdoGender]=="M") {
	$gender="ชาย";
} else {
	$gender="หญิง";
}
echo "เพศ : $gender<br>";

$a=$_POST['sltEdu'];
switch ($a)
{
	case 1:
		echo "ระดับการศึกษาสูงสุด : ม.3 / ปวช.<br>";
		break;
	case 2:
		echo "ระดับการศึกษาสูงสุด : ม.6 / ปวส.<br>";
		break;
	case 3:
		echo "ระดับการศึกษาสูงสุด : ปริญญาตรี<br>";
		break;
	case 4:
		echo "ระดับการศึกษาสูงสุด : ปริญญาโท<br>";
		break;								
	default:
		echo "ระดับการศึกษาสูงสุด : ปริญญาเอก<br>";
}

if ($_POST['chkCom'])  {
	$choice = implode($_POST['chkCom'], ",");

	for ($i=0;$i<count($_POST['chkCom']);$i++) {
		$choice = $_POST['chkCom'][$i];
		echo "ประเภทคอมพิวเตอร์ที่ใช้อยู่ :  $choice <br>";
	}
}  else {
	echo "กรุณาเลือกตัวเลือกด้วยครับ";
}

echo "ข้อมูลที่ซ่อน : $_POST[regno]<br>";

	$fp=fopen("member.txt","a");
	fwrite( $fp , "$_POST[regno]|x|$_POST[txtUsername]|x|$_POST[txtPassword]|x|$_POST[txtName]|x|$_POST[txtAddr]|x|$_POST[rdoGender]|x|$_POST[sltEdu]|x|$_POST[chkCom1]|x|$_POST[chkCom2]|x|$_POST[chkCom3]|x|$photoname<br>");
	fclose($fp);
?>
