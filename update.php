<!DOCTYPE html>
<html>
<head>
	<title>Update Data of Student</title>
	<link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body>
	<?php include('header.html'); ?>
	<h1 class="Heading">Update The Data of Student</h1>
	<form class="main" method="post">
		
		<label for="regno">Registeration number</label> <input type="text" name="regno" id="reg"><br>
		<button class="submit" type="submit" name="buttonn">Submit</button><br>
		<?php
			$servername="localhost";
			$username="root";
			$password="";
			$dbname="clerk";
			$connection=mysqli_connect($servername,$username,$password,$dbname);
			if (isset($_POST['buttonn'])) {
			    $reg=$_POST['regno'];
		        $query="SELECT * FROM record WHERE reg='$reg'";
		        $data=mysqli_query($connection,$query);
		        echo '<div class="view">';
		        while ($dat = mysqli_fetch_array($data)) {
		        	$register=$dat[2];
		        	$name = $dat[1];
		        	$fname=$dat[4];
		        	$mname=$dat[5];
		        	$dob=$dat[6];
		        	$roll=$dat[7];
		        	$branch=$dat[8];
		        	$sem=$dat[3];
		        	$category=$dat[9];
		        	$address=$dat[12];
		        	$number=$dat[10];
			$email=$dat[11];
		        	$gender=$dat[13];
		          echo '<table border="5"  cellspacing="3">';
		          echo "<tr><td><label class='lab'>Registeration number</label></td>". "<td><input type='number' name='registerno' value='$register'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Name</label></td>". "<td><input type='text' name='studentname' value='$name'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Father_Name</label></td>" . "<td><input type='text' name='fathername' value='$fname'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Mother_Name</label></td>" . "<td><input type='text' name='mothername' value='$mname'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Date_of_Birth</label></td>" . "<td><input type='date' name='dateofbirth' value='$dob'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Class_Roll_No</label></td>" . "<td><input type='number' name='rollno' value='$roll'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Branch</label></td>" . "<td><input type='text' value='$branch' name='branch'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Semester</label></td>" . "<td><input type='number' value='$sem' name='semester'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Category</label></td>" . "<td><input type='text' value='$category' name='category'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Address</label></td>" . "<td><input type='text' value='$address' name='address'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Phone number</label></td>" . "<td><input type='number' value='$number' name='pnumber'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Gender</label></td>" ."<td><input type='text' name='gender' value='$gender'></td></tr><br>";
		          echo "<tr><td><label class='lab'>Email</label></td>" ."<td><input type='text' name='email' value='$email'></td></tr><br>";
		          echo "<button type='submit' name='update'>Update Data</button>";
		          echo '</table>';
		        }
		}
		?>
			<?php
			  if (isset($_POST['update'])) {
			         $sn=$_POST['studentname'];
			         $fn=$_POST['fathername'];
			         $mn=$_POST['mothername'];
			         $da=$_POST['dateofbirth'];
			         $rn=$_POST['rollno'];
			         $bh=$_POST['branch'];
			         $se=$_POST['semester'];
			         $ca=$_POST['category'];
			         $add=$_POST['address'];
			         $phone=$_POST['pnumber'];
			         $email=$_POST['email'];
			         $query="UPDATE record SET name='$sn',f_name='$fn',m_name='$mn',dob='$da',class_rno='$rn',branch='$bh',sem='$se',email='$email', category='$ca',addr='$add',mob='$phone'";
			         $data=mysqli_query($connection,$query);
			         
			     
			 	}
			
			 	
			   ?>
	</form>
</body>
</html>