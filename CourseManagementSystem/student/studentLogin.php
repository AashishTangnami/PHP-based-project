<?php 
session_start();
require '../header.php';
if(isset($_POST['login'])){
	$_SESSION['student_email'] = $_POST['student_email'];
	$student_email = $_POST['student_email'];
	$password = $_POST['password'];
	$res = $pdo->prepare("SELECT * FROM student_table WHERE student_email= :student_email");
	$res->bindParam(":student_email", $student_email);
	$res->execute();
	$em = $res->fetch();
	$pass = $em['student_password'];
	if(password_verify($password, $pass)){
	$_SESSION['student_id'] = $em['student_id'];
	header('location:studentHome.php');
}
else{
	echo '<h2>You are not user</h2>';
}
} 


?>		
<div class="main">
<h2> Welcome</h2>
<pre>
	<form action="" method="POST">
			<fieldset>
					<legend><h2>Student log in</h2></legend>
				<label>Email : </label>
				<input type="email" name="student_email" placeholder="you email" required autofocus></input><br><br>

				<label>Password : </label>
				<input type="password" name="password" placeholder="your password" required autofocus></input><br><br>
				<input type="submit" name="login" value="Login"></input>
			</fieldset>
		</form>
</pre> 
		</div>
	</main>


	<footer>
		<fieldset>
			<h2>Woodland university @ 2018</h2>
		</fieldset>
	</footer>
</body>
</html>