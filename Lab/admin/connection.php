<?php
include("header.php");
$con=mysqli_connect("localhost","root","","satya_52");

@session_start();
if($_SESSION['NAME']=='')
{
  header("location:login.php");
}
?>
