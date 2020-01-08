<?php

session_start();
require '../header.php';

// require '../connect.php';
	$lecturer_id = $_SESSION['lecturer_id'];

require 'navigationIfRequired.php'; 
	if(isset($_POST['upload'])){
		header('location: uploadContent.php');
	}

			echo '<h2> Course Content: </h2>';
			echo '<form action="" method="POST">';
			echo '<input type = "submit" name = "view" value = "View Content"/>';
	
			echo '<h2>Upload Course Content</h2>';
			echo '<input type = "submit" name ="upload" value ="Upload Content"/>';
			echo '</form>';
		echo '</div>';
	echo '</main>';

	require'../footer.php';
?>


