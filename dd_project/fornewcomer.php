<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">

<title>entering details</title>
<style>
input[type=submit]
{
	width: 100%;
    padding: 12px 20px;
    margin: 10px 0;
    box-sizing: border-box;
	color:black;
	font-family: 'Rancho', cursive;
	font-size:20px;
border-radius:15px;}

input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 4px 0;
    box-sizing: border-box;
	font-family: 'Rancho', cursive;
	font-size:20px;
}

body,html{
	height:100%;
	margin: 0;
}
<!--form{
	padding:10px;
	height:200px;
	width:350px;
	position:relative;
	top:150px;
	left:400px;
	box shadow:5px 2px 2px black;
	font-size:16px;
	background-color:orange;
	border-radius:10px;
	
}-->
.back
{
background-image:url("details.jpg");
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
#move form:hover
{opacity:0.4;
}

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
<body>
<div class="back"></div>
<div class="any">
<p>REGISTRATION FORM</p>
</div>
<div id="move">
<form name="details" method="post" action="newdb.php">
Enter your Firstname <input type="text" name="firstname" placeholder="enter your first name please" required></br>
Enter your Lastname <input type="text" name="lastname" placeholder="enter your last name please" required></br>
Enter your Email <input type="text" name="email" placeholder="enter your last name please" required></br>
Enter your Address <input type="text" name="add" placeholder="Address" required></br>
Enter your State <input type="text" name="state" placeholder="enter State" required></br>
Enter your Telephone number <input type="text" name="numb" placeholder="enter number" required></br>
<input type="submit" name="submit" value="SUBMIT">
</form>
</div>
</body>
</head>
</html>