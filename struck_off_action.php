<?php

if(isset($_POST['submit'])) {
?>
<html>
<head>
	<title>Struck-off Notice</title>
	<link rel="stylesheet" type="text/css" href="stuck.css">
</head>
<body>

<?php
	include('connect.php');	
	session_start();
	$_SESSION['reg'] = $reg = $_POST['reg'];

	$qry = "SELECT * FROM record WHERE reg = $reg";

	$res = mysqli_query($conn, $qry);

	while ($r = mysqli_fetch_array($res)) {
?>

		<div class="gur"><b>GURU NANAK DEV POLYTECHNIC COLLEGE, LUDHIANA</b></div>

		<div class="bor"></div>

		<div class="no"><b> NO.<input class="no10" name="NOTICE Number">/ <input class="no2" name="NOTICE Number"></b> <span class="dat"><b>Dated.</b> <?php echo date('d-m-Y'); ?></span></div>

		<div class="notice"><b><u>NOTICE</u></b></div>

		<p><span class="text">The name of <input class="sname" name="Student" value='<?php echo $r[1]; ?>'> S/o <span class="tt"></span> D/o <b><input class="fname" name="fname" value='<?php echo $r[4]; ?>'></b> Class Roll <br><span class="break"> No. <b><input class="roll" name="Roll NO" value='<?php echo $r[7]; ?>'> </b> Class <b><input class="sem" name="semester" value='<?php echo $r[3]; ?>'> </b> Sem. of <b> <input class="trade" name="trade" value='<?php echo $r[8]; ?>'></b> has been struck-off the college Roll </span> due <br> <span class="break2">to <b> <input class="reason" name="reason"> </b></span> </span></p>

		<br> <br> <br> <br> <br> <span class="tut"><b> Tutor <span class="hod"> HOD <br><input  class="app" name="">  </span> </span> </b></span>

		<div class="cop"> <b> Copy To:- </b> </div>
		
		<div class="in">
			<p>Principal for kind information pl.
			<br>Parents's information,
			<br>Notice Board, Dean Academic,
			<br>Library, Accountant, Tutor, Office Copy.</p> 
		</div>

</body>
</html>
<?php
}
}
?>