  <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Student data </title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" href="custom.css">

  </head>
  <body>
    <?php
    include('header.html');
    ?>

    <form class="general_form" action="" method="post">
      <label>Insert the Student Data</label>
      <div class="regnumber"><label class="registration">Registeration Number :</label> <input class="number" type="text" name="regno" value="" required><br></div>
      <div class="studentandinput"><label class="stuname">Name :</label> <input class="studname" type="text" name="sname" value="" required><br></div>
      <div class="fatherandinput"><label class="fatname">Father Name :</label> <input class="fathname" type="text" name="fname" value="" required><br></div>
      <div class="motherandinput"><label class="motname">Mother Name :</label> <input class="mothname" type="text" name="mname" value="" required><br></div>
      <div class="dateinput"><label class="dob">Date of Birth :</label> <input class="sdob" type="date" name="datee" value="" required><br></div>
      <div class="rollnoinput"><label class="rollno">Class Roll No :</label> <input class="srollno" type="text" name="roll" value="" required><br></div>

      <div class="branchinput"><label class="branch">Branch :</label> <input class="radio" type="radio" name="bran" value="Computer" required><label class="radio_label">Computer</label><br>
              <input type="radio" name="bran" class="radio" value="Electrical"><label class="radio_label">Electrical</label><br>
              <input type="radio" name="bran" class="radio" value="Automobile"><label class="radio_label">Automobile</label><br>
              <input type="radio" name="bran" class="radio" value="Electronics"><label class="radio_label">Electronics</label><br>
              <input type="radio" name="bran" class="radio" value="Mechanical"><label class="radio_label">Mechanical</label><br>
              <input type="radio" name="bran" class="radio" value="Civil"><label class="radio_label">Civil</label><br></div>

      <div class="semesterinput"><label class="sem">Semester:</label><input type="radio" name="sem" class="radio" value="1" required><label class="radio_label">1</label><br>
                <input type="radio" name="sem" value="2" class="radio" required><label class="radio_label">2</label><br>
                <input type="radio" name="sem" value="3" class="radio" required><label class="radio_label">3</label><br>
                <input type="radio" name="sem" value="4" class="radio" required><label class="radio_label">4</label><br>
                <input type="radio" name="sem" value="5" class="radio" required><label class="radio_label">5</label><br>
                <input type="radio" name="sem" value="6"  class="radio" required><label class="radio_label">6</label><br></div>

      <div class="categoryinput"><label class="cate">Category:</label> <input type="radio" class="radio" name="cat" value="SC" required><label class="radio_label">Scheduled Caste</label>
                <input type="radio" name="cat" value="ST" class="radio" required><label class="radio_label">Scheduled Tribe</label>
                <input type="radio" name="cat" value="OBC" class="radio" required><label class="radio_label">Other backward class</label>
                <input type="radio" name="cat" value="General" class="radio" required><label class="radio_label">General</label>
                <input type="radio" name="cat" value="General" class="radio" required><label class="radio_label">Fee Waiver</label><br></div>
      <div><label>Email Address</label><input type="email" name="email"><br></div>
      <div class="addressinput"><label class="add">Address</label> <input type="text" class="addre" name="add" value="" required> <br></div>
      <div class="phonenumberinput"><label class="Pho">Phone Number</label><input class="pnumber" type="integer" name="pno" value="" required> <br></div>
      <div class="gender"><label class="gen">Gender</label> <input type="radio" class="radio" name="gen" value="Male"><label class="radio_label">Male</label>
              <input type="radio" name="gen" class="radio" value="Female"><label class="radio_label">Female</label> <br></div>
      <div class="buttoninput"><button type="submit" class="submit" name="buttonn">Submit</button></div>
    </form>
    
  </body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="clerk";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if ($conn)
{
  if (isset($_POST['buttonn']))
   {
         $reg=$_POST['regno'];
         $name=$_POST['sname'];
         $fname=$_POST['fname'];
         $mname=$_POST['mname'];
         $dob=$_POST['datee'];
         $r_no=$_POST['roll'];
         $branch=$_POST['bran'];
         $sem=$_POST['sem'];
         $cat=$_POST['cat'];
         $email = $_POST['email'];
         $addr=$_POST['add'];
         $phone=$_POST['pno'];
         $gender=$_POST['gen'];
         echo $query="INSERT INTO record VALUES('', '$name', $reg, $sem, '$fname', '$mname', '$dob', $r_no, '$branch', '$cat', $phone, '$email', '$addr', '$gender')";
         $data=mysqli_query($conn,$query);
         if ($data)
         {

           echo "Data Inserted";
         }
         else {
           echo "Data Not Inserted";
       }

    }
}
else {
  die("Connection Aborted".mysqli_connect_error());
}

?>
