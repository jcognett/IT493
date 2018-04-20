<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Glory Days Order Form</title>
</head>
<body>
<h1>Thank you!</h1>
Your order has been submitted to ToPromote.com <br/>
If there are any issues with your order, please call us at 703-250-3890<br/><br/>
<?php
	echo $_POST['subject'] . '<br/>';
	mail('processing@digitecsolutions.com', $_POST['subject'] . 'Product Request ' . date('m-d-Y'), $_POST['email']);
	//mail($_POST['locationEmail'], $_POST['subject'] . 'Product Request ' . date('m-d-Y'), $_POST['email']);
	echo $_POST['receipt'];
?>
</body>
</html>