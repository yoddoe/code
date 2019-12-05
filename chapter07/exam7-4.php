<?
$hit="c:/appserv/www/php56/online.txt";
$timenow=date("h:s");

$file=fopen("$hit", "a");
fputs($file, "ล็อกอินล่าสุดเวลา : $timenow<br>", 10);
fclose($file);
?>