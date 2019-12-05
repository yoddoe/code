<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title></title>
<link rel="stylesheet" type="text/css" href="jquery-ui/css/smoothness/jquery-ui-1.8.20.custom.css">
<script type="text/javascript" src="jquery-ui/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="jquery-ui/js/jquery-ui-1.8.20.custom.min.js"></script>
<script type="text/javascript">
function loadFile(url) {
	$("#show_file").load(url);
}
</script>
</head>

<body>
<a href="#" onclick="loadFile('page.html #divSocialCate');">หนังสือเกี่ยวกับ Social Network</a><br />
<a href="#" onclick="loadFile('page.html #divAdobeCS5Cate');">หนังสือเกี่ยวกับ Adobe CS5</a><br />
<div id="show_file"></div>
</body>
</html>