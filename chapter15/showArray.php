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
echo "�ӹǹ�����ŷ����� 㹵��ҧ tbl_member �� $num ��¡�� �ѧ���<br>";

while ($row=mysql_fetch_array($result)) {
	echo "No. : $row[m_id]<br>";
	echo " Username :  $row[m_user]<br>";
	echo " Password :  $row[m_pwd]<br>";
	echo "����-���ʡ�� : $row[m_name]<br>";
	echo "������� : $row[m_addr]<br>";
	if ($row[m_gender]=="M") {
		echo "�� :  ���<br>";
	} elseif ($row[m_gender]=="F") {
		echo "�� :  ˭ԧ<br>";	
	}
	
	if ($row[m_edu]=="1") {
		$edu = "�.3 / �Ǫ.";
	} else if ($row[m_edu]=="2") {
		$edu = "�.6 / ���.";	
	} else if ($row[m_edu]=="3") {
		$edu = "��ԭ�ҵ��";	
	} else if ($row[m_edu]=="4") {
		$edu = "��ԭ���";	
	} else if ($row[m_edu]=="5") {
		$edu = "��ԭ���͡";	
	}
	echo "�дѺ����֡���٧�ش : $edu<br>";
	echo "������������������������  : $row[m_used]<br>";
	
	if (!empty($row[m_image])) {
		echo "�ٻ�Ҿ: <img src=\"photo/$row[m_image]\">";
	}
	echo "<p>";
}
mysql_close();
?>
