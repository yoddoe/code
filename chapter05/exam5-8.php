<?
$date1=date("d/m/Y", mktime(0,0,0, date("m") ,date("d")+25, date("Y")));
$date2=date("d/m/Y", mktime(0,0,0, date("m")-2 ,date("d"), date("Y")));
$date3=date("h:s", mktime(date("h")+3,0,0, 0,0,0));

echo "วันที่ปัจจุบัน : " . date("d/m/Y") . " เวลาปัจจุบัน : " . date("H:s") . "<br>";
echo "อีก 25 วันข้างหน้า  :  $date1<br>" ;
echo "2 เดือนที่แล้ว  : $date2<br>" ;
echo "อีก 3  ชั่วโมงข้างหน้า : $date3";
?>