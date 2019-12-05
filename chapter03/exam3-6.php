<?php
$day = array(
	THday => array("อาทิตย์" , "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์"),
	ENday => array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat")
);

echo "วันนี้วัน{$day['THday'][1]}<br>";

$d = date("w");
echo "Today is {$day['ENday'][$d]}<br>";
?>