function msgContent() {
	new Ajax.Updater("content", "showdata.php", {
		method: 'get'
	});
	setTimeout("msgContent()", 1000);
}

function processbarClear(id) {
	var progressIndicator ='<img src="loading.gif"> กำลังลบข้อมูล...';
	$("result").innerHTML = progressIndicator;
	setTimeout("deleteData("+id+")", 1000);
}

function deleteData(id) {
	new Ajax.Updater('result', 'deleteID.php', {
		method: 'GET',
		parameters: { mid: id}
	});
}

function validateEmail() {
	new Ajax.Updater('msgEmail', 'verifyEmail.php', {
		method: 'GET',
		parameters: { email: $F('txtEmail')}
	});
}

function check_data(user, pwd, name, email, addr, gender) {
	var cancle=false;
	if (user.length==0) {
		alert('กรุณาป้อน Username ด้วย');
		document.frmRegister.txtUsername.focus();
		cancle=true;
	} else
		
	if (pwd.length==0) {
		alert('กรุณาป้อน Password ด้วย');
		document.frmRegister.txtPassword.focus();
		cancle=true;
	} else

	if (name.length==0) {
		alert('กรุณาป้อนชื่อ-นามสกุลด้วย');
		document.frmRegister.txtName.focus();
		cancle=true;
	} else
	
	if (email.length==0) {
		alert('กรุณาป้อนอีเมล์ด้วย');
		document.frmRegister.txtEmail.focus();
		cancle=true;
	}  
	
	if (cancle==false) {
		insertData()
	}
}

function insertData() {
//	alert($F('txtUsername'));
	/*
	new Ajax.Updater('result', 'register.php', {
		method: 'POST',
		parameters: { 
			user: $F('txtUsername'),
			pwd: $F('txtPassword'),
			name: $F('txtName'),
			email: $F('txtEmail'),
			addr: $F('txtAddr'),
//			gender: $F('rdoAddr'),
//			edu: $F('sltEdu')
		}
	});
	*/
}