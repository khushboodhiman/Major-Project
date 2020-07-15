<!DOCTYPE html>
<html>
<head>
	<title>
		Home
	</title>
</head>
<body>
<?php

session_start();
if (!$_SESSION) {
	header('Location: http://localhost/clerk/cookie.php');
}
$_SESSION['uname'] = $_POST['uname'];
$_SESSION['passwd'] = $_POST['passwd'];

?>
<h1>Hello, <?php echo $_SESSION['uname']; ?></h1>

<a href="session_dest.php">Logout</a>

</body>
</html>