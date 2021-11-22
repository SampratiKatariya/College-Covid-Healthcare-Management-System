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
<th>Department</th>
<th>Plasma donation will</th>
<th>Delete staff</th>
<?php
error_reporting(0);

include('../connection.php');
	$str="select * from staff;";
	$res=mysqli_query($con,$str);
	
    while($row=mysqli_fetch_array($res)) 
	{
       
?>
<tr>
<td><?php echo $row["Staff_Id"]; ?></td>
<td><?php echo $row["First_Name"]; ?></td>
<td><?php echo $row["Last_Name"]; ?></td>
<td><?php echo $row["Aadhaar_No"]; ?></td>
<td><?php echo $row["Email"]; ?></td>
<td><?php echo $row["Mobile_No"]; ?></td>
<td><?php echo $row["Department"]; ?></td>
<td><?php echo $row["plasma_will"]; ?></td>
<td><a href="delete.php?email=<?php echo $row['Email'];?>&role=<?php echo 'staff';?>"><input type="button" value="delete" style="border:0px;background-color:#2c6ed5;height:30px;width:70px;"></a></td>
</tr>		
				
<?php		
	}
?>
</table><br><br>

</body>
</html>