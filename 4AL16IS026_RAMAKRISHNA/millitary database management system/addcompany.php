<html>
<head>
<title>Add Company Details</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="DBMSImages/bg.jpg"><br><b><center><font color="#0707F" size="5" style="Times New Roman"> 
		Add Company Details</font></center></b> <br>
	
<form action="addcompany.php" method="post">
<div id="main-wrapper"><b>
		
Company ID : <input class="inputvalues" type="text" name="comid" required/><br><br>
Company Name : <input class="inputvalues" type="text" name="comname" required/><br><br>
Manufacture ID: <input class="inputvalues" type="text" name="manufactureid" required/><br><br>
Company Location : <input class="inputvalues" type="text"  name="comloc" required/><br><br>
<center><input type="submit" id="submit_btn" name="submit_btn" value="Save"></b></center>
<?php
$servername = "localhost";
$username = "jobin";
$password="1234";
$dbname = "medical_store";


// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error)
{
echo "<script>alert('Invalid credentials');</script>";
} 
else if(isset($_POST['submit_btn']))
{
	  $comid =$_POST['comid'];
      $comname=$_POST['comname'];
     
      $manufactureid=$_POST['manufactureid'];
       $comloc=$_POST['comloc'];
      $sql = "insert into addcompany values('$comid','$comname','$manufactureid','$comloc');";
      $result = $conn->query($sql);
     
      
  }


?>	
<center>

</div>	<br><br><br> 

</body>
</html>
