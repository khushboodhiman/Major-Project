<!DOCTYPE html>
<html>
<head>
	<title>View Record</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>

	<?php include('header.html'); ?>

	<form method="post" class="general_form">
		<label for="reg">Registration Number</label><input type="text" name="reg" id="reg">
		<input type="submit" name="submit" class="submit"  value="View Record">
	

<?php

$conn = mysqli_connect('localhost', 'root', '', 'clerk');

if (isset($_POST['submit'])) {

$reg = $_POST['reg'];

$qry = "SELECT * FROM record WHERE reg = $reg";

$r = mysqli_query($conn, $qry);

echo '<div class="view">';
while ($res = mysqli_fetch_array($r)) {
	echo '<table>';
	echo '<tr><td><label class="lab">Name </label></td>'. '<td><label class="val">'. $res[1]. '</label></td></tr><br>';
	echo "<tr><td><label class='lab'>Father's Name </label></td>". '<td><label class="val">'. $res[4]. '</label></td></tr><br>';
	echo '<tr><td><label class="lab">Semester </label></td>' . '<td><label class="val">'. $res[3]. '</label></td></tr><br>';
	echo '<tr><td><label class="lab">Course </label></td>' . '<td><label class="val">'. $res[8]. '</label></td></tr><br>';
	echo '<tr><td><label class="lab">Class Roll Number </label></td>' . '<td><label class="val">'. $res[7]. '</label></td></tr><br>';
	echo '<tr><td><label class="lab">Address </label></td>' . '<td><label class="val">'. $res[12]. '</label></td></tr><br>';
	echo '<tr><td><label class="lab">Email Address </label></td>' . '<td><label class="val">'. $res[11]. '</label></td></tr><br>';
	echo '<tr><td><label class="lab">Mobile Number </label></td>' . '<td><label class="val">'. $res[10]. '</label></td></tr><br>'; 
	echo '</table>';
}
}

?>
</div>
</form>


</div>


</body>
</html>