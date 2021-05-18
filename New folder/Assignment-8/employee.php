<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="signin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
  </head>
  <style>
    html,
body {
  height: 100%;
  background-color: #80ffdb;
}
</style>


 <?php
include("connection.php");
$query="select * from db";
$result=mysqli_query($con,$query);

// $query1="select * from course";
// $result1=mysqli_query($con,$query);
?>
<table cellpadding="20px"  class="center" >
          <thead>
            <th>Food Id</th>
            <th>Name</th>
            <th>Image</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
          </thead>

        <?php while($fetch=mysqli_fetch_object($result)){ ?>
          <tbody>
        <tr>
          <td><?php echo $fetch->U_ID;  ?></td>
          <td><?php echo $fetch->Name;  ?></td>
          <td><img src="admin_panel/user_image/<?php echo $fetch->p_image;?>" style="width:85px;height:90px;border-radius: 10px;"></td>
          <td><?php
               $query1="select c_name from course where c_id ='".$fetch->c_id."'";
               $result1=mysqli_query($con,$query1);
               $fetch1=mysqli_fetch_object($result1);
               echo $fetch1->c_name;
               ?>
          <td><?php echo $fetch->Address;  ?></td>
          <td><?php echo $fetch->Email;  ?></td>
        </tr>
      <?php } ?>
      </table>

      <body class="text-center">
    <p class="text">Software Engineering Lab Assignment-8  &copy; Smriti Choudhury_CS 3B_60 </p>

    <a href="index.php"><button type="button" name="button" class="w-10 btn btn-lg btn-primary">Back</button></a>
    </body>
</html>
