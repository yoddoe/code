<?
$txt=$_POST['txtNote'];
$Rudeword=array("ไอ้", "เลว", "กู", "ระยำ", "ปากหมา", "penis", "fuck", "สัด");
for ($i=0; $i<count($Rudeword); $i++) 
	{
		$txt = preg_replace("/".$Rudeword[$i]."/", "***", $txt);
	}
echo $txt;
?>