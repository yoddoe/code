<?
if (isset($_COOKIE["memberlogin"])) {
	 if ($_REQUEST['limit']=="1") {
		 $Time="1 วัน";
	 } elseif ($_REQUEST['limit']=="2") {
		 $Time="1 สัปดาห์";
	 } elseif ($_REQUEST['limit']=="3") {
		 $Time="1 เดือน";
	 } elseif ($_REQUEST['limit']=="4") {
		 $Time="1 ปี";		
	 }
	echo "ยินดีต้อนรับ คุณ $_COOKIE[memberlogin] <br>";
	echo "คุณได้เข้าสู่ระบบ Login อัตโนมัติ<br>";
	echo "เวลา Login อัตโนมัติที่คุณกำหนดคือ $Time<br>";
	echo "<a href='logout.php'>ออกจากระบบ</a>";
} else {
?>

<form name="frmLogin" method="post" action="checkLogin.php">
	<table width="301" border="0" cellspacing="1" cellpadding="1">
	 <tr>
		 <td width="136">ชื่อผู้ใช้งาน :</td>
 		 <td width="144"><input type="text" name="txtUser"></td>
    	</tr>
    	<tr>
      	 <td >รหัสผ่าน :</td>
      	 <td><input type="password" name="txtPwd"></td>
    	</tr>
    	<tr>
      	 <td><input name="log" type="checkbox" value="auto">Login อัตโนมัติ :</td>
      	 <td><select name="limit">
        		 <option value="1">1 วัน</option>
        		 <option value="2">1 สัปดาห์</option>
        		 <option value="3">1 เดือน</option>
        		 <option value="4">1 ปี</option>				
      		 </select>
 		</td>
   	</tr>
 	<tr>
  		<td colspan="2"><div align="center">
        		<input type="submit" name="button" value="Login"></div></td>
	</tr>
</table>
</form>

<?
} 
?>