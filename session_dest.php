<?php 
session_start();
session_unset();
session_destroy();

if (!$_SESSION) {
	echo "You are logged out!";
}
else {echo"naiiiiiiiiiii";}
echo $_SESSION['uname'];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

Login Again
<a href="cookie.php">Login</a>

</body>
</html>