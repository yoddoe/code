<?
$loginUser="aaaa";
$loginPwd="1234";
if ($_POST['txtUser']!=$loginUser || $_POST['txtPwd']!=$loginPwd) {
	echo "ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง";
} else {
	if ($_POST['log']=="auto") {
		if ($_POST['limit']=="1") {
			$limitTime=time()+60*60;
		} elseif ($_POST['limit']=="2") {
			$limitTime=time()+(60*60*24*7);
		} elseif ($_POST['limit']=="3") {
			$limitTime=time()+(60*60*24*30);
		} elseif ($_POST['limit']=="4") {
			$limitTime=time()+(60*60*24*365);		
		}
		setcookie("memberlogin", $loginUser, $limitTime);
		echo "<meta http-equiv='refresh' content='0;url=frmLogin.php
?limit=$_POST[limit]'>";			
	}
}
?>