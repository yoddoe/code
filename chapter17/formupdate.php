<?php
$dbhost='localhost';	
$dbuser='root';			
$dbpass='1234';			
$dbname='memberDB';			

$conn=mysql_connect($dbhost, $dbuser, $dbpass) or die ("ไม่สามารถเชื่อมต่อโฮสต์ได้");
mysql_select_db($dbname) or die ("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");

$sql="SELECT * FROM tbl_member WHERE m_id=$_REQUEST[mid] ";
mysql_query("SET NAMES utf8");	
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>

<b>== แก้ไขข้อมูล ==</b>
<form action="update.php?mid=<?=$row[m_id];?>" method="post" enctype="multipart/form-data" name="frmUpdate">
  Username : <input name="txtUsername" type="text" size="10" maxlength="10" value="<?=$row['m_user'];?>" /><br>
  Password : <input name="txtPassword" type="password" size="10" maxlength="8" value="<?=$row['m_pwd'];?>" /><br>
  ชื่อ-นามสกุล : <input name="txtName" type="text" size="40" value="<?=$row['m_name'];?>" /><br>
  ที่อยู่ : <textarea name="txtAddr" cols="40" rows="5"><?=$row['m_addr'];?></textarea><br />
  เพศ : 
  
 <?php
 $gender1 = ($row['m_gender'] == "M")? " checked" : " ";
 $gender2 = ($row['m_gender'] == "F")? " checked" : " ";
 ?>
 
<input type="radio" name="rdoGender" value="M" <?=$gender1;?>>ชาย  
<input type="radio" name="rdoGender" value="F" <?=$gender2;?>>หญิง
<br />

ระดับการศึกษาสูงสุด 
<select name="sltEdu" >
<?php
	$se1 = ($row['m_edu']=="1")? " selected" : "";
	$se2 = ($row['m_edu']=="2")? " selected" : "";
	$se3 = ($row['m_edu']=="3")? " selected" : "";
	$se4 = ($row['m_edu']=="4")? " selected" : "";
	$se5 = ($row['m_edu']=="5")? " selected" : "";				
?>
  <option value="1" <?=$se1;?>>ม.3 / ปวช.</option>
  <option value="2" <?=$se2;?>>ม.6 / ปวส.</option>
  <option value="3" <?=$se3;?>>ปริญญาตรี</option>
  <option value="4" <?=$se4;?>>ปริญญาโท</option>
  <option value="5" <?=$se5;?>>ปริญญาเอก</option>
</select>
<br />

ประเภทคอมพิวเตอร์ที่ใช้อยู่ 
<?php
$useds = array("PC", "Notebook" , "Netbook");
$usedselect = explode("," , $row['m_used']);

foreach ($useds as $used) {
	if (in_array($used, $usedselect)) {
		echo "<input type=\"checkbox\" name=\"chkCom[]\"  value=\"$used\" checked>$used";
	} else {
		echo "<input type=\"checkbox\" name=\"chkCom[]\"  value=\"$used\">$used";		
	}
}
?>
<br />
รูปภาพ  :  
<?php
	if (!empty($row[m_image])) {
		echo "<img src='photo/$row[m_image]' width='20%' height='20%'>";
	}
?>
<input type="file" name="photo"><br />
<input type="image" name="btnSubmit" src="submitBtn.jpg">
<input type="hidden" name="regno" value="0001">
</form>

<?
mysql_close();
?>