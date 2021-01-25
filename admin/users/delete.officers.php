<?php

include "../includes/dbh.include.php"; 

$id = $_GET['id']; 

$del = mysqli_query($conn,"delete from officers where officer_id = '$id'"); 

if($del)
{
    mysqli_close($conn); 
    header("location:officers.php"); 
    exit;	
}
else
{
    header("location:officers.php");  
}
?>