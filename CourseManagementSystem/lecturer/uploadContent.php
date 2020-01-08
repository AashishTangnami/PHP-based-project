<?php

session_start();
require '../header.php';

// require '../connect.php';
	$student_id = $_SESSION['student_id'];

require 'navigationIfRequired.php'; 
if(isset($_POST['edit'])){
	header('location: studentEditDetails.php');
}

			echo '<h2> Content: </h2>';
			echo '<form action = "" method="POST">';
				echo '<label>Course Title</label>';
				echo '<input type = "text" name = "course_title"><br><br>';
				echo '<input type="file" name = "upload" value = "File Upload"><br><br>';
				echo '<input type = "submit" name = "add" value = "Add Content">';
			echo '</form>';
		
		echo '</div>';
	echo '</main>';

	require'../footer.php';
?>


