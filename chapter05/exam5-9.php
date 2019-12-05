<?
echo "วันที่ปัจจุบัน : " . date("d/m/Y") . " เวลาปัจจุบัน : " . date("H:s") . "<br>";
echo "อีก 25 วันข้างหน้า  : " . date("d/m/Y", strtotime("+25 day")) . "<br>";
echo "2 เดือนที่แล้ว  : " . date("d/m/Y", strtotime("-2 month")) . "<br>";
echo "อีก 3  ชั่วโมงข้างหน้า : " . date("H:s", strtotime("+3 hours"));
?>