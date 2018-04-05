<html>
<head>
<link rel="stylesheet" href="mainpage.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
<script type="text/javascript">
function check()
{
	var p1= document.checking.pname.value;
	var p2= document.checking.pname1.value;
	if(p1==p2)
		alert ("confirmed your password");
	
}	
 	
</script>
<style>
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 4px 0;
    box-sizing: border-box;
}
input[type=email], input[type=password]
{
	width: 100%;
    padding: 12px 20px;
    margin: 4px 0;
    box-sizing: border-box;
}
input[type=submit]
{
	width: 100%;
    padding: 12px 20px;
    margin: 4px 0;
    box-sizing: border-box;
	color:black;
	font-family: 'Rancho', cursive;
	border-radius:15px;
	
}
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

 #move form {
	position:relative;
	top:-550px;
	left:350px;
	width:500px;
	height:400px;
	padding:15px;
	color:white;
	background-color:lightslategrey;
	opacity:0.6;
	border: 0px solid ;
	border-radius:15px;
	box-shadow:2px 2px 2px black;
	font-family: 'Rancho', cursive;
}
#move form:hover{opacity:0.4;}
.any p{
	position:relative;
	top:-550px;
	left:350px;
	color:white;
	background-color:lightslategrey;
	opacity:0.6;
	border-radius:15px;
	height:40px;
	width:530px;
	text-align:center;
	padding-top:10px;
	font-family: 'Rancho', cursive;
	
}
.any p:hover{
opacity:0.4;}

</style>
</head>
<body>
<div class="back"></div>
<div class="any">
<p>SIGNUP</p>
</div>
<div id="move">
<form name="checking" action="sign_upcode.php" method="POST">
firstname:<input type="text" name="fname" required>
<br>
lastname:<input type="text" name="lname" required>
<br>
email:<input type="email" name="ename" required>
<br>
password:<input type="password" name="pname" required>
<br>
confirm:<input type="password" name="cpname" required>
<br>
<input type="submit" value="click here" name="submit" onclick="check()" >
<br>
</div>
</body>
</html>