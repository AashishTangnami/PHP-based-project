<?php 	
require'../header.php';
require'adminNav.php';
session_start();

?>
<div>
	<div>
		<h2>Click button below to go to admission process</h2>
		<a href="admissionDepart.php"><button type="" class="button" >Admission department</button></a>
	</div>
	<div>
		<h2>Click button below to go student department</h2>
		<a href="studentDepart.php"><button type="" class="button" >Student's department</button></a>
	</div>
	<div>
		<h2>Click button below to go to couceleader department</h2>
		<a href="courseLeader_signup.php"><button type="" class="button" >Cource Leader department</button></a>
	</div>
	<div>
		<h2>Click button below to go to lecturer department</h2>
		<a href="lecturerRegister.php"><button type="" class="button" >Lecturer department</button></a>
	</div>
</div>
<?php 
	require '../footer.php'; 
?>