<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
</head>

<body>
<?php
require("phpmailer/class.phpmailer.php");

$email = "thanyapatz@gmail.com";
$body = "Hello, PHP Mailer";	
$toaddress = "uchairat@hotmail.com";
		
$mail = new PHPMailer(); 
$mail->CharSet="utf-8";			  
$mail->IsSMTP(); 
$mail->Host = 'ssl://smtp.gmail.com'; 
$mail->Port = 465; 
$mail->SMTPAuth = true; 
$mail->Username = 'thanyapatz@gmail.com'; 
$mail->Password = 'ball1978'; 
$mail->From = $email; 
$mail->FromName = $email; 
$mail->Subject  = "Hi"; 
$mail->Body     = $body; 
$mail->AltBody =  $body;
$mail->AddAddress($toaddress); 
$mail->Send();    

if(!$mail->Send()) {
	echo "<font color=#FF0000>การส่งเมลเกิดข้อผิดพลาด</font>";
} else {
	echo "<font color=#009900>ส่งเมลถึง $toaddress  เรียบร้อยแล้ว</font>";
}		
?>
</body>
</html>