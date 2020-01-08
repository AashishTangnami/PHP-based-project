<?php 	
require'../header.php';
require'adminNav.php';
session_start();
if(!isset($_SESSION['loggedin'])){		//redirect login page to admin page if already logged in
	header('location:adminlogin.php');
}	
echo'<h2>Request for change in students detais</h2>';
if(isset($_SESSION['loggedin'])){
	$stmt = $pdo->query('SELECT * FROM student_approve_by_admin');
	foreach ($stmt as $row) {
		echo '<ol>';
		echo '<li>Email: '.$row['approve_email'].'<br>Phone Number: '.$row['approve_phoneNumber'].'<br>Address: '.$row['approve_student_Address'].'<br>Picture: <img src = "student_image/'.$row['approve_student_pic'].'" width = "200px" height = "200px"><br>';
			echo '<form action = "" method="POST">';
			echo '<input type="hidden" name="id" value="'.$row['approve_student_id'].'">';
			echo '<input type="submit" name = "approve" value = "Approve">';
			echo '<input type="submit" name = "disapprove" value = "Disapprove"/>';
			echo '</form>';
			// echo '<a href="admin_notification.php?stu_id='.$row['approve_student_id'].'"><button type="" class="button" name="" value="">Approve</button></a>';
		echo '</ol>';		
	}
}

	if(isset($_POST['approve'])){
	
		$id=$_POST['id'];
		echo ''.$id;
		$updateid = $pdo->query("SELECT * FROM student_approve_by_admin WHERE approve_student_id = '$id'")->fetch();

		$result = $pdo->query('UPDATE student_table SET 
			student_email ="'. $updateid['approve_email'].'",
			student_password ="'. $updateid['approve_password'].'",
			 fullName = "'.$updateid['approve_fullName'].'", 
			 phoneNumber ="'. $updateid['approve_phoneNumber'].'", 
			 student_Address ="'. $updateid['approve_student_Address'].'", 
			 student_pic="'.$updateid['approve_student_pic'].'",
			 student_picName="'.$updateid['approve_student_picName'].'"
			 WHERE
			 student_id ="'.$id.'"
			 ');
		if($result) echo'<h2>Sucessfully approved</h2>';
		else echo '<h2>Cound not approved</h2>';

		$stmt = $pdo->prepare('DELETE FROM student_approve_by_admin WHERE approve_student_id = :id'	);
		$stmt->execute(['id' => $_POST['id']]);	

}

?>
<?php
require'../footer.php';
?>
