<?php
include "dbh.include.php"; 

if(isset($_POST['submit'])){  

    $date =  $_POST['date'];  
    $time = $_POST['time'];
    $location = $_POST['location'];  
    $licence_number = $_POST['licence_number'];
    $vehicle_id = $_POST['vehicle_id'];
    $offense_code = $_POST['offense_code'];
    $penalty_points = $_POST['penalty_points'];
    $fine_gbp = $_POST['fine_gbp'];
    $officer_id = $_POST['officer_id'];
    $statement = $_POST['statement'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $full_name = "$first_name $last_name";
     

    $insert = mysqli_query($conn,"INSERT INTO `reports`(`report_id`,`date`, `time`, `location`, `licence_number`, 
        `vehicle_id`, `offense_code`, `penalty_points`, `fine_gbp`, `officer_id`, `statement`, `full_name`)
     VALUES ('', '$date', '$time', '$location', '$licence_number', '$vehicle_id', '$offense_code',
             '$penalty_points', '$fine_gbp', '$officer_id', '$statement', '$full_name');");

    if(!$insert)
    {
        header("Location: ../reports.php");
    }
    else
    {
        header("Location: ../reports.php");
    }
}

mysqli_close($conn); 
  