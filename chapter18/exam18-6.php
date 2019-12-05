<script language="javascript" type="text/javascript">
	var  score = prompt("กรุณาป้อนคะแนน");
	if (score >=80 && score <=100) {
		document.write(score + " คะแนน ได้เกรด A");
	} else	if (score >=70 && score <=80) {
		document.write(score + " คะแนน ได้เกรด B");
	} else	if (score >=60 && score <=70) {
		document.write(score + " คะแนน ได้เกรด C");
	} else	if (score >=50 && score <=60) {
		document.write(score + " คะแนน ได้เกรด D");
	} else	if (score >=0 && score <=50) {
		document.write(score + " คะแนน ได้เกรด F");						
	} else {
		document.write("กรุณาป้อนคะแนน 0-100 เท่านั้น!!");
	}
</script>