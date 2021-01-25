<?php
include "dbh.include.php"; 

if(isset($_POST['submit']))
{      

    $officer_id = $_POST['officer_id'];
    $officer_name = $_POST['officer_name'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $station_address = $_POST['station_address'];
    $user_id = $_POST['user_id'];
    $total = "$first_name $last_name";

    $insert = mysqli_query($conn,"INSERT INTO `officers`(`officer_id`, `officer_fullname`, `station_address`, `user_id`)

     VALUES ( '$officer_id', '$total', '$station_address', '$user_id');");


    if(!$insert)
    {
        header("Location: ../officers.php");
    }
    else
    {
        header("Location: ../officers.php");
    }
}

mysqli_close($conn); 