<?
$dbhost='localhost';	
$dbuser='root';			
$dbpass='1234';			
$dbname='memberDB';			

$conn=mysql_connect($dbhost, $dbuser, $dbpass) or die ("�������ö����������ʵ���");
mysql_select_db($dbname) or die ("�������ö�������Ͱҹ��������");

$sql="SELECT * FROM tbl_member";
$result=mysql_query($sql);
$num=mysql_num_rows($result);
echo "�ӹǹ�����ŷ�����  $num ��¡�� �ѧ���<br>";
?>
<table width="100%" cellspacing="1" cellpadding="1" border="1">
  <tr>
    <td>�ӴѺ���</td>
    <td>����-���ʡ��</td>
    <td></td>
  </tr>
<?
while ($row=mysql_fetch_array($result)) {
?>  
  <tr>
    <td><?=$row[m_id];?></td>
    <td><?=$row[m_name];?></td>
    <td><a href="showID.php?mid=<?=$row[m_id];?>">�ʴ�</a> - 
    <a href="formUpdate.php?mid=<?=$row[m_id];?>">���</a> - 
    <a href="deleteID.php?mid=<?=$row[m_id];?>">ź</a></td>
  </tr>
  <?
  }
mysql_close();
?>
</table>