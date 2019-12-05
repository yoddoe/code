<?
echo "ข้อมูลที่ผู้ใช้กรอก มีดังนี้<br>";
echo "Username : $_POST[txtUsername]<br>";
echo "Password : $_POST[txtPassword]<br>";
echo "ชื่อ-นามสกุล : $_POST[txtName]<br>";
echo "ที่อยู่ : $_POST[txtAddr]<br>";
//echo "เพศ : $_POST[rdoGender]<br>";
if ($_POST[rdoGender]=="M") {
	$gender="ชาย";
} else {
	$gender="หญิง";
}
echo "เพศ : $gender<br>";

//echo "ระดับการศึกษาสูงสุด : $_POST[sltEdu]<br>";
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

echo "ประเภทคอมพิวเตอร์ที่ใช้อยู่  : $_POST[chkCom1] , $_POST[chkCom2], $_POST[chkCom3]<br>";
echo "ข้อมูลที่ซ่อน : $_POST[regno]<br>";
?>