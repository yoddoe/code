<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>ซ่อนแสดงข้อมูลแบบพับเก็บด้วย Accordion</title>
<link rel="stylesheet" type="text/css" href="jquery-ui/css/smoothness/jquery-ui-1.8.20.custom.css">
<script type="text/javascript" src="jquery-ui/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="jquery-ui/js/jquery-ui-1.8.20.custom.min.js"></script>
<style type="text/css">
.divHead {
	font-size: 16px;
	color:#F90;	
}
.divSubHead {
	font-size: 14px;
}
</style>
<script type="text/javascript">
   $(function(){
      $( "#accordion" ).accordion({autoHeight: false});
   });
</script>
</head>

<body>
<div id="accordion">
	<h3><a href="#">PART 1 - พื้นฐานการใช้งาน PHP</a></h3>
		<div><p  class="divHead">เรียนรู้พื้นฐานเกี่ยวกับการเขียนโปรแกรมด้วยภาษา PHP ตลอดจนตัวอย่างการใช้งานด้วยภาษา PHP</p></div>
  
  	<h3><a href="#">PART 2 แนวคิดการออกแบบเว็บแอพพลิเคชันและฐานข้อมูล</a></h3>
		<div><p  class="divHead">เรียนรู้แนวคิดการออกแบบเว็บแอพพลิเคชันและฐานข้อมูล</p></div>

  	<h3><a href="#">PART 3 จัดการฐานข้อมูล MySQL ด้วย phpMyAdmin และฟังก์ชัน PHP</a></h3>
		<div><p  class="divHead">เรียนรู้วิธีการจัดการฐานข้อมูล MySQL เพื่อจัดเก็บข้อมูลต่างๆ ของแอพพลิเคชันด้วยโปรแกรม phpMyAdmin และฟังก์ชัน PHP ที่เกี่ยวข้อง</p></div>
        
	<h3><a href="#">PART 4 การใช้งานเทคนิค Ajax</a></h3>
		<div><p  class="divHead">เรียนรู้พื้นฐานเกี่ยวกับการเขียนโปรแกรมด้วยเทคนิค AJAX ร่วมกับภาษา PHP</p></div>
       
	<h3><a href="#">PART 5 การใช้งานเทคนิค jQuery</a></h3>
		<div><p  class="divHead">เรียนรู้เทคนิคการเพิ่มลูกเล่นเอ็ฟเฟ็กต์ให้กับหน้าเว็บเพจด้วยเทคนิค jQuery ร่วมกับภาษา PHP</p></div>
    
	<h3><a href="#">WORKSHOP : ระบบจองแพ็คเก็จทัวร์ออนไลน์</a></h3>
    	<div>
        	<ul>
            	<li>Business Rule ของระบบ</li>
            	<li>ระบบ Login/Logout</li>
            	<li>การจัดการข้อมูลหลัก</li>
            	<li>ฯลฯ</li>
        	</ul>
        </div>
</div>

</body>
</html>