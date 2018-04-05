<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
<style>
input[type=email], input[type=password]
{
	width: 100%;
    padding: 12px 20px;
    margin: 4px 0;
    box-sizing: border-box;
	font-family: 'Rancho', cursive;
}
input[type=submit]
{
	width: 100%;
    padding: 12px 20px;
    margin: 10px 0;
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
	left:300px;
	width:500px;
	height:250px;
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
	left:300px;
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
<p>LOGIN</p>
</div>
<div id="move">
<form id="login_f" name="login" method="post" action="login_code.php">
 Enter your mail-id:<input type="email" name="ename">
 Enter your password:<input type="password" name="pwdname">
 <input type="submit" name="proceed" value="proceed">
</form>
</div>
</body>
</html>