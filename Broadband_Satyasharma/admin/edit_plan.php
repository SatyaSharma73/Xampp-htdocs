<?php
include("connection.php");

$query="select * from plans where plan_id='".$_REQUEST['plan_id']."'";
$result=mysqli_query($con,$query);
$fetch=mysqli_fetch_object($result);

if (isset($_POST['update'])) {
  $query="update plans set package_name='".$_POST['package_name']."',speed='".$_POST['speed']."',monthly_rentals='".$_POST['monthly_rentals']."',ott_vas='".$_POST['ott_vas']."' ";
  mysqli_query($con,$query);
  header("location:admin.php");
}

if (isset($_REQUEST['del'])) {
  $query="delete from plans where  plan_id='".$_REQUEST['del']."'";
  mysqli_query($con,$query);
  header("location:admin.php");
}

 ?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>
  <style media="screen">
    body{
      text-align: center;
      position: relative;
      padding: 10px;
    }
    .plans{
      position: absolute;
      left: 10%;
      top: 100px;
      width: 80%;
      text-align: left;
    }
h1{
  text-align: center;
}
  </style>
  <body>
    <div class="plans">
      <h1>Edit Plans</h1>
      <form class="form-control" action="" method="post" enctype="multipart/form-data">
        <label for="package_name">Enter Plan Name</label>
        <input type="text" name="package_name" class="form-control" value="<?php echo $fetch->package_name;?>">
        <br>
        <label for="speed">Speed</label>
        <input type="text" name="speed" class="form-control" value="<?php echo $fetch->speed;?>">
        <br>
        <label for="monthly_rentals">Enter Monthly Rentals</label>
        <input type="text" name="monthly_rentals" class="form-control" value="<?php echo $fetch->monthly_rentals;?>">
        <br>
        <label for="ott_vas">Enter OTT AS VALUE ADDED SERVICES details </label>
        <input type="text" name="ott_vas" class="form-control" value="<?php echo $fetch->ott_vas;?>">
        <br>
         <input type="submit" name="update" value="update" class="w-10 btn btn-lg btn-primary">
      </form>
    </div>
  </body>
</html>
