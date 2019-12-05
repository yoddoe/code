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
echo "จำนวนข้อมูลทั้งหมด  $num รายการ ดังนี้<br>";
?>
<table width="100%" cellspacing="1" cellpadding="1" border="1">
  <tr>
    <td>ลำดับที่</td>
    <td>ชื่อ-นามสกุล</td>
    <td></td>
  </tr>
<?
while ($row=mysql_fetch_array($result)) {
?>  
  <tr>
    <td><?=$row[m_id];?></td>
    <td><?=$row[m_name];?></td>
    <td><a href="showID.php?mid=<?=$row[m_id];?>">แสดง</a> - 
    <a href="formupdate.php?mid=<?=$row[m_id];?>">แก้ไข</a> - 
    <a href="deleteID.php?mid=<?=$row[m_id];?>">ลบ</a></td>
  </tr>
  <?
  }
mysql_close();
?>
</table>