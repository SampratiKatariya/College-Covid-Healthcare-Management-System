<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
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
	  margin-bottom:290px;
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
	  a:link {
      color: white;
     }
    </style>
  </head>
  <body>
    <div class="main-block">
      
      <form method="POST">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>LOGIN</h2>
        </div>
        <div class="info">
		  <input type="text" name="username" placeholder="Username">
          <input class="fname" type="password" name="password" placeholder="Password">
        
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
		
      </form>
    </div>
  </body>
</html>

<?php
	
	if($_POST["submit"])
	{
		$vusername=$_POST['username'];
		$vpassword=$_POST['password'];
		
		include("../connection.php");

		$str="select * from admin";
		$res=mysqli_query($con,$str);
		
		while($row=mysqli_fetch_array($res))
		{
		$uname=$row['Username'];
		$pass=$row['Password'];
		if($vusername==$uname && $vpassword==$pass)
			break;
		}
		
		if($vusername==$uname && $vpassword==$pass)
			echo "<script>alert('Successful login');window.location.href='ds.php';</script>";
		else
			echo "<script>alert('Username or password is not valid')</script>";
	}

?>