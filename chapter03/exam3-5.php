<?php
$category = array("i"=>"iOS", "a"=>"Android", "w"=>"Windows Phone");
echo "เลือกระบบปฏิบัติการ<br>";
echo "<select>";
foreach ($category as $cat_app => $value) {
	echo "<option value=$cat_app>$value</option>";
}
echo "</select>";
?>