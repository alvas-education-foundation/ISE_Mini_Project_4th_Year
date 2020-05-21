<html>
<head>
<title>Add Medicine Details</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="DBMSImages/bg.jpg" ><br><b><center><font color="#0707F" size="5" style="Times New Roman"> New Medicine Details</font></center></b> <br>
<form action="addmed.php" method="post">
<div id="main-wrapper"><b>
 Medicine Name :   <input class="inputvalues" type="text" name="medname" required/><br><br>           
Medicine Manufacture Id : <input class="inputvalues" type="text" name="medmanufactureid" required/><br><br>
Medicine Company :     <input class="inputvalues" type="text"  name="medcompany" required/><br><br>
Medicine Type : <input class="inputvalues" type="text" name="medtype" required/><br><br>
Medicine Purchase Price : <input class="inputvalues" type="text" name="medpurchaseprice" required/><br><br>
Supplier Id: <input class="inputvalues" type="text" name="supid" required/><br><br>
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
       
      $medname=$_POST['medname'];
      $medmanufactureid=$_POST['medmanufactureid'];
     $medcompany=$_POST['medcompany'];
      $medtype=$_POST['medtype'];
      $medpurchaseprice=$_POST['medpurchaseprice'];
      $supid=$_POST['supid'];
     
      $sql = "insert into addmed values('$medname','$medmanufactureid','$medcompany','$medtype','$medpurchaseprice','$supid');";
       $result = $conn->query($sql);
     
      
  }


?>    
<center>

</div>    <br> <br><br><br> 

</body>
</html>