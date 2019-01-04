<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Information System | Made By Mustafizur</title>    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="icon" type="image/gif" href="images/fav.png" />	
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
<div class="header-top">
        	<div class="row">
    	    <div class="container">
    	       <div class="col-md-auto header">
    	           <h2 class="text-center">All Student Information</h2>
    	        </div> 
    	    </div>
    	</div>
</div>
<div class="info-area">
    <div class="row">
        <div class="container">
            <div class="col-md-auto">
        <button style="margin: 0 0 15px 0;" class="btn btn-primary" data-toggle="modal" data-target="#addinfo">Add New</button>
        <button style="margin: 0 0 15px 0; float: right" class="btn btn-info" onClick="window.print()">Print</button>
    <table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr class="text-center">
        <th scope="col">#ID</th>
        <th scope="col">Full Name</th>
        <th scope="col">Father Name</th>
        <th scope="col">Mother Name</th>
        <th scope="col">Class</th>
        <th scope="col">Age</th>
        <th scope="col">Year</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "db.php";
    $query = "SELECT * FROM stdinfo";
    $result = mysqli_query($db_connect,$query);
    ?>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr class="text-center">
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['fullname']; ?></td>
      <td><?php echo $row['fname']; ?></td>
      <td><?php echo $row['mname']; ?></td>
      <td><?php echo $row['class']; ?></td>
      <td><?php echo $row['age']; ?></td>
      <td><?php echo $row['year']; ?></td>
      <td>

        <a class="btn btn-info" href="show.php?id=<?php echo $row['id']; ?>"><i class="fas fa-eye"></i></a>
        <a class="btn btn-success" href="edit.php"><i class="fas fa-pen"></i></a>
        <a class="btn btn-danger" onclick="confirm('Are You Sure !!')" href="delete.php?id=<?php echo $row['id']; ?>"><i class="fas fa-trash"></i></a>

      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
            </div>
        </div>
    </div>
</div>
<div class="pagination-area">
  <div class="row">
    <div class="container">
      <nav aria-label="...">
        <ul class="pagination justify-content-end">
          <li class="page-item disabled">
            <span class="page-link">Previous</span>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active">
            <span class="page-link">
              2
              <span class="sr-only">(current)</span>
            </span>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>
</div>
   
<!-- Add Modal -->
<div class="modal fade" id="addinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="add-header">
          <h3 class="text-center">Add Student Information</h3>
        </div>
        <form action="add.php" method="post">
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
          </div>          
          <div class="modal-footer">
            <input class="btn btn-primary" type="submit" name="addstd" value="Add Student">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="del-alert">
            <h3 class="text-center"><b>Are You Sure To Delete!!!</b></h3>
          </div>
          <div class="del-alert">
            <h5 class="text-center"><b>Student: Name</b></h5>
          </div>
        </div>
      </div>
      <div class="modal-footer">        
        <button type="button" class="btn btn-primary"><i class="fas fa-trash"></i> Delete</button>
      </div>
    </div>
  </div>
</div>

    <script>
        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
        })
    </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>    
</body>
</html>