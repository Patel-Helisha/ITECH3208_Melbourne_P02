
<?php
session_start();
$con = mysqli_connect("localhost","root","","consultation_booking");

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $event_dt = $_POST['event_dt'];
	$subject = $_POST['subject'];

    $query = "INSERT INTO tutor (name,event_dt,subject) VALUES ('$name','$event_dt','$subject')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Succesfully";
        header("Location: consultation.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: consultation.php");
    }
}
?>