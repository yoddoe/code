<?
$dbhost='localhost';	
$dbuser='root';			
$dbpass='1234';			
$dbname='memberDB';			

$conn=mysql_connect($dbhost, $dbuser, $dbpass) or die ("ไม่สามารถเชื่อมต่อโฮสต์ได้");
mysql_select_db($dbname) or die ("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");

$sql="SELECT * FROM tbl_member";
$result=mysql_query($sql);
$num=mysql_num_rows($result);
echo "จำนวนข้อมูลทั้งหมด ในตาราง tbl_member มี $num รายการ";
mysql_close();
?>