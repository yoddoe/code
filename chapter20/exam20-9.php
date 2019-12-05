<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>เลือกวันที่ด้วยปฏิทิน Datepicker</title>
<link rel="stylesheet" type="text/css" href="jquery-ui/css/smoothness/jquery-ui-1.8.20.custom.css">
<script type="text/javascript" src="jquery-ui/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="jquery-ui/js/jquery-ui-1.8.20.custom.min.js"></script>
<script type="text/javascript">
   $(function(){
      $("#txtToday1").datepicker();
	  $("#txtToday2").datepicker({dateFormat: 'dd-mm-y'});
   });
</script>
</head>

<body>
วันที่ : <input value="" type="text" name="txtToday1" id="txtToday1"/>
วันที่ : <input value="" type="text" name="txtToday2" id="txtToday2"/>
</body>
</html>