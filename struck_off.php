<!DOCTYPE html>
<html>
<head>
	<title>
		STRUCK-OFF NOTICE
	</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body>

	<?php include("header.html"); ?>

	<form method="post" action="struck_off_action.php" name="reg_form">
		<label for="reg">Registration Number</label><input type="number" name="reg" id="reg">
		<input type="submit" name="submit" class="submit" value="Generate struck-off Notice">
	</form>

<!-- <?php

if(isset($_POST['submit'])) {
?>

		<div class="gur"><b>GURU NANAK DEV POLYTECHNIC COLLEGE, LUDHIANA</b></div>

		<div class="bor"></div>

		<div class="no"><b> NO.<input class="no10" name="NOTICE Number">/ <input class="no2" name="NOTICE Number"></b> <span class="dat"><b>Dated. <input  class="dat2" type="date" name=""></b></span></div>

		<div class="notice"><b><u>NOTICE</u></b></div>

		<p><span class="text">The name of <b><input class="sname" name="Stduent"></b> S/o <span class="tt"><b>/</b></span> D/o <b><input class="fname" name="fname"></b> Class Roll <br><span class="break"> No. <b><input class="roll" name="Roll NO"> </b> Class <b><input class="sem" name="semester"> </b> Sem. of <b> <input class="trade" name="trade"></b> has been struck-off the college Roll </span> due <br> <span class="break2">to <b> <input class="reason" name="reason"> </b></span> </span></p>

		<br> <br> <br> <br> <br> <span class="tut"><b> Tutor <span class="hod"> HOD <br><input  class="app" name="">  </span> </span> </b></span>

		<div class="cop"> <b> Copy To:- </b> </div>
		
		<div class="in">
			<p>Principal for kind information pl.
			<br>Parents's information,
			<br>Notice Board, Dean Academic,
			<br>Library, Accountant, Tutor, Office Copy.</p> 
		</div>

<?php
}
?> -->
</body>
</html>		