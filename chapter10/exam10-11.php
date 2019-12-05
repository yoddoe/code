<?
$name=array("วีระ", "ชูศรี", "วีรพงศ์", "Prakran", "Songkran" ,"โชคชัย", "ทองชัย", "เพ็ญศรี", "www.sawasdee-it.com", "www.jssisaket.com", "www.google.co.th");

echo "ผลการค้นหาคำที่ขึ้นต้นด้วย วี หรือข้อความที่มีคำว่า .co.th มีดังนี้<br>";
for($i=0; $i<=count($name); $i++) 
	{
		if (ereg("^วี|\.co.th", $name[$i]))
		echo $name[$i] . "<br>";
	}		
	
echo "ผลการค้นหาคำที่ประกอบด้วย k และ r มีดังนี้<br>";
for($i=0; $i<=count($name); $i++) 
	{
		if (ereg("[kr]", $name[$i]))
		echo $name[$i] . "<br>";
	}	
?>