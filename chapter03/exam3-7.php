<?php
$day = array(
	THday => array("อาทิตย์" , "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์"),
	ENday => array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat")
);

foreach ($day as $key => $value) {
	echo $key . "<br>=====<br>";
	foreach ($value as $d) {
		echo $d . "<br>";
	}
	echo "<br>";
}
?>