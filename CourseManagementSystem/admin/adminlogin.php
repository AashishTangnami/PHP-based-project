<?php 	
require'../header.php';
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
					<li><a href="adminlogin.php">Admin</a></li>
					<li><a href="../student/studentLogin.php">Student</a></li>
					<li><a href="../lecturer/lecturerLogin.php">Lecturer</a></li>
					<li><a href="../courseleader/courseleader_Login.php">Course Leader</a></li>
					<!-- <li><a href="user_signup.php">Sign Up</a></li> -->
				</ul>
			</li>
			
		</ul>
		</fieldset>
	</nav>
<main class="home">			
		<div class="main">
<?php
if(isset($_SESSION['loggedin'])){		//redirect login page to admin page if already logged in
	header('location:adminhome.php');
}
if(isset($_POST['login'])){
	require'adminNav.php';
	$stmt = $pdo->prepare('SELECT * FROM admin WHERE admin_email = :email');

	$criteria = [
		'email' => $_POST['email']
	];
	$stmt->execute($criteria);

	$in = true;	 	

	 	//checking whether any record is selected from database
	 	if($stmt->rowCount() > 0){
	 		$found = $stmt->fetch();  //fetch user information into found variable

	 		if(password_verify($_POST['password'],$found['admin_password'])){
	 			$_SESSION['loggedin'] = $found['id'];
	 			$_SESSION['name'] = $found['admin_name'];
	 			$_SESSION['email'] = $found['admin_email'];
	 			$_SESSION['gender'] = $found['gender'];
	 			header('location:adminhome.php');
	 		}
	 		else{
	 			$in = false;
	 		}
	 	}		 	
	 	else{
	 		$in = false;

	 	}


	 	if($in == false){
	 		echo 'Failed to login. Please enter correct email and password.';
	 	}
	} 	

	$title = 'Woodland university-Home';
	// $content = loadTemplate('../view/home_template.php', []);
?>
		<form action="" method="POST">
			<fieldset>
					<legend><h2>Admin log in</h2></legend>
				<label>Email : </label>
				<input type="email" name="email" placeholder="you email" required autofocus></input><br><br>

				<label>Password : </label>
				<input type="password" name="password" placeholder="your password" required autofocus></input><br><br>
				<input type="submit" name="login" value="Login"></input>
			</fieldset>
		</form

<?php 
	require '../footer.php'; 
?>