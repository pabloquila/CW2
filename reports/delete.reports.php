<?php

include "includes/dbh.include.php"; 

$id = $_GET['id']; 

$del = mysqli_query($conn,"delete from reports where report_id = '$id'"); 

if($del)
{
    mysqli_close($conn); 
    header("location:reports.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>