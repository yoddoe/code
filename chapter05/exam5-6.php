<? 
	$text="สำนักพิมพ์สวัสดีไอที|x|99/118 ถนนกาญจนาภิเษก 010/1 แขวงรามอินทรา เขตคันยานาว กทม. 10230";
	$no = explode("|x|",$text);
	$text1 = $no[0]; 
	$text2 = $no[1];  
	$text3 = $no[2];  		
	echo $text1 . "<br>" . substr_replace($text2, "...", 10)  . "<br>" . substr_replace($text3, "...", 30) ;
?>