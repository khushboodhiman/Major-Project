<html>
<head>
<title>Class Data Insert</title>
<style>
*
{
    margin:0;
    padding: 0;
    text-decoration: none;
}
th 
{
    width: 200px;
    margin-left: 155px;
    border: 1px black solid;
} 
input
{
width:90px;
margin-left:21px;
    text-align: center;
}
</style>
</head>
<body>
<form method="POST" action="Insertclass.php">
	<label>No. of Records</label>
		<input type="text" name="No" required><br>
    <Button type="Submit" name="button1">Submit</Button>
    
</form>
</body>
</html>
<?php
    $server="localhost";
    $user="root";
    $password="";
    $dbname="clerk";
    $conn=mysqli_connect($server,$user,$password,$dbname);
    if ($conn)
    {   
        if(isset($_POST['button1']))
        {
            echo '<form method="POST">';
            echo' <table>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>RegNo.</th>
        <th>f-name</th>
        <th>m-name</th>
        <th>dob</th>
        <th>classrno</th>
        <th>category</th>
        <th>mob</th>
        <th>email</th>
        <th>address</th>
        <th>gender</th>
        </tr>';
            $x=$_POST['No'];
            "<input type='hidden' name='num' value='$x'>";
		    $y=0;
		    for($y=$y+1; $y<=$x; $y++)
		    {
		        echo '<tr>';
                echo "<input type='text' name='id[]' value='$y'> <input type='text' name='name[]'> <input type='text' name='reg[]'> <input type='text' name='fname[]'><input type='text' name='mname[]'><input type='date' name='dob[]'><input type='text' name='rno[]'><input type='text' name='category[]'><input type='text' name='mob'[]><input type='text' name='email[]'><input type='text' name='addr[]'><select name='gender[]'><option value='Male'>Male</option><option value='Female'>Female</option></select><br>";
		        // echo '</tr>;'
		    }
            echo '<label>Branch</label>';
            echo '<select name="branch[]" required>';
            echo '<option value="Computer">Computer Department</option>';
            echo '<option value="Civil">Civil Department</option>';
            echo '<option value="Mechanical">Mechanical Department</option>';
            echo '<option value="Automobile">Automobile Department</option>';
            echo '<option value="Electronics">Electronics Department</option>';
            echo '<option value="Electrical">Electrical Department</option>';
            echo '</select>';
            echo '<label>Semester</label>';
            echo '<select name="sem[]">';
            echo '<option value="1" required>First Semester</option>';
            echo '<option value="2" required>Second Semester</option>';
            echo '<option value="3" required>Third Semester</option>';
            echo '<option value="4" required>Fourth Semester</option>';
            echo '<option value="5" required>Fifth Semester</option>';
            echo '<option value="6" required>Sixth Semester</option>';
            echo '</select><br>';
        }
            echo '<button type="Submit" name="button2">Add Data</button>';
            echo '</table>';
            echo '</form>';
    }
    else
    {
        echo "Not Connected";
    }
    if(isset($_POST['button2']))
    {
        $z=$_POST['num'];
        for ($i=0;$i<$z;$i++)
        {
        $query="INSERT INTO record(id,name,reg,sem,fname,mname,dob,classrno,branch,category,mob,email,addr,gender) VALUES('".$_POST['id'][$i]."','".$_POST['name'][$i]."','".$_POST['reg'][$i]."','".$_POST['sem'][$i]."','".$_POST['fname'][$i]."','".$_POST['mname'][$i]."','".$_POST['dob'][$i]."','".$_POST['rno'][$i]."','".$_POST['branch'][$i]."','".$_POST['category'][$i]."','".$_POST['mob'][$i]."','".$_POST['email'][$i]."','".$_POST['addr'][$i]."','".$_POST['gender'][$i]."')";
        $data=mysqli_query($conn,$query);
        }
    }


?>
