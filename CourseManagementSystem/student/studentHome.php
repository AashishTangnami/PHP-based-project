<?php
session_start();
require'header.php';
	$student_id = $_SESSION['student_id'];
	require 'navigationIfRequired.php'; 
if(isset($_POST['edit'])){
	header('location: studentEditDetails.php');
}

			echo '<h2> Profile: </h2>';
			$abc = $pdo->query("SELECT * FROM student_table WHERE student_id = '$student_id'");
			$ab = $abc->fetch();

			echo '<h4>'.$ab['student_email'].'</h4>';
			echo '<h4>'.$ab['fullName'].'</h4>';
			echo '<h4>'.$ab['phoneNumber'].'</h4>';
			echo '<h4>'.$ab['student_Address'].'</h4>';
			echo '<img src = "student_image/'.$ab['student_picName'].'" width = "200px" height = "200px">';

			echo '<form action = "" method="POST">';
				echo '<input type="submit" name = "edit" value = "Edit Details">';
				echo '<input type="submit" name = "pass" value = "Change Password"/>';
			echo '</form>';
		
		echo '</div>';
	echo '</main>';

?>
<div>
<button><a href="logout.php">logout</a></button>
</div>
<?php
	require'../footer.php';
?>


