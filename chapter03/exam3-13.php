<?php
$city = array("Bangkok", "Chiang Mai", "Khonkaen", "Suratthani", "Srisaket", "bangkok", "Phuket");
$unique = array_unique($city);

foreach ($unique as $key => $value) {
	echo 'City['.$key.'] = '.$value.'<br>';	
}
?>