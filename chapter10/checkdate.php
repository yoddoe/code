<form action="checkdate.php" method="post">
	<select name="day">
		<? 
		for ($i=1;$i<=31;$i++) {
			echo "<option value='$i'>$i</option>";
		}
		?>
	</select>
		
	เดือน :
	<select name="month">
		<? 
		$ThMonth=array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",  "กรกฏาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");		
		for ($i=1;$i<=12;$i++) {
			echo "<option value='$i'>$ThMonth[$i]</option>";
		}
		?>
	</select>
		
	ปี พ.ศ. : <input type="text" name="year" size="4" maxlength="4">
	<input type="submit" name="submit" value="ตรวจสอบ">
</form>	

<?
	$day=$_POST['day'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	if (($day<>"") && ($month<>"") && ($year<>"")) {
		if (!checkdate($month, $day, $year)) {
			echo "คุณป้อนข้อมูลวันเดือนปี ไม่ถูกต้อง";
		} else {
			echo "ข้อมูลวันเดือนปี ถูกต้อง";
		}
	}
?>