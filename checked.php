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


      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="
         https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
		 

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

.submit{
		color: #fff;
		background: #BF1677 ;
		border: none;
		border: 2px solid #95135E;
		margin-top: 2em;
		 width: 180px;  
		 height: 45px;
		text-decoration: none;
		 border-radius: 5px;
	}
	
.submit:hover{
		background: #F90491;
		font-weight:bold;
}
.messages{
		border: 1px solid grey; 
		margin-top: 50px;
		box-shadow: 0px 0px 5px grey;
		padding: 10px 10px 10px 10px;
	}

.result:hover{
		font-weight:bold;
		background: #A9CCE3;
}	

span{
color: red;
}


</style>


</head>
<body>

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
			if(isset($_SESSION['email']))
			{
				echo " Welcome ".$_SESSION['email'];
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
    <td><center><a href="course1.php" style="color:white;" "background-color:Tomato;">Courses</a></center></td>
    <td ><center><a href="review.php" style="color:white;">Reviews</a></center></td>
    <td class="active"><center><a href="contact.php" style="color:#F0B90D;">Contact Us</a></center></td>
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
							<div>Apply for</div>
							<h1 style="font-size: 45px;"><b>Lecture-1 Quiz</b></h1>
						</div>
						<div class="contact_text text-center">
							<p style="font-size:22px;">This is the Lecture-1 quiz. You are required to score atleast 80% to pass this test. If you pass this test, then only you would be allowed to view succeeding lectures.</p>
						</div>
						
						<br><br><br>
						
						            <div class="col-lg-8 d-block m-auto bg-light quizsetting ">
               <div class="result">
			   <table class="table text-center table-bordered table-hover" >
      	<tr>
      		<th colspan="2" class="bg-dark"> <h1 style="text-align:center; background-color: #34495E;" class="text-white"> Results </h1></th>
      		
      	</tr>
      	<tr>
		      	<td style="font-size: 22px; color:#666665;">
		      		Questions Attempted
		      	</td>

	         <?php
         $counter = 0;
         $Resultans = 0;
		 
		 
		 
            if(isset($_POST['submit'])){
				
				//echo $_POST['lid'];
				
            if(!empty($_POST['quizcheck'])) {
            // Counting number of checked checkboxes.
            $checked_count = count($_POST['quizcheck']);
            // print_r($_POST);
            ?>

        	<td style="font-size: 22px; color:#666665;">
            <?php
            echo "Out of 3, You have attempt ".$checked_count." option."; ?>
            </td>
        
          	
            <?php
            // Loop to store and display values of individual checked checkbox.
            $selected = $_POST['quizcheck'];
            
            $q1= " select ans_id from question ";
            $ansresults = mysqli_query($con,$q1);
            $i = 1;
            while($rows = mysqli_fetch_array($ansresults)) {
              // print_r($rows);
            	$flag = $rows['ans_id'] == $selected[$i];
            	
            			if($flag){
            				// echo "correct ans is ".$rows['ans']."<br>";				
            				$counter++;
            				$Resultans++;
            				// echo "Well Done! your ". $counter ." answer is correct <br><br>";
            			}else{
            				$counter++;
            				// echo "Sorry! your ". $counter ." answer is innncorrect <br><br>";
            			}					
            		$i++;		
            	}
            	?>
            	
    		
    		<tr>
    			<td style="font-size: 22px; color:#666665;">
    				Your Total score
    			</td>
    			<td colspan="2" style="font-size: 22px; color:#666665;">
	    	<?php 
	            echo " Your score is ". $Resultans.".";
	            }
	            else{
	            echo "<b>Please Select Atleast One Option.</b>";
	            }
	            } 
	          ?>
	          </td>
            </tr>

            <?php 

            $name = $_SESSION['email'];
            $finalresult = " insert into student(sname,totalques, answercorrect) values ('$name','5','$Resultans') ";
            $queryresult= mysqli_query($con,$finalresult); 
            // if($queryresult){
            // 	echo "successssss";
            // }	
            ?>


      </table></div><br>
		<center>
      	<a href="lectures.php" style="font-size:20px;"  class="btn btn-success"> BACK TO COURSE </a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		
		
		<?php
	//	echo "<a href='view_lecture".$_POST['lid'].".php' style='font-size:20px;'  class='btn btn-success' name='v' value='NEXT LECTURE' /> </a>";
	//	echo "<a href=view_lecture".$_POST['lid'].".php><input class='btn btn-success' style='font-size:20px;'   type='button' name='view' value='NEXT LECTURE' /></a>";
		
		
		
		if($_POST['lid'] == 1 AND $Resultans >= 2)
									
				{
					echo "<a href=view_lecture2.php?lid=".$_POST['lid']."><input class='btn btn-success' style='font-size:20px;' type='button' name='view' value='&nbsp;&nbsp; NEXT LECTURE &nbsp;&nbsp;' /></a>";
					echo "<br><br><p style='font-size: 22px; color:#3498DB; background-color: #D6EAF8;'> Congratulations, you have successfully passed the test!</p>";
				}
				
		elseif($_POST['lid'] == 2 AND $Resultans >= 2 )
				{
								
					echo"<a href=view_lecture3.php?lid=".$_POST['lid']."><input class='btn btn-success' style='font-size:20px;' type='button' name='view' value='&nbsp;&nbsp; NEXT LECTURE &nbsp;&nbsp;' /></a>";
					echo "<br><br><p style='font-size: 22px; color:#3498DB; background-color: #D6EAF8;'> Congratulations, you have successfully passed the test!</p>";
				}
		
		elseif($_POST['lid'] == 3 AND $Resultans >= 2)
				{
					echo "<a href=view_lecture4.php?lid=".$_POST['lid']."><input class='btn btn-success' style='font-size:20px;' type='button' name='view' value='&nbsp;&nbsp; NEXT LECTURE &nbsp;&nbsp;' /></a>";
					echo "<br><br><p style='font-size: 22px; color:#3498DB; background-color: #D6EAF8;'> Congratulations, you have successfully passed the test!</p>";
				}
		
		elseif($_POST['lid'] == 4 AND $Resultans >= 2)
				{
					echo "<a href=view_lecture5.php?lid=".$_POST['lid']."><input class='btn btn-success' style='font-size:20px;' type='button' name='view' value='&nbsp;&nbsp; NEXT LECTURE &nbsp;&nbsp;' /></a>";
				}
				
		elseif($_POST['lid'] == 5  AND $Resultans >= 2)
				{
					echo "<a href=view_lecture6.php?lid=".$_POST['lid']."><input class='btn btn-success' style='font-size:20px;' type='button' name='view' value='&nbsp;&nbsp; NEXT LECTURE &nbsp;&nbsp;' /></a>";
					echo "<br><br><p style='font-size: 22px; color:#3498DB; background-color: #D6EAF8;'> Congratulations, you have successfully passed the test!</p>";
				}
				
		elseif($_POST['lid'] == 6  AND $Resultans >= 2)
				{
					echo "<a href=view_lecture7.php?lid=".$_POST['lid']."><input class='btn btn-success' style='font-size:20px;' type='button' name='view' value='&nbsp;&nbsp; NEXT LECTURE &nbsp;&nbsp;' /></a>";
					echo "<br><br><p style='font-size: 22px; color:#3498DB; background-color: #D6EAF8;'> Congratulations, you have successfully passed the test!</p>";
				}
				
		elseif($_POST['lid'] == 7  AND $Resultans >= 2)
				{
					echo "<a href=view_lecture8.php?lid=".$_POST['lid']."><input class='btn btn-success' style='font-size:20px;' type='button' name='view' value='&nbsp;&nbsp; NEXT LECTURE &nbsp;&nbsp;' /></a>";
					echo "<br><br><p style='font-size: 22px; color:#3498DB; background-color: #D6EAF8;'> Congratulations, you have successfully passed the test!</p>";
				}
		
		elseif($_POST['lid'] == 8 AND $Resultans >= 2)
				{
					echo "<a href=view_lecture9.php?lid=".$_POST['lid']."><input class='btn btn-success' style='font-size:20px;' type='button' name='view' value='&nbsp;&nbsp; NEXT LECTURE &nbsp;&nbsp;' /></a>";
					echo "<br><br><p style='font-size: 22px; color:#3498DB; background-color: #D6EAF8;'> Congratulations, you have successfully passed the test!</p>";
				}
				
		elseif($_POST['lid'] == 9  AND $Resultans >= 2)
				{
					echo "<a href=assignment.php?lid=".$_POST['lid']."><input class='btn btn-success' style='font-size:20px;' type='button' name='view' value='&nbsp;&nbsp; SUBMIT ASSIGNMENT &nbsp;&nbsp;' /></a>";
					echo "<br><br><p style='font-size: 22px; color:#3498DB; background-color: #D6EAF8;'> Congratulations, you have successfully passed the test!</p>";
				}
		else{
					echo "<a href=view_lecture".$_POST['lid'].".php?lid=".$_POST['lid']."><input class='btn btn-success' style='font-size:20px;' type='button' name='view' value='&nbsp;&nbsp; BACK TO LECTURE &nbsp;&nbsp;' /></a>";
					echo "<br><br><p style='font-size: 22px; color:#E74C3C; background-color: #FADBD8;'> You are required to score atleast 80% to pass this test, please re-appear!</p>";
				}
				
			
				
				
	
		?>
		
		
		</center>
		<br>
      </div>
			   
			   
         </div>
         <br>		
						
						
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
	<!--<br>
	<br> Footer -->

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