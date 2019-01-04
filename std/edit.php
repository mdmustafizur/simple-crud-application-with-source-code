<?php include "db.php"; ?>
<?php 
	if (isset($_POST['stdupdate'])) {
		$fullname = $_POST['fullname'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$class = $_POST['class'];
		$age = $_POST['age'];
		$year = $_POST['year'];
		$stddetails = $_POST['stddetails'];
		$id = $_POST['id'];

		$query = "UPDATE stdinfo SET ";
		$query .= " fullname = '$fullname', ";
		$query .= " fname = '$fname', ";
		$query .= " mname = '$mname', ";
		$query .= " class = '$class', ";
		$query .= " age = '$age', ";
		$query .= " year = '$year', ";
		$query .= " stddetails = '$stddetails' ";
		$query .= " WHERE id = $id ";

		$result = mysqli_query($db_connect,$query);
			if (!$result) {
				echo "failed";
			} else{
				echo "<center><h4>Update Successfuly</h4></center>";
				header('location: index.php');
			}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Student information</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="icon" type="image/gif" href="images/fav.png" />	
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
	<div style="padding-bottom: 20px;" class="row">
		<div class="col-md-12">
			<div style="margin-top: 60px;" class="edit-area">
					<div class="std-info">											
						<h4>Update Details</h4>
					</div>	
		<form action="edit.php" method="post">
			<center>				
			<div class="form-groups">  
			          
            	<select required="" class="form-control" style="float: none; border: 2px red solid;" style="float: left;" name="id" id="">
            		<option value=''>Choose..</option>
            		<?php 
            			$query = "SELECT * FROM stdinfo";
            			$result = mysqli_query($db_connect,$query);

            			while ($row = mysqli_fetch_assoc($result)) {
            				$id = $row['id'];
            				$name = $row['fullname'];
            				
            				echo "<option value='$id'>Edit For ID <b>$id</b> For $name</option>";
            			}
            		 ?>            		
            	</select>
          </div></center> <br>
          <div class="form-groups">
            <label for="fullname"><b>Full Name</b></label>
            <input type="text" name="fullname" placeholder="Enter Full Name" required="" class="form-control">
          </div>
          <div class="form-groups">
            <label for="fname"><b>Father Name</b></label>
            <input type="text" name="fname" placeholder="Enter Father Name" required="" class="form-control">
          </div>
          <div class="form-groups">
            <label for="mname"><b>Mother Name</b></label>
            <input type="text" name="mname" placeholder="Enter Mother Name" required="" class="form-control">
          </div>
          <div class="form-groups">
            <label for="class"><b>Class</b></label>
            <input type="text" name="class" placeholder="Enter Class" required="" class="form-control">
          </div>
          <div class="form-groups">
            <label for="age"><b>Age</b></label>
            <input type="text" name="age" placeholder="Enter Age" required="" class="form-control">
          </div>
          <div class="form-groups">
            <label for="year"><b>Year</b></label>
            <input type="text" name="year" placeholder="Enter Year" required="" class="form-control">
          </div>
          <div class="form-groups">
            <label for="stddetails"><b>Student Details</b></label>
            <textarea class="form-control" name="stddetails" placeholder="Enter Student Details" id="" cols="10" rows="5" required=""></textarea>
          </div> <br>         
          <input style="float: right;" class="btn btn-success" type="submit" name="stdupdate" value="UPDATE">
        </form>
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