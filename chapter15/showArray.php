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
echo "จำนวนข้อมูลทั้งหมด ในตาราง tbl_member มี $num รายการ ดังนี้<br>";

while ($row=mysql_fetch_array($result)) {
	echo "No. : $row[m_id]<br>";
	echo " Username :  $row[m_user]<br>";
	echo " Password :  $row[m_pwd]<br>";
	echo "ชื่อ-นามสกุล : $row[m_name]<br>";
	echo "ที่อยู่ : $row[m_addr]<br>";
	if ($row[m_gender]=="M") {
		echo "เพศ :  ชาย<br>";
	} elseif ($row[m_gender]=="F") {
		echo "เพศ :  หญิง<br>";	
	}
	
	if ($row[m_edu]=="1") {
		$edu = "ม.3 / ปวช.";
	} else if ($row[m_edu]=="2") {
		$edu = "ม.6 / ปวส.";	
	} else if ($row[m_edu]=="3") {
		$edu = "ปริญญาตรี";	
	} else if ($row[m_edu]=="4") {
		$edu = "ปริญญาโท";	
	} else if ($row[m_edu]=="5") {
		$edu = "ปริญญาเอก";	
	}
	echo "ระดับการศึกษาสูงสุด : $edu<br>";
	echo "ประเภทคอมพิวเตอร์ที่ใช้อยู่  : $row[m_used]<br>";
	
	if (!empty($row[m_image])) {
		echo "รูปภาพ: <img src=\"photo/$row[m_image]\">";
	}
	echo "<p>";
}
mysql_close();
?>
