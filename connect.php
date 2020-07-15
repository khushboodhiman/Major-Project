<?php

$conn = mysqli_connect("localhost","root","","clerk");

if (!$conn)
{
    die("<script>alert('Not Connected')</script>");
}

?>