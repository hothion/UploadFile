<?php
session_start();
	error_reporting(0);
	$_SESSION["Username"]= $_POST["Username"];
	$_SESSION["Password"]= $_POST["Password"];

	if(($_SESSION["Username"]=="") || ($_SESSION["Password"]=="")){
		echo "Username hoặc Password bạn không được để trống!";
	}else{
		if(($_SESSION["Username"]=="admin") && ($_SESSION["Password"]=="123")){
		echo"Login thanh cong";
		
		header('Location: profile.php');
	}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	h2{
	background: #FEFFED;
	padding: 30px 35px;
	margin: -10px -50px;
	text-align:center;
	border-radius: 10px 10px 0 0;
	}

	div.container{
	background: url("background.jpeg");
	width: 900px;
	height: 610px;
	margin:35px auto;
	font-family: 'Raleway', sans-serif;
	}
	div.main{
		
	width: 300px;
	padding: 10px 50px 25px;
	border: 2px solid gray;
	border-radius: 10px;
	font-family: raleway;
	float:left;
	margin-top:50px;
	}
	input[type=text],input[type=password]{
	width: 100%;
	height: 40px;
	padding: 5px;
	margin-bottom: 25px;
	margin-top: 5px;
	border: 2px solid #ccc;//mau den nhat khung user va password
	color: #4f4f4f;
	font-size: 16px;
	border-radius: 5px;
	}
	label{
	color: #464646;//mau chu user va password
	text-shadow: 0 1px 0 #fff;
	font-size: 14px;
	font-weight: bold;
	}
	center{
	font-size:32px;
	}

	.back{
	text-decoration: none;
	border: 1px solid rgb(0, 143, 255);
	background-color: rgb(0, 214, 255);
	padding: 3px 20px;
	border-radius: 2px;
	color: black;
	}
	input[type=submit]{
	font-size: 16px;
	background:pink;
	border: 1px solid pink;
	color: #4E4D4B;//mau chu login
	font-weight: bold;
	cursor: pointer;
	width: 100%;
	margin-left: 6px;
	border-radius: 5px;
	padding: 10px 0;
	}
	.imgcontainer {
	  text-align: center;
	  margin: 24px 0 12px 0;
	}
	img.avatar {
	  width: 40%;
	  border-radius: 50%;
	}
	.display{
		display: grid;
	}
</style>
</head>
<body>
<form action="login.php" method="post">
<div class="container">
		<div class="main">
		<h2>php Login Form </h2>
		<label>User Name:</label>
		<input type="text" placeholder="Enter Username"name="Username">
		<label>Password :</label>
		<input type="password"  placeholder="Enter Password"name="Password">
		<input type="submit" value="Login" onclick="checklogin()"/>
		<label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
	</div>
	</div>
</form>
</body>
</html>