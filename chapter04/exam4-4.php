<?
$a=5;
echo "คุณเลือกรายการหมายเลข " . $a . "<br>";
switch ($a)
{
	case 1:
		echo "คู่มือการใช้งาน Dreamweaver CS6";
		break;
	case 2:
		echo "คู่มือการใช้งาน Premiere Pro CS6";
		break;
	case 3:
		echo "คู่มือการใช้งาน After Effects CS6";
		break;		
	default:
		echo "กรุณาเลือกรายการหนังสือด้วยครับ";
}
?>
