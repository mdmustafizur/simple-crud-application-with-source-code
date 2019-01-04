<?php include "db.php"; ?>
<?php 
function showAll(){

	global $db_connect;
	$id = $_GET['id'];
	$query = "SELECT * FROM stdinfo";
	$result = mysqli_query($db_connect,$query);
	
	}
?>