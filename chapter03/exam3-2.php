<?php
$category = array("iOS", "Android", "Windows Phone");
echo "เลือกระบบปฏิบัติการ<br>";
foreach ($category as $cat_app) {
	echo "<a href='id=$cat_app'>$cat_app</a><br>";
}
?>