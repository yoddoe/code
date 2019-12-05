<?
$hit="c:/appserv/www/php56/online.txt";
$timenow=date("h:s");

$file=fopen("$hit", "r");
echo fgets($file, 24);
fclose($file);
?>
