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
			

							<table >
			
  <tr>
     <td rowspan="2" ><center><a href="index.php"><img src="image/emp_logo.png" alt="Logo" height="90" width="145"></a></center></td>

     <td colspan="6"><center>
	 <div style="font-size: 20px;">
	 <?php	
			session_start();
			$con=mysqli_connect("localhost","root","","employability");
			$res=mysqli_query($con,"select * from courses");

			//session_start();
			if(isset($_SESSION['email']))
			{
				echo "Welcome ".$_SESSION['email'];
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
  	

    <td class="active" ><center><a href="index1.php" style="color:#F0B90D;">Home</a></center></td>
    <td ><center><a href="about.php" style="color:white;">About Us</a></center></td>
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
		<div class="logo"><a href="index.php"><img src="image/bac_logo.jpg" alt=""></a></div>
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
			

		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="image/home_bac.jpg" data-speed="0.8"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			
		</div>
	</div>

		<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<div>Welcome</div>
						<h1 style="font-size: 45px;"><b>Employability.life</b></h1>
					</div>
				</div>
			</div>
			<div class="row intro_row">
				<div class="col-xl-98 col-lg-0 offset-xl-52 offset-lg-">
					<div class="intro_text text-center">
						<p align="justify" style="font-size: 25px;">The Employability.life, prepares you to grow and master the art of career progression. It’s the ultimate ‘robot-proof’ preparation for careers in the 
						21st century — empowering you with self-mastery and enabling you to become a creative leader with the empathy and imagination that our societies need today. With our 
						programme blending on-campus support centres alongside an online curriculum, we can provide you with an excellent education and the top-tier support you need to 
						help you jump-start your career success. We take a whole-person approach and prepare learners to become confident professionals. Through Employability.life, you
						will become self-aware and equipped with essential soft and technical skills — ready not just for an interview, but for the possibilities of a lifelong and 
						rewarding professional career.</p>
					</div>
				</div>
			</div>
		</div>		
	</div>



		<!-- Discover Slider -->
		<div class="discover_slider_container">
			<div class="owl-carousel owl-theme discover_slider">
				
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(image/img4.jpg)"></div>
					
				</div>

				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(image/img1.jpg)"></div>
					
				</div>

				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(image/img6.png)"></div>
					
				</div>

			</div>
		</div>

	</div>

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<div>Students</div>
						<h1 style="font-size: 45px;"><b>Testimonials</b></h1>
					</div>
				</div>
			</div>
			<div class="row testimonials_row">
				<div class="col">
					
					<!-- Testimonials Slider -->
					<div class="testimonials_slider_container">
						<div class="owl-carousel owl-theme testimonials_slider">

							<!-- Slide -->
							<div>
								<div class="testimonial_text text-center">
									<p style="font-size: 24px;">Employability.life is one of the great platform for learning and exploring ones best potential. It provides best support and guidance to all the students.</p>
								</div>
								<div class="testimonial_author text-center">
									<div class="testimonial_author_image"><img src="image/t1.png" alt=""></div>
									<div class="testimonial_author_name" ><a href="#" style="font-size: 24px;">Jesica Jones,</a><span style="font-size: 24px;"> Student</span></div>
								</div>
							</div>

							<!-- Slide -->
							<div>
								<div class="testimonial_text text-center">
									<p style="font-size: 24px;">All the tutors  of the courses are very supportive and experienced. Students are given chance to explore their inner creativity.</p>
								</div>
								<div class="testimonial_author text-center">
									<div class="testimonial_author_image"><img src="image/t2.png" alt=""></div>
									<div class="testimonial_author_name"><a href="#" style="font-size: 24px;">Donna Specter,</a><span style="font-size: 24px;"> Student</span></div>
								</div>
							</div>

							<!-- Slide -->
							<div>
								<div class="testimonial_text text-center">
									<p style="font-size: 24px;">Employability.life is one of the great platform for learning and exploring ones best potential. It provides best support and guidance to all the students.</p>
								</div>
								<div class="testimonial_author text-center">
									<div class="testimonial_author_image"><img src="image/t3.png" alt="" ></div>
									<div class="testimonial_author_name"><a href="#" style="font-size: 24px;">Richard David,</a><span style="font-size: 24px;"> Student</span></div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

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