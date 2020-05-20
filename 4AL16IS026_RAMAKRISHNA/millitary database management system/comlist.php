<html>
<head>
<title> All Company Deatils </title>
<link rel="stylesheet" type="text/css" href="style1.css">
<h1><center><font color="#0707F" size="5" style="Times New Roman">All Company List</font></center></h1>
</head>
<body background="DBMSImages/sky.png">
	<center> <table width="500" cellpadding=5celspacing=5 border=1><tr><th> Company ID</th><th> Company Name </th><th>Manufacture ID </th><th> Company Location </th></tr>
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

$sql = "SELECT * FROM addcompany;";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
     
    while($row = $result->fetch_assoc()):?>
     <tr>
     	<td><?php echo $row["comid"];?></td>
     	<td><?php echo $row["comname"];?></td>
            <td><?php echo $row["manufactureid"];?></td>
     	<td><?php echo $row["comloc"];?></td>
     
     	
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
