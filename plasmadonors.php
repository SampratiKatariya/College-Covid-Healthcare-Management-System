<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  font-size:30px;	
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: black;
  color: white;
}
body{
	background-color:grey;
	background-repeat:no-repeat;
}
</style>
<title>Plasma Donors </title>
</head>
<body oncontextmenu="return false;">
<div align="center">
<br>
<b><p style="font-size:50px;font-color:#fffff;">Information</p></b> 	
</div>
<div align="center">
<table id="customers">


<th>ID</th>
<th>First_Name</th>
<th>Last_Name</th>
<th>Aadhaar_No</th>
<th>Email</th>
<th>Mobile_No</th>
<?php
error_reporting(0);

include('connection.php');
	$str="select * from plasma;";
	$res=mysqli_query($con,$str);
	
    while($row=mysqli_fetch_array($res)) 
	{
       
?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["First_Name"]; ?></td>
<td><?php echo $row["Last_Name"]; ?></td>
<td><?php echo $row["Aadhaar_No"]; ?></td>
<td><?php echo $row["Email"]; ?></td>
<td><a href="tel:+9405913161" ><?php echo $row["Mobile_No"]; ?></a></td>
</tr>		
				
<?php		
	}
?>
</table><br><br>

</body>
</html>