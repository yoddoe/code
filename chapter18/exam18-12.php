<script language="javascript" type="text/javascript">
function calDiscount(x, y) {
	if (x == 1) {
		var disr = 10/100;
	} else if (x == 0) {
		var disr = 0;
	}
	var discount = y * disr;
	var net = y - discount;
	document.write("ราคาสินค้า = " + y + " บาท<br>");	
	document.write("ได้รับส่วนลด " + (disr*100) + " % = " + discount + " บาท<br>" );
	document.write("ราคาสุทธิ = " + net + " บาท");
}

	var mm = prompt("กรุณาระบุประเภทสมาชิก? (0=ไม่ใช่ / 1=สมาชิก");
	var  price = prompt("กรุณาป้อนราคาสินค้า");
</script>

<input type="button" name="btnSubmit" value="แสดงราคาส่วนลดและราคาสุทธิ" onclick="calDiscount(mm, price)" />