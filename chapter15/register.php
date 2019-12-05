<?
$dbhost='localhost';	
$dbuser='root';			
$dbpass='1234';			
$dbname='memberDB';			

$conn=mysql_connect($dbhost, $dbuser, $dbpass) or die ("ไม่สามารถเชื่อมต่อโฮสต์ได้");
mysql_select_db($dbname) or die ("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
$choice = implode($_POST['chkCom'], ",");
		
$photo=$_FILES['photo']['tmp_name'];
$photo_name=$_FILES['photo']['name'];
$photo_size=$_FILES['photo']['size'];
$photo_type=$_FILES['photo']['type'];	

$name_last=explode(".", $photo_name);
$n=count($name_last)-1;
$lastname=strtolower($name_last[$n]);	
			
	if ($lastname=="gif" or $lastname=="jpg" or $lastname=="jpeg") {
		$set_photo=explode(".", $photo_name);
		$pfname="photo_" .$_POST['txtUsername'];
		$plname=$set_photo[1];
		$photoname=$pfname ."." .$plname;			
		copy ($photo, "photo/" .$photoname);
		unlink ($photo);
		
		$sql_insert = "INSERT INTO tbl_member VALUES ('', '$_POST[txtUsername]', '$_POST[txtPassword]', '$_POST[txtName]', '$_POST[txtAddr]', '$_POST[rdoGender]', '$_POST[sltEdu]', '$choice','$photoname')";
		$result = mysql_query($sql_insert);
		
	} else {
		$sql_insert = "INSERT INTO tbl_member VALUES ('', '$_POST[txtUsername]', '$_POST[txtPassword]', '$_POST[txtName]', '$_POST[txtAddr]', '$_POST[rdoGender]', '$_POST[sltEdu]', '$choice', '')";
		$result = mysql_query($sql_insert);
	}
	
if (!$result) {
	echo "ERROR : ไม่สามารถเพิ่มข้อมูลได้";
} else {
	echo "เพิ่มข้อมูลสำเร็จ";
}
?>