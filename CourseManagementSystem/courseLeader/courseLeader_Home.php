<?php

session_start();
require 'header.php';

// require '../connect.php';
	$courseLeader_id = $_SESSION['courseLeader_id'];

require 'navigationIfRequired.php'; 
if(isset($_POST['edit'])){
	header('location: studentEditDetails.php');
}

			echo '<h2> Profile: </h2>';
			$abc = $pdo->query("SELECT * FROM courseLeader_table WHERE courseLeader_id = '$courseLeader_id'");
			$ab = $abc->fetch();

			echo '<h4>'.$ab['courseLeader_email'].'</h4>';
			echo '<h4>'.$ab['fullName'].'</h4>';
			echo '<h4>'.$ab['phoneNumber'].'</h4>';
			echo '<h4>'.$ab['courseLeader_Address'].'</h4>';
			echo '<img src = "courseLeader_image/'.$ab['courseLeader_picName'].'" width = "200px" height = "200px">';

			echo '<form action = "" method="POST">';
				echo '<input type="submit" name = "edit" value = "Edit Details">';
			echo '</form>';
		
		echo '</div>';
	// echo '</main>';
?>
<div>
<button><a href="logout.php">logout</a></button>
</div>
<?php
	require'../footer.php';
?>


