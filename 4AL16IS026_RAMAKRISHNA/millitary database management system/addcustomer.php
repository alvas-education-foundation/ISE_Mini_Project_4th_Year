<html>
<head>
<title>Add Customer Details</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="DBMSImages/bg.jpg"><br><b><center><font color="#0707F" size="5" style="Times New Roman"> 
		Add Customer Details</font></center></b> <br>
		<form action="addcustomer.php" method="post">
<div id="main-wrapper"><b>
Customer Name : <input class="inputvalues" type="text" name="cusname" required/><br><br>
Customer ID : <input class="inputvalues" type="text" name="cusid" required/><br><br>
Customer Address : <input class="inputvalues" type="text"  name="cusaddress" required/><br><br>
Customer Phone no: <input class="inputvalues" type="text" name="cusphoneno" required/><br><br>
<center><input type="submit" id="submit_btn" name="submit_btn" value="Save"></b></center>
<?php
$servername = "localhost";
$username = "Ganesh";
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
	  $cusid =$_POST['cusname'];
      $cusname=$_POST['cusid'];
      $cusaddress=$_POST['cusaddress'];
      $cusphoneno=$_POST['cusphoneno'];
      $sql = "insert into addcustomer values('$cusname','$cusid','$cusaddress','$cusphoneno');";
      $result = $conn->query($sql);
     
      
  }


?>	
<center>

</div>	<br><br><br> 

</body>
</html>
