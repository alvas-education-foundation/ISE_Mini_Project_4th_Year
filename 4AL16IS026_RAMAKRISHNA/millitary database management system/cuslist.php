<html>
<head>
<title> All Customer Deatils </title>
<link rel="stylesheet" type="text/css" href="style1.css">
<h1><center><font color="#0707F" size="5" style="Times New Roman">All Customer List</font></center><br></h1>
</head>
<body background="DBMSImages/sky.png">
    <center> <table width="500" cellpadding=5celspacing=5 border=1><tr><th> Customer Name </th><th> Customer ID </th><th> Customer Address </th><th> Customer Phone Number </th></tr>
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

$sql = "SELECT * FROM addcustomer;";
$result = $conn->query($sql);

if ($result->num_rows > 0) 

  
     
    while($row = $result->fetch_assoc()):?>
     <tr>
        <td><?php echo $row["cusname"];?></td>
        <td><?php echo $row["cusid"];?></td>
        <td><?php echo $row["cusaddress"];?></td>
        <td><?php echo $row["cusphoneno"];?></td>
        
     </tr>
    
    <?php endwhile;?>
    </table>

</center>

<center><br><br>
<a href="home.php"><input type="button" id="submit_btn" value="Logout"></a>
        </form></center>
</div>  <br><br><br> 

</body>
</html>
