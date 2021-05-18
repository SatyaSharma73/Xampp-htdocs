<?php
include("connection.php");

$query="select p_image from admin where email='".$_SESSION['Email']."'";
$result=mysqli_query($con,$query);

$query1="select * from admin where email='".$_SESSION['Email']."'";
$result1=mysqli_query($con,$query);

$query2="select * from cold_drinks";
$result2=mysqli_query($con,$query2);

$query3="select * from pizza";
$result3=mysqli_query($con,$query3);








 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/dashboard_tables.css">
    <link rel="stylesheet" href="css/search.css">
    <!-- <link rel="stylesheet" href="css/card_details.css"> -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/0af9610dbb.js"></script>
    <title>Welcome to Indian Railway Passenger Reservation Enquiry </title>
  </head>
  <body>

    <div class="page-wrapper chiller-theme toggled">
      <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
      </a>
      <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
          <div class="sidebar-brand">
            <a href="login_do.php?logout=true"><i class="fa fa-sign-out" aria-hidden="true">Logout</i></a>

          </div>
          <div class="sidebar-header">
            <div class="user-pic">
              <?php while($fetch=mysqli_fetch_object($result)){ ?>
              <img src="user_profile/<?php echo $fetch->p_image;?>" alt="<?php echo $fetch->p_image;?>">
              <?php } ?>
              <!-- <img src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt=""> -->
            </div>
            <div class="user-info">
              <span class="user-name">
                <?php  if (isset($_SESSION['NAME'])) { ?>
                  <em><strong><?php echo $_SESSION['NAME']; ?></em></strong>
                  <?php } ?>
              </span>

              <span class="user-role">Administrator</span>
              <span class="user-status">
                <span>Online</span>
                </span>
              <span class="user-status">
                  <span><a href="admin_templates\edit.php" class="user-status"> Edit profile</span>
              </span>
            </div>

          </div>
          <div class="sidebar-menu">
            <ul>
              <li class="header-menu">
                <span>Catagories</span>
              </li>

              <li class="sidebar-dropdown">
                <a href="admin_templates/add_trains.php">

                  <i class="fa fa-plus" aria-hidden="true"></i>
                  <span>Pizza</span>

                </a>
                </li>
                <li class="sidebar-dropdown">
                  <a href="admin_templates/add_station.php">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <span>Cold drinks</span>

                  </a>
                </li>

            


          </div>
          <!-- sidebar-menu  -->
        </div>

      </nav>
      <!-- sidebar-wrapper  -->


<div class="container">
  <h2 class="dash_heading">Welcome <?php  if (isset($_SESSION['NAME'])) { ?>
    <em><strong><?php echo $_SESSION['NAME']; ?></em></strong>
    <?php } ?></h2>
  <hr>

    <div class="table1">
      <h1 class="heading">Cold Drink</h1>
      <br>
      <hr>
      <table border="5px">

        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>

          </tr>
        </thead>
        <?php while($fetch=mysqli_fetch_object($result2)){ ?>
        <tbody>
          <tr>
            <td><?php echo $fetch->name;?></td>
            <td><?php echo $fetch->price; ?></td>
            <td><?php echo $fetch->quantity; ?></td>
          </tr>

        </tbody>
         <?php } ?>

      </table>
    </div>



        </div>
        <div class="table2">
          <h1 class="heading">Pizza</h1>
          <br>
          <hr>
          <table border="5px">

            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Price</th>

              </tr>
            </thead>
            <?php while($fetch=mysqli_fetch_object($result3)){ ?>
            <tbody>
              <tr>
                <td><?php echo $fetch->Name;?></td>
                <td><?php echo $fetch->Type; ?></td>
                <td><?php echo $fetch->Price; ?></td>
              </tr>

            </tbody>
             <?php } ?>

          </table>
        </div>

      </main>
      <!-- page-content" -->
      </div>


    <!-- Optional JavaScript; choose one of the two! -->
<script src="css/js/index.js" charset="utf-8"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
