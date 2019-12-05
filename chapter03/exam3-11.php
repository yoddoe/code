<?php
$city = array("Bangkok", "Chiang Mai", "Khonkaen", "Suratthani", "Srisaket", "Bangkok", "Phuket");
echo "==== เรียงจากน้อยไปหาหมาก (ตามค่า ASCII) ====<br>";
sort($city);
foreach ($city as $key => $value) {
	echo 'city['.$key.'] = '.$value.'<br>';
}

echo "==== เรียงจากมากไปหาน้อย (ตามค่า ASCII) ====<br>";
rsort($city);
foreach ($city as $key => $value) {
	echo 'city['.$key.'] = '.$value.'<br>';
}

echo "==== เรียงโดยไม่ตามค่า ASCII ====<br>";
natcasesort($city);
foreach ($city as $key => $value) {
	echo 'city['.$key.'] = '.$value.'<br>';
}
?>