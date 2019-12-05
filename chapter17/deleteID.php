<?
$dbhost='localhost';	
$dbuser='root';			
$dbpass='1234';			
$dbname='memberDB';			

$conn=mysql_connect($dbhost, $dbuser, $dbpass) or die ("ไม่สามารถเชื่อมต่อโฮสต์ได้");
mysql_select_db($dbname) or die ("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");

$sql="SELECT * FROM tbl_member WHERE m_id=$_REQUEST[mid] ";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

if (!empty($row['m_image'])) {
	$photo = "photo/$row[m_image]";
	$sql_del="DELETE FROM tbl_member  WHERE m_id=$_REQUEST[mid] ";
	$resultd=mysql_query($sql_del);	
	unlink ($photo);	
} else {
	$sql_del="DELETE FROM tbl_member  WHERE m_id=$_REQUEST[mid] ";
}

$result_del=mysql_query($sql_del);	
if (!$result_del) {
	echo "ERROR : ไม่สามารถลบข้อมูลได้";
} else {
	echo "ลบข้อมูลสำเร็จ";
}
?>