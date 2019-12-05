<?
$name = "Thunyapatz";
$nickname = "Jacky";
$years = "24";
if (isset($name)) {
	echo "My name is " . $name ;
	if (isset($nickname)) {
		echo "<br>My nickname is " . $nickname;
		unset($nickname);
		echo "<br>$nickname is $years years old.";
	} else {
		echo "<br>ERROR : Not avriable \$nickname";
	}
} else {
	echo "ERROR :  Not  variable \$name";
}
?>