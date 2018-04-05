<?php
include 'phpadminconnect';

if(isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["state"]) && isset($_POST["add"]) && isset($_POST["numb"])) 
{
$name= $_POST["firstname"];
$lname= $_POST["lastname"];
$state= $_POST["state"];
$add= $_POST["add"];
$num= $_POST["numb"]; 
$query = "select * from bill_db where pno ='$numb'";
$run =mysqli_query($conn, $query);
$array mysqli_fetch_array($run);
 
 echo "<br>".$array[0]."<br>".$array[5]."<br>".$array[6]."<br>".$array[7];
 echo "<br><a href='#'>back</a>";

	
}
else
{
	echo "error";
}	
?>