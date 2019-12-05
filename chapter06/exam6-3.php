<?
function  summary($intX, $intY) {
	$sum=$intX+$intY;
	return($sum);
}

$x=15;
$y=20;
$z=summary($x, $y);
echo "ตัวแปร x = $x, ตัวแปร y = $y<br>";
echo "ผลรวม  (x+y) = " . $z;
?>