<html>
<head>
<title>Add Stock Details</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="DBMSImages/bg.jpg"><br><b><center><font color="#0707F" size="5" style="Times New Roman"> Add Stock Details</font></center></b> <br>
<form action="addstock.php" method="post">
<div id="main-wrapper"><b>
Stock ID :   <input class="inputvalues" type="text" name="stoid" required/><br><br>
Stock Quantity :   <input class="inputvalues" type="text" name="stoquantity" required/><br><br>
Stock Type :     <input class="inputvalues" type="text"  name="stotype" required/><br><br>

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
	  $stoid =$_POST['stoid'];
      $stoquantity=$_POST['stoquantity'];
      $stotype=$_POST['stotype'];
   
      $sql = "insert into addstock values('$stoid','$stoquantity','$stotype');";
      $result = $conn->query($sql);
     
      
  }


?>	
<center>

</div>	<br><br><br> 

</body>
</html>
