<?php
require'../header.php';
require'adminNav.php';
session_start();

if(isset($_POST['saveLeader'])){
 $file =$_FILES['file'];

	

   $file_name =$_FILES['file']['name'];
   $file_TempName =$_FILES['file']['tmp_name'];
   $file_size =$_FILES['file']['size'];
   $file_error =$_FILES['file']['error'];
   $file_type =$_FILES['file']['type'];


$fileExt = explode('.',$file_name);
$fileActExt = strtolower(end($fileExt));

$allowed = array('doc','docx','pdf','jpeg','png','jpg');

if(in_array($fileActExt,$allowed)) {
			   if($file_error === 1){
		       if($file_size < 100000000){


		         $fileNamenew = uniqid('', true).".".$fileActExt;
       			 
       			  $fileDestination = 'Files/'.$fileNamenew;

         move_uploaded_file($file_TempName, $fileDestination);
         header('location:applicantform.php?uploadsucess');

       $fileS = 'Files/'. $file_name;

         header('location: userIndex.php?uploadSuccess');
         //	echo 'hey';
         }
		else{
   		echo "The file is too large ";
			}
  		}
  			 else{
   echo 'There was an error uploading your file';
  }
}else{
   echo 'Please uplaod file of extensions DOC or DOCX or JPEG or JPG or PNG or PDF';
  }

	$stmt = $pdo->prepare("INSERT INTO applicant(applicant_name,applicant_surname,address_pr,dob,address_tmp,email,course,qualification,contact,fname,mname,lcontact,cv,pathname) values(:applicant_name,:applicant_surname,:address_pr,:dob,:course,:address_tmp,:email,:contact,:qualification,:fname,:mname,:lcontact,'$fileS','$fileDestination')");

$criteria =[
				'applicant_name'=>$_POST['applicant_name'],
				'applicant_surname'=>$_POST['applicant_surname'],
				'address_pr'=>$_POST['address_pr'],
				'address_tmp'=>$_POST['address_tmp'],
				'dob'=>$_POST['dob'],
				'course'=>$_POST['course'],
				'email'=>$_POST['email'],
				'qualification'=>$_POST['qualification'],
				'contact'=>$_POST['contact'],
				'fname'=>$_POST['fname'],
				'mname'=>$_POST['mname'],
				'lcontact'=>$_POST['lcontact']
				
];
$final =$stmt->execute($criteria);
if($final == true)
	echo ' Okay :) ';

else 

	echo ' Error :(	';

}


?>

<form action="" method="POST" enctype="multipart/form-data">
		<label>Firstname :</label>
		<input type="text" name="aplicant_name">


		<label>Surname:</label>
		<input type="text" name="aplicant_surname"><br>

		<label>Permanent Address:</label>
		<input type="text" name="address_pr">
		<label>Temporary Address:</label>
		<input type="text" name="address_tmp"><br>


		<label>Date of birth:</label>
		<input type="date" name="dob">

		<label>Email:</label>
		<input type="email" name="email"><br>

		<label>Qualification:</label>
		<input type="text" name="qualification">

		<label>Interested Course:</label>
		<input type="text" name="course">

		<label>Father's Name</label>
		<input type="text" name="fname"> <br>

		<label>Mother's Name</label>
		<input type="text" name="mname">

		<label>Landline Contact</label>
		<input type="number" name="lcontact"> <br>

		<label>Upload Documents:</label>
		 	<label>Report Card: </label>
  			<input name="userfile[]" type="file"><br>
  			<label>Character certificate: </label>
 			<input name="userfile[]" type="file"><br>
 			<label>Recommendation Letter: </label>
 			<input name="userfile[]" type="file"><br>
			
 		  <label>Click <input type="submit" name="applicant" value="Upload"> to apply for adminssion. </label>
		

</form>



<?php
	require'../footer.php';
?>