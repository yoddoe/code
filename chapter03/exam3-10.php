<?php
$city = array("Bangkok", "Chiang Mai", "Khonkaen", "Suratthani", "Srisaket", "Bangkok", "Phuket");
$var = sizeof($city);
echo "==== นับแบบซ้ำ ====<br>";
echo "มีสมาชิกในอาร์เรย์ \$city ทั้งหมด $var ตัว<br>";

echo "==== นับแบบไม่ซ้ำ ====<br>";
echo "มีจำนวนสมาชิกในอาร์เรย์ ดังนี้<br>";
print_r(array_count_values($city));
?>