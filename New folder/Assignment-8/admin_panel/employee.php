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
  background-image: url("https://images.unsplash.com/photo-1614088439978-9be39d87d81a?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxOHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60");
}
td{
  font-family: sans-serif;
  color: black;
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
  color: #03045e;
  font-weight:bolder;
}
/*.active{
  text-decoration: none;
  color: white;
  font-weight:bolder;
}
.inactive{
  text-decoration: none;
  color: white;
  font-weight:bolder;
}*/
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
       <img  src="https://media.giphy.com/media/gIfb10foLDtsWg1W3d/giphy.gif" alt="" width="92" height="77">
       <h1 class="h3 mb-3 fw-normal">Food Details</h1>
       <a href="index.php"><button type="button" name="button" class="w-10 btn btn-lg btn-dark">Back</button></a>
       <a href="add_emp.php"><button type="button" name="button" class="w-10 btn btn-lg btn-success">Add Food</button></a>
</div>
<div class="data">
  <table cellpadding="20px"  class="center" >
            <thead>
              <th>Food Id</th>
              <th>Name</th>
              <th>Image</th>
              <th>Category</th>
              <th>Description</th>
              <th>Price</th>
              <th>Action</th>
            </thead>

          <?php while($fetch=mysqli_fetch_object($result)){ ?>
            <tbody>
          <tr>
            <td><?php echo $fetch->U_ID;  ?></td>
            <td><?php echo $fetch->Name;  ?></td>
            <td><img src="user_image/<?php echo $fetch->p_image;?>" style="width:85px;height:90px;border-radius: 10px;"></td>
            <td><?php
               $query1="select c_name from course where c_id ='".$fetch->c_id."'";
               $result1=mysqli_query($con,$query1);
               $fetch1=mysqli_fetch_object($result1);
               echo $fetch1->c_name;
               ?>
            <td><?php echo $fetch->Address;  ?></td>
            <td><?php echo $fetch->Email;  ?></td>

            <!-- ACTIVE -->
            <!--  <td>
                     <?php if($fetch->status=='active') {?>
                       <button type="button" name="button" class="btn btn-success"><a class="active" href="?status=inactive&id=<?php echo $fetch->c_id;?>">Active</a>
                     <?php }
                      else if($fetch->status=='inactive'){
                      ?>
                      <button type="button" name="button" class="btn btn-danger"><a class="inactive" href="?status=active&id=<?php echo $fetch->c_id;?>">Inactive</a>
                    <?php } ?>
                  </td> -->

            <!-- ACTIVE END -->
            <td><button type="button" name="button" class="btn btn-info"><a class="edit" href="edit_emp.php?id=<?php echo $fetch->U_ID;?>">Edit</a></td>
            <td><button type="button" name="button" class="btn btn-warning"><a class="del" href="employee.php?del=<?php echo $fetch->U_ID;?>">Delete</a></td>
          </tr>
          </tbody>
        <?php } ?>

          </table>
</div>




   </body>
 </html>
