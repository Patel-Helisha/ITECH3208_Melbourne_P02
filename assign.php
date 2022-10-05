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
        <style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #b30047;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41;
    color: #fff;
}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}</style>
    </head>

    <body>
                    
          
   


<div class="super_container">
    
    <!-- Header -->

    <header class="header">
    <br>
        <div class="header_content d-flex flex-column align-items-center justify-content-lg-end justify-content-center">
            
            <center>
            <div class="logo"><a href="#"><img class="logo_1" src="image/emp_logo.png" alt="" height="150" width="200"><img class="logo_2" src="image/emp_logo.png" alt="" height="150" width="200"><img class="logo_3" src="image/emp_logo.png" alt="" height="150" width="200"></a></div></center>

            <div>
            
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
            </center>
            </div>

            <!-- Main Nav -->
            <nav class="main_nav">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                    <li><a href="index.php">Home</a></li>
                    <li> <a href="about.php">About Us</a></li>
                    <li><a href="course1.php">Courses</a></li>
                    <li><a href="review.php">Reviews</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="faq.php">FAQ</a></li>
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

        <!-- Intro -->

    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <div>  </div>
                        <h1><b>ASSIGNMENT</b></h1><br><br><br><br>
                        <h3><b>Life is a life-long assignment that must be constantly analyzed, clarified, figured out, and responded to appropriately.</b></h3><br><br><br><br>
                    
                    
<center>
            
            <a href="ASSIGNMENT.pdf" class="button">Open</a>
            <a href="download.php?file=ASSIGNMENT" target="_blank" class="button">Download</a></center>

  
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
                    <div class="background_image" style="background-image:url(image/img7.jpg)"></div>
                    
                </div>

                <!-- Slide -->
                <div class="slide">
                    <div class="background_image" style="background-image:url(image/img2.jpg)"></div>
                    
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
                        
                        <br><br><br><br>
                        <h3>Education is a lifetime assignment & terminates when you do.</h3>
                    </div>
                </div>
            </div>
            <div class="row testimonials_row">
                <div class="col">
                    
                    <!-- Testimonials Slider -->
                    <div class="testimonials_slider_container">
                        <div class="owl-carousel owl-theme testimonials_slider">

                            <!-- Slide -->
                            
                                
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
<script src="js/custom.js"></script>
</body>
</html>