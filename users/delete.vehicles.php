<?php
include "../includes/dbh.include.php"; 
$id = $_GET['id']; 

$del = mysqli_query($conn,"delete from vehicles where vehicle_id = '$id'");

if($del)
{
    mysqli_close($conn); 
    header("location:vehicles.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>