<?php
session_start();
include("connection.php");
if(!isset($_SESSION['cart'])) {
 $c = 0;
}
if(isset($_REQUEST['id']))
{
 if(!isset($_SESSION['cart']))
 {
   $session=session_id();
   $_SESSION['cart']=$session;
 }
 else
 {
   $session=$_SESSION['cart'];
 }
 $query="insert into order_session set p_id='".$_REQUEST['id']."',qty='1',session='".$session."'";
 mysqli_query($con,$query);
header("location:list_item.php");
}
if(isset($_REQUEST['increase']))
{
 $session=session_id();
 $query="insert into order_session set p_id='".$_REQUEST['increase']."',qty='1',session='".$session."'";
 mysqli_query($con,$query);
 header("location:view_cart.php");
}
if(isset($_REQUEST['decrease']))
{
 $session=session_id();
 $query="select id from order_session where p_id='".$_REQUEST['decrease']."' and session='".$session."'";
 $result = mysqli_query($con,$query);
 $fetch=mysqli_fetch_object($result);
 $query="delete from order_session where p_id='".$fetch->id."'";
 mysqli_query($con,$query);
 header("location:view_cart.php");
}
if(isset($_REQUEST['delete']))
{
 $session=session_id();
 $query="delete from order_session where p_id='".$_REQUEST['delete']."' and session='".$session."'";
 mysqli_query($con,$query);
 header("location:view_cart.php");

}

?>
