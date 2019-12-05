<?php
$THday = array("Sun" , "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์");
echo "Index [2] : " , $THday[2] . "<br>";
echo "Index [5] : " , $THday[5] . "<br>";

$THday[6] = "เสาร์";
echo "Index [6] : " , $THday[6] . "<br>";

$THday[0] = "อาทิตย์";
echo "Index [0] : " , $THday[0];
?>