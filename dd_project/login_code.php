<?php
include 'phpadminconnect.php';
if(isset($_POST["ename"]) && isset($_POST["pwdname"]))
{
$echeck = $_POST["ename"];
$pcheck = $_POST["pwdname"];
$sql= "SELECT * FROM enter_values WHERE ename = '$echeck'";
$check =mysqli_query($conn,$sql);
 //$row = mysqli_fetch_array($check,MYSQLI_ASSOC);
 $count = mysqli_num_rows($check);
 $row_disp =mysqli_fetch_array($check);     
 
 		
      if($count == 1)
		  {
		  
         //session_register("user");
     $_SESSION['enter_value'] = $echeck;
     //    echo "<br>" . $row_disp[0].$row_disp[1]. " has succesfully logged in";
		// echo   "<br><a href='details.php'>continue</a>";
		 echo '<h1 style="color:white; text-align:center; padding:50px;position:relative; top:100px;">Welcome '.$row_disp[0].$row_disp[1].'<br>click on the link here to fill the registration form<br>'.'<a style="color:white; text-decoration:none;" href="details.php">CLICK</a>';
 
         //header("location: index.php");
      }
	  else 
	  {
         $error = "Your Login Name or Password is invalid";
		 echo '<br> '.$error;
      }

}
else{
	echo "<br/>error";
}
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

