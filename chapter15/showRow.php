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

while ($row=mysql_fetch_row($result)) {
	echo "No. : $row[0]<br>";
	echo " Username :  $row[1]<br>";
	echo " Password :  $row[2]<br>";
	echo "����-���ʡ�� : $row[3]<br>";
	echo "������� : $row[4]<br>";
	if ($row[5]=="M") {
		echo "�� :  ���<br>";
	} elseif ($row[5]=="F") {
		echo "�� :  ˭ԧ<br>";	
	}
	
	if ($row[6]=="1") {
		$edu = "�.3 / �Ǫ.";
	} else if ($row[6]=="2") {
		$edu = "�.6 / ���.";	
	} else if ($row[6]=="3") {
		$edu = "��ԭ�ҵ��";	
	} else if ($row[6]=="4") {
		$edu = "��ԭ���";	
	} else if ($row[6]=="5") {
		$edu = "��ԭ���͡";	
	}
	echo "�дѺ����֡���٧�ش : $edu<br>";
	echo "������������������������  : $row[7]<br>";
	
	if (!empty($row[8])) {
		echo "�ٻ�Ҿ: <img src=\"photo/$row[8]\">";
	}
	echo "<p>";
}
mysql_close();
?>
