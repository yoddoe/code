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
echo "�ӹǹ�����ŷ����� 㹵��ҧ tbl_member �� $num ��¡��";
mysql_close();
?>