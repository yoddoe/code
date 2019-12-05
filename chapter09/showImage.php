<?
session_start();
if ($_SESSION["UserName"]=="") {
	header("Location: formLogin.php");
	exit();
}
?>
<img src="image1.jpg" width="259" height="358" >