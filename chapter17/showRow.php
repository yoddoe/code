<?
$dbhost='localhost';	
$dbuser='root';			
$dbpass='1234';			
$dbname='memberDB';			

$conn=mysql_connect($dbhost, $dbuser, $dbpass) or die ("ไม่สามารถเชื่อมต่อโฮสต์ได้");
mysql_select_db($dbname) or die ("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");

$sql="SELECT * FROM tbl_member";
mysql_query("SET NAMES utf8");	
$result=mysql_query($sql);
$num=mysql_num_rows($result);
echo "จำนวนข้อมูลทั้งหมด ในตาราง tbl_member มี $num รายการ ดังนี้<br>";

while ($row=mysql_fetch_row($result)) {
	echo "No. : $row[0]<br>";
	echo " Username :  $row[1]<br>";
	echo " Password :  $row[2]<br>";
	echo "ชื่อ-นามสกุล : $row[3]<br>";
	echo "ที่อยู่ : $row[4]<br>";
	if ($row[5]=="M") {
		echo "เพศ :  ชาย<br>";
	} elseif ($row[5]=="F") {
		echo "เพศ :  หญิง<br>";	
	}
	
	if ($row[6]=="1") {
		$edu = "ม.3 / ปวช.";
	} else if ($row[6]=="2") {
		$edu = "ม.6 / ปวส.";	
	} else if ($row[6]=="3") {
		$edu = "ปริญญาตรี";	
	} else if ($row[6]=="4") {
		$edu = "ปริญญาโท";	
	} else if ($row[6]=="5") {
		$edu = "ปริญญาเอก";	
	}
	echo "ระดับการศึกษาสูงสุด : $edu<br>";
	echo "ประเภทคอมพิวเตอร์ที่ใช้อยู่  : $row[7]<br>";
	
	if (!empty($row[8])) {
		echo "รูปภาพ: <img src=\"photo/$row[8]\">";
	}
	echo "<p>";
}
mysql_close();
?>