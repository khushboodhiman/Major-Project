<!DOCTYPE html>
<html>
<head>
	<title>Fill Result</title>
	<link rel="stylesheet" type="text/css" href="fr.css">
<!-- form header fonts -->
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Indie+Flower|Kalam|Kaushan+Script|Permanent+Marker|Shadows+Into+Light&display=swap" rel="stylesheet">
<!-- all fonts -->
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Muli|Pacifico|Poppins&display=swap" rel="stylesheet">
</head>
<body>

<?php
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

		$qry = "SELECT * FROM record WHERE sem = $sem;";

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
			<td>Total Marks</td>
			<td style="font-family: Pacifico;">OR</td><td colspan="12"> Re-appears</td>
		</tr>
		

		<?php 

		while ($res = mysqli_fetch_array($r)) {

			$qry1 = "SELECT * FROM $table_name";
			$r1 = mysqli_query($conn, $qry1);

			echo '<tr><td class="input"><input type=text name="rno[]" readonly value="'.$res[2].'"></td>';
			echo '<td class="input"><input type="number" name="result[]" tabindex="'.$i.'"></td>';

			while ($res1 = mysqli_fetch_array($r1)) {
				echo '<td class="supplies">'.$res1[3].'<input type="checkbox" name="result['.$counter.'][]" value="'.$res1[3].'"></td>';
			}

			$counter++;
		}
	}

		?>

		<tr><td><input type="submit" name="store" class="button"></td></tr>
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

	// print_r($marks);

	$counter = 0;
	$inner_counter = 0;
	$a = 0;

	while($a < $reg_count)
	{
		$i = 0;
		if (is_array($marks[$counter]))
		{
			$re_appears = count($marks[$counter]);
			// echo $reg[$counter] .'supplyyyy';

			while($i < $re_appears)
			{
				$sup = $marks[$counter][$i];
				$qry = "INSERT INTO result VALUES ('', $sem, '$type', '$month', $year, $branch, $reg[$counter], '', $sup);";

				mysqli_query($conn, $qry);
				// echo '<br>';

				$i++;
			}
		}
		else 
		{
			$total_marks = $marks[$counter];

			$qry2 = "INSERT INTO result VALUES ('', $sem, '$type', '$month', $year, $branch, $reg[$counter], $total_marks, '');";
			mysqli_query($conn, $qry2);
		}
		$counter++;
		// echo '<br>';
		$a++;
	}


}

?>

</body>
</html>