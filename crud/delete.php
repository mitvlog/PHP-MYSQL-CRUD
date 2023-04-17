<?php
include 'connection.php';
$ids=$_GET['id'];
$query="DELETE FROM `jobregistration` WHERE id='$ids' ";
$data=mysqli_query($con,$query);
header('location:display.php');
?>