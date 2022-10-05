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


 .collapsible {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active1, .collapsible:hover {
  background-color: #ccc;
}

/* Style the collapsible content. Note: hidden by default */
.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
.collapsible:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
  font-size: 13px;
  color: white;
  float: right;
  margin-left: 5px;
}

.active1:after {
  content: "\2796"; /* Unicode character for "minus" sign (-) */
}

.submit{
		color: #fff;
		background: #5D5458 ;
		border: none;
		border: 2px solid #5D5458;
		margin-top: 2em;
		 width: 200px;  
		 height: 55px;
		text-decoration: none;
	}
	
.submit:hover{
		background: #808B96;
}

.upload{
		color: #fff;
		background: #BF1677 ;
		border: none;
		border: 2px solid #95135E;
		margin-top: 2em;
		 width: 180px;  
		 height: 55px;
		text-decoration: none;
		 border-radius: 5px;
		 
	}
	
.upload:hover{
		background: #F90491;
		font-weight:bold;
}

.assignment{
	
	text-align:center;
	background-position:center;
	align:center;
	color:#28B463; 
	background-color: #D5F5E3; 
	 height: 30px;
  
}


.messages{
		border: 1px solid grey; 
		margin-top: 50px;
		box-shadow: 0px 0px 5px grey;
		padding: 10px 10px 10px 10px;
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

		<!-- Intro -->

	<div class="offering">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<div style="padding-top:70px; padding-left:200px;">Course</div>
						<h1 style="font-size:60px; padding-left:200px;"><b>Lecture6</b></h1>
					</div>
				</div>
			</div>
			<br>
	<br>
	<br>
			<div class="row offering_row">
			<div class="offer">
			
			<?php	
			$con=mysqli_connect("localhost","root","","employability");
			$res=mysqli_query($con,"select * FROM lec_video WHERE vid=1");
			
?>
		

							<div class='row'>
							<?php while ($row=mysqli_fetch_array($res))
							{
								
							
								  echo 	"<div class='col-xl-34 col-md-16'>";
								  echo   "<div class='offer_content text-center'>";
								 echo 	"<div class='offer_title' >";
								 echo 	"<h4 class='simpleCart_shelfItem'>";
								 echo "<br>";
								 echo "<br>";
								 echo "<br>";
								 echo "<br>";
								 echo "<br>";
								 echo "<div style='color:#5D5458; font-size: 36px;'><b>";
								 echo 	$row["lname"];   
								 echo "</b></div>";
								 echo 	"<div class='offer'>";
								 echo 	"<div class='offer_image'>";
								 echo "<br>";
									echo "<br>";
									
								$_GET['lid'];
									
								echo "<video height='650' width='1350' controls>
								<source src='videos/lec1_video.mp4' type='video/mp4'>
								</video>";
									
									
								

								 echo 	"</h4>";
								 echo "<div style='color:#5D5458; font-size: 20px;'>";

								 echo "</div>";
									echo "<br>";
									echo "<br>";
									

									
									echo"<br>";
									echo "<br>";
									echo"</div>";
									echo "<br>";
									echo "<br>";
									

?>
<br>
	<br>

<div class="intro">
		<div class="container">
			<div class="row row-eq-height">
				<!-- Intro Content -->
				<div class="col-lg-12">
					<div class="intro_content">
						<div class="section_title">
							
							<h1 style="text-align:Left">Lecture Overview:</h1>
						</div>
						<div class="intro_text">
						<p></p>
							<p align="justify" style="font-size:22px;">All the faculty members of the college are very supportive and experienced. Students are given chance at this college to explore their inner creativity.
							ATMC, has now showcased a platform for their student to attend online lectures.
							The Australian Technical & Management College (ATMC) being a frontrunner in nationwide education, facilitates a pathway for students worldwide that are looking for higher and proffessional 
							education in the field of Management and Business in Australia and at national platform as well.</p>
						</div>
					</div>
					
					
					
										<br>
				
<p  style="font-size: 20px;"><h3 style="color:#2980B9; text-align:center;  font-weight:bold; font-size:22px; background-color: #D4E6F1;"> Upload your video submission here, and thereby get certified for the Influence course.</h3> </p>



<br>
			

		
		
		<form method="post" action="" style="text-align:center; " enctype='multipart/form-data'>
            <input type='file' style='padding-left:100px;' name='myfile'  /><br>
            <input type='submit' class="upload" style="font-size:20px;" value='UPLOAD' name='upload'>
			
        </form>
<br>
<?php
        include("config.php");
     
		 $fname=$_SESSION['fname'];
	 
		 $res=mysqli_query($con,"select * from register WHERE fname='$fname'");
		while ($row=mysqli_fetch_array($res))
									
		{
				$id=$row['uid'];
				
					
		}
	 
	 
	 
        if(isset($_POST['upload'])){
			$lid=$_GET['lid'];
			$name = $_FILES['myfile']['name'];
			//$image=$_FILES['myfile'];
			$target_dir = "documents/";
			$target_file = $target_dir . $_FILES["myfile"]["name"];
		
				echo "<p class='assignment' style='font-size:20px; '>Your word document - <b>".$name."</b>, is submitted successfully!</p>";

			if(move_uploaded_file($_FILES['myfile']['tmp_name'],$target_file))
			{
					$query = "INSERT INTO `assignment`(`uid`, `lid`, `name`, `location`) VALUES ('".$id."','".$lid."','".$name."','".$target_file."')";
					
					 mysqli_query($con,$query);
                       
						//echo "<h3 style='font-size:20px; color:#F15938; font-weight:bold; '><u><a href='view_assignment.php'>View Uploaded Assignment</a></u></h3>";
					
					
			}
			else{
				echo "Invalid file extension.";
			}
			

        
        }
        ?>			
					
					
				</div>

				<!-- Intro Image -->
				

			</div>
		</div>
	</div>
	<!-- Discover -->

	

	</div>
	<br>
	<br>
	<br>

<p align="center">
<?php
									
								 if(isset($_SESSION['fname']))
								{
									echo "<a href=lectures.php><input class='submit' type='button' name='back' value='BACK TO COURSE' /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;   
									
									echo "<a href=quiz.php?lid=".$_GET['lid']."><input class='submit' type='button' name='quiz' value='START QUIZ' /></a>";
								}
								else
							    {
									echo "<a href=log_in.php><input class='submit' type='button' name='back' value='BACK TO COURSE' /></a>";
									echo "<br>";
									echo "<br>";
									echo "<br>";
									echo "<br>";
									echo "<br>";
								}
								 echo 	"</div>";
								 echo 	"</div>";
								 echo 	"</div>";
								 echo 	"</div>";
								 echo 	"</div>";
								 
								 							?>
</p>							
								
								<?php
								 
								 
							} 
							 echo "</div>";   	  
						?> 
				
				
			</div>
		</div>
	</div>
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