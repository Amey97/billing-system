<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
<style>
body,html{
	margin:0;
	height:100%;
}
#main_body
{
background-image:url("final.jpg");
height:100%;
width:100%;
background-position:center;
background-repeat:no-repeat;
background-attachment:fixed;
background-size:cover;
}
#main_body p
{
background-color:lightslategrey;
position:relative;
top:150px;
height:100px;
width:100%;
color:white;
font-family: 'Rancho', cursive;
font-size:30px;
opacity:0.7;
box-shadow:4px 4px 4px black;
border-radius:15px;
padding-top:50px;
text-align:center;
	
}
#main_body  p:hover{
	opacity:0.4;
}
#sign a
{text-decoration:none;
background-color:none;
color:white;
font-size:20px;
}
#login a
{text-decoration:none;
background-color:none;
color:white;
font-size:20px;
}
#sign
{	
background-color:black;
position:relative;
top:200px;
width:50%;
color:white;
height:150px;
opacity:0.6;
box-shadow:4px 4px 4px black;
border-radius:15px;
padding-top:50px;
float:right;
text-align:center;
font-family: 'Rancho', cursive;
	
}
 #login
{
background-color:black;
position:relative;
top:200px;
width:50%;
height:150px;
color:white;
font-family: 'Rancho', cursive;
text-align:center;
box-shadow:4px 4px 4px black;
border-radius:15px;
padding-top:50px;
float:left;
opacity:0.6;
}
 #main_body #login:hover{opacity:0.7;}
 #main_body #sign:hover{opacity:0.7;}
</style>
</head>
<body>
<div id="main_body">
<p>TELEPHONE BILLING SYSTEM</p>
<div id="sign">
<h3>HAVE NOT SIGNED UP?</br>CLICK BELOW</h3>
<a href="ddsign_up.php">SIGN-UP</a>
</div>
<div id="login">
<h3>HAVE NOT LOGGED IN?</br>CLICK BELOW</h3>
<a href="ddlogin.php">LOGIN</a>
</div>
</div>
</body>
</html>