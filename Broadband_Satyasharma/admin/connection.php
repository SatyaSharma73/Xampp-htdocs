<?php
include("header.php");
$con=mysqli_connect("localhost","root","","broadband");

@session_start();
if($_SESSION['NAME']=='')
{
  header("location:login.php");
}
?>
