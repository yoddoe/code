<?
if ( !ereg("^(.+)@(.+)\\.(.+)[^\.\'\"\#\$\%\<>]$" , $_POST['txtEmail']) )  {
  echo"$txtEmail ไม่ใช่ email ที่ถูกต้อง <br>กรุณากรอกใหม่อีกครั้ง";
  exit();
} else {
	echo"$txtEmail เป็น email ที่ถูกต้อง";
}
?>