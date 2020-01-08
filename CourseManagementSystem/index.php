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
 <h1>
 	Welcome to our website.
 </h1>
 <h3><p>This is the portal where Admin students ,tutors and course leader can have their personal account.


</p> </h3>
 <h2>Usefull sites:</h2>
 <ul>
 		<li><a href="https://www.w3schools.com/">w3school</a></li>
 		<li><a href="https://www.tutorialspoint.com/index.htm">Tutorial Points</a></li>
 		<li><a href="https://www.coursera.org/">Coursera</a></li>
 		<li><a href="https://www.oracle.com/database/index.html">Oracle Database MY?SQL</a></li>
 </ul>

<?php
require'footer.php'
?>
