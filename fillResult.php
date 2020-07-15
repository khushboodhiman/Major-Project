<!DOCTYPE html>
<html>
<head>
	<title>Fill Result</title>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fr.css">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Indie+Flower|Kalam|Kaushan+Script|Permanent+Marker|Shadows+Into+Light&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Muli|Pacifico|Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

</head>
<body>

<?php

		ini_set("display_errors", 0);

		include 'header.html';
		session_start();

		if (isset($_POST['fill_result'])) {
		include('connect.php');

		$_SESSION["sem"] = $_POST['sem'];
		$_SESSION["month"] = $_POST['month'];
		$_SESSION["year"] = $_POST['year'];
		$_SESSION["branch"] = $_POST['branch'];

		$sem = $_SESSION['sem'];
		$branch = $_SESSION["branch"];
		$month = $_SESSION["month"];
		$year = $_SESSION["year"];

		if ($_POST['type'] == 'regular') {
			$qry = "SELECT * FROM record WHERE sem = $sem";
		}

		elseif ($_POST['type'] == 're-appear') {
			$qry = "SELECT * FROM result WHERE sem = $sem AND marks = '0'";
		}

		$r = mysqli_query($conn, $qry);
		
		echo '<form method="post" class="fr_action_form">';
		?>

		<div class="info_l" style="font-size: 18px;"><?php echo 'Semester : '. $sem ?></div>
		<div class="info_r" style="font-size: 18px;"><?php echo 'Examination : '. $month .' '. $year; ?></div>

		<?php
		$result = array();
		echo "<br><table class='marks_table'>";
		$i=1;
		$counter = 0;
		$table_name = "cse".$_SESSION['sem'];
		?>

		<tr class="header">
			<td>Registration Number</td>
			<td>Obtained Marks</td>
			<td>Maximum Marsk</td>
			<td style="font-family: Pacifico;">OR</td>
			<td colspan="11"> Re-appears</td>
		</tr>
		

		<?php 

		while ($res = mysqli_fetch_array($r)) {

			$qry1 = "SELECT * FROM $table_name";
			$r1 = mysqli_query($conn, $qry1);

			if ($_POST['type'] == 'regular') {

				echo '<tr><td><input type="text" class="reg" name="rno[]" readonly value="'. $res[2].'"></td>'; 
			}

			elseif ($_POST['type'] == 're-appear') {

				echo '<tr><td><input type="text" class="reg" name="rno[]" readonly value="'. $res[5].'"></td>'; 

			}
			echo '<td><input type="number" class="obt_marks" name="result[]" tabindex="'.$i.'"></td>';
			echo '<td><input type="number" class="max_marks" name="max-marks[]"></td>';

			$aa = 1;
			while ($res1 = mysqli_fetch_array($r1)) {
				echo '<td class="supplies" id='.$aa.'>'.$res1[3].'<input type="checkbox" class="supplies_check" name="result['.$counter.'][]" value="'.$res1[3].'"></td>';
				$aa++;
			}

			$counter++;
		}
	}

		?>

		<tr><td colspan="12"><input type="submit" name="store" class="submit"></td></tr>
		</table>	
	</form>

<?php

if (isset($_POST['store'])) 
{
	include("connect.php");

	$sem = $_SESSION["sem"];
	$branch = $_SESSION["branch"];
	$month = $_SESSION["month"];
	$year = $_SESSION["year"];

	$rno = $_POST['rno'];
	$reg = array();

	foreach($rno as $r)
	{
		array_push($reg, $r);
	}
	$reg_count = count($reg);

	// print_r($reg);

	$numbers = $_POST['result'];
	$marks = array();

	foreach($numbers as $r) 
	{
		array_push($marks, $r);
	}

	$max = $_POST['max-marks'];
	$max_marks = array();

	foreach($max as $max_marks) {
		array_push($max_marks, $max);
	}

	$counter = 0;
	$inner_counter = 0;
	$a = 0;

	while($a < $reg_count)
	{
		$i = 0;
		if (is_array($marks[$counter]))
		{
			$re_appear_str = implode(',', $marks[$counter]);

			$qry2 = "INSERT INTO result VALUES ('', $sem, '$month', $year, '$branch', $reg[$counter], '', $max_marks, '$re_appear_str' );";

			mysqli_query($conn, $qry2);
		}
		else 
		{
			$total_marks = $marks[$counter];

			$qry2 = "INSERT INTO result VALUES ('', $sem, '$month', $year, '$branch', $reg[$counter], $total_marks, $max_marks, 0);";
			mysqli_query($conn, $qry2);
		}

		$counter++;
		// echo '<br>';
		$a++;
	}
}

if ($qry2) {
	header("Location:http://localhost/clerk/fill_result.php");
}

?>

<script>
	$('.max_marks').change(function() {
		$('.max_marks').val($('.max_marks').val());
	});
</script>

</body>
</html>