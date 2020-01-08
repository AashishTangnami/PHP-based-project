<?php 	
require'header.php';
session_start();
?>
<nav>
		<fieldset>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="eventCalender.php">Event Calender</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			<li><a href="contact.php">Contact us</a></li>
			<li><a>Login</a>
				<ul>
					<li><a href="admin/adminlogin.php">Admin</a></li>
					<li><a href="student/studentLogin.php">Student</a></li>
					<li><a href="lecturer/lecturerLogin.php">Lecturer</a></li>
					<li><a href="courseleader/courseleader_Login.php">Course Leader</a></li>
					<!-- <li><a href="user_signup.php">Sign Up</a></li> -->
				</ul>
			</li>
			
		</ul>
		</fieldset>
	</nav>
<main class="home">			
		<div class="main">
<center><h1>About Us</h1></center>

<p style="font-size: 50px;">This is Woodland University Course Management System</p>


<?php 	
require'footer.php';


?>