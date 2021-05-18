<?php
include("connection2.php");
$query="select * from plans";
$result=mysqli_query($con,$query);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="time_tables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>

<style media="screen">
body{
  padding: 5%;
  background-color: #1b1717;
}
  a{
    text-decoration: none;
  }
  .middle{
    margin-top: 20px;
  }
  h1{
    text-align: center;
    color: #f4f9f9;
  }
  .edit{
    text-decoration: none;
    color: #1f441e;
    font-weight: bold;
  }
</style>



  <body>
    <a href="admin/login.php"><button type="button" class="btn btn-success">Admin Login</button></a>
    <a href="customer/customer_login.php"><button type="button" class="btn btn-danger">Customer Login</button></a>

    <h1>Broadband New Tariff Plans</h1>
    <div class="middle">
      <table>
        <table cellpadding="20px" class="center" border="1px" >
                     <thead>

        <tr>
          <th scope="col">Sl No.</th>
          <th scope="col">PACKAGE NAME</th>
          <th scope="col">SPEED</th>
          <th scope="col">MONTHLY RENTAL (INR)</th>
          <th scope="col">OTT AS VALUE ADDED SERVICES</th>
          <th scope="col">Actions</th>

        </tr>
      </thead>


                   <?php while($fetch=mysqli_fetch_object($result)){ ?>
                     <tbody>
                   <tr>
                     <td><?php echo $fetch->plan_id;  ?></td>
                     <td><?php echo $fetch->package_name;  ?></td>
                     <td><?php echo $fetch->speed;  ?></td>
                     <td><?php echo $fetch->monthly_rentals;  ?></td>
                     <td><?php echo $fetch->ott_vas;  ?></td>
                     <td><a class="edit" href="customer/customer_login.php"> Buy Now </a></td>
                   </tr>
                   </tbody>
                 <?php } ?>

                   </table>
      </table>
    </div>


  </body>
</html>