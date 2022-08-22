<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	 
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	
</head>

    <body class="design">
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
				<div class="coloumn bg-light">
				
					
					<h1 class="text-center" style="margin-top: 30px; padding-top: 30px; font-size: 22px; font-family: Times new Roman; margin-left: 230px; margin-right: 230px;">Consultation Booking</h1>
    
                    <div class="card-body" style="border: 2px solid #CC0066; border-radius: 5px; margin-top: 30px; margin-left: 350px;margin-right: 350px;">
															
						

                        <form action="code.php" method="POST">
                            <div class="form-group" style="margin-top: 10px;">
                                <label for="">Tutor</label>
                                <select name="name" class="form-control form-control-lg" id="name">
							<option value="" disabled selected>-Select Tutor-</option>
							<option value="Abbas">Abbas</option>
							<option value="Jagtar">Jagtar Singh</option>
							<option value="Nityansh">Nityansh</option>
						
						</select>
                            </div>
                            <div class="form-group" style="margin-top: 10px;">
                                <label for="">Date & Time</>
                                <input type="datetime-local"label name="event_dt" class="form-control">
                            </div>
                            
							
							<div class="form-group" style="margin-top: 10px;">
                                <label for="">Subject</label>
                                <select name="subject" class="form-control form-control-lg" id="tutor">
							<option value="" disabled selected>-Select Subject-</option>
							
							<option value="Engagement">IT Engagement Industry</option>
							<option value="IT">Emerging Information Technology</option>
							<option value="Projkect">Project</option>
							<option value="Cloud">Cloud Computing</option>
							<option value="Web">Web Development</option>
						</select>
                            </div>
							
							<div class="book" style="margin-top: 10px; margin-left: 170px;">
                                <button type="submit" name="save" class="btn btn-primary" style="background-color: #ff9966; border: 1px solid #ff9966;">Book</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
			</div>

    
</body>
</html>