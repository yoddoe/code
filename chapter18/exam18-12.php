<script language="javascript" type="text/javascript">
function calDiscount(x, y) {
	if (x == 1) {
		var disr = 10/100;
	} else if (x == 0) {
		var disr = 0;
	}
	var discount = y * disr;
	var net = y - discount;
	document.write("�Ҥ��Թ��� = " + y + " �ҷ<br>");	
	document.write("���Ѻ��ǹŴ " + (disr*100) + " % = " + discount + " �ҷ<br>" );
	document.write("�Ҥ��ط�� = " + net + " �ҷ");
}

	var mm = prompt("��س��кػ�������Ҫԡ? (0=����� / 1=��Ҫԡ");
	var  price = prompt("��سһ�͹�Ҥ��Թ���");
</script>

<input type="button" name="btnSubmit" value="�ʴ��Ҥ���ǹŴ����Ҥ��ط��" onclick="calDiscount(mm, price)" />