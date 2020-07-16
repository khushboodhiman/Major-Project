<?php
	}

	if (isset($_POST['store'])) {

		include("connect.php");

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

		// print_r($repair);

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

			echo $rep_len = count($repair[$i]);

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









		<?php 

		while ($res = mysqli_fetch_array($r)) {

			$qry1 = "SELECT * FROM $table_name";
			$r1 = mysqli_query($conn, $qry1);

			echo '<tr><td class="input"><input type=text name="rno[]" readonly value="'.$res[2].'"></td>';
			echo '<td class="input"><input type="number" name="marks[]" tabindex="'.$i.'"></td>';

			while ($res1 = mysqli_fetch_array($r1)) {
				echo '<td class="supplies">'.$res1[3].'<input type="checkbox" name="sup['.$counter.'][]" value="'.$res1[3].'"></td>';
			}

			$counter++;
		}
	}

		?>