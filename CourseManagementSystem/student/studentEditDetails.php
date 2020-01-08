<?php
session_start();
require '../header.php';

// require '../connect.php';
	$student_id = $_SESSION['student_id'];

require 'navigationIfRequired.php'; 

	if(isset($_POST['details'])){
		$allowedExts = array("gif", "jpeg", "jpg", "png"); #allowedExts value is made in array
$temp = explode(".", $_FILES["image"]["name"]); #temp value is made
$extension = end($temp); #extension value is made
if ((($_FILES["image"]["type"] == "image/gif")
|| ($_FILES["image"]["type"] == "image/jpeg")
|| ($_FILES["image"]["type"] == "image/jpg")
|| ($_FILES["image"]["type"] == "image/pjpeg")
|| ($_FILES["image"]["type"] == "image/x-png")
|| ($_FILES["image"]["type"] == "image/png")) 
&& ($_FILES["image"]["size"] < 20000000000000000000000)
&& in_array($extension, $allowedExts)) 
  {
  if ($_FILES["image"]["error"] > 0) 
    {
    echo "Return Code: " . $_FILES["image"]["error"] . "<br>"; 
    }
  else 
    {


    if (file_exists("image/" . $_FILES["image"]["name"])) 
      {
      echo $_FILES["image"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["image"]["tmp_name"],
      "student_image/" . $_FILES["image"]["name"]); 
		$image = $_FILES["image"]["name"];

$img = "student_image/".$image;

		$criteria = [
						$student_email = $_POST['student_email'], #value is made for username
						$student_password = $_POST['student_password'], 
						$fullName = $_POST['fullName'],
						$phoneNumber = $_POST['phoneNumber'],
						$student_Address = $_POST['student_Address'] 
						];
						$passwordHashed = password_hash($student_password, PASSWORD_DEFAULT); #hasing password is done
						$sql =  $pdo->prepare("INSERT INTO student_approve_by_admin(approve_student_id, approve_email, approve_password, approve_fullName, approve_phoneNumber, approve_student_Address, approve_student_pic, approve_student_picName) VALUES ('$student_id','$student_email', '$passwordHashed', '$fullName', '$phoneNumber','$student_Address','$img', '$image')
							"); #pdo statement is prepared
						$result = $sql->execute($criteria); #criteria value is executed
						if ($result = true) {
							echo 'After admin approve your change is made';
							header('location: studentHome.php');
						}
						 }
    }
  }
else #else condition is made
  {
  echo "Invalid file"; #value is displayed
  }


	}

			echo '<h2> Profile: </h2>';
			$abc = $pdo->query("SELECT * FROM student_table WHERE student_id = '$student_id'");
			$ab = $abc->fetch();
			echo '<form action="" method="POST" enctype="multipart/form-data">';
				echo '<label>Email : </label>';
				echo '<input type="email" name="student_email" placeholder="you email" required autofocus></input><br><br>';
				echo '<label>Password : </label>';
				echo '<input type="password" name="student_password" placeholder="your password" required autofocus></input><br><br>';
				echo '<label>Full Name : </label>';
				echo '<input type="text" name="fullName" placeholder="you email" required autofocus></input><br><br>';
				echo '<label>Phone Number : </label>';
				echo '<input type="number" name="phoneNumber" placeholder="you email" required autofocus></input><br><br>';
				echo '<label>Address: </label>';
				echo '<input type="text" name="student_Address" placeholder="you email" required autofocus></input><br><br>';
				echo '<label>Image</label>';
				echo '<input type="file" name="image"/><br><br>';
				echo '<input type="submit" name = "details" value = "Change Details"/>';
			echo '</form>';
		
		echo '</div>';
	echo '</main>';

	require'../footer.php';
?>


