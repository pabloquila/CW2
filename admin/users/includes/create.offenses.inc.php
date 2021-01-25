<?php
include "dbh.include.php"; 

if(isset($_POST['submit']))
{      

    $offense_code = $_POST['offense_code'];
    $offense_description = $_POST['offense_description'];
    $offense_penalty_points = $_POST['offense_penalty_points'];
    $offense_fine_gbp = $_POST['offense_fine_gbp'];

    $insert = mysqli_query($conn,"INSERT INTO `offenses`(`offense_code`, `offense_description`, `offense_penalty_points`, `offense_fine_gbp`)

     VALUES ( '$offense_code', '$offense_description', '$offense_penalty_points', '$offense_fine_gbp');");


    if(!$insert)
    {
        header("Location: ../offenses.php");
    }
    else
    {
        header("Location: ../offenses.php");
    }
}

mysqli_close($conn); 