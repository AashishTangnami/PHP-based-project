<?php
	 require 'header.php';  

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
<?php   //header of the page
   require 'student/sendemail.php';
?>

<section>
<!--this is the map embedded from google-->
<div class="mapbox">
<h2>You can find us here.</h2>
 <div name="map" class="map">
   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7063.893587705281!2d85.386898!3d27.718929!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb8e1a147cb4dc56c!2sNayaa+Aayaam+Multi-Disciplinary+Institute+(NAMI)!5e0!3m2!1sen!2snp!4v1490942960418" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
 </div>
</div>
</section>

<?php
     require 'footer.php';
?>
 
