<?php
include("connection.php");


$query="select * from items";
$result=mysqli_query($con,$query);
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
    .middle{
      padding-left: 28%;
    }
  </style>
  <body>
    <?php include("add_items.php") ?>
    <hr>

    <h1>Lists</h1>
<a href="view_cart.php">
  <?php
$_SESSION['cart']=session_id();
$query="SELECT distinct p_id FROM order_session WHERE session='".$_SESSION['cart']."' ";
$orders_select = mysqli_query($con,$query);
$c = mysqli_num_rows($orders_select);echo $c;?>View Cart</a>


    <div class="middle">
      <table>
        <table cellpadding="20px" class="center" >
                     <thead>
                       <th>ID</th>
                       <th>Name</th>
                       <th>Image</th>
                       <th>Price</th>
                       <th>Model</th>
                       <th>Action</th>
                     </thead>

                   <?php while($fetch=mysqli_fetch_object($result)){ ?>
                     <tbody>
                   <tr>
                     <td><?php echo $fetch->id;  ?></td>
                     <td><?php echo $fetch->name;  ?></td>
                    <td><img src="image/<?php echo $fetch->p_image;?>" style="width:85px;height:90px;"></td>
                     <td><?php echo $fetch->price;  ?></td>
                     <td><?php echo $fetch->model;  ?></td>

                     <td><a class="edit" href="edit_item.php?id=<?php echo $fetch->id;?>">Edit</a></td>
                     <td><a class="del" href="edit_item.php?del=<?php echo $fetch->id;?>">Del</a></td>
                     <td><a href="cart.php?id=<?php echo $fetch->id; ?>"><button type="button" class="button">Add to Cart</button></a></td>
                   </tr>
                   </tbody>
                 <?php } ?>

                   </table>
      </table>
    </div>
  </body>
</html>
