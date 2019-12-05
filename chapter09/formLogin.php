<?
session_start();
if ($_SESSION["UserName"]<>"") {
	echo "ยินดีต้อนรับ คุณ $_SESSION[UserName] <br>";
	echo "Session_id = " . session_id()  ."<br>";	
	echo "<a href='showImage.php'>คลิกเพื่อดูรูปภาพ</a><br>";
	echo "<a href='log_out.php'>ออกจากระบบ</a>";
} else {
?>

<form name="frmLogin" method="post" action="check_Login.php">
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
  		<td colspan="2"><div align="center">
        	<input type="submit" name="button" value="Login"></div></td>
	</tr>
</table>
</form>

<?
}
?>