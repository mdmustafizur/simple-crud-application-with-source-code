<?php include "db.php"; ?>
<?php 
	$id = $_GET['id'];

	$query = "DELETE FROM stdinfo WHERE id = '$id' ";
	$result = mysqli_query($db_connect,$query);
		if (!$result) {
			echo "<h2 class='text-center'>Opps!! Something Went Wrong</h2>";
		}else{
			header('location: index.php');
		}
 ?>