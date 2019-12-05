<?
$hit="c:/appserv/www/php56/online.txt";
$timenow=date("h:s");

$file=fopen("$hit", "r");
while (feof($file)==false) {
	$chr = fgetc($file);
	echo $chr . "  ";
}
fclose($file);
?>
