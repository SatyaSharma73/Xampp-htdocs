<?php
include("connection2.php");

if (isset($_POST['Submit'])) {

  $query="insert into cold_drinks set name='".$_POST['name']."',price='".$_POST['price']."',quantity='".$_POST['quantity']."'";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/edit.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <script src="https://use.fontawesome.com/0af9610dbb.js"></script>

  </head>


  <body>
    <nav id="navigationBar">
      <ul>
        <li>
          <a href="../admin_index.php" class="link">Home</a>
        </li>
        
      </ul>

    </nav>

          <form method="POST" enctype="multipart/form-data" class="form">
            <h2>Add New Station</h2>
            <div class="form-group">
              <label for="email">Cold drink name:</label>
              <div class="relative">
                <input type="text" id="name" name="name" class="form-control"  placeholder="Eg. John" required="" autofocus="">

                <i class="fa fa-user"></i>
              </div>
            </div>
            <div class="form-group">
              <label for="email">price:</label>
              <div class="relative">
                <input type="text" id="name" name="price"  class="form-control"    required="" autofocus="">

                <i class="fa fa-user"></i>
              </div>
            </div>

            <div class="form-group">
              <label for="email">Quantity:</label>
              <div class="relative">
                <input class="form-control" name="quantity" type="text" maxlength="10" required >
                <i class="fa fa-phone"></i>
              </div>
            </div>

            <div class="tright">
              <a href=""><button class="movebtn movebtnre" type="Reset"><i class="fa fa-fw fa-refresh"></i> Reset </button></a>
              <!-- <a href=""><button class="movebtn movebtnsu" type="Submit">Submit <i class="fa fa-fw fa-paper-plane"></i></button></a> -->
              <input type="submit" name="Submit" value="INSERT" class="movebtn movebtnsu">
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
