<?
$hit="c:/appserv/www/php56/online.txt";
$timenow=date("h:s");

$file=fopen("$hit", "a");
fwrite($file, "��͡�Թ����ش���� : $timenow<br>");
fclose($file);
?>