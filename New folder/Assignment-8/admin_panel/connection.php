<?php
include("include/header.php");
$con=mysqli_connect("localhost","root","","software_food");

@session_start();
if($_SESSION['NAME']=='')
{
  header("location:login.php");
}
?>
