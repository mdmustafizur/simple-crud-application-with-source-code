<?php
include "db.php";
$id = $_GET['id'];

$query = "SELECT * FROM stdinfo WHERE id = '$id' ";
$result = mysqli_query($db_connect,$query);

$std = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Student information</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="icon" type="image/gif" href="images/fav.png" />	
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="show-header">
		<div class="row">
			<div class="container">
				<div class="col-md-12">
				<div class="header-text">
					<center><h2><b><?php echo $std['fullname']; ?></b> Information && ID <b><?php echo $std['id']; ?></b></h2></center>
				</div>
			</div>
			</div>
		</div>
	</div>

	<div class="student-info">
		<div class="container">
			<div style="border: 2px solid #e9ecef;" class="row">				
					<div class="std-info">
						<a style="float: left;" class="btn btn-primary" href="index.php">Back</a>	
						<button style="float: right" class="btn btn-info" onClick="window.print()">Print</button>					
						<h4>Student Details</h4>
					</div>				
					<div style="padding-right: 0px;" class="col-md-6 text-right">
						<div class="std-name"><p>Full Name:</p></div>
						<div class="std-name"><p>Father Name:</p></div>
						<div class="std-name"><p>Mother Name:</p></div>
						<div class="std-name"><p>Class:</p></div>
						<div class="std-name"><p>Age:</p></div>
						<div class="std-name"><p>Year:</p></div>
						<div class="std-name"><p>Comment:</p></div>
					</div>				
					<div class="col-md-6">
						<div class="std-name"><p><?php echo $std['fullname']; ?></p></div>
						<div class="std-name"><p><?php echo $std['fname']; ?></p></div>
						<div class="std-name"><p><?php echo $std['mname']; ?></p></div>
						<div class="std-name"><p><?php echo $std['class']; ?></p></div>
						<div class="std-name"><p><?php echo $std['age']; ?></p></div>
						<div class="std-name"><p><?php echo $std['year']; ?></p></div>
						<div class="std-name"><p><?php echo $std['stddetails']; ?></p></div>
					</div>				
				</div>
			</div>
		</div>	


<!-- Js & All script Here -->
<script>
$('#myModal').on('shown.bs.modal', function () {
$('#myInput').trigger('focus')
})
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>