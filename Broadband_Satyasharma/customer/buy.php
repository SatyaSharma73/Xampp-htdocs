<?php include("customer_connection.php");

$query="select * from plans where plan_id='".$_REQUEST['plan_id']."'";
$result=mysqli_query($con,$query);
$fetch=mysqli_fetch_object($result);
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="time_tables.css">
  </head>
  <style media="screen">
    body{
      padding: 20px;
      position: relative;
    }
    .checkout_form{
      width: 50%;
      position: absolute;
      left: 25%;
      padding-top: 50px;
    }
  </style>
  <body>

    <table>
      <table cellpadding="20px" class="center" border="1px" >
                   <thead>

      <tr>
        <th scope="col">Sl No.</th>
        <th scope="col">PACKAGE NAME</th>
        <th scope="col">SPEED</th>
        <th scope="col">MONTHLY RENTAL (INR)</th>
        <th scope="col">OTT AS VALUE ADDED SERVICES</th>


      </tr>
    </thead>



                   <tbody>
                 <tr>
                   <td><?php echo $fetch->plan_id;  ?></td>
                   <td><?php echo $fetch->package_name;  ?></td>
                   <td><?php echo $fetch->speed;  ?></td>
                   <td><?php echo $fetch->monthly_rentals;  ?></td>
                   <td><?php echo $fetch->ott_vas;  ?></td>

                 </tr>
                 </tbody>


                 </table>
    </table>

<div class="checkout_form">
  <form  class="form-control" action="payment.php" method="post" enctype="multipart/form-data">
    <label for="firstname"> Name :</label>
    <input type="text" name="firstname"   class="form-control form-control-lg" value="<?php echo $_SESSION['NAME']; ?>">
    <br>
    <label for="phone"> Phone Number :</label>
    <input type="text" name="phone"   class="form-control form-control-lg"value="">
    <br>
    <label for="email">Email :</label>
    <input type="text" name="email"  class="form-control form-control-lg" value="<?php echo $_SESSION['Email']; ?>">
    <br>
    <label for="ott_vas">Client ID</label>
    <input type="text" name="ott_vas"   class="form-control form-control-lg" value="">

     <input type="hidden" name="productinfo" value="test">
	   <input type="hidden" name="amount" value="<?php echo $fetch->monthly_rentals;?>">
	   <input type="hidden" name="surl" value="http://localhost/Assignment-9/customer/success.php">
		 <input type="hidden" name="furl" value="http://localhost/Assignment-9/customer/failure.php">


     <input type="submit" name="submit" value="Proceed to payment" class="w-10 btn btn-lg btn-primary">
  </form>
</div>

  </body>
</html>
