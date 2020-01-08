<?php
session_start();
require '../header.php';
$student_id = $_SESSION['student_id'];
require 'navigationIfRequired.php'; 
	$abc = $pdo->query("SELECT * FROM grade_per_student WHERE student_id ='$student_id'");
			echo '<table width = "100%" border = "1">';
			 	echo '<tr>';
			 		echo '<th>Module Name:</th>';
			 		echo '<th>Grade</th>';
			 	echo '</tr>';
			 	
			 foreach ($abc as $row) {
			 	$cou = $row['course_id'];
			 	$abp = $pdo->query("SELECT * FROM courses WHERE course_id ='$cou'");
			 	$po = $abp->fetch();
			 	echo '<tr>';
			 	echo '<td>'.$po['course_name'].'</td>';
			 	echo '<td>'.$row['grade'].'</td>';
			 	echo'</tr>';
			 }

			 	echo '</table>';
	
	require'../footer.php';
?>


