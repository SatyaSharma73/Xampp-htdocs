<?php
$con=mysqli_connect("localhost","root","","software_lab");

@session_start();
if($_SESSION['NAME']=='')
{
  header("location:login.php");
}
?>
