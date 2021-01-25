<?php

include "../includes/dbh.include.php"; 

$id = $_GET['id']; 

$del = mysqli_query($conn,"delete from drivers where licence_number = '$id'"); 

if($del)
{
    mysqli_close($conn); 
    header("location:drivers.php"); 
    exit;	
}
else
{
    header("location:drivers.php");  
}
?>