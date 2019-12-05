<script language="javascript" type="text/javascript">
	var  grade = prompt("กรุณาป้อนเกรด");
	switch (grade) {
		case 'A' : 
			document.write(grade + " = Excellent");
			break;
		case 'B' :
			document.write(grade + " = Good");		
			break;
		case 'C' :
			document.write(grade + " = Fair");		
			break;
		case 'D' :
			document.write(grade + " = Poor");		
			break;
		case 'F' :
			document.write(grade + " = Fail!!");		
			break;
		default :
			document.write("กรุณาป้อนเกรด A, B, C, D หรือ F เท่านั้น!!!");		
			break;
	}
</script>