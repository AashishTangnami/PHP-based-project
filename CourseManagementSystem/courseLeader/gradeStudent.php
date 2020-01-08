<?php

session_start();
require '../header.php';

// require '../connect.php';
	$courseLeader_id = $_SESSION['courseLeader_id'];

require 'navigationIfRequired.php'; 
if(isset($_POST['edit'])){
	header('location: studentEditDetails.php');
}

	$abg = $pdo->query("SELECT * FROM  student_table");
	foreach ($abg as $r) {

	
			echo '<h2> Grade: </h2>';
			echo '<table style="width:100%" border = "1">';
				echo '<tr>';
					echo '<th>Student Name:</th>';
					echo '<th>Course Name:</th>';
					echo '<th>Grade:</th>';
					echo '<th>Remark:</th>';
					
				echo '</tr>';
				echo '<tr>';
			if(isset($_POST['grade'])){
				header('location:addGrade.php?course_id='.$_POST['courseid'].'& student_id='.$_POST['studentid']);
}
	
					echo '<td>'.$r['student_email'].'</td>';
					echo '<td>';
					$ag = $pdo->query("SELECT * FROM  courses");
					foreach ($ag as $ra) {
						
							echo '<ul>';
								echo '<li>'.$ra['course_name'].'</li>';
								echo '<form action = "" method = "POST">';
									echo '<input type = "hidden" name = "courseid" value = "'.$ra['course_id'].'">';
									echo '<input type = "hidden" name = "studentid" value = "'.$r['student_id'].'">';
									echo '<input type = "submit" name = "grade" value = "Give Grade" id = "button1"><br><br>';
								echo '</form>';
							echo '</ul>';
						
					}
					echo '</td>';
					echo '<td>';
					$student_id = $r['student_id'];
					$rt = $pdo->query("SELECT * FROM grade_per_student WHERE student_id= '$student_id'");
					foreach ($rt as $k) {
						echo ''.$k['grade'].'<br><br>';
						
					}
					echo '</td>';
					echo '<td>';
					$student_id = $r['student_id'];
					$rta = $pdo->query("SELECT * FROM grade_per_student WHERE student_id= '$student_id'");
					foreach ($rta as $ke) {
						echo ''.$ke['remark'].'<br><br>';
					}

					echo '</td>';
					
					
				echo '</tr>';

			echo '</table>';
				# code...
	}
		echo '</div>';
	echo '</main>';

	require'../footer.php';
?>


