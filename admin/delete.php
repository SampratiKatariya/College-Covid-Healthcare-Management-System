<?php

include("../connection.php"); // Using database connection file here

$vemail = $_GET['email']; // get id through query string
$vrole = $_GET['role']; // get id through query string

$del = mysqli_query($con,"delete from $vrole where email = '$vemail'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    echo "<script>alert('Deleted record');window.location.href='ds.php';</script>";	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>