<?php

session_start();
require '../header.php';

// require '../connect.php';
	$courseLeader_id = $_SESSION['courseLeader_id'];

require 'navigationIfRequired.php'; 
	if(isset($_POST['upload'])){
		header('location: uploadContent.php');
	}

		
			echo '<h2> Course Content: </h2>';
			echo '<form action="" method="POST">';
			echo '<input type = "submit" name = "view" value = "View Content"/><br><br>';
				if(isset($_POST['view'])){
				$df = $pdo->query("SELECT * FROM courses WHERE courseLeader_id = '$courseLeader_id'");
				foreach ($df as $key) {
					echo '<p>'.$key['course_name'].'</p>';
				}
			}
			echo '<h2>Add Course Content</h2><br><br>';

		

			if(isset($_POST['add'])){

					$criteria = [
						$course_name = $_POST['course_title']
						];
						$sql =  $pdo->prepare("INSERT INTO courses(course_name, courseLeader_id) VALUES ('$course_name', '$courseLeader_id')
							"); #pdo statement is prepared
						$result = $sql->execute($criteria); #criteria value is executed
						if ($result = true) {
							echo 'successfully added';
						}



		}
			echo '<input type = "text" name = "course_title"/>';
			
			echo '<input type = "submit" name ="add" value ="Add Content"/>';
			echo '</form>';

		echo '</div>';
	// echo '</main>';

	require'../footer.php';
?>


