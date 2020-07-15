<!DOCTYPE html>
<html>
<head>
	<title>Insert Class</title>
</head>
<body>

<form method="post" name="rows_form">
	<label for="rows">Number of records to be entered </label>
	<input type="number" name="rows">
	<input type="submit" name="submit" value="Get InputBoxes">
</form>

<?php

if (isset($_POST['submit'])) {

	$rows = $_POST['rows'];

	include('connect.php');

	echo "<form method='post'>
	<table>
	<tr>
		<td>Id</td>
		<td>Name</td>	
		<td>Registration Number</td>	
		<td>Father's Name</td>	
		<td>Mother's Name</td>	
		<td>Date of Birth</td>	
		<td>Class Roll Number</td>	
		<td>Category</td>	
		<td>Mobile</td>	
		<td>E-mail</td>	
		<td>Address</td>	
		<td>Gender</td>	
	";			

	for ($i = 1; $i <= $rows; $i++) {
		echo "<tr>
				<td>". $i ."</td>
				<td><input type='text' name='name[]' class='name". $i ."''></td>
				<td><input type='number' name='reg[]' class='reg". $i ."'></td>
				<td><input type='text' name='f_name[]' class='f_name". $i ."'></td>
				<td><input type='text' name='m_name[]' class='m_name". $i ."'></td>
				<td><input type='date' name='dob[]' class='dob". $i ."'></td>
				<td><input type='number' name='class_rno[]' class='class_rno". $i ."'></td>
				<td><select name='category[]' class='category". $i ."'>
						<option>General</option>
						<option>Backward Class</option>
						<option>Scheduled Class</option>
						<option>Fee-waiver</option>
				</select></td>
				<td><input type='email' name='email[]' class='email". $i ."'></td>
				<td><input type='number' name='mob[]' class='mob". $i ."'></td>
				<td><input type='text' name='addr[]' class='addr". $i ."'></td>
				<td><select name='gender[]' class='gender". $i ."'>
							<option>Male</option>
							<option>Female</option>
				</select></td>
		</tr>";
	}
	echo '						
	</table>
	<input type="submit" name="enter_record" value="Enter Records">
	</form>';

}

if (isset($_POST['enter_record'])) {
	
}

?>

</body>
</html>