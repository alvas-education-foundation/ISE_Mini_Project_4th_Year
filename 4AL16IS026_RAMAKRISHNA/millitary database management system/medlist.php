<html>
<head>
<title> All Medicine Deatils </title>
<link rel="stylesheet" type="text/css" href="style1.css">
<h1><center><font color="#0707F" size="5" style="Times New Roman">All Medicine List</font></center></h1>
</head>
<body background="DBMSImages/sky.png">
	<center> <table width="500" cellpadding=5celspacing=5 border=1><tr><th> Medicine Name </th><th> Medcine Company </th><th> Medicine Manufacture ID </th><th> Medicine Type </th><th> Medicine Purchase Price </th><th> Supplier ID</th></tr>
<form>
<div id="main-wrapper">
<?php


$servername = "localhost";
$username = "Ganesh";
$password="1234";
$dbname = "medical_store";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
echo "<script>alert('Invalid credentials');</script>";
} 

$sql = "SELECT * FROM addmed;";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
     
    while($row = $result->fetch_assoc()):?>
     <tr>

     	<td><?php echo $row["medname"];?></td>
     	<td><?php echo $row["medcompany"];?></td>
     	<td><?php echo $row["medmanufactureid"];?></td>
     	<td><?php echo $row["medtype"];?></td>
     	<td><?php echo $row["medpurchaseprice"];?></td>
     	<td><?php echo $row["supid"];?></td>
     	
     </tr>
	
    <?php endwhile;?>
    </table>

</center>

<center><br>
<a href="home.php"> <input type="button" id="submit_btn" value="Logout"></a>
		</form></center>
</div>	<br><br><br> 

</body>
</html>
