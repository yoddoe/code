<?php
$url = "www.สวัสดีไอที.co.th";
$str = "com";
$newurl = str_replace("สวัสดีไอที", "Sawasdee-it" , $url);
echo "URL เดิม : $url<br>";
echo "URL ใหม่ : $newurl<br>";
$newurl = str_replace("co.th", $str, $newurl);
echo "URL ใหม่ : $newurl<br>";
?>