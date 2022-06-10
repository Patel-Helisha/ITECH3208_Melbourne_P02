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
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<style>
span{
color: red;
}

.submit{
		color: #fff;
		background: #BF1677 ;
		border: none;
		border: 2px solid #95135E;
		margin-top: 2em;
		 width: 900px;  
		 height: 55px;
		text-decoration: none;
	}
	
.submit:hover{
		background: #F90491;

.messages{
		border: 1px solid grey; 
		margin-top: 50px;
		box-shadow: 0px 0px 5px grey;
		padding: 10px 10px 10px 10px;
	}

</style>

<script>	<!-- Starting of the JavaScript -->
function validateform()
{    
		
	var email = document.forms["form"]["email"].value; //<-----validation for the empty field------>
	if(email=="")
		{
			document.getElementById("msg1").innerHTML = "*Please enter email address";
			document.form.email.focus();
			return false;
		}
	else
		{
			document.getElementById("msg1").innerHTML = "";
		}
		
	
	
	var password = document.forms["form"]["password"].value; //<-----validation for the empty field------>
	if(password=="")
		{
			document.getElementById("msg2").innerHTML = "*Please enter your password";
			document.form.password.focus();
			return false;
		}
		else
		{
			document.getElementById("msg2").innerHTML = "";
		}
		alert("Welcome, you have been successfully placed order, " + lname + ""  + fname);
}
</script>
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
	<br>
		<div class="header_content d-flex flex-column align-items-center justify-content-lg-end justify-content-center">
			
			<center>
			<div class="logo"><a href="#"><img class="logo_1" src="image/emp_logo.png" alt="" height="150" width="200"><img class="logo_2" src="image/emp_logo.png" alt="" height="150" width="200"><img class="logo_3" src="image/emp_logo.png" alt="" height="150" width="200"></a></center>
			<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<div>
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
			</center>
			</div>
			</div>
			
			<!-- Main Nav -->
			<nav class="main_nav">
			
			
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About_Us</a></li>
					<li><a href="course1.php">Courses</a></li>
					<li><a href="review.php">Reviews</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="faq.php">FAQ</a></li>
					<li>
					<div class="search_button">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="512px" height="512px">
						<g>
							<path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z" fill="#FFFFFF"></path>
						</g>
					</svg>
				</div>			
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
					
					</li>
				</ul>
			</nav>

			<!-- Social -->
			

			<!-- Header Right -->
			<div class="header_right d-flex flex-row align-items-center justify-content-start">
				
				<!-- Search Activation Button -->
				
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

	

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="image/home_bac.jpg" data-speed="0.8"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
		</div>
	</div>

	<!-- Booking -->

	
	</div>

	<div class="contact">
		<div class="contact_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
						<div>Get Logged_In</div>
							<h1>Login</h1>
						</div>
						<div class="contact_text text-center">
							<p>Already registered, then get yourself logged_in for booking the online courses of your preference.</p>
						</div>
						<div class="contact_form_container">
							<form method="POST" action="login.php" name="form" onsubmit="return validateform()">				
							<center>
								<div class="col-lg-10">
									<input class="contact_input" name="email" id="email" type="email" placeholder="Your ID" data-error="Name is required."> <br><span id="msg1"></span>
								<input class="contact_input" name="password" id="password" type="password" placeholder="Your password" data-error="Name is required."> <br><span id="msg2"></span>
								<input class='submit' type='submit' name='submit' value='SUBMIT' />
								</center>
							</form>
							<center><p style="color:black" ><a href="register1.php">Don't have an account? Click here to register</a></p></center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Map -->
		
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<!-- Footer -->

		<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="image/footer.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_logo text-center">
						<img src="image/bac_logo.jpg" alt="" height="150" width="200">
					</div>
					<div class="footer_content">
						<div class="row">
							<div class="col-lg-4 footer_col">
								<div class="footer_info d-flex flex-column align-items-lg-end align-items-center justify-content-start">
									<div class="text-center" >
										<div style="color:white;">Phone:</div>
										<div style="color:white;">+613 8327 3100</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 footer_col">
								<div class="footer_info d-flex flex-column align-items-center justify-content-start">
									<div class="text-center">
										<div style="color:white;">Address:</div>
										<div style="color:white;">399 Lonsdale St, Melbourne VIC 3000, Australia</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 footer_col">
								<div class="footer_info d-flex flex-column align-items-lg-start align-items-center justify-content-start">
									<div class="text-center">
										<div style="color:white;">Website</div>
										<div><a href="http://employability.life/" style="color:white;">employability.life</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="footer_bar text-center"><!-- Link back to ATMC can't be removed. Template is licensed under CC BY 3.0. -->
<font color="white">All rights reserved by Employability.life</font></div>
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
<script src="js/about.js"></script>
</body>
</html>