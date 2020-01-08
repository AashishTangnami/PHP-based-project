<?php 
session_start();
require '../header.php';
// require '../connect.php';

if(isset($_POST['submit'])){
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
&& in_array($extension, $allowedExts)) #condition is checked
  {
  if ($_FILES["image"]["error"] > 0) #condition is checked
    {
    echo "Return Code: " . $_FILES["image"]["error"] . "<br>"; #value is returned
    }
  else #else condition is made 
    {
    // echo "Upload: " . $_FILES["image"]["name"] . "<br>"; #value is displayed
    // echo "Type: " . $_FILES["image"]["type"] . "<br>"; #value is displayed
    // echo "Size: " . ($_FILES["image"]["size"] / 1024) . " kB<br>"; #value is displayed
    // echo "Temp file: " . $_FILES["image"]["tmp_name"] . "<br>"; #value is displayed

    if (file_exists("courseLeader_image/" . $_FILES["image"]["name"])) #condition is checked
      {
      echo $_FILES["image"]["name"] . " already exists. "; #value is displayed
      }
    else
      {
      move_uploaded_file($_FILES["image"]["tmp_name"], #value is made
      "courseLeader_image/" . $_FILES["image"]["name"]); #value is made
      // echo "Stored in: " . "student_image/" . $_FILES["image"]["name"]."<br>"; #value is displayed
  
$image = $_FILES["image"]["name"]; #value is made

$img = "courseLeader_image/".$image; #value is made
$criteria = [
						$student_email = $_POST['student_email'], #value is made for username
						$student_password = $_POST['student_password'], 
						$fullName = $_POST['fullName'],
						$phoneNumber = $_POST['phoneNumber'],
						$student_Address = $_POST['student_Address'] 
						];
						$passwordHashed = password_hash($student_password, PASSWORD_DEFAULT); #hasing password is done
						$sql =  $pdo->prepare("INSERT INTO courseLeader_table(courseLeader_name, courseLeader_password, fullName, phoneNumber, courseLeader_Address, courseLeader_pic, courseLeader_picName) VALUES ('$student_email', '$passwordHashed', '$fullName', '$phoneNumber','$student_Address','$img', '$image')
							"); #pdo statement is prepared
						$result = $sql->execute($criteria); #criteria value is executed
						if ($result = true) {
							echo 'successfully added';
						}
      }
    }
  }
else #else condition is made
  {
  echo "Invalid file"; #value is displayed
  }

}

?>

<div class="main">
			<h2> Welcome to my website</h2>
<pre>
	<form action="" method="POST" enctype="multipart/form-data">
			<fieldset>
					<legend><h2>Course Leader Register</h2></legend>
				<label>Email : </label>
				<input type="email" name="student_email" placeholder="you email" required autofocus></input><br><br>
				<label>Password : </label>
				<input type="password" name="student_password" placeholder="your password" required autofocus></input><br><br>
				<label>Full Name : </label>
				<input type="text" name="fullName" placeholder="your name" required autofocus></input><br><br>
				<label>Phone Number : </label>
				<input type="number" name="phoneNumber" placeholder="your number" required autofocus></input><br><br>
				<label>Address: </label>
				<input type="text" name="student_Address" placeholder="your address" required autofocus></input><br><br>
				<label>Image</label>
				<input type="file" name="image"/><br><br>
				<input type="submit" name="submit" value="Add Student"></input>
			</fieldset>
		</form>
</pre> 
		</div>
	<?php
require '../footer.php';
?>