<?
$hit="c:/appserv/www/php56/online.txt";
if (file_exists($hit)) {
	$file=fopen("$hit", "w");
	echo "มีไฟล์อยู่จริง";
} else {
	echo "ไม่พบไฟล์ที่ระบุ";
}
?>
