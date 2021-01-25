<?php
include "dbh.include.php";

if(isset($_POST['submit']))
{      

    $licence_number = $_POST['licence_number'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $expire_date = $_POST['expire_date'];
    $post_code = $_POST['post_code'];
    $emergency_contact = $_POST['emergency_contact'];
    $penalty_points = $_POST['penalty_points'];
    $amount_own = $_POST['amount_own'];
    $address = $_POST['address'];

    $insert = mysqli_query($conn,"INSERT INTO `drivers`( `licence_number`,`first_name`, `last_name`, `dob`, `expire_date`, 
        `post_code`, `emergency_contact`, `total_penalty_points`, `total_fine_gbp`,`address`)
     VALUES ('$licence_number', '$first_name', '$last_name', '$dob', '$expire_date', '$post_code', '$emergency_contact',
            '$penalty_points', '$amount_own', '$address');");


    if(!$insert)
    {
        header("Location: ../drivers.php");

    }
    else
    {        
        header("Location: ../drivers.php");
        exit();

    }
}

mysqli_close($conn); 


