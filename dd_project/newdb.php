<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
<style>
body, html{
	height:100%;
	margin:0;
}
.back
{
background-image:url("final.jpg");
height:100%;
width:100%;
background-position:center;
background-repeat:no-repeat;
background-size:cover;
}
#dis 
{
	color:black; 
	position: relative;
	font-family: 'Rancho', cursive;
}
#disp a
{width:200px;
font-family: 'Rancho', cursive;
color:white;
font-size:30px;
position:relative;
text-decoration:none;
top:-350;
text-align:center;
left:270px;

}
p{
	position:relative;
	top:-250px;
	color:white; 
	font-family: 'Rancho', cursive;
	font-size:32px;
	text-align:center;
}	
</style>
</head>
<body>
<div class="back">
</div>
<div id="dis">
<h3></h3></div>
<div id="disp">
<a href="details.php">YOU HAVE SUCCESSFULLY COMPLETED ALL THE STEPS. CLICK HERE!</a>
</div>
<p></p>
</body>
</html>


<?php
include 'phpadminconnect.php';

if(isset($_POST["firstname"]) && isset($_POST["email"]) && isset($_POST["lastname"]) && isset($_POST["state"]) && isset($_POST["add"]) && isset($_POST["numb"])) 
{
$name= $_POST["firstname"];
$lname= $_POST["lastname"];
$email = $_POST["email"];
$state= $_POST["state"];
$add=  $_POST["add"];
$num=  $_POST["numb"]; 
$query1="CREATE TABLE newdb1(fname1 text(20),email1 varchar(30),lname1 text(20),state1 text(15),add1 varchar(30),numb1 int(10))";
$run1= mysqli_query($conn,$query1);
if($run1)
{
	echo " succesful";
}
else{
	echo"fail";
}
$query = "insert into newdb1 (fname1,email1,lname1,state1,add1,numb1) values('$name','$email','$lname','$state','$add','$num')";
$run = mysqli_query($conn,$query);
$array = mysqli_fetch_array($run);

/*
$query = "select * from bill_db where pno ='$num'";
$run = mysqli_query($conn,$query);
$array = mysqli_fetch_array($run);

if($array[6]=="paid")
{
	echo '<br><h3 id="dis" style="color:white; text-align position:relative;top:-600px; width:500px; background-color:lightslategrey; opacity:0.8; text-align:center; left:350px; border: 0px lightgrey; box-shadow:2px 2px 2px black; border-radius:15px;padding:10px; font-size:32px;">Name '.$array[0]."<br>Bill Amount ".$array[5]."<br> Payment Status- ".$array[6]."<br>Payment Date ".$array[7].'</h3>';
	
	
    echo '<br><a id="dis" style="color:white;  border-radius:15px; position:relative; top:-480px; left:550px; width:500px; text-decoration:none; background-color:lightslategrey; padding:30px; opacity:0.8;" href="firstpage.php">LOGOUT</a>';
	
	
}

if($array[6]=="unpaid")
{
	echo '<br><h3 id="dis" style="color:white; text-align position:relative;top:-500px; width:500px; background-color:lightslategrey; opacity:0.8; text-align:center; left:350px; border: 0px lightgrey; box-shadow:2px 2px 2px black; border-radius:15px;padding:10px; font-size:32px;">Name '.$array[0]."<br>Bill Amount ".$array[5]."<br> Payment Status- ".$array[6]."<br>Payment Date since ".$array[7].'</h3>';
	
    echo '<br><a id="dis" style="color:white;  border-radius:15px; position:relative; top:-480px; left:550px; width:500px; text-decoration:none; background-color:lightslategrey; padding:30px; opacity:0.8;" href="firstpage.php">LOGOUT</a>';
	
	
}
}*/
//else
//{
	//echo "error";
//}
}

?>