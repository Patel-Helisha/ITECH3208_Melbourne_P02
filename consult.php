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
	 <div style="font-size: 20px; color: #99A3A4;">
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
			<div class="container" >
				<div class="row justify-content-center"  >
					<div class="column bg-light" style="height: 500px; margin: 20px 50px; border: 1px solid #cc0066;" >
					<marquee style="margin-top:50px; color: #cc0066;"><h1><b>BOOKING CONFIRMATION</b></h1></marquee>
						<div class="section_title text-center">
							 
								
							
						<div class="contact_form_container" style= "margin-top: 15px;">
						<div class="reciept">
						<center>
						<b style= "margin-top: 50px;"><font color="black" style="  font-size: 35px; ">
						

<?php


           $UID=rand(1,999);
			//echo $UID;
		//booking for php booking and database connectivity
		    $Tutors=$_POST['Tutorname'];
		    $BookingDate=$_POST['BookingDate'];
			$name = $_SESSION['fname'];
			
			//echo $BookingDate;
			$sarr = preg_split ("/\T/", $BookingDate); 
			$sdt= $sarr[0] ;
			
			$BookingDate=$sdt;
			$sde= $sarr[1] ;
			$day = date('l', strtotime($BookingDate));
		   

		    $BookingTime=$sde;//$_POST['BookingTime'];
		    	  
			
			$subject=$_POST['subject'];
			$EndDate=$_POST['EndDate'];
			
			
			$sarr1 = preg_split ("/\T/", $EndDate); 
			$sdt1= $sarr1[0] ;
			
			$EndDate=$sdt1;
			$sde1= $sarr1[1] ;
			//$day1 = date('l', strtotime($EndDate));
		   
            $EndTime=$sde1;
	

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
  
            if ($day=='Sunday' or $day=='Saturday')
			{
				echo "<p style='margin-top: 1px; Color:red; font-size: 60px;'>Sorry!!</p>";
				echo "<p style='margin-top:2px; font-size: 30px; color: blue;'>Tutor is not available on   $day .</p>";
				
			}
			
			else
			{
                    $consultationsql1 = "SELECT * FROM  consultationbooking where Tutor='" . $Tutors . "' and Times='" . $BookingTime . "' and Dates='" .  $BookingDate ."'" ;
					

					//echo $consulatationsql;
					$consultationresult = $consultationconn->query($consultationsql1);
					$consultationstatus=0;
					$count=0;
					if (!empty($consultationresult) && $consultationresult->num_rows > 0) {
						
						 while($consultationrow = $consultationresult->fetch_assoc())
					     {
								 $count=1;
						 }
					}
					
					
					if( $count==0)
					{
						$consultationsql = "INSERT INTO `consultationbooking`(`Tutor`, `name`, `Dates`, `Times`, `subject`, `EndDate`, `EndTime`) VALUES ('$Tutors','$name','$BookingDate','$BookingTime','$subject','$EndDate','$EndTime')";
							
						if ($consultationconn->query($consultationsql) === TRUE) 
						{
							echo "<p style='Color:#ff9966; font-size: 50px;'>Thank You.</p>";
							echo "<p style='width: 70px; height: 70px;'><img src='image/confirmationsign.png'></p>";
							echo "<p style='color:black; font-size: 30px; margin-top: 2px;'>You Have Been Booked Successfully.</p>";
							
							
						} else 
						{
							echo "Error: " . $consultationsql . "<br>" . $consultationconn->error;
						}

						
					}
					else
					{
						echo "<p style='margin-top: px; Color:red; font-size: 60px;'>Sorry!!</p>";
						echo "<p style='margin-top:2px; font-size: 30px; color: red;'>Booking Already Exist. Try Another Date and Time.</p>";
					}
					
			}
			$consultationconn->close();

		
       ?>
	   
	   <form name="booking_confirmation" method="post" action="consultation1.php">
		<center>
		<input type="submit" value="Back" style=" color: white; font-size: 25px; border-radius: 8px; margin-top:30px; margin-left: 10px; background-color: #ff9966; border: 1px solid #ff9966; width: 100px; height: 45px;" name="submit" id="submit" align="center">
		</center>
		</form>
	   
	   </div>
	   </font></b>
							
							
							
							<center>
							</div>
							</div>
						</div>
					</div>
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

