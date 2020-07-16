	<?php
		echo 'aaaaaaaaaaaaaaaaaa';
	}

	if (isset($_POST['submit_button'])) {
		echo 'clickkkk';

		include("connect.php");
		echo 'aaaaaaaaaaaaaaaaaaaaaaaaaaa';

		echo $sem = $_SESSION["sem"];
		echo $type = $_SESSION["type"];
		echo $month = $_SESSION["month"];
		echo $year = $_SESSION["year"];

		@$rep = $_POST['sup'];
		$repair = array();
		if(!$rep=="")
		{

		foreach($rep as $r1) {
			array_push($repair, $r1);
		}

		$reg = $_POST['rno'];
		$register = array();

		foreach ($reg as $r) {
			array_push($register, $r);	
		}

		$reg_len = count($register);

		$marks = $_POST['marks'];
		$number = array();

		foreach($marks as $m)
		{
			array_push($number, $m);
		} 

		$num_len = count($number);


		for ($i = 0; $i < $reg_len; $i++) {

			$qry = "INSERT INTO result VALUES ('', $sem, '$type', '$month', $year, $register[$i], $marks[$i])";

			$rep_len = count($repair[$i]);

			// echo "repair of student ". $i;

			for ($j = 0; $j < $rep_len; $j++) {

				$sup = $repair[$i][$j];

				$qry2 = "INSERT INTO result VALUES ('', $sem, '$type', '$month', $year, $register[$i], 
				'$number[$i]', '$sup')";

				mysqli_query($conn, $qry2);
			}

			mysqli_query($conn, $qry);
		}
	}
	else 
	{

		$reg = $_POST['rno'];
		$register = array();

		foreach ($reg as $r) {
			array_push($register, $r);	
		}

		echo $reg_len = count($register);

		$marks = $_POST['marks'];
		$number = array();

		foreach($marks as $m)
		{
			array_push($number, $m);
		} 

		echo $num_len = count($number);


		for ($i = 0; $i < $reg_len; $i++) {

			echo $qry = "INSERT INTO result VALUES ('', $sem, '$type', '$month', $year, $register[$i], $marks[$i], '')";

			mysqli_query($conn, $qry);
		}

	}
	}

?>