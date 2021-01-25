<?php

include "../includes/dbh.include.php"; 

$id = $_GET['id']; 

$del = mysqli_query($conn,"delete from users where user_id = '$id'"); 

if($del)
{
    mysqli_close($conn); 
    header("location:users.php"); 
    exit;	
}
else
{
    header("location:users.php");  
}
?>