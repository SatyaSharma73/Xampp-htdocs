<?php
include("connection.php");

$query="select * from db";
$result=mysqli_query($con,$query);

if (isset($_REQUEST['del'])) {
  $query="delete from db where U_ID='".$_REQUEST['del']."'";
  mysqli_query($con,$query);
  header("location:user.php");
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   </head>
<style>
html,
body {
  height: 100%;
}
body {
  display: flex;
  align-items: center;
  padding-top: 30px;
  padding-bottom: 40px;
  padding-right: 100px;
  background-image: url("https://wallpaperaccess.com/full/1250885.jpg");
}
td{
  font-family: sans-serif;
}
th{
  font-weight:bolder;
}
a:hover{
  text-decoration: none;
  color: black;
}
.del{
  text-decoration: none;
  color: #31364c;
  font-weight:bolder;
}
.edit{
  text-decoration: none;
  color: #ced0dc;
  font-weight:bolder;
}
.form-signin {
  position: relative;
  width: 100%;
  max-width: 500px;
  padding: 15px;
  margin: auto;
}
.container{
  position: absolute;
  top: 10px;
  right: 100%;
}

</style>
   <body class="text-center">
 <main class="form-signin">
    <div class="container">
      <img class="mb-4" src="https://media.giphy.com/media/S3QXr6SbrZm6nfW9zU/giphy.gif" alt="" width="92" height="77">
      <h1 class="h3 mb-3 fw-normal">DataBase</h1>
      <a href="index.php"><button type="button" name="button" class="w-10 btn btn-lg btn-dark">Back</button></a>
      <a href="add_user.php"><button type="button" name="button" class="w-10 btn btn-lg btn-success">Add a User</button></a>

    </div>

         <table cellpadding="20px"  class="center" >
                   <thead>
                     <th>User Id</th>
                     <th>Name</th>
                     <th>Course Id</th>
                     <th>Address</th>
                     <th>Email</th>
                     <th>Action</th>
                   </thead>

                 <?php while($fetch=mysqli_fetch_object($result)){ ?>
                   <tbody>
                 <tr>
                   <td><?php echo $fetch->U_ID;  ?></td>
                   <td><?php echo $fetch->Name;  ?></td>
                   <td><?php echo $fetch->c_id;  ?></td>
                   <td><?php echo $fetch->Address;  ?></td>
                   <td><?php echo $fetch->Email;  ?></td>
                   <td><a class="edit" href="edit_user.php?id=<?php echo $fetch->U_ID;?>">Edit</a></td>
                   <td><a class="del" href="user.php?del=<?php echo $fetch->U_ID;?>">Del</a></td>
                 </tr>
                 </tbody>
               <?php } ?>

                 </table>

 </main>
   </body>
 </html>
