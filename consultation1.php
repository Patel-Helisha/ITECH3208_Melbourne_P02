<!DOCTYPE html>
<html lang="en">
<head>
<title>EMPLOYABILITY.LIFE</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Marimar Hotel template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	 
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
	td {
padding: 15px;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

td, th {
  
  text-align: left;
  padding: 8px;
}

a {
	font-size: 20px;
}

  

</style>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
	<br>
	
		<div class="header_content d-flex flex-column align-items-center justify-content-lg-end justify-content-center" >
			
			
			
			<div>
			

			</center>
			</div>

			<!-- Main Nav -->
			

	<table>
			
  <tr>
     <td rowspan="2" ><center><a href="index.php"><img src="image/emp_logo.png" alt="Logo" height="90" width="145"></a></center></td>

     <td colspan="6"><center>
	 <div style="font-size: 20px; color:#99A3A4 ;">
 <?php	
			session_start();
			$con=mysqli_connect("localhost","root","","employability");
			$res=mysqli_query($con,"select * from courses");

			//session_start();
			if(isset($_SESSION['fname']))
			{
				echo "Welcome ".$_SESSION['fname'];
			?>
			<br>
			<center>
			(<a href="logout.php">Logout</a>)
			<?php
			}
			else
			{
			?>
			
			Welcome Guest, (<a href="log_in.php">Login</a>|<a href="register1.php">Register</a>)
			<?php
			}?>
	 </div>
	 </center></td>
   	   
		
  </tr>
  <tr>
  	

    <td ><center><a href="index.php" style="color:white;">Home</a></center></td>
    <td class="active"><center><a href="about.php" style="color:#F0B90D;">About Us</a></center></td>
    <td><center><a href="course1.php" style="color:white;" "background-color:Tomato;">Courses</a></center></td>
    <td><center><a href="review.php" style="color:white;">Reviews</a></center></td>
    <td><center><a href="contact.php" style="color:white;">Contact Us</a></center></td>
    <td><center><a href="faq.php" style="color:white;">FAQs</a></center></td>
  </tr>
 
</table>

				</ul>
			</nav>
				</ul>
			</nav>


			<!-- Social -->
			

			<!-- Header Right -->
			<div class="header_right d-flex flex-row align-items-center justify-content-start">
				
				<!-- Search Activation Button -->
				<div class="search_button">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="512px" height="512px">
						<g>
							<path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z" fill="#FFFFFF"></path>
						</g>
					</svg>
				</div>

				<!-- Header Link -->
				

				<!-- Hamburger Button -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>

			</div>

			<!-- Search Panel -->
			<div class="search_panel">
				<div class="search_panel_content d-flex flex-row align-items-center justify-content-start">
					<img src="images/search.png" alt="">
					<form action="search.php"  method="POST" class="search_form" name="search">
						<input type="text"  name="search" class="search_input" placeholder="Type your search here" required="required">
					</form>
					<div class="search_close ml-auto d-flex flex-column align-items-center justify-content-center" name="search" value="search" id="submit"><div></div></div>
				</div>
			</div>
		</div>
			
	</header>

	<!-- Logo Overlay -->

	<div class="logo_overlay">
		<div class="logo_overlay_content d-flex flex-column align-items-center justify-content-center">
			<div class="logo"><a href="#"><img src="image/bac_logo.jpg" alt=""></a></div>
		</div>
	</div>

	<!-- Menu Overlay -->

	<div class="menu_overlay">
		<div class="menu_overlay_content d-flex flex-row align-items-center justify-content-center">
			
			<!-- Hamburger Button -->
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>

		</div>
	</div>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_container d-flex flex-column align-items-center justify-content-center">

			<!-- Menu Navigation -->
			<nav class="menu_nav text-center">
				<ul>
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="about.php">About_Us</a></li>
					<li><a href="course1.php">Courses</a></li>
					<li><a href="blog1.php">Blog</a></li>
					<li><a href="contact1.php">Contact</a></li>
				</ul>
			</nav>
			<div class="button menu_button"><a href="#">book now</a></div>

			<!-- Menu Social -->
			<div class="social menu_social">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				</ul>
			</div>

		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="image/home_bac.jpg" data-speed="0.8"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			
		</div>
	</div>
    
	
</head>
<div class="contact">
		<div class="contact_container" style="border: 1px solid #cc0066;">
			
			
			    <div class="design">
		<div class="container">
			<div class="row justify-content-center">
			<?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>
				<div class="coloumn bg-light" style="height: 700px;">
				
					
					<h1 class="text-center" style="margin-top: 30px; padding-top: 30px; color: #cc0066; font-weight:bold; font-size: 35px; font-family: Times new Roman; margin-left: 310px; margin-right: 420px;">CONSULTATION BOOKING</h1>
    
                    <div class="card-body" style="border: 2px solid #CC0066; border-radius: 5px; margin-top: 30px; margin-left: 300px; margin-right: 350px; width: 600px;">
															
						

                        <form action="consult.php" method="POST">
                            <div class="form-group" style="margin-top: 10px;">
                                <label style="font-weight:bold; font-size:18px; color:#34495E;" for="">Tutor</label>
								<?php
											$consultationservername = "localhost:3306";
											$consultationusername = "root";
											$consultationpassword = "";
											$consultationdbname = "employability";
											// Set new database object for connection
											$consultationconn = new mysqli($consultationservername, $consultationusername, $consultationpassword, $consultationdbname);
											//  Verify  database connection
											if ($consultationconn->connect_error)
											{
												die("Connection failed: " . $consultationconn->connect_error);
											}
											


											$consultationsql = "SELECT * FROM  tutor";
											//echo $consulatationsql;
											$consultationresult = $consultationconn->query($consultationsql);

											if ($consultationresult->num_rows > 0) {
												// output data of each row
												
											  echo ' <select id="Tutorname" name="Tutorname" style="font-size:18px;" class="form-control form-control-lg" id="name">';
											   echo '	<option value="" disabled selected>-Select Tutor-</option>';
											   while($consultationrow = $consultationresult->fetch_assoc()) {
													 $Tutor=$consultationrow["tname"];
									
												 echo '<option value="' . $Tutor .'">' . $Tutor . '</option>';
									
									

											   }
											   echo '</select>';
											}
												
												
												$consultationconn->close();
									
					         ?>
													
													
							
                            </div>
                            <div class="form-group" style="margin-top: 10px;">
								<label style="font-weight:bold; font-size:18px; color:#34495E;" for="birthdaytime">Start Date</label>
								<input class="form-control form-control-lg" style="color: #34495E; font-size:18px; height: 48px; width: 565px; border-radius: 3px; border: 1px solid lightgrey;" type="datetime-local" id="BookingDate" name="BookingDate">
                               
                            </div>
                            
							
							
							 <div class="form-group" style="margin-top: 10px;">
                                <label style="font-weight:bold; font-size:18px; color:#34495E;" for="">End Date</>
								<input class="form-control form-control-lg" style="color: #34495E; font-size:18px; height: 48px; width: 565px; border-radius: 3px; border: 1px solid lightgrey;" type="datetime-local" id="EndDate" name="EndDate">
                               
                            </div>
                            
						
							<div class="form-group" style="margin-top: 10px;">
                                <label style="font-weight:bold; font-size:18px; color:#34495E;" for="">Subject</label>
                         
						 
						 <?php
											$consultationservername = "localhost:3306";
											$consultationusername = "root";
											$consultationpassword = "";
											$consultationdbname = "employability";
											// Set new database object for connection
											$consultationconn = new mysqli($consultationservername, $consultationusername, $consultationpassword, $consultationdbname);
											//  Verify  database connection
											if ($consultationconn->connect_error)
											{
												die("Connection failed: " . $consultationconn->connect_error);
											}
											


											$consultationsql = "SELECT * FROM  courses";
											//echo $consultationsql;
											$consultationresult = $consultationconn->query($consultationsql);

											if ($consultationresult->num_rows > 0) {
												// output data of each row
												
											  echo '  <select name="subject" id="subject" style="font-size:18px;" class="form-control form-control-lg" id="tutor">';
											   echo '<option value="" disabled selected>-Select Subject-</option>';
											   while($consultationrow = $consultationresult->fetch_assoc()) {
													 $Tutor=$consultationrow["cname"];
									
												 echo '<option value="' . $Tutor .'">' . $Tutor . '</option>';
									
									

											   }
											   echo '</select>';
											}
												
												
												$consultationconn->close();
									
					         ?>
												
						 
						 
						 
						 
						
                            </div>
							
							<div class="book" style="margin-top: 10px; margin-left: 245px;">
                                <button type="submit" name="save" class="btn btn-primary" style="width: 100px; height: 52px; font-size: 25px; background-color: #CC0066; border: 1px solid #ff9966;">Book</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
			</div>

    <?php

			$consultationservername = "localhost:3306";
			$consultationusername = "root";
			$consultationPassword = "";
			$consultationdbname = "employability";
			
			$consultationconn = new mysqli($consultationservername, $consultationusername, $consultationPassword, $consultationdbname);

			if ($consultationconn->connect_error)
			{
				die("Connection failed: " . $consultationconn->connect_error);
			}
  
			
				$consultationsql = "SELECT * FROM  consultationbooking";
			

			//echo $consultationsql;
			$consultationresult = $consultationconn->query($consultationsql);
			$consultationstatus=0;
			if (!empty($consultation) && $consultationresult->num_rows > 0) {
				// output data of each row
				echo '<center><hr>';
				echo '<h1> CONSULTATION BOOKING  DETAILS </h1><br>';
				echo '<table border="1">';
				echo '<tr>';
				echo '<td> <b>BookingID</b> </th>';
				echo '<td> <b>Tutor</b> </th>';
				echo '<td> <b>StartDate </b></td>';
				echo '<td> <b>Time </b></td>';
				echo '<td> <b>EndDate </b></td>';
				echo '<td> <b>EndTime </b></td>';
				echo '<td> <b>subject </b></td>';
			
		

					
			  
			   while($consultationrow = $consultationresult->fetch_assoc()) {
				  
                    $ID=$consultationrow["ID"];
					$Tutor=$consultationrow["Tutor"];
					$Date=$consultationrow['Dates'];
					$consultationTime=$consultationrow["Times"];
			        $EndDate=$consultationrow['EndDate'];
					$EnddTime=$consultationrow["EnddTime"];
					$consultationsubject=$consultationrow["subject"];
			
					
				
					echo '<tr>';
					echo '<td>' . $ID.'</th>';
					echo '<td>' . $Tutor .'</th>';
					echo '<td>' . $Date . '</td>';
					echo '<td>' . $consultationTime . '</td>';
					echo '<td>' . $EndDate . '</td>';
					echo '<td>' . $EnddTime . '</td>';
					echo '<td>' . $consultationsubject . '</td>';
					
				
					
					
				
						
					echo '<td>' . '<a href=index.php>Home</a></td>';
					echo '<tr>';
						
				   }
				   echo '</table>';
				   echo '</center>';
			}
			$consultationconn->close();


?>
</div>
			
			</div>
		</div>
		
	   
	   <footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="image/footer.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_logo text-center">
						<a href="index.php"><img src="image/bac_logo.jpg" alt="" height="150" width="200"></a>
					</div>
					<div class="footer_content">
						<div class="row">
							<div class="col-lg-4 footer_col">
								<div class="footer_info d-flex flex-column align-items-lg-end align-items-center justify-content-start">
									<div class="text-center" >
										<div style="color:white;font-size: 19px;" ><b>Phone:</b></div>
										<div style="color:white; font-size: 18px;">+613 8327 3100</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 footer_col">
								<div class="footer_info d-flex flex-column align-items-center justify-content-start">
									<div class="text-center">
										<div style="color:white; font-size: 19px;"><b>Address:</b></div>
										<div style="color:white; font-size: 18px;">399 Lonsdale St, Melbourne VIC 3000, Australia</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 footer_col">
								<div class="footer_info d-flex flex-column align-items-lg-start align-items-center justify-content-start">
									<div class="text-center">
										<div style="color:white; font-size: 19px;" ><b>Website</b></div>
										<div><a href="http://employability.life/" style="color:white; font-size: 18px;">employability.life</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="footer_bar text-center"><!-- Link back to ATMC can't be removed. Template is licensed under CC BY 3.0. -->
<font color="white" style="font-size: 18px;">All rights reserved by Employability.life</font></div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="js/custom.js"></script>
</body>
</html>

