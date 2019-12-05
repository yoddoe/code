<?  
$number1=1324332.34;
$number2=3454.4;
$number3=9749;
$number4=1239;

echo "ตัวแปร number1=" . number_format($number1, 3, '.', ',') . "<br>";
echo "ตัวแปร number2=" . number_format($number2, 2, '#', ',') . "<br>";
echo "ตัวแปร number3=" . number_format($number3, 2, ';', '@') . "<br>";
echo "ตัวแปร number4=" . number_format($number4, '', ';', ',') . "<br>";
?>