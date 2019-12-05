<?
$x=20;
$y=15;

if ($x != $y) {
	echo "\$x != \$y = ", $x . " != " . $y, "<br>";
} else {
	echo "\$x < \$y = ", $x . " < " . $y, "<br>";	
}

if ($x > $y) {
	echo "\$x > \$y = ", $x . " > " . $y, "<br>";
} else {
	echo "\$x < \$y = ", $x . " < " . $y, "<br>";	
}

$y+=6;
if ($x > $y) {
	echo "\$x >= \$y = ", $x . " >= " . $y, "<br>";
} else {
	echo "\$x < \$y = ", $x . " < " . $y, "<br>";	
}
?>
