<?
$name = "Thunyapatz";
$nickname = "";
if (isset($name)) {
	echo "My name is " . $name ;
	if (empty($nickname)) {
		echo "<br>My nickname is  .....";
	} else {
		echo "<br>My nickname is " . $nickname;
	}
} else {
	echo "ERROR :  Not  variable \$name";
}
?>