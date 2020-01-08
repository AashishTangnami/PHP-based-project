<?php 	
require'../header.php';
require'adminNav.php';
session_start();
if(isset($_SESSION['loggedin'])){
	$stmt = $pdo->prepare('SELECT * FROM admin WHERE id = :id');

	$criteria = [
		'id' => $_SESSION['loggedin']
	];
	$stmt->execute($criteria);
	$found=$stmt->fetch();
	echo '<form action="" method="POST">
				<fieldset>
					<legend><h2>Your details are: </h2></legend>

					<label>Name: </label><br>
					<input type="text" name="name" value="'.$found['admin_name'].'"></input><br>
					<label>Email:</label><br>
				<input type="email" name="email" value="'.$found['admin_email'].'"></input><br>
				<label>Password:</label><br>
				<input type="password" name="password" placeholder="newpassword"></input><br>				
				<label>Gender:</label><br>
				<select name="gender">
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select><br><br>				
				<input type="submit" name="update_admin" value="update"></input>';
}
if(isset($_POST['update_admin'])){
	extract($_POST);
	echo $_POST['name'], $_POST['email'], $_POST['gender'], $_SESSION['loggedin'];
	$hash = password_hash($_POST['password'], PASSWORD_DEFAULT); 
	echo $hash;
	 $stmt=$pdo->query('UPDATE admin SET 
					admin_name = "'.$_POST['name'].'",
					admin_email = "'.$_POST['email'].'",
					admin_password = "'.$hash.'", 
					gender = "'.$_POST['gender'].'"				   
					WHERE 
					id = "'.$_SESSION['loggedin'].'"
					');
				if($stmt) echo '<h2>your details updated sucessfully</h2>';
				else echo '<h2>error!!!!! your details not Updated</h2>';
	}
?>
<?php 
	require '../footer.php'; 
?>