<?php

include "../includes/dbh.include.php"; 

$id = $_GET['id']; 

$del = mysqli_query($conn,"delete from offenses where offense_code = '$id'"); 

if($del)
{
    mysqli_close($conn); 
    header("location:offenses.php"); 
    exit;	
}
else
{
    header("location:offenses.php");  
}
?>