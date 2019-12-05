<?php
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
	
$sql="SELECT * FROM tbl_member WHERE m_id=$_REQUEST[mid] ";
mysql_query("SET NAMES utf8");	
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

if ((!empty($row['m_image'])) && ($photo_name!="")) { 
	unlink ("photo/$row[m_image]");	
}
	
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

		$sql_update = "UPDATE tbl_member SET m_user='$_POST[txtUsername]', m_pwd='$_POST[txtPassword]', m_name='$_POST[txtName]', m_addr='$_POST[txtAddr]', m_gender='$_POST[rdoGender]', m_edu='$_POST[sltEdu]', m_used='$choice', m_image='$photoname'  WHERE m_id=$_REQUEST[mid] ";		
	} else {
		$sql_update = "UPDATE tbl_member SET m_user='$_POST[txtUsername]', m_pwd='$_POST[txtPassword]', m_name='$_POST[txtName]', m_addr='$_POST[txtAddr]', m_gender='$_POST[rdoGender]', m_edu='$_POST[sltEdu]', m_used='$choice'  WHERE m_id=$_REQUEST[mid] ";
	}
	
mysql_query("SET NAMES utf8");		
$result_update = mysql_query($sql_update);
if (!$result_update) {
	echo "ERROR : ไม่สามารถแก้ไขข้อมูลได้";
	echo "<meta http-equiv=\"refresh\" content=\"1;URL=showData.php\" >";	
} else {
	echo "แก้ไขข้อมูลสำเร็จ";
	echo "<meta http-equiv=\"refresh\" content=\"1;URL=showData.php\" >";
}
?>