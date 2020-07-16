<html>
<head>
	<title>View Result</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Muli|Pacifico|Poppins&display=swap" rel="stylesheet">
</head>
<body>

<?php
	include("header.html");
?>

<form method="post" class="vr_form">
<div>
	<label class="vr_label">Semester</label>
	<select class="vr_entry" name="sem">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
	</select>
</div>

<div>
	<label class="vr_label">Branch</label>
	<select class="vr_entry" name="branch">
	<option>CSE</option>
	<option>ECE</option>
	<option>EE</option>
	<option>ME</option>
	<option>AUTO</option>
	<option>CIVIL</option>
	</select>
</div>

<div>
	<label class="vr_label">Examination</label>
	<select class="vr_entry" name="month">
	<option>Nov</option>
	<option>Dec</option>
	</select>

	<?php
		echo '<select name="year"  class="vr_entry">';
		echo $current_year = date("Y");
		$min_year = 2000;
		for ($current_year = date("Y"); $current_year >= $min_year; $current_year--) 
		{
			echo '<option>'.$current_year.'</option>';
		}
	?>
</div>
<div><input type="submit" name="vr_button" class="submit" value="View Result"></div>
</form>

<?php

include("connect.php");
session_start();

if (isset($_POST['vr_button'])) 
{
	$sem = $SESSION['sem'] = $_POST['sem'];
	$branch = $SESSION['branch'] = $_POST['branch'];
	$month = $SESSION['month'] = $_POST['month'];
	$year = $SESSION['year'] = $_POST['year'];

	$qry = "SELECT * FROM result WHERE sem = $sem and month = '$month' and year = $year and branch = '$branch';";

	$res = mysqli_query($conn, $qry);

	echo '<table class="vr_table">
	<tr>
		<td class="td_heading">Registration Number</td>
		<td class="td_heading">Total Marks</td>
		<td class="td_heading" colspan=12>Re-appears</td>
	</tr>
	';

	$code_table = strtolower($branch).$sem;

	while ($r = mysqli_fetch_array($res))
	{
		$qry2 = "SELECT code FROM $code_table;";

		$res2 = mysqli_query($conn, $qry2);

		echo '<tr class="vr_tr">
			<td class="vr_td">'.$r[5].'</td>
			<td class="vr_td">'.$r[6].'</td>';
			while ($r2 = mysqli_fetch_array($res2))
			{
				// print_r($r2);
				echo $r[7];
				if (in_array($r[7],$r2))

					echo 'checked';
				else 
		
					echo 'unchecked';
				
				// echo '<td class="vr_td"><input type="checkbox" name="code">'.$r2[0].'</td>';
			}
		echo '<td><button>Edit</button></td>';
		echo '</tr>';
	}
}

echo '<table>';

?>

</body>
</html>