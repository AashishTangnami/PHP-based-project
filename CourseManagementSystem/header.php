<?php
	$pdo = new PDO('mysql:host=localhost;dbname=gp_groupd','root','');	
	date_default_timezone_set("Asia/Katmandu");	
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="main.css"/>
				
		<title>Woodland university</title>
	</head>
	<body>
	<header>
		<section>
			<aside>	
			<img src="large.jpg" width="200px" height="100px" />			
				<form action="" method="POST">											
					<label>Search Here</label><br>
					<input type="text" name="search" placeholder="" required autofocus></input>
					<input type="submit" name="search" value="Search"></input>				
				</form>
			</aside>
		</section>
	</header>
	