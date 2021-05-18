<?php
include("include/header.php");
$con=mysqli_connect("localhost","root","","medicine_order");

@session_start();
if($_SESSION['NAME']=='')
{
  header("location:login.php");
}
?>
