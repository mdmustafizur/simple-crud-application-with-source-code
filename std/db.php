<?php 
	$db_connect = mysqli_connect('localhost','root','','std');
		if (!$db_connect) {
			echo "Database Connection Failed";
		}
 ?>