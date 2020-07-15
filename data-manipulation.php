<?php

	include("connect.php");

if(isset($_POST['fetchResult'])){

	$sem = $_POST['sem'];
	$branch = $_POST['branch'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	

	$qry = "SELECT * FROM result where sem = $sem && branch = '$branch' && month = '$month' && year = $year";

	$res = mysqli_query($conn, $qry);
	$result = array();

	$id = 1;

	while($r = mysqli_fetch_array($res)) {
		echo "<tr id='tr$id' style='border-bottom: solid 1px #fff;'>";
		echo "<td id='reg$id' class='reg_td'> ".$r['reg']." </td>";
		echo "<td id='marks$id' class='marks_td'> ".$r['marks']." </td>";
		echo "<td id='max_marks$id' class='max_marks_td'> ".$r['max_marks']." </td>";

		echo "<td id='rep$id' class='rep_td'> ".$r['rep']." </td>";
		echo "<td id='td$id'><button id='edit$id' class='edit' onclick='checker()'> Edit </button></td>";
		echo "<td id='save$id'></td";
		echo '</tr>';
		$id++;
	}


}

if(isset($_POST['code_query'])){

	$table_name = $_POST['branch'].$_POST['sem'];

	$qry1 = "SELECT code FROM $table_name";

	$r1 = mysqli_query($conn, $qry1);

	$sup = array();

	while ($res1 = mysqli_fetch_array($r1)) {
		array_push($sup, $res1[0]);
	}

	echo json_encode($sup);
}

if (isset($_POST['Save'])){
	echo "save result";
	echo $marks = $_POST['marks'];
	$re_appear = $_POST['re_appear'];
	$reg = $_POST['reg'];
	$branch = $_POST['branch'];
	$month = $_POST['month'];
	$sem = $_POST['sem'];
	$year = $_POST['year'];
	

	echo $qry = "UPDATE result SET marks = '$marks', rep = '$re_appear' WHERE reg = $reg AND branch = '$branch' AND month = '$month' AND sem = $sem AND year = $year";

	mysqli_query($conn, $qry);

}



?>
