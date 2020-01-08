<?php 	
require'header.php';
require'adminNav.php';
session_start();

?>
<div>
	<div>
		<h2>Click button below to view and edit your details</h2>
		<a href="admin_details.php"><button type="" class="button" name="" formaction="" value="">View Details</button></a>
	</div>
	<div>
	<button><a href="logout.php">Logout</a></button>
	</div>
	
</div>
<?php 
	require '../footer.php'; 
?>