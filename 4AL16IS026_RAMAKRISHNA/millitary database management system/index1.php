<?php
$con =new PDO("mysql:host:localhost:dbname:medical_store",'Ganesh','1234');
$sql="CALL Get_All_Products()";
$result=$con->prepare($sql);
$result->setFetchMode(PDO::FETCH_ASSOC);
$result->execute();
while($values=$result_>fetch())
{
	print "<pre>";
	print_r ($values);
}
