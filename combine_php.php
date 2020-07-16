<?php 
	echo 'helo';

	include("connect.php");
	session_start();

	echo $sem = $SESSION['sem'] = $_POST['sem'];
	echo $branch = $SESSION['branch'] = $_POST['branch'];
	echo $month = $SESSION['month'] = $_POST['month'];
	echo $year = $SESSION['year'] = $_POST['year'];

	$qry = "SELECT * FROM result WHERE sem = $sem and month = '$month' and year = $year and branch = '$branch';";

	$res = mysqli_query($conn, $qry);

	echo '<form method="post" action="" class="res_form">';
	echo '<table class="vr_table">
	<tr>
		<td class="td_heading">Registration Number</td>
		<td class="td_heading">Total Marks</td>
		<td class="td_heading">Re-appears</td>
	</tr>
	';
	while ($r = mysqli_fetch_array($res))
	{
	echo '<tr class="vr_tr">
		<td class="vr_td">'.$r[5].'</td>
		<td class="vr_td">'.$r[6].'</td>
		<td class="vr_td">'.$r[7].'</td>
		<td><input type="submit" name="edit" class="submit" value="Edit">';
	echo '</tr>';
	}
}

echo '<table>
</form>';

?>