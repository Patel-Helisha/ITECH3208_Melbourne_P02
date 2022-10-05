<!DOCTYPE html>
<html lang="en">

  <head>
<style>
  a:link{
    color:red;
  }
  h1 {
  border-style: solid;
  border-color: green;
}
div1 {
  border-style: solid;
  border-color: coral;
}
</style>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">
            function drawChart() {

                var jsonData = $.ajax({
                    url: "getData.php",
                    dataType: "json",
                    async: false
                }).responseText;
               
                var data = new google.visualization.DataTable(jsonData);

                
                var chart = new google.visualization.PieChart(document.getElementById('player_info'));
                chart.draw(data, {width: 870, height: 400});
            }
            
            google.charts.load('current', {'packages':['corechart']});

           
            google.charts.setOnLoadCallback(drawChart);
        </script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EMPLOYABILITY.LIFE</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php"> <img src="img/emp.jpg" alt="Employability" height="100" width="200" /></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

      </form>

      <!-- Navbar -->


    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
       <ul class="sidebar navbar-nav">
        <li class="nav-item active">
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
		<li class="nav-item">
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
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">Total Users!
                   <?php 
                    $con=mysqli_connect("localhost","root","","employability");

                    $dash_users_query = "SELECT uid FROM register";
                    $dash_users_query_run = mysqli_query($con,$dash_users_query);
                    if($dash_users_query_run)
                      {
                        $users = mysqli_num_rows($dash_users_query_run);
                      if($users>0)
                    {
echo'<h4 class="mb-0"> '.$users.' </h4>';
                    }
                    else{
                    echo '<h4 class="mb-0"> No Data Found! </h4>';
                  }}?>
                    </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="manage_user.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                   <div class="mr-5">Tutors!
                    <?php 
                    $con=mysqli_connect("localhost","root","","employability");

                    $dash_users_query = "SELECT tid FROM tutor";
                    $dash_users_query_run = mysqli_query($con,$dash_users_query);
                    if($dash_users_query_run)
                      {
                        $users = mysqli_num_rows($dash_users_query_run);
                      if($users>0)
                    {
echo'<h4 class="mb-0"> '.$users.' </h4>';
                    }
                    else{
                    echo '<h4 class="mb-0"> No Data Found! </h4>';
                  }}?></div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="manage_tutor.php">
                  <span class="float-left" >View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                   <div class="mr-5">Booked Consultations!
				    <?php 
                    $con=mysqli_connect("localhost","root","","employability");

                    $dash_users_query = "SELECT id FROM booking_cal";
                    $dash_users_query_run = mysqli_query($con,$dash_users_query);
                    if($dash_users_query_run)
                      {
                        $users = mysqli_num_rows($dash_users_query_run);
                      if($users>0)
                    {
echo'<h4 class="mb-0"> '.$users.' </h4>';
                    }
                    else{
                    echo '<h4 class="mb-0"> No Data Found! </h4>';
                  }}?>
                    <h4 class="mb-0"></h4></div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="manage_booking">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div><div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                   <div class="mr-5">Completed Course!
<?php 
                    $con=mysqli_connect("localhost","root","","employability");

                    $dash_users_query = "SELECT rid FROM result";
                    $dash_users_query_run = mysqli_query($con,$dash_users_query);
                    if($dash_users_query_run)
                      {
                        $users = mysqli_num_rows($dash_users_query_run);
                      if($users>0)
                    {
echo'<h4 class="mb-0"> '.$users.' </h4>';
                    }
                    else{
                    echo '<h4 class="mb-0"> No Data Found! </h4>';
                  }}?></div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="manage_result.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

          </div>
           
          <!-- Area Chart Example-->
          <div class="card mb-3"><br>
            <div class="card-header; text-align:center;" style="padding-left:750px;">
              <i class="fas fa-chart-area" ></i>
              Users Chart</div>
            <div class="card-body">
            <table><td> <?Php
require "config.php";// Database connection

if($stmt = $connection->query("SELECT fname,days FROM booking_cal")){

   "No of records : ".$stmt->num_rows."<br>";
$php_data_array = Array(); // create PHP array

//$row2 = mysqli_fetch_array($stmt,MYSQLI_NUM);


while ($row = $stmt->fetch_row()) {
    //"<tr><td>$row[0]</td><td>$row[1]</td></tr>";
   $php_data_array[] = $row; // Adding to array
   }

}else{
echo $connection->error;
}
//print_r( $php_data_array);
// You can display the json_encode output here. 
// echo json_encode($php_data_array); 

// Transfor PHP array to JavaScript two dimensional array 
echo "<script>
        var my_2d = ".json_encode($php_data_array)."
</script>";
?>

<h1>
<div id="chart_div"></div></h1><b><center><div1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No of Days booked by Users &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      </div1></center></b>



<script type="text/javascript"  src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {packages: ['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawChart);
    
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'uid');
        data.addColumn('number', 'days');
    
        for(i = 0; i < my_2d.length; i++)
    data.addRow([my_2d[i][0], parseInt(my_2d[i][1])]);
       var options = {
          
          hAxis: {title: 'User',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
      width:750,
      height:400
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
       }
  </script></td>

          <td>
          <h1>  <div id="player_info"></div></h1><b><center><div1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scores achieved by Users&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div1></center></b></td></table>          </div>
</div></div></div></body>

        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Employability.life</span>
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
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
