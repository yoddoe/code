<?
$loginUser="aaaa";
$loginPwd="1234";
if ($_POST['txtUser']!=$loginUser || $_POST['txtPwd']!=$loginPwd) {
	echo "<h3>ERROR : ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง</h3>";
} else {
	session_start();
	session_register("UserName");
	$_SESSION["UserName"]=$loginUser;
	header("Location: formLogin.php");
}
?>