<!-- <?php

// setcookie('cookieeeee', 'khushboo');

?>

<!DOCTYPE html>
<html>
<head>
	<title>cookie</title>
</head>
<body>

<?php

// echo $_COOKIE['cookieeeee']. ' and its value is '. $_COOKIE['value'];

?>

</body>
</html> -->

<!-- <?php
// $cookie_value = "w3resource tutorials";
// setcookie("w3resource1", $cookie_value, time()+3600);
// if (isset($_COOKIE['cookie']))
// echo $_COOKIE['w3resource1'];
?>

<?php

// session_start();
// $_SESSION['sdfgvhbjnm'] = "first";
// $_SESSION['rdrftgyhujksderftghjtgyhuj'] = "1";

// if (isset($_SESSION)) {
	// print_r($_SESSION);
	// echo $_SESSION['name'];
// }

// session_destroy();

?> -->

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<form method="post" action="session.php">
		<label>username</label><input type="text" name="uname">
		<label>password</label><input type="password" name="passwd">
		<input type="submit" name="submit">
	</form>
</body>
</html>