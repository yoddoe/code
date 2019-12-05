<?
$hit="c:/appserv/www/php56/online.txt";
$timenow=date("h:s");

$file=fopen("$hit", "a");
fwrite($file, "ล็อกอินล่าสุดเวลา : $timenow<br>");
fclose($file);
?>