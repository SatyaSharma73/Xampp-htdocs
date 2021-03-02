<?php
include("connection.php");

$query="select * from db";
$result=mysqli_query($con,$query);

if (isset($_REQUEST['del'])) {
  $query="delete from db where U_ID='".$_REQUEST['del']."'";
  mysqli_query($con,$query);
  header("location:employee.php");
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
  display: inline-block;
  position: relative;
  align-items: center;
  padding-top: 30px;
  padding-bottom: 40px;
  padding-right: 100px;
  background-image: url("https://wallpaperaccess.com/full/375651.jpg");
}
td{
  font-family: sans-serif;
  color: #f4f9f9;
  font-family: monospace;
  font-size: 18px;
}
th{
  color: black;
  font-weight: bolder;
  font-family: sans-serif;
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
  color: black;
  font-weight:bolder;
}
.form-signin {
  position: relative;
  width: 100%;
  max-width: 500px;
  padding: 15px;
  margin: auto;
}
.addon{
  text-align: center;
  padding-right: 50%;
}
.data{
  padding-left: 20%;
    padding-right: 10%;
        padding-top: 30px;
}
}
</style>

   <body >
<!-- class="text-center" -->
<div class="addon">
       <img  src="https://media.giphy.com/media/S3QXr6SbrZm6nfW9zU/giphy.gif" alt="" width="92" height="77">
       <h1 class="h3 mb-3 fw-normal">DataBase</h1>
       <a href="index.php"><button type="button" name="button" class="w-10 btn btn-lg btn-dark">Back</button></a>
       <a href="add_emp.php"><button type="button" name="button" class="w-10 btn btn-lg btn-success">Add a Employee</button></a>
</div>
<div class="data">
  <table cellpadding="20px"  class="center" >
            <thead>
              <th>UserId</th>
              <th>Name</th>
              <th>Image</th>
              <th>Department</th>
              <th>Address</th>
              <th>Email</th>
              <th>Action</th>
            </thead>

          <?php while($fetch=mysqli_fetch_object($result)){ ?>
            <tbody>
          <tr>
            <td><?php echo $fetch->U_ID;  ?></td>
            <td><?php echo $fetch->Name;  ?></td>
            <td><img src="user_image/<?php echo $fetch->p_image;?>" style="width:85px;height:90px;border-radius: 50%;"></td>
            <td><?php
               $query1="select c_name from course where c_id ='".$fetch->c_id."'";
               $result1=mysqli_query($con,$query1);
               $fetch1=mysqli_fetch_object($result1);
               echo $fetch1->c_name;
               ?>
            <td><?php echo $fetch->Address;  ?></td>
            <td><?php echo $fetch->Email;  ?></td>
            <td><a class="edit" href="edit_emp.php?id=<?php echo $fetch->U_ID;?>">Edit</a></td>
            <td><a class="del" href="employee.php?del=<?php echo $fetch->U_ID;?>">Del</a></td>
          </tr>
          </tbody>
        <?php } ?>

          </table>
</div>




   </body>
 </html>
