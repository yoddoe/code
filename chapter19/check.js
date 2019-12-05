function showData() {
	var tPwd = $F("txtPassword");
	$('msgPwd').innerHTML = tPwd;
}

function validateEmail() {
	new Ajax.Updater('msgEmail', 'verifyEmail.php', {
		method: 'GET',
		parameters: { email: $F('txtEmail')}
	});
}