<?php

session_start();
require '../header.php';

// require '../connect.php';
	$courseLeader_id = $_SESSION['courseLeader_id'];

require 'navigationIfRequired.php'; 

$course_id = $_GET['course_id'];
$student_id = $_GET['student_id'];

echo ''.$course_id;

$abc = $pdo->query("SELECT * FROM student_table WHERE student_id = '$student_id'");
$cab = $abc->fetch();
$student_name = $cab['student_email'];
echo ''.$student_name;

if(isset($_POST['submit'])){

						$grade = $_POST['grade'];
						
					$sql =  $pdo->prepare("INSERT INTO grade_per_student(course_id, student_id, student_name, grade, remark) VALUES ('$course_id', '$student_id', '$student_name', '$grade', 'asdsadasd')
							");
					echo ''.$course_id;
					echo ''.$grade;
						$result = $sql->execute();
						if ($result = true) {
							echo 'successfully added';
						}

}

			echo '<h2> Choose Grade: </h2>';
			echo '<form action = "" method = "POST">';
			echo '<select name = "grade">';
				echo '<option>No Grade</option>';
				echo '<option>A+</option>';
				echo '<option>A</option>';
				echo '<option>A-</option>';
				echo '<option>B+</option>';
				echo '<option>B</option>';
				echo '<option>B-</option>';
				echo '<option>C+</option>';
				echo '<option>C</option>';
				echo '<option>C-</option>';
				echo '<option>D+</option>';
				echo '<option>D</option>';
				echo '<option>D-</option>';
				echo '<option>F</option>';
			echo '</select>';
			
			echo '<input type = "submit" name = "submit" value = "Give Grade">';
			echo '</form>';
			
		
		echo '</div>';
	// echo '</main>';

	require'../footer.php';
?>


