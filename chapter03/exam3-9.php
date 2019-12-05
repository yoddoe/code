<?php
$city = array("Bangkok", "Chiang Mai", "Khonkaen", "Suratthani", 20);
$var = "Bangkok";
if (in_array($var, $city)) {
	echo "พบข้อมูล " . $var . " ในอาร์เรย์ \$city<br>";
} else {
	echo "ไม่พบข้อมูล " . $var . " ในอาร์เรย์ \$city<br>";	
}

if (in_array("20", $city, true)) {
	echo "ข้อมูลที่ตรวจสอบมีชนิดข้อมูลเดียวกัน<br>";	
} else {
	echo "ข้อมูลที่ตรวจสอบเป็นชนิดข้อมูลต่างกันในอาร์เรย์";
}
?>