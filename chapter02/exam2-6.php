<?
$x=20;
$y=15;
echo "ตัวแปร x = $x , ตัวแปร y = $y<br>";
if (($x == 20) && ($y == 15)) {
	echo "\$x = 20 และ \$y = 15 => Correct<br>";
}
if (($x == 20) && ($y == 20)) {
	echo "\$x = 20 และ \$y = 20 => Corrent<br>";
} else {
	echo "\$x = 20 และ \$y = 20 => Incorrect<br>";
}
if (($x == 20) || ($y == 15)) {
	echo "\$x = 20 หรือ \$y = 15 => Correct<br>";
}
if (($x == 20) || ($y == 20)) {
	echo "\$x = 20 หรือ \$y = 20 => Corrent<br>";
} else {
	echo "\$x = 20 หรือ \$y = 20 => Incorrect<br>";
}
if ($x != 15) {
	echo "\$x != 15";
}
?>
