<?php
$category = array("iOS", "Android", "Windows Phone");

echo "==== อ่านเฉพาะค่า key ====<br>";
$keys = array_keys($category);
foreach ($keys as $k => $value) {
	echo 'Category['.$k.'] = '.$value.'<br>';
}

echo "==== อ่านเฉพาะค่า value ====<br>";
$value = array_values($category);
foreach ($value as $v => $value) {
	echo 'Category['.$v.'] = '.$value.'<br>';
}
?>