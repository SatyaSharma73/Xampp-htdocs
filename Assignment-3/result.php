<?php
include("connection.php");

if (isset($_POST['insert'])) {
  $query="insert into db set Name='".$_POST['name']."',Address='".$_POST['address']."',Email='".$_POST['email']."' ";
  mysqli_query($con,$query);
}
if (isset($_POST['Update'])) {
  $query="update db set Name='".$_POST['name']."',Address='".$_POST['address']."',Email='".$_POST['email']."' where U_ID='".$_POST['id']."' ";
  mysqli_query($con,$query);
}
$query="select * from db";
$result=mysqli_query($con,$query);
$fetch=mysqli_fetch_object($result);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link href="data.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   </head>

   <body class="text-center">
 <main class="form-signin">
    <div class="container">
      <img class="mb-4" src="https://insights.dice.com/wp-content/uploads/2018/04/Social-Login-Dice.jpg" alt="" width="92" height="77">
      <h1 class="h3 mb-3 fw-normal">Data</h1>
      <button type="button" name="button" class="w-10 btn btn-lg btn-dark"><a href="index.php">Back</a></button>
      
    </div>

         <table cellpadding="20px"  class="center" >
                   <thead>
                     <th>User Id</th>
                     <th>Name</th>
                     <th>Address</th>
                     <th>Email</th>
                     <th>Action</th>
                   </thead>

                 <?php while($fetch=mysqli_fetch_object($result)){ ?>
                   <tbody>
                 <tr>
                   <td><?php echo $fetch->U_ID;  ?></td>
                   <td><?php echo $fetch->Name;  ?></td>
                   <td><?php echo $fetch->Address;  ?></td>
                   <td><?php echo $fetch->Email;  ?></td>
                   <td><a href="edit.php?id=<?php echo $fetch->U_ID;?>">Edit</a></td>
                 </tr>
                 </tbody>
               <?php } ?>

                 </table>

 </main>
   </body>
 </html>
