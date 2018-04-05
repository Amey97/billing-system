<?php

include 'phpadminconnect.php';

if(isset($_POST["submit"]))
{
	$first = $_POST['fname'];
	
	$last =  $_POST['lname'];
	
	$email =  $_POST['ename'];
	
	$pass =  $_POST['pname'];
	
	$cpass = $_POST['cpname'];
	
	
$sqli = "INSERT INTO enter_values (fname,lname,ename,pname,cpname) VALUES ('$first','$last','$email','$pass','$cpass')";
$res = $conn->query($sqli);
$select ="select fname from  enter_values where fname='$first'";
$res1 =mysqli_query($conn,$select);
$one ="insert into bill_db (fname,lname) values ('$first','$last')";
$one1= mysqli_query($conn,$one);
$row =mysqli_fetch_array($res1);

echo '<h1 style="color:white; text-align:center; padding:50px;position:relative; top:100px;">Welcome '.$row[0].'<br>click on the link here to fill the registration form<br>'.'<a style="color:white; text-decoration:none;" href="details.php">back</a>';

header("Localhost: index.php");
}
else
	echo"no";

?>
<html>
<head>
<style>
body
{
	background-color:rosybrown;
background-image:url("6.jpg");
background-repeat:no-repeat;

background-attachment:fixed;
background-position:center;

	
}
</style>
</head>
<body>


</body>
</html>

