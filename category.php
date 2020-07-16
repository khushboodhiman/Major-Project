<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fetch Values(Category)</title>
    <link rel="stylesheet" href="custom.css">
  </head>
  <body>
    <?php include('header.html'); ?>
    <form class="" action="" method="post">
      <div class="main">
        <span class="select">Select the Category:</span>

        <input  class="radio" type="radio" name="cat" value="SC" required><span class="radio_label">Scheduled Caste</span><br>
        <input type="radio" class="radio" name="cat" value="ST" required><span class="radio_label">Scheduled Tribe</span> <br>
        <input type="radio" name="cat" value="OBC" class="radio"required><span class="radio_label">Other Backward Class </span><br>
        <input type="radio" name="cat" value="General" class="radio" required><span class="radio_label">General</span> <br>
        <input type="radio" name="cat" value="Fee Weaver" class="radio"><span class="radio_label">Fee Waiver</span><br>

      </div>
      <div class="selectbranch">
        <span class="radio">Select The Branch:</span><input class="radio" type="radio" name="bran" value="Computer" required><span class="radio_label">Computer Branch </span><br>
                            <input type="radio" name="bran" value="Electrical" class="radio" required><span class="radio_label">Electrical Branch</span><br>
      </div>

        <button type="submit" class="submit" name="button">View Records</button>

      </div>
      </form>
  </body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="clerk";
$connection=mysqli_connect($servername,$username,$password,$dbname);
if ($connection) {
  if (isset($_POST['button'])) {
        $cat=$_POST['cat'];
        $bran=$_POST['bran'];
        $query="SELECT * FROM record WHERE category='$cat' and branch='$bran'";
        $data=mysqli_query($connection,$query);
        echo '<div class="view">';
        while ($dat = mysqli_fetch_array($data)) {

          $dob_year = str_split($dat[6], 4);
          $dob = $dob_year[2].$dob_year[1].$dob_year[0];
          
          echo '<table>';
          echo '<tr><td><label class="lab">Registeration number</label></td>'. '<td><label class="val">'.$dat[2].'</label></td></tr><br>';
          echo "<tr><td><label class='lab'>Name</label></td>". '<td><label class="val">'. $dat[1]. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Father_Name</label></td>' . '<td><label class="val">'. $dat[4]. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Mother_Name</label></td>' . '<td><label class="val">'. $dat[5]. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Date_of_Birth</label></td>' . '<td><label class="val">'. $dob. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Class_Roll_No</label></td>' . '<td><label class="val">'. $dat[7]. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Branch</label></td>' . '<td><label class="val">'. $dat[8]. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Semester</label></td>' . '<td><label class="val">'. $dat[3]. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Category</label></td>' . '<td><label class="val">'. $dat[9]. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Address</label></td>' . '<td><label class="val">'. $dat[12]. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Phone number</label></td>' . '<td><label class="val">'. $dat[10]. '</label></td></tr><br>';
          echo '<tr><td><label class="lab">Gender</label></td>' . '<td><label class="val">'. $dat[13]. '</label></td></tr><br>';
          echo '</table>';
        }
}
}
else {
echo "Not connected";
}?>
