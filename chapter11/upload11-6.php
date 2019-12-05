<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
</head>

<body>
<?php
if ($_FILES['fileField']['error'] == 4) {
	echo "กรุณาเลือกไฟล์ที่ต้องการ Upload";
} else {
	$filename = $_FILES['fileField']['name'] ;
	$array_last = explode("." , $filename);
	$num = count($array_last)-1;
	$lastname = strtolower($array_last[$num]);
	
	if ($lastname == "jpg" or $lastname == "jpeg" or $lastname == "gif") {
//		$datenow = date("His");
		$fname = "img_ " . date("His");
		$newname = $fname . "." . $array_last[1];
		
echo "ข้อมูลของไฟล์ที่ Upload : <br>" ;
echo "ชื่อไฟล์ : " .  $_FILES['fileField']['name'] . "<br>" ;
echo "ขนาดของไฟล์" .  $_FILES['fileField']['size'] . "<br>" ;
echo "ประเภทของไฟล์" .  $_FILES['fileField']['type'] . "<br>" ;
echo "ตำแหน่งของไฟล์" .  $_FILES['fileField']['tmp_name'] . "<br>" ;

	$path = getcwd().DIRECTORY_SEPARATOR;
	$target = $path . $newname;
	move_uploaded_file($_FILES['fileField']['tmp_name'] , $target);
	
	$images = $newname;
	$height = 200;
	$size = getimagesize($images);
	$width = round($height * $size[0] / $size[1]);
	if ($size[2] == 1) {
		$images_ori = imagecreatefromgif($images);
	} elseif ($size[2] == 2) {
		$images_ori = imagecreatefromjpeg($images);
	}
	$photoX = imagesx($images_ori);
	$photoY = imagesx($images_ori);
	$images_new = imagecreatetruecolor($width, $height);
	imagecopyresampled($images_new, $images_ori, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
	imagejpeg($images_new, $images);
	imagedestroy($images_ori);
	imagedestroy($images_new);
	
	echo  $newname . " : Upload Complete";
	echo "<img src= '$images'>";
	
	} else {
		echo "ไฟล์ที่เลือกนามสกุล ." . $lastname . "<br>";
		echo "Upload ได้เฉพาะไฟล์นามสกุล .jpg, .jpeg และ .gif เท่านั้น";	
	}
}
?>
</body>
</html>