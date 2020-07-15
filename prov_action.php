<!DOCTYPE html>
<html>
<head>
	<title>Provisional</title>
	<link rel="stylesheet" type="text/css" href="provisional.css">
	<link rel="stylesheet" type="text/css" href="custom.css">
	<link href="https://fonts.googleapis.com/css?family=Arimo|Montserrat|Nunito|Roboto&display=swap" rel="stylesheet">
</head>
<body>
<div class="prov_bg">
<?php

include('connect.php');

$reg = $_POST['reg'];

$qry = "SELECT * FROM record WHERE reg = $reg";
$r = mysqli_query($conn, $qry);

while($res = mysqli_fetch_array($r)) {
	$name = $res['name'];
	$f_name = $res['f_name'];
	$m_name = $res['m_name'];
	$dep = $res['branch'];
	$dob1 = $res['dob'];
}

$dob_year = str_split($dob1, 4);

$dob = $dob_year[2].$dob_year[1].$dob_year[0];

$session_start = 2000 + substr($reg, 0, 2);
$session_end = $session_start+3;

if ($dep == 'CSE' or 'Computer' or 'computer') { $branch = 'Computer'; }
else if ($dep == 'ME' or 'Mechanical' or 'mechanical') { $branch = 'Mechanical'; }
else if ($dep == 'ECE' or 'Electronics' or 'electronics') { $branch = 'Electrical'; }
else if ($dep == 'EE' or 'Electrical' or 'electrical') { $branch = 'Electronic'; }
else if ($dep == 'AUTO' or 'Automobile' or 'automobile') { $branch = 'Auto-Mobile'; }
else if ($dep == 'CIVIL' or 'Civil' or 'civil') { $branch = 'Civil'; }


for($s = 1; $s <= 6; $s++) {

	$qry2 = "SELECT month,year FROM result WHERE reg = $reg AND rep = 0 AND sem = ".$s;

	$r2 = mysqli_query($conn, $qry2);

	$c = 0;

	while($res2 = mysqli_fetch_array($r2)) {
		$month_year = $res2[0].' - '.$res2[1];
		$passing_month_year[] = $month_year;
		$c++;
	}

	$qry4 = "SELECT sum(marks) FROM result WHERE reg = $reg AND sem = $s";

	$res4 = mysqli_query($conn, $qry4);

	while($r4 = mysqli_fetch_array($res4)) {
		$obt_marks[] = $r4[0];
	}
}

$weighted_marks = array();
$weighted_marks[] = ($obt_marks[0]+$obt_marks[1]) / 100 * 25;
$weighted_marks[] = ($obt_marks[2]+$obt_marks[3]) / 100 * 50;
$weighted_marks[] = ($obt_marks[4]+$obt_marks[5]);
	
// print_r($Weighted_marks);

$overall = number_format((array_sum($weighted_marks) / 3193.75) * 100, 2);

if ($overall > 70) { $div = "Ist Div with Honours"; }
elseif($overall > 60 && $overall < 50) { $div = "Ist Div"; }
elseif($overall > 50 && $overall < 40) { $div = "IInd Div"; }
else { $div = "IIIrd Div"; }
?>
<pre>












																	<?php echo date("d/m/Y"); ?>


									

									<?php echo $name; ?>



				    <?php echo $f_name; ?>				  <?php echo $m_name; ?>



			   <?php echo $dob;?>		   				<?php echo $reg; ?>



				<?php echo $session_start; ?>					<?php echo $session_end; ?>



						<?php echo $branch; ?>



												May - <?php echo $session_end; ?>



    <?php echo $div; ?>






			<?php echo $passing_month_year[0]; ?>			<?php echo $obt_marks[0]; ?> / 875


			<?php echo $passing_month_year[1]; ?>			<?php echo $obt_marks[1]; ?> / 850						<?php echo $weighted_marks[0]; ?> / 431.25


			<?php echo $passing_month_year[2]; ?>			<?php echo $obt_marks[2]; ?> / 875


			<?php echo $passing_month_year[3]; ?>			<?php echo $obt_marks[3]; ?> / 850						<?php echo $weighted_marks[1]; ?> / 862.5


			<?php echo $passing_month_year[4]; ?>			<?php echo $obt_marks[4]; ?> / 1000


			<?php echo $passing_month_year[5]; ?>			<?php echo $obt_marks[5]; ?> / 900						<?php echo $weighted_marks[2]; ?> / 1900


															<?php echo array_sum($weighted_marks); ?> / 3193.75


																	<?php echo $overall; ?>
</pre>
</body>
</div>
</html>
