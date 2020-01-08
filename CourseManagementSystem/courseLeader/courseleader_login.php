<?php 
session_start();
require '../header.php';
// require '../connect.php';
if(isset($_POST['login'])){
	$_SESSION['courseLeader_email'] = $_POST['courseLeader_email'];
	$courseLeader_email = $_POST['courseLeader_email'];
	$password = $_POST['password'];
	$res = $pdo->prepare("SELECT * FROM courseLeader_table WHERE courseLeader_email= :courseLeader_email");
	$res->bindParam(":courseLeader_email", $courseLeader_email);
	$res->execute();
	$em = $res->fetch();
	$pass = $em['courseLeader_password'];
	if(password_verify($password, $pass)){
	$_SESSION[courseLeader_id] = $em['courseLeader_id'];
	header('location:courseLeader_Home.php');
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
					<legend><h2>Course Leader log in</h2></legend>
				<label>Email : </label>
				<input type="email" name="courseLeader_email" placeholder="you email" required autofocus></input><br><br>

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