<?php
session_start();
require '../header.php';
	$student_id = $_SESSION['student_id'];

require 'navigationIfRequired.php'; 

			echo '<h2> Notification from Lecturer: </h2>';
		
		// echo '<a href="sendemail.php">send mail</a>';
		require'sendemail.php';
require'../footer.php';
?>


