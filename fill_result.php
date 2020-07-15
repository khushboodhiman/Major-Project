<!DOCTYPE html>
<html>
<head>
	<title>Fill Result</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>

	<?php
		include 'header.html';
	?>

	<form method="post" action="fillResult.php" class="general_form">
	<div>
		<label>Semester </label>
		<select name='sem' class="inputs">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
		</select><br>
	</div>

	<div>
		<label class="entry">Branch</label>
		<select name="branch" class="inputs">
			<option>CSE</option>
			<option>ECE</option>
			<option>EE</option>
			<option>ME</option>
			<option>AUTO</option>
			<option>CIVIL</option>
		</select>
	</div>
		
		<label>Type </label>
		<input type="radio" name="type" value="regular" class="radio" id="regular"> <label for="regular" class="radio_label">Regular</label> 
		<input type="radio" name="type" value="re-appear" class="radio" id="re-appear"> <label for="re-appear" class="radio_label">Re-appear</label> <br>

	<div>
		<label class="entry">Exam </label>
		<select name='month' class="exam">
			<option>   Nov </option>
			<option>   May </option>
		</select>

		<?php
			echo '<select name="year"  class="exam">';
			echo $current_year = date("Y");
			$min_year = 2000;
			for ($current_year = date("Y"); $current_year >= $min_year; $current_year--) {
				echo '<option>'.$current_year.'</option>';
			}
		?>
	</div>
		<input type="submit" name="fill_result" value="Fill Result" class="submit"><br>
	</form>
	

</body>
</html>