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
	
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html"> <img src="img/emp.jpg" alt="Employability" height="100" width="200" /></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>



      <!-- Navbar -->
      

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="manage_user.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage User</span></a>
        </li>
		<li class="nav-item active">
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
              <a href="index.html">Dashboard</a>
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
			  
			<!--  <center>Insert New Video From Here..<?php
			  echo "<form action='add_course.php' method='POST'>";
echo"<td>";echo "<input class='button' type='submit' value='Insert' name='insert'>";echo"</td>";
echo "</form>";?></center> -->

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
					  <th>Course ID</th>
                      <th>Course Name</th>
                      <th>Course price</th>
                      <th>Course Image</th>
					  <th>Course Category</th>
					  <th>Tutor</th>
					  <th>Course Synopsis</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
						<tbody>
<?php
											$con=mysqli_connect("localhost","root","","employability");

											$res=mysqli_query($con,"select * from courses");

											while ($row=mysqli_fetch_array($res))
											{
											echo"<tr class='tr-shadow'>";
											$cid=$row['cid'];
											echo"<td>"; echo $row["cid"]; echo"</td>";
											echo"<td>"; echo $row["cname"]; echo"</td>";
											echo"<td>"; echo $row["c_price"]; echo"</td>";
											echo"<td>"; echo $row["image"]; echo"</td>";
											echo"<td>"; echo $row["category"]; echo"</td>";
											echo"<td>"; echo $row["tid"]; echo"</td>";
											echo"<td>"; echo $row["synopsis"]; echo"</td>";
											echo "<form action='update_course.php' method='POST'>";
											echo "<td><form><a href=update_course.php?cid=".$row['cid']."><input type='button' name='update' value='Update' /></a></form></td>";
											echo"</td>";

											echo "<td><form><a href=delete_course.php?cid=".$row['cid']."><input type='button' name='delete' value='Delete' /></a></form></td>";
											echo "</form>";
											echo"</tr>";
											}
											?>

					</thead>
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
