<html>
<head>
	<title>Backlog Form</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body>


<?php

if(isset($_POST["generate"])) {
	$reg = $_SESSION['reg'] = $_POST['reg_no'];

	$start = substr($reg, 0, 2);
	$_SESSION['session_start'] = $session_start = 2000 + $start;
	$_SESSION['session_end'] = $session_end = 2000 + $start + 3;

	$expected_passing_year = array(
	'Nov - '.$session_start,
	'May - '.$session_start+=1,
	'Nov - '.$session_start,
	'May - '.$session_start+=1,
	'Nov - '.$session_start,
	'May - '.$session_start+=1
);

// print_r($expected_passing_year);

include("connect.php");

$a = 0;
$no_of_re_appears = array();
$b = 1;

$passing_month_year = array();


foreach ($expected_passing_year as $year) {

	empty($no_of_re_appears);

	$list = explode(" - ", $year);

	$month = $list[0];
	$year = $list[1];

	$qry = "SELECT rep FROM result WHERE reg = $reg AND month = '$month' AND year = $year AND sem = $b";

	$r = mysqli_query($conn, $qry);

	while($res = mysqli_fetch_array($r)) {

		if ($res[0] == 0 OR $res[0] == '0') {
			// echo $res[0];
			array_push($no_of_re_appears, $res[0]);
		}
		else {
			$rep_array = explode(",", $res[0]);
			$rep = count($rep_array);
			array_push($no_of_re_appears, $rep);
		}
		// print_r($res);
		$a++;
	}
	$b++;


	$_SESSION['no_of_re_appears'] = $no_of_re_appears;
	}

// $_SESSION['passing_month_year'] = $passing_month_year;
	
	$sem = array('1st Sem', '2nd Sem', '3rd Sem', '4th Sem', '5th Sem', '6th Sem');
	$e = 0;

	for($s = 1; $s <= 6; $s++) {

		$qry1 = "SELECT count(*) FROM result WHERE reg = $reg AND sem = $s AND marks = '' OR NULL";
		
		$r1 = mysqli_query($conn, $qry1);

		while($res1 = mysqli_fetch_array($r1)) {
			$attempts[$e] = $res1[0];
			$e++;
		}

		$_SESSION['attempts'] = $attempts;


	$qry2 = "SELECT month,year FROM result WHERE reg = $reg AND rep = 0 AND sem = ".$s;

	$r2 = mysqli_query($conn, $qry2);

	$c = 0;

	while($res2 = mysqli_fetch_array($r2)) {
		$month_year = $res2[0].' - '.$res2[1];
		$passing_month_year[] = $month_year;
		$c++;
	}
	}
	// print_r($passing_month_year);

	// print_r($attempts);


	$qry3 = "SELECT * FROM record WHERE reg = $reg";

	$r3 = mysqli_query($conn, $qry3);

	while($res3 = mysqli_fetch_array($r3)) {
		$_SESSION['name'] = $res3[1];
		$_SESSION['f_name'] = $res3[4];
		$_SESSION['sem'] = $res3[3];
		$_SESSION['branch'] = $res3[8];
		$_SESSION['class_rno'] = $res3[7];
		$_SESSION['gender'] = $res3[13];
	}


	$qry4 = "SELECT sum(marks) FROM result WHERE reg = ".$_SESSION['reg'];

	$res4 = mysqli_query($conn, $qry4);

	while($r4 = mysqli_fetch_array($res4)) {
		$_SESSION['obt_marks'] = $r4[0];
	}

	// print_r($no_of_re_appears);

	for ($s = 1; $s <= 6; $s++) {

		$qry4 = "SELECT marks, max_marks FROM result WHERE reg = $reg AND sem = $s AND marks != '' OR 0";

		$r4 = mysqli_query($conn, $qry4);

		while($res4 = mysqli_fetch_array($r4)) {
			$marks[] = $res4[0];
			$max_marks[] = $res4[1];
		}

	}

	$agg_obt_marks = array();
	number_format($agg_obt_marks[] = 0.25 * $marks[0], 2).'<br>';
	number_format($agg_obt_marks[] = 0.25 * $marks[1], 2).'<br>';
	number_format($agg_obt_marks[] = 0.50 * $marks[2], 2).'<br>';
	number_format($agg_obt_marks[] = 0.50 * $marks[3], 2).'<br>';
	number_format($agg_obt_marks[] = $marks[4], 2).'<br>';
	number_format($agg_obt_marks[] = $marks[5], 2).'<br>';

	
	$agg_max_marks = array();	
	number_format($agg_max_marks[] = 0.25 * $max_marks[0], 2).'<br>';
	number_format($agg_max_marks[] = 0.25 * $max_marks[1], 2).'<br>';
	number_format($agg_max_marks[] = 0.50 * $max_marks[2], 2).'<br>';
	number_format($agg_max_marks[] = 0.50 * $max_marks[3], 2).'<br>';
	number_format($agg_max_marks[] = $max_marks[4], 2).'<br>';
	number_format($agg_max_marks[] = $max_marks[5], 2).'<br>';

	$_SESSION['obt_marks'] = array_sum($agg_obt_marks);
	$_SESSION['max_marks'] = array_sum($agg_max_marks);

?>

<body class="container backlog_form">

<h1>TO WHOM IT MAY CONCERN</h1>
<p> 
	<?php 

	function checkGender() {

		if ($_SESSION['gender'] == 'female' or $_SESSION['gender'] == 'Female' or $_SESSION['gender'] == 'F' or $_SESSION['gender'] == 'f')
		{
			$_SESSION['gender'] = 'female';
		} 
		else {
			$_SESSION['gender'] = 'male';
		}
	}

		checkGender();
		if ($_SESSION['gender'] == 'female') { echo 'This is to certify that Ms. '. $_SESSION['name']. ' D/o ';}

		else { echo 'This is to certify that Mr. '. $_SESSION['name']. ' S/o '; }

		echo $_SESSION['f_name']; ?>, Registration No. <?php echo $_SESSION['reg']; ?>, College Roll No. <?php echo $_SESSION['class_rno']; ?>, was a bonafide student of this Institute for the Session <?php echo $_SESSION['session_start'].'-'.$_SESSION['session_end']; ?>. 

		<?php

		if ($_SESSION['gender'] == 'female') { echo 'She passed her'; }

		else { echo 'He passed his'; } 
		?>

		 three year Diploma Course in <?php if($_SESSION['branch'] == 'CSE' or 'Computer' or 'computer') { echo 'Computer Engineering '; } elseif($_SESSION['branch'] == 'ECE' or 'Electrical' or 'electrical') { echo 'Electrical Engineering'; } elseif($_SESSION['branch'] == 'EE' or 'Electronics' or 'electronics') { echo 'Electronics Engineering'; } elseif ($_SESSION['branch'] == 'ME' or 'Mechanical' or 'mechanical') { echo 'Mechanical Engineering'; } elseif ($_SESSION['branch'] == 'AUTO' or 'Automobile' or 'Auto-mobile' or 'automobile') { echo 'Automobile Engineering'; } elseif($_SESSION['branch'] == 'CIVIL' or 'Civil' or 'civil') { echo 'Civil Engineering'; } ?> in <?php echo 'May - '.$_SESSION['session_end']; ?>. Detail of his semester wise re-appears are as under :- </p>

<table class="table">
	<tr>
		<td><b>Semester</b></td>
		<td><b>Expected Passing Year as a regular student</b></td>
		<td><b>Number of Re-appears</b></td>
		<td><b>Number of Attempts to clear re-appears</b></td>
		<td><b>Passing Year & Session</b></td>
	</tr>

	<?php


	for ($i = 0; $i < 6; $i++) {
		?>
			<tr>
				<td><?php echo $sem[$i]; ?></td>
				<td><?php echo $expected_passing_year[$i]; ?></td>
				<td><?php echo $no_of_re_appears[$i]; ?></td>
				<td><?php echo $attempts[$i]; ?></td>
				<!-- <td><?php echo $passing_month_year[$i]; ?></td> -->
				<?php
					if ($attempts[$i] == 0 && $no_of_re_appears[$i] == 0) {
						echo '<td>'.$expected_passing_year[$i].'</td>';
					}
					else {
						echo '<td>'.$passing_month_year[$i].'</td>';
					}
				?>
			</tr>
		<?php
	}

	?>
</table>

<p>After passing all the subjects of <b>1st</b> to <b>6th</b> semesters his total marks are <b><?php echo $_SESSION['obt_marks']; ?></b> out of <b><?php echo $_SESSION['max_marks']; ?></b></p>

<p>The medium of instructions for the course is <b>ENGLISH</b>.</p>
<p>His conduct and character during his stay in the instructions was <b>Good</b>.</p>

<?php
		}
?>

</body>

</html>