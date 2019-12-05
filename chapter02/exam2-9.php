<?
$name = "Thunyapatz";
if (isset($name)) {
	echo "My name is " . $name ;
	if (isset($nickname)) {
		echo "<br>My nickname is " . $nickname;
	} else {
		echo "<br>ERROR : Not avriable \$nickname";
	}
} else {
	echo "ERROR :  Not  variable \$name";
}
?>