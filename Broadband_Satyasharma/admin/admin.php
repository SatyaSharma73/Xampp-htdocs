<?php
include("connection.php");

if (isset($_POST['insert'])) {

  $query="insert into plans set package_name='".$_POST['package_name']."',speed='".$_POST['speed']."',monthly_rentals='".$_POST['monthly_rentals']."',ott_vas='".$_POST['ott_vas']."' ";
  mysqli_query($con,$query);

}
$query1="select * from plans";
$result1=mysqli_query($con,$query1);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="time_tables.css">
    <script src="https://use.fontawesome.com/0af9610dbb.js"></script>
  </head>
  <style media="screen">
    body{
      text-align: center;
      padding: 10px;
      padding-bottom: 20px;
      position: relative;
      background-color: #1b1717;
    }
    .plans{
      text-align: left;
      padding-top: 32px;

      width: 30%;
      left: 80px;
      position: absolute;
    }
    .middle{
      padding-top: 10px;
      width: 58%;
      position: absolute;
      right:20px;
    }
    .edit{
      text-decoration: none;
      color: #1f441e;
      font-weight: bold;
    }
    h1{
      text-align: center;
      color: #f4f9f9;
    }
    h6{
      text-align: right;
      margin-right: 100px;
      color: #f4f9f9;
    }
    
  </style>
  <body>
    <h6><span>Welcome<?php  if (isset($_SESSION['NAME'])) { ?>
                  <em><strong><?php echo $_SESSION['NAME']; ?></em></strong>
                <?php } ?></span></h6>
    <div class="plans">
      <h1>Add Plans</h1>
      <form  class="form-control" action="" method="post" enctype="multipart/form-data">
        <label for="package_name">Enter Plan Name :</label>
        <input type="text" name="package_name"  class="form-control form-control-lg" value="">
        <br>
        <label for="speed">Speed :</label>
        <input type="text" name="speed"   class="form-control form-control-lg"value="">
        <br>
        <label for="monthly_rentals">Enter Monthly Rentals :</label>
        <input type="text" name="monthly_rentals"  class="form-control form-control-lg"value="">
        <br>
        <label for="ott_vas">Enter OTT AS VALUE ADDED SERVICES details :</label>
        <input type="text" name="ott_vas"   class="form-control form-control-lg" value="">

         <input type="submit" name="insert" value="INSERT" class="w-10 btn btn-lg btn-primary">
      </form>
    </div>


    <hr>


    <div class="middle">
      <h1>PLANS</h1>
      <table>
        <table cellpadding="20px" class="center" >
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


                   <?php while($fetch=mysqli_fetch_object($result1)){ ?>
                     <tbody>
                   <tr>
                     <td><?php echo $fetch->plan_id;  ?></td>
                     <td><?php echo $fetch->package_name;  ?></td>
                     <td><?php echo $fetch->speed;  ?></td>
                     <td><?php echo $fetch->monthly_rentals;  ?></td>
                     <td><?php echo $fetch->ott_vas;  ?></td>

                     <td><a class="edit" href="edit_plan.php?plan_id=<?php echo $fetch->plan_id;?>"> Edit </a><a class="edit" href="edit_plan.php?del=<?php echo $fetch->plan_id;?>"> || Delete </a></td>



                   </tr>
                   </tbody>
                 <?php } ?>

                   </table>
      </table>
    </div>

  </body>
</html>
