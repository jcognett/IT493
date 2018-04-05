<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Glory Days Product Request Form</title>
</head>
<body>
<h1>Thank you!</h1>
<?php
	mail('jcognett@gmu.edu', $_POST['subject'] . 'Product Request ' . $_POST['date'], $_POST['email']);
?>
</body>
</html>