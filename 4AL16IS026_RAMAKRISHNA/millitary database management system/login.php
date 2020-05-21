<html>
<head>
	<title>Welcome To Login</title>
	<link rel="style.css" type="text/css" href="style.css">
</head>
<body background="DBMSImages/login1.jpg">
	<center><b><font color="#800000" size="50" style="Times New Roman"> Medical Store Database System</font></b></center><br><br><br><br>
	 <div id="main-wrapper">
	 	<form action="login.php" method="post">
	
	 		<center><b>User Name: <input class="inputvalues" type="text" placeholder="user name" name="name" size="35" required/></b><br><br><br>
	 		<b>Password: <input class="inputvalues" type="password" placeholder="password" name="pwdd" size="35" required/></b><br><br>
	 		<input type="submit" id="submit_btn" name="submit_btn" value="Login"><br><br>
	 	</center>
	 	</form>
	 </div>

<?php
$servername ="localhost";
$dbname="medical_store";
if(isset($_POST['submit_btn']))
{
	$username=$_POST["name"];
	$password=$_POST["pwdd"];
	if (($username=='ganesh' AND $password=='1234') OR($username=='arjun' AND $password=='1235')) {

		$conn=mysqli_connect($servername,$username,$password,$dbname);
		header('location:next.php');
	}
else
	{
		echo '<script type="text/javascript"> alert("Invalid Credentials")</script>';
	}
}
?>

</body>
</html>