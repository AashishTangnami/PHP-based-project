<?php

session_start();
require '../header.php';
	$student_id = $_SESSION['student_id'];
require 'navigationIfRequired.php'; 
	echo '<h2> Assignments: </h2>';
	echo '<form>';
	echo '<label>Assignments Upload</label>';	
	echo '<input type="file" name="file" size="50" />';

	echo '</form>';
		
		echo '</div>';
	echo '</main>';

	require'../footer.php';
?>

