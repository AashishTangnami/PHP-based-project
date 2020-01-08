<?php 
session_start();
require '../header.php';
// require '../connect.php';
if(isset($_POST['login'])){
	$_SESSION['lecturer_email'] = $_POST['lecturer_email'];
	$lecturer_email = $_POST['lecturer_email'];
	$password = $_POST['password'];
	$res = $pdo->prepare("SELECT * FROM lecturer_table WHERE lecturer_email=:lecturer_email");
	$res->bindParam(":lecturer_email", $lecturer_email);
	$res->execute();
	$em = $res->fetch();
	$pass = $em['lecturer_password'];
	if(password_verify($password, $pass)){
	$_SESSION[lecturer_id] = $em['lecturer_id'];
	header('location:lecturerHome.php');
}
else{
	echo '<h2>You are not user</h2>';
}
} 


?>		
		<div class="main">
			<h2> Welcome to my website</h2>
<pre>
	<form action="" method="POST">
			<fieldset>
					<legend><h2>Lecturer log in</h2></legend>
				<label>Email : </label>
				<input type="email" name="lecturer_email" placeholder="you email" required autofocus></input><br><br>

				<label>Password : </label>
				<input type="password" name="password" placeholder="your password" required autofocus></input><br><br>
				<input type="submit" name="login" value="Login"></input>
			</fieldset>
		</form>
</pre> 
		</div>
<?php 
	require'../footer.php';
 ?>