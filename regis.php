
<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Registration form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body {
      background: url("/uploads/media/default/0001/01/b5edc1bad4dc8c20291c8394527cb2c5b43ee13c.jpeg") no-repeat center;
      background-size: cover;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form {
	  width: 500px;
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
		 
      background: rgba(0, 0, 0, 0.7);
		margin-left:30px;
		margin-right	:30px;
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 300px) {
      html, body {
      height: 100%;
      }
      .main-block {
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      
      <form method="POST">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Register here</h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="fname" placeholder="Firstname">
          <input class="fname" type="text" name="lname" placeholder="Lastname">
          <input type="text" name="email" placeholder="Email">
		  <input type="tel" name="phno" pattern="[0-9]{10}" placeholder="Phone no">
          <input type="text" name="rollno" placeholder="Roll Number/Staff Id">
          <input type="text" name="aadharno" placeholder="Aadhar number">
          <input type="text" name="dept" placeholder="Department">
          <input type="text" name="cyear" placeholder="Current Year">
          <select name="role">
            <option value="Role" selected>Student/Staff</option>
            <option value="staff">Staff</option>
            <option value="student">Student</option>
          </select>
        </div>
        <div class="checkbox">
          <!--<input type="checkbox" name="checkbox"><span>Vaccine taken??</a></span>-->
        </div>
		<center><input type="submit" name="submit" style="background-color: #26a9e0; 
  width:500px;
  border-radius: 2px;
  border: none;
  color: black;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;"></center><br>
		Already have an account?<a href="login.php">Login here</a>
      </form>
    </div>
  </body>
</html>
<?php
error_reporting(0);
$vfname=$_POST["fname"];
$vlname=$_POST["lname"];
$vemail=$_POST["email"];
$vphone=$_POST["phno"];
$vrollno=$_POST["rollno"];
$vaadharno=$_POST["aadharno"];
$vdept=$_POST["dept"];
$vcyear=$_POST["cyear"];
$vrole=$_POST["role"];
echo($vrole);
include('connection.php');

if($_POST['submit'])
{
		if($vrole=="student")
		{
			$qry="insert into student values('$vrollno','$vfname','$vlname','$vdept','$vcyear','$vaadharno','$vemail','$vphone',NULL);";
			
		}
		if($vrole=="staff")
		{
			$qry="insert into staff values('$vrollno','$vfname','$vlname','$vdept','$vaadharno','$vemail','$vphone',NULL);";	
		}
	
	mysqli_query($con,$qry);
	$_SESSION['role']=$vrole;
	echo "<script>alert('data inserted successfully...');
	window.location.href='login.php';</script>";
	
}	
	


?>
