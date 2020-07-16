  <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="exam form">
	<meta name="keywords" content="exam form, professional, clerk project">
	<meta name="author" content="Harjot Singh">
	<title>Exam Form</title>
	<link rel="stylesheet" type="text/css" href="sampleexam.css">
</head>
<body>

<?php
if (isset($_POST['submit'])) {

include('connect.php');

$reg = $_POST['reg'];

$qry = "SELECT * FROM record WHERE reg = $reg";

$r = mysqli_query($conn, $qry);

while ($res = mysqli_fetch_array($r)) {
	$name = $res['name'];
	$fname = (string)$res['f_name'];
	$sem = $res['sem'];
	$course = $res['branch'];

}

}
?>

<form>
	<header>
		<div class="container">
			<div class="photo"><img src="psbte.png" width="100" height="100"></div>

			<div class="txt"><span><b>THE PUNJAB STATE BOARD OF TECHNICAL EDUCATION & INDUSTRIAL TRAINING</b></span></div>

			<div class="txt1"><span><b>PLOT NO. 1-A, SECTOR 36-A, CHANDIGARH - 160 036</b></span></div>

			<div class="border"></div>

			<div class="form"><span><b>EXAMINATION FORM</b></span></div>

			<div class="context"><span><b>Note : Use Block Capitals only.</b>
			<br>- Examination Fee : Rs 610/- per semester (per year for annual courses)
			<br>- For Subject Codes visit Subject Code List under Diploma link on Board’s websites : www.punjabteched.net OR www.punjabteched.com
			<br>- Failure to fill in any of the columns may result in non-issue of roll number or delay in declaration of result. Candidate shall be permitted to <span class="linb2">appear only in those subjects which are listed in this form. <b>(Maximum of 12 Theory papers are allowed in an examination.)</b></span>
			<br>- No addition/alteration shall be allowed after the form has been received in the office of the Board.</span></div>

			<div class="reg"><span>1. Registration No.<input class="regb" type="text" value='<?php echo $reg ?>'></span></div>

			<div class="mot"><span>2. Month</span></div>
			<?php
				$month = date('m');
				if ($month == 11 || 12) { 
					echo '<div class="may"><input type="radio" name="month" checked="0">May</div>';
					echo '<div class="dec"><input type="radio" name="month" checked="1">December</div>';
				}
				else if ($month == 4 || 5) {
					echo '<div class="may"><input type="radio" name="month" checked="1">May</div>';
					echo '<div class="dec"><input type="radio" name="month" checked="0">December</div>';
				}
			?>

			


			<div class="yr">Year : <input class="tex" name="Year" value=<?php echo date('Y'); ?>></div>

			<div class="nam">3. Name <input type="text" class="namb" value='<?php echo $name; ?>'></div>

			// <div class="fath">4. Father's Name <input type="text" class="fb" name="Fathername" value='<?php echo $fname;?>'></div>

			<div class="ins"><span>5. Institute <input class="insb" name="Institute" value="GNDPC"></span></div>

			<div class="cor"><span>6. Course <input class="corb" name="Course" value='<?php echo $course; ?>'></span></div>

			<div class="the"><span>7. Total No. of Theory Subjects (all Semesters) : <input class="theb" name="Theory"></span></div>

			<div class="max"><b><span>(Maximum of 12 Theory papers are allowed in an examination)</span></div>

			<div class="rc">8. Regular Class <input class="rcb" name="semester" value='<?php echo $sem; ?>'></div>

			<?php
				$table = 'cse'.$sem;
				$qry1 = "SELECT * FROM $table";
				$r = mysqli_query($conn, $qry1);
				while ($res = mysqli_fetch_array($r)) {
					$sub[] = $res[3];
				}
			?>

			<div class="sub">
				<form>
					<legend>

					<div class="sub1">Subject : 1</div>
					<p><input type="number" class="sb" name="subject1" value=<?php echo $sub[0] ?>></p></div>

					<div class="sub2">Subject : 2</div>
					<p><input type="number" class="sb2" name="subjects" value=<?php echo $sub[1] ?>></p>
					
					<div class="sub3">Subject : 3</div>
					<p><input type="number" class="sb3" name="subjects" value=<?php echo $sub[2] ?>></p>	

					<div class="sub4">Subject : 4</div>
					<p><input type="number" class="sb4" name="subjects" value=<?php echo $sub[3] ?>></p>

					<div class="sub5">Subject : 5</div>
					<p><input type="number" class="sb5" name="subjects" value=<?php echo $sub[4] ?>></p>

					<div class="sub6">Subject : 6</div>
					<p><input type="number" class="sb6" name="subjects" value=<?php echo $sub[5] ?>></p>

					<div class="sub7">Subject : 7</div>
					<p><input type="number" class="sb7" name="subjects" value=<?php echo $sub[6] ?>></p>

					<div class="sub8">Subject : 8</div>
					<p><input type="number" class="sb8" name="subjects" value=<?php echo $sub[7] ?>></p>

					<div class="sub9">Subject : 9</div>
					<p><input type="number" class="sb9" name="subjects" value=<?php echo $sub[8] ?>></p>

					<div class="sub10">Subject : 10</div>
					<p><input class="sb10" name="subjects" value=<?php echo $sub[9] ?>></p>

					<div class="sub11">Subject : 11</div>
					<p><input type="number" class="sb11" name="subjects" value=<?php echo $sub[10] ?>></p>

					<div class="sub12">Subject : 12</div>
					<p><input type="number" class="sb12" name="subjects" value=<?php echo $sub[11] ?>></p>

					</legend>
				</form>

			<div class="repc"> 9. Reappear Class<input class="repb" name="compartment"></div>

			<div class="rpsub">
				<form>
					<legend>

					<div class="repsub1">Subject : 1</div>
					<p><input type="number" class="rpsb1" name="subject1"></p>

					<div class="repsub2">Subject : 2</div>
					<p><input type="number" class="rpsb2" name="subject1"></p>

					<div class="repsub3">Subject : 3</div>
					<p><input type="number" class="rpsb3" name="subject1"></p>

					<div class="repsub4">Subject : 4</div>
					<p><input type="number" class="rpsb4" name="subject1"></p>

					<div class="repsub5">Subject : 5</div>
					<p><input type="number" class="rpsb5" name="subject1"></p>

					<div class="repsub6">Subject : 6</div>
					<p><input type="number" class="rpsb6" name="subject1"></p>

					<div class="repsub7">Subject : 7</div>
					<p><input type="number" class="rpsb7" name="subject1"></p>

					<div class="repsub8">Subject : 8</div>
					<p><input type="number" class="rpsb8" name="subject1"></p>

					<div class="repsub9">Subject : 9</div>
					<p><input type="number" class="rpsb9" name="subject1"></p>

					<div class="repsub10">Subject : 10</div>
					<p><input type="number" class="rpsb10" name="subject1"></p>

					<div class="repsub11">Subject : 11</div>
					<p><input type="number" class="rpsb11" name="subject1"></p>

					<div class="repsub12">Subject : 12</div>
					<p><input type="number" class="rpsb12" name="subject1"></p>
	
					</legend>
				</form>

			</div>

			<div class="repc10"> 10. Reappear Class<input class="repb10" name="compartment10"></div>

			<div class="re10">
				<form>
					<legend>

					<div class="cong1">Subject : 1</div>
					<p><input type="number" class="congb1" name="subject1"></p>

					<div class="cong2">Subject : 2</div>
					<p><input type="number" class="congb2" name="subject1"></p>

					<div class="cong3">Subject : 3</div>
					<p><input type="number" class="congb3" name="subject1"></p>

					<div class="cong4">Subject : 4</div>
					<p><input type="number" class="congb4" name="subject1"></p>

					<div class="cong5">Subject : 5</div>
					<p><input type="number" class="congb5" name="subject1"></p>

					<div class="cong6">Subject : 6</div>
					<p><input type="number" class="congb6" name="subject1"></p>

					<div class="cong7">Subject : 7</div>
					<p><input type="number" class="congb7" name="subject1"></p>

					<div class="cong8">Subject : 8</div>
					<p><input type="number" class="congb8" name="subject1"></p>

					<div class="cong9">Subject : 9</div>
					<p><input type="number" class="congb9" name="subject1"></p>

					<div class="cong10">Subject : 10</div>
					<p><input type="number" class="congb10" name="subject1"></p>

					<div class="cong11">Subject : 11</div>
					<p><input type="number" class="congb11" name="subject1"></p>

					<div class="cong12">Subject : 12</div>
					<p><input type="number" class="congb12" name="subject1"></p>

					</legend>
				</form>
			</div>

			<div class="repc2"> 11. Reappear Class<input class="repb2" name="compartment2"></div>

			<div class="re2">
				<form>
					<legend>
					<div class="exp1">Subject : 1</div>
					<p><input type="number" class="expb1" name="subject1"></p>

					<div class="exp2">Subject : 2</div>
					<p><input type="number" class="expb2" name="subject1"></p>

					<div class="exp3">Subject : 3</div>
					<p><input type="number" class="expb3" name="subject1"></p>

					<div class="exp4">Subject : 4</div>
					<p><input type="number" class="expb4" name="subject1"></p>

					<div class="exp5">Subject : 5</div>
					<p><input type="number" class="expb5" name="subject1"></p>

					<div class="exp6">Subject : 6</div>
					<p><input type="number" class="expb6" name="subject1"></p>

					<div class="exp7">Subject : 7</div>
					<p><input type="number" class="expb7" name="subject1"></p>

					<div class="exp8">Subject : 8</div>
					<p><input type="number" class="expb8" name="subject1"></p>

					<div class="exp9">Subject : 9</div>
					<p><input type="number" class="expb9" name="subject1"></p>

					<div class="exp10">Subject : 10</div>
					<p><input type="number" class="expb10" name="subject1"></p>

					<div class="exp11">Subject : 11</div>
					<p><input type="number" class="expb11" name="subject1"></p>

					<div class="exp12">Subject : 12</div>
					<p><input type="number" class="expb12" name="subject1"></p>

					</legend>
				</form>
			</div>

			<div class="vice"> 12. Reappear Class<input class="viceb2" name="compartment3"></div>

			<div class="ava">
				<form>
					<legend>
					<div class="ava1">Subject : 1</div>
					<p><input type="number" class="avab1" name="subject1"></p>

					<div class="ava2">Subject : 2</div>
					<p><input type="number" class="avab2" name="subject1"></p>

					<div class="ava3">Subject : 3</div>
					<p><input type="number" class="avab3" name="subject1"></p>

					<div class="ava4">Subject : 4</div>
					<p><input type="number" class="avab4" name="subject1"></p>

					<div class="ava5">Subject : 5</div>
					<p><input type="number" class="avab5" name="subject1"></p>

					<div class="ava6">Subject : 6</div>
					<p><input type="number" class="avab6" name="subject1"></p>

					<div class="ava7">Subject : 7</div>
					<p><input type="number" class="avab7" name="subject1"></p>

					<div class="ava8">Subject : 8</div>
					<p><input type="number" class="avab8" name="subject1"></p>

					<div class="ava9">Subject : 9</div>
					<p><input type="number" class="avab9" name="subject1"></p>

					<div class="ava10">Subject : 10</div>
					<p><input type="number" class="avab10" name="subject1"></p>

					<div class="ava11">Subject : 11</div>
					<p><input type="number" class="avab11" name="subject1"></p>

					<div class="ava12">Subject : 12</div>
					<p><input type="number" class="avab12" name="subject1"></p>

					</legend>
				</form>
			</div>

			<div class="orc"> 13. Reappear Class<input class="orcb" name="compartment4"></div>

			<div class="las">
				<form>
					<legend>
					<div class="las1">Subject : 1</div>
					<p><input type="number" class="lasb1" name="subject1"></p>

					<div class="las2">Subject : 2</div>
					<p><input type="number" class="lasb2" name="subject1"></p>

					<div class="las3">Subject : 3</div>
					<p><input type="number" class="lasb3" name="subject1"></p>

					<div class="las4">Subject : 4</div>
					<p><input type="number" class="lasb4" name="subject1"></p>

					<div class="las5">Subject : 5</div>
					<p><input type="number" class="lasb5" name="subject1"></p>

					<div class="las6">Subject : 6</div>
					<p><input type="number" class="lasb6" name="subject1"></p>

					<div class="las7">Subject : 7</div>
					<p><input type="number" class="lasb7" name="subject1"></p>

					<div class="las8">Subject : 8</div>
					<p><input type="number" class="lasb8" name="subject1"></p>

					<div class="las9">Subject : 9</div>
					<p><input type="number" class="lasb9" name="subject1"></p>

					<div class="las10">Subject : 10</div>
					<p><input type="number" class="lasb10" name="subject1"></p>

					<div class="las11">Subject : 11</div>
					<p><input type="number" class="lasb11" name="subject1"></p>

					<div class="las12">Subject : 12</div>
					<p><input type="number" class="lasb12" name="subject1"></p>

					</legend>
				</form>
			</div>

			<p><span class="fee">14. Fee Deposited </b>
				
				<span class="rs">: Rs.</span>

			</span>
			
			<input class="feeb" name="feebox" value="760">
			
			<span class="date">Date :</span>
			
			<input class="dat" value=<?php echo date('d/m/Y'); ?>></p>

			<div class="feeinw">Fees in words :Rs.<input class="fe" name="words" value="Seven Hundred Sixty Only"><span class="sig">(Signature of the Candidate)</span></div>

			<div class="cert"><b><u>CERTIFICATE BY THE PRINCIPAL</u></b></div>

			<div class="line1"><p>1. Certified that <input type="text" class="candin" name="candidate Name" value='<?php echo $name; ?>'> is /was a bonafide student of this Institution and the particulars given above by the candidate are correct to <span class="linb">the best of my knowledge and office record.<br></span>
			<br>2. Certified that the conduct of the candidate is/was <input class="candin2" value="good"> and he/she has not been barred from sitting in the examination(s).<br>
			<br>3. The Roll No. Slip shall be delivered to the candidate only if he/she is eligible to appear in the Examination under the relevant Examination Rules.<br>
			<br><b>4. Certified that the student is not appearing in more than 12 theory subject papers.</b></p>
			</div>

			<div class="date2">Date : <input class="datlas" value=<?php echo date('d/m/Y') ?>> <span class="seal">(with seal of the Institution)</span><span class="pric"> Signature of the Principal</span></div>

			<div class="rcb2"></div>

		</div>
	</header>

</form>
</body>
</html>	