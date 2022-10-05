<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EMPLOYABILITY.LIFE</title>

    <!-- core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <link href="css/sb-admin.css" rel="stylesheet">
	
	
	<style>
	


.button {
	
  display: inline-block;
  padding: 6px 20px;
  font-size: 18px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #616A6B;
  background-color: #CCD1D1;
  border-width: 5px;
  border-color: coral;
  border-radius: 5px;
 
}

.button:hover {background-color: #707B7C;
    color: #CCD1D1;
}

.button {
  background-color: #99A3A4
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
	
	</style>
	
	
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php"> <img src="img/emp.jpg" alt="Employability" height="100" width="200" /></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>



      <!-- Navbar -->
      

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="manage_user.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage User</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="manage_course.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage Courses</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="manage_booking.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage Booking</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="manage_tutor.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage Tutor</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="manage_review.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage Reviews</span></a>
        </li>
		<li class="nav-item ">
          <a class="nav-link" href="manage_assignment.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage Assignments</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="manage_result.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage Results</span></a>
        </li>
		<li class="nav-item active">
          <a class="nav-link" href="manage_feedback.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage Feedbacks</span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="manage_faq.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage FAQs</span></a>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link" href="logout.php">
            <i class="fas fa-fw fa-folder"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>

 <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Dashboard</a>
            </li>
			<li class="breadcrumb-item active">Login</li>
            <li class="breadcrumb-item active">Data Tables</li>
          </ol>

          <!-- DataTables Example -->
         <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table</div>
            <div class="card-body">
              <div class="table-responsive">
			  
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
					  <th>ID</th>
                      <th>Student Name</th>
                      <th>Mail - ID</th>
					  <th>Message</th>
					  <th>Action</th>
                    </tr>
						<tbody>
											<?php
											$con=mysqli_connect("localhost","root","","employability");

											$res=mysqli_query($con,"select * from contact");

											while ($row=mysqli_fetch_array($res))
											{
											echo"<tr class='tr-shadow'>";
											echo"<td>"; 
											echo $row["id"]; 
											echo"</td>";
											echo"<td>"; 
											echo $row["uname"]; 
											echo"</td>";
											echo"<td>"; 
											echo $row["mail"]; 
											echo"</td>";
											echo"<td>"; 
											echo $row["message"]; 
											echo"</td>";
											echo "<td><form><a href=delete_feedback.php?id=".$row['id']."><input type='button' name='Delete' class='button' style='font-weight:bold;' value='Delete' /></a></form></td>";
											echo"</tr>";
											}
											?>
					</thead>
                  </tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <p class="small text-center text-muted my-5">
            <em>Employability.Life</em>
          </p>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Tech Squad</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

  </body>

</html>
