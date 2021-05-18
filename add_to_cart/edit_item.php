<?php
include("connection.php");

$query="select * from items where id='".$_REQUEST['id']."'";
$result=mysqli_query($con,$query);
$fetch=mysqli_fetch_object($result);

if (isset($_POST['update'])) {
  $query="update items set name='".$_POST['name']."',price='".$_POST['price']."',model='".$_POST['model']."' ";
  mysqli_query($con,$query);
  header("location:list_item.php");
}

if (isset($_REQUEST['del'])) {
  $query="delete from items where  id='".$_REQUEST['del']."'";
  mysqli_query($con,$query);
header("location:list_item.php");
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <h1>Update Details</h1>
    <form class="" action="" method="post">
      <label for="name">Enter the Name</label>
      <input type="text" name="name" value="<?php echo $fetch->name;?>">
      <br>
      <label for="price">Enter the Price</label>
      <input type="text" name="price" value="<?php echo $fetch->price;?>">
      <br>
      <label for="model">Enter the Model</label>
      <input type="text" name="model" value="<?php echo $fetch->model;?>">
      <br>
      <!-- <label for="price">Enter the Image</label>
      <input type="file" name="price" value=""> -->

       <input type="submit" name="update" value="update" class="w-10 btn btn-lg btn-primary">
    </form>
  </body>
</html>
