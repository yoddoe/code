<script language="javascript" type="text/javascript">
function calDiscount() {
	var x = document.getElementById("mm").value;
	var y = document.getElementById("price").value;
	
	if (x == 1) {
		var disr = 10/100;
	} else if (x == 0) {
		var disr = 0;
	}
	var discount = y * disr;
	var net = y - discount;
	
	document.getElementById("showp").innerHTML = y;
	document.getElementById("showr").innerHTML  = disr*100 + '%';
	document.getElementById("showd").innerHTML = discount ; 
	document.getElementById("shown").innerHTML = net;
}
</script>

<form name="form1" id="form1">
��س��кػ�������Ҫԡ? (0=����� / 1= ��Ҫԡ) : <input  type="text" size="5" name="mm" id="mm"><br />
��سһ�͹�Ҥ��Թ��� : <input type="text" size="5" name="price"  id="price"><br />
<input type="button" name="btnSubmit" value="�ʴ��Ҥ���ǹŴ����Ҥ��ط��" ud="btnSubmit" onclick="calDiscount()" />
</form>

�Ҥ��Թ��� = <span id="showp"> 0 </span> �ҷ<br>
���Ѻ��ǹŴ <span id="showr"> 0 </span> =  <span id="showd"> 0 </span> �ҷ<br>
�Ҥ��ط�� = <span id="shown"> 0 </span> �ҷ