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
#submit{
		color: #fff;
		background: #BF1677 ;
		border: none;
		border: 2px solid #95135E;
		margin-top: 2em;
		width: 150px;
		height: 50px;
		font-size:22px;	
		border-radius:10px;
		
		text-decoration: none;
	}
	
	#submit:hover{
		background-image: linear-gradient(to right, #8c00b1 , #f45106);
		font-weight:bold;
		
		
	}
	.calender{
		padding-top:500px;
		
		margin-left:165px;
		padding-top: 50px;
		
		
		
		border-width: 10px;
		border-radius:10px;
		font-size:22px;
		align: center;
		
		
	  border: 10px solid transparent;
	  border-radius: 20px;
	  background: 
		linear-gradient(to right, white, white), 
		linear-gradient(to right, #8c00b1 , #f45106, #ffb300); 
	  background-clip: padding-box, border-box;
	  background-origin: padding-box, border-box;
	  
	  /* Other styles */
	 width: 800px;
	 height: 450px;
		
		width: 800px;
		height: 370px;
		opacity: 0.8;
				
	}
	
	.calender:hover{
		background-image: linear-gradient(to top, #ffb300, #f9e8bf );
		opacity: 0.7;	
		color: #8c00b1;
		
	}
	

	.inputdate{
		width: 200px;
		height: 30px;
		border: 2px solid #BFC9CA ;
		border-radius: 3px;
		margin-bottom: 15px;
		margin-top: 15px;
	} 
	
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
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
	<br>
	
		<div class="header_content d-flex flex-column align-items-center justify-content-lg-end justify-content-center" style="height: 145px; ">
			
			
			
			<div>
			

			</center>
			</div>

			<!-- Main Nav -->
			

	<table>
			
  <tr>
     <td rowspan="2" ><center><a href="index.php"><img src="image/emp_logo.png" alt="Logo" height="90" width="145"></a></center></td>

     <td colspan="6"><center>
	 <div style="font-size: 20px;">
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
    <td><center><a href="about.php" style="color:white;">About Us</a></center></td>
    <td class="active"><center><a href="course1.php" style="color:#F0B90D;" "background-color:Tomato;">Courses</a></center></td>
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="image/home_bac.jpg" data-speed="0.8" height="912px"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			
		</div>
	</div>


	<!-- Booking -->

	
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="contact_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<div>Welcome</div>
							<h1 style="font-size: 45px;"><b>Booking Calendar</b></h1>
						</div>
						<br>
						<br>
						<br>
						<div class="calender">
						<center>
							<form name="rentbooking" method="post" action="">
					                            <?php 
														error_reporting(0);
														$cid=$_GET['cid']; 
														echo "<input type='hidden' name='cid' value='$cid'>";
														//echo $cid;
													?>
													<br>
													
													
													<font color="black" style="font-weight: bold;">Start Date:&nbsp;&nbsp;&nbsp;
													<input style="padding-left: 10px; " type="date" name="start" id="start" class="inputdate" required="required">
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													End Date:&nbsp;&nbsp;&nbsp;&nbsp;
													
													<input style="padding-left: 10px;" type="date" name="end" id="end" class="inputdate" required="required">
													<br>

													<br>
													<input  type="submit" style="font-size:22px" value="ENROLL" name="submit" id="submit" align="center">
													</font>
												</form>
												</center>
												
												<?php
	$con=mysqli_connect("localhost","root","","employability");
	if(isset($_POST['submit']))
	{
		
		
		 $fname=$_SESSION['fname'];
	 
		 $res1=mysqli_query($con,"select * from register WHERE fname='$fname'");
		while ($row=mysqli_fetch_array($res1))
									
		{
				$uid = $row['uid'];
				
					
		}
		//echo $uid;
				
		//session_start();
		$start=$_POST['start'];
		$end=$_POST['end']; 
		
		
		
		$sd= strtotime($start);
		$ed= strtotime($end);
		$diff = $ed - $sd;
		$days = $diff/(60*60*24);
		$_SESSION['start']=$start;
		$_SESSION['end']=$end;
		

		//echo $start;
		//echo $end;
		//echo $days;
		
		//echo $cid;

		
		if($days > 30)
		{
			$message="Invalid Number of Days  |   Limit upto 30 days. Thank You";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		elseif($days < 15)
		{
			$message="Invalid Number of Days  |   Please select atleast 15 days. Thank You";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else
		{
			$qry="SELECT * FROM register,courses WHERE uid='$uid' and cid='$cid'";
			if(mysqli_query($con,$qry))
			{
			 mysqli_query($con,"INSERT INTO `booking_cal`(`start`, `end`, `days`, `uid`, `cid`) VALUES ('$start','$end','$days','$uid','$cid')");

				
?>
			<script>
			window.location.href = '/ITECH3208/user/reciept.php';
			</script>
<?php
			}
			else
			{
				echo "Not inserted";
			}
		}
	}
?>

												
							</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Map -->

		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<!--<br>
	<br> Footer -->

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