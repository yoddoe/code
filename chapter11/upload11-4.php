<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
</head>

<body>
<?php
if ($_FILES['fileField']['error'] == 4) {
	echo "��س����͡������ͧ��� Upload";
} else {
	$filename = $_FILES['fileField']['name'] ;
	$array_last = explode("." , $filename);
	$num = count($array_last)-1;
	$lastname = strtolower($array_last[$num]);
	
	if ($lastname == "jpg" or $lastname == "jpeg" or $lastname == "gif") {
echo "�����Ţͧ����� Upload : <br>" ;
echo "������� : " .  $_FILES['fileField']['name'] . "<br>" ;
echo "��Ҵ�ͧ���" .  $_FILES['fileField']['size'] . "<br>" ;
echo "�������ͧ���" .  $_FILES['fileField']['type'] . "<br>" ;
echo "���˹觢ͧ���" .  $_FILES['fileField']['tmp_name'] . "<br>" ;

	$path = getcwd().DIRECTORY_SEPARATOR;
	$target = $path . $_FILES['fileField']['name'];
	move_uploaded_file($_FILES['fileField']['tmp_name'] , $target);
	echo "Upload Complete";
	
	} else {
		echo "��������͡���ʡ�� ." . $lastname . "<br>";
		echo "Upload ��੾�������ʡ�� .jpg, .jpeg ��� .gif ��ҹ��";	
	}
}
?>
</body>
</html>