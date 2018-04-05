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
background-position:center;
background-repeat:no-repeat;
background-size:cover;
}
#display 
{
	color:white;
	font-family: 'Rancho', cursive;
	position:relative;
		
}
#disp 
{
font-family: 'Rancho', cursive;
color:white;
font-size:30px;
position:relative;

}
 p{
	position:relative;
	top:-250px;
	color:white; 
	font-family: 'Rancho', cursive;
	font-size:32px;
	text-align:center;
}	
#pay p{
	position:relative;
	top:-220px;
	background-color:black;
	width:400px;
	left:410px;
	opacity:0.7;
	border-radius:10px;
	color:white;
}
</style>
</head>
<body>
<div class="back">
</div>
<div id="display">
<h3></h3>
</div>
<div id="disp">
<a></a>
</div>
<div id="pay">
<p>PAYMENT</p>
</div>
<p> THANKS FOR ENJOYING OUR SERVICES</p>
</body>
</html>


<?php
include 'phpadminconnect.php';

if(isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["state"]) && isset($_POST["add"]) && isset($_POST["numb"])) 
{
$name= $_POST["firstname"];
$lname= $_POST["lastname"];
$state= $_POST["state"];
$add=  $_POST["add"];
$num=  $_POST["numb"]; 
$query = "select * from bill_db where pno ='$num'";
$run = mysqli_query($conn,$query);
$array = mysqli_fetch_array($run);

if($array[6]=="paid")
{
	echo '<br><h3 id="display" style="color:white; text-align position:relative; top:-650px; width:500px; background-color:lightslategrey; opacity:0.8; text-align:center; left:350px; border: 0px lightgrey; box-shadow:2px 2px 2px black; border-radius:15px;padding:10px; font-size:32px;">Name '.$array[0]."<br>Bill Amount ".$array[5]."<br> Payment Status- ".$array[6]."<br>Payment Date ".$array[7].'</h3>';
	
	
    echo '<br><a id="disp" style="color:white;  border-radius:15px; position:relative; top:-530px; left:550px; width:500px; text-decoration:none; background-color:black; padding:30px; opacity:0.8;" href="firstpage.php">LOGOUT</a>';
	
	
}

 else if($array[6]=="unpaid")
{
	echo '<br><h3 id="display" style="color:white; position:relative;top:-650px; width:500px; background-color:lightslategrey; opacity:0.8; text-align:center; left:350px; border: 0px lightgrey; box-shadow:2px 2px 2px black; border-radius:15px;padding:10px; font-size:32px;">Name '.$array[0]."<br>Bill Amount ".$array[5]."<br> Payment Status- ".$array[6]."<br>Payment Date since ".$array[7].'</h3>';
	
    echo '<br><a id="disp" style="color:white;  border-radius:15px; position:relative; top:-530px; left:550px; width:500px; text-decoration:none; background-color:lightslategrey; padding:30px; opacity:0.8;" href="firstpage.php">LOGOUT</a>';
	

	
}
 else if($array[6]=="")
{
	echo '<br><h3 id="display" style="color:white; position:relative;top:-650px; width:500px; background-color:lightslategrey; opacity:0.8; text-align:center; left:350px; border: 0px lightgrey; box-shadow:2px 2px 2px black; border-radius:15px;padding:10px; font-size:32px;">YOUR SERVICE HAS NOT YET BEGAN</h3>';
	
	echo '<br><a id="disp" style="color:white;  border-radius:15px; position:relative; top:-530px; left:550px; width:500px; text-decoration:none; background-color:lightslategrey; padding:30px; opacity:0.8;" href="firstpage.php">LOGOUT</a>';
	
}
else
{
	echo " there is error";
}
}

?>