<?php
include("connection2.php");

if (isset($_POST['Submit'])) {

  $query="insert into train set train_name='".$_POST['train_name']."',train_no='".$_POST['train_no']."',source='".$_POST['source']."',destination='".$_POST['destination']."',two_A='".$_POST['2A']."',three_A='".$_POST['3A']."',specific_day='".$_POST['specific_day']."',sleeper='".$_POST['sleeper']."'";

  mysqli_query($con,$query);

  // header("location:login.php");
  }
   ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://use.fontawesome.com/0af9610dbb.js"></script>
    <link rel="stylesheet" href="../css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/edit.css">

  </head>

  <body>

    <nav id="navigationBar">
      <ul>
        <li>
          <a href="../admin_index.php" class="link">Home</a>
        </li>
        <li>
          <a href="Time_tables.php" class="link">View Chart</a>
        </li>
        <li>
          <a href="add_station.php" class="link">Add Station</a>
        </li>
        <li>
          <a href="set_time.php" class="link">Set Train Timing</a>
        </li>

      </ul>

    </nav>

      <form method="POST" enctype="multipart/form-data" class="form">
        <h2>Add Train</h2>

        <div class="form-group">
          <label for="email">Train Name:</label>
          <div class="relative">
            <input type="text" id="name" name="train_name"  class="form-control"   required="" autofocus="">
            <i class="fa fa-user"></i>
          </div>
        </div>
        <div class="form-group">
          <label for="email">Train Number:</label>
          <div class="relative">
            <input class="form-control" name="train_no" type="text" maxlength="10"  required >
            <i class="fa fa-phone"></i>
          </div>
        </div>

        <div class="form-group">
          <label for="email">Source:</label>
          <div class="relative">
            <input type="text" name="source" class="form-control"   required="">
            <i class="fa fa-building"></i>
          </div>
        </div>


        <div class="form-group">
          <label for="email">Destination:</label>
          <div class="relative">
          <input class="form-control" name="destination" type="text" required=" ">
          <i class="fa fa-suitcase"></i>
        </div>
        </div>

        <div class="form-group">
          <label for="email">Fares:</label>
          <div class="relative">
          <input class="form-control" name="2A" type="text"  placeholder="For 2A" ><i class="fa fa-suitcase"></i>
          <input class="form-control" name="3A" type="text" placeholder="For 3A">
          <input class="form-control" name="sleeper" type="text" placeholder="For Sl">
        </div>
        </div>


        <div class="form-group">
          <label for="email">Runs On The Day:</label>
          <div class="relative">
            <input class="form-control" name="specific_day" type="text" placeholder="Eg. Monday-Friday" >
            <i class="fa fa-css3"></i>
          </div>
        </div>


        <div class="tright">
          <a href=""><button class="movebtn movebtnre" type="Reset"><i class="fa fa-fw fa-refresh"></i> Reset </button></a>
          <!-- <a href=""><button class="movebtn movebtnsu" type="Submit">Submit <i class="fa fa-fw fa-paper-plane"></i></button></a> -->
          <input type="submit" name="Submit" value="submit" class="movebtn movebtnsu">
          <!-- <input type="submit" name="Update" value="Update" class="movebtn movebtnsu"><input type="hidden" name="id" value="<?php echo $fetch->U_ID;?>"> -->
        </div>
      </form>

      <div class="thanks" style="display: none;">
        <h4>Thank you!</h4>
        <p><small>Your message has been successfully sent.</small></p>
      </div>



      <script type="text/javascript">

      $('form').submit(function(){
      $('.thanks').show();
      $('.thanks').delay(2000).fadeOut();
      window.setInterval(function() {
        window.location.reload();
        $('form input#name').focus();
      }, 2500);
      event.preventDefault(); // Here triggering stops
      });

      </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
