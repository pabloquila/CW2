<?php
include "dbh.include.php"; 

if(isset($_POST['submit']))
{      

    $licence_number = $_POST['licence_number'];
    $vehicle_id = $_POST['vehicle_id'];
    $owner = $_POST['owner'];
    $motor_insurance_number = $_POST['motor_insurance_number'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $chasis_frame_number = $_POST['chasis_frame_number'];
    $colour = $_POST['colour'];


    $insert = mysqli_query($conn,"INSERT INTO `vehicles`(`vehicle_id`, `owner`, `licence_number`,  
        `motor_insurance_number`, `brand`, `model`, `chasis_frame_number`, `colour`)

     VALUES ( '$vehicle_id', '$owner', '$licence_number', '$motor_insurance_number', '$brand',
            '$model', '$chasis_frame_number', '$colour');");


    if(!$insert)
    {
        header("Location: ../vehicles.php");
    }
    else
    {
        header("Location: ../vehicles.php");
    }
}

mysqli_close($conn); 