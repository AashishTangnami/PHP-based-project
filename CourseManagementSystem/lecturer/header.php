<?php
	$pdo = new PDO('mysql:host=localhost;dbname=gp_groupd','root','');	
	date_default_timezone_set("Asia/Katmandu");	
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../main.css"/>
				
		<title>Woodland university</title>
	</head>
	<body>
	<header>
		<section>
			<aside>	
			<img src="../large.jpg" width="200px" height="100px" />			
				<form action="" method="POST">											
					<label>Search Here</label><br>
					<input type="text" name="search" placeholder="" required autofocus></input>
					<input type="submit" name="search" value="Search"></input>				
				</form>
			</aside>
		</section>
	</header>
	<nav>
		<fieldset>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="eventCalender.php">Event Calender</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			<li><a href="contact.php">Contact us</a></li>
			<li><a href="#">Admin</a>
				<ul>
					<li><a href="admin/adminlogin.php">Log In</a></li>
					
					<!-- <li><a href="user_signup.php">Sign Up</a></li> -->
				</ul>
			</li>
			<li><a href="#">Student</a>
				<ul>
					<li><a href="student/studentLogin.php">Log In</a></li>
					
					<!-- <li><a href="user_signup.php">Sign Up</a></li> -->
				</ul>
			</li>
			<li><a href="#">Lecturer</a>
				<ul>
					<li><a href="lecturer/lecturerLogin.php">Log In</a></li>
					
					<!-- <li><a href="user_signup.php">Sign Up</a></li> -->
				</ul>
			</li>
			<li><a href="#">Course Leader</a>
				<ul>
					<li><a href="courseleader/courseleader_Login.php">Log In</a></li>
					
					<!-- <li><a href="user_signup.php">Sign Up</a></li> -->
				</ul>
			</li>
		</ul>
		</fieldset>
	</nav>
<main class="home">			
		<div class="main">