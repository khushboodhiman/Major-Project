<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete Semester</title>
    <link rel="stylesheet" type="text/css" href="custom.css">
  </head>
  <body>
    <?php include('header.html'); ?>
    <form class="" action="" method="post">

      <label>Semester </label>
    <select name='sem' class="inputs">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
    </select><br>
      
      <button type="submit" class="submit" name="button">Submit</button>
    </form>
  </body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="clerk";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if ($conn) {
  if (isset($_POST['button'])) {
    $sem=$_POST['sem'];
    $sql="DELETE FROM record WHERE sem=$sem";
    $data=mysqli_query($conn,$sql);
    if ($data) {
      echo "Data Deleted";
    }
    else {
      echo "Data Not Deleted";
    }
  }
}
else {
  echo "Connection Aborted";
}

 ?>
