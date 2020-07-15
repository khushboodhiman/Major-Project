<!DOCTYPE html>
<html>
<head>
	<title>Generate Provisional Form</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body>

	<?php include('header.html'); ?>

<form name="reg_form" method="post" action="prov_action.php">
	<label for="reg">Registration Number</label><input type="number" name="reg" id="reg">
	<input type="submit" name="submit" value="Generate Provisional" class="submit">
</form>

<!-- <?php

// require('fpdf\fpdf.php');
// $pdf = new PDF();
// $pdf->AddPage();
// $pdf->SetFont('Arial','B',15);
// $pdf->Output();

?> -->

</body>
</html>