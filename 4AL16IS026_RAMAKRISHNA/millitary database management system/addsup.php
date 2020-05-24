<html>
<head>
<title>Add Supplier Details</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="DBMSImages/bg.jpg"><br><b><center><font color="#0707F" size="5" style="Times New Roman"> Add New Suppliers</font></center></b> <br>
<form action="addsup.php" method="post">
<div id="main-wrapper"><b>
Supplier Name :   <input class="inputvalues" type="text" name="supname" required/><br><br>
Supplier Address :   <input class="inputvalues" type="text" name="supaddress" required/><br><br>
Supplier Phone No :     <input class="inputvalues" type="text"  name="supphoneno" required/><br><br>
Supplier Id : <input class="inputvalues" type="text" name="supid" required/><br><br><br><br>
<center><input type="submit" id="submit_btn" name="submit_btn" value="Save"></center></b>
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
	  $supname =$_POST['supname'];
      $supaddress=$_POST['supaddress'];
      $supphoneno=$_POST['supphoneno'];
      $supid=$_POST['supid'];
      $sql = "insert into addsup values('$supname','$supaddress','$supphoneno','$supid');";
      $result = $conn->query($sql);
     
      
  }


?>	
<center>

</div>	<br><br><br> 

</body>
</html>
