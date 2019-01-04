<?php 
	include "db.php";

	if (isset($_POST['addstd'])) {
		$fullname = $_POST['fullname'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$class = $_POST['class'];
		$age = $_POST['age'];
		$year = $_POST['year'];
		$stddetails = $_POST['stddetails'];		

	$query = "INSERT INTO stdinfo(fullname,fname,mname,class,age,year,stddetails) VALUES('$fullname','$fname','$mname','$class','$age','$year','$stddetails')";

	$result = mysqli_query($db_connect,$query);
		if (!$result) {
			echo "Add info Failed";
		}else{
			header('location: index.php');
		}
	}
 ?>