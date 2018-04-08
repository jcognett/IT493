<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Glory Days Product Request Form</title>
</head>
<body>
<h1>Thank you!</h1>
Your order has been submitted to toPromote.com <br/>
If there are any issues with the order, please call at 703-205-3890<br/><br/>
<?php
	mail('jcognett@gmu.edu', $_POST['subject'] . 'Product Request ' . date('d-m-Y'), $_POST['email']);
	mail($_POST['additionalEmail'], $_POST['subject'] . 'Product Request ' . date('d-m-Y'), $_POST['email']);
	echo $_POST['receipt'];
?>
</body>
</html>