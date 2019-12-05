<?php
echo "-- การสร้างอาร์เรย์ --<br>";
$arrayA = range('a', 'o', 2);
foreach ($arrayA as $var) {
	echo $var . " - ";
}

echo "<br>-- การเพิ่มอาร์เรย์ --<br>";
array_push($arrayA, "Q", "T");
foreach ($arrayA as $var) {
	echo $var . " - ";	
}

echo "<br>-- การลบสมาชิกในอาร์เรย์แบบระบุ Index --<br>";
unset($arrayA[5]);
foreach ($arrayA as $var) {
	echo $var . " - ";	
}

echo "<br>-- การลบสมาชิกในอาร์เรย์แบบต่อเนื่อง --<br>";
array_splice($arrayA, 2, 3);
foreach ($arrayA as $var) {
	echo $var . " - ";	
}

echo "<br>-- การลบสมาชิกตัวสุดท้ายในอาร์เรย์ --<br>";
array_pop($arrayA);
foreach ($arrayA as $var) {
	echo $var . " - ";	
}
?>