<!DOCTYPE html>
<html>
<head>
	<title>Backlog Certificate Form</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body>

<?php
include('header.html');
session_start();
?>

<form method="post" name="form" action="backlog_action.php">
	<label for="reg">Registration Number</label><input type="text" name="reg_no" id="reg">
	<input type="submit" name="generate" value="Generate Backlog" class="submit">
</form>

</body>
</html>