<?php
include("connection.php");

$query="select * from course";
$result=mysqli_query($con,$query);

if (isset($_REQUEST['del'])) {
  $query="delete from course where c_id='".$_REQUEST['del']."'";
  mysqli_query($con,$query);
  header("location:dept.php");
}
if (isset($_REQUEST['status'])) {
  $query="update course set status='".$_REQUEST['status']."' where c_id='".$_REQUEST['id']."'";
  mysqli_query($con,$query);
  header("location:dept.php");
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
   background-image: url("https://images.unsplash.com/photo-1535204237918-18165104ac40?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1950&q=80");

}
h1,td{
  color: black;
  font-family: sans-serif;
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
.active{
  text-decoration: none;
  color: white;
  font-weight:bolder;
}
.inactive{
  text-decoration: none;
  color: white;
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
      <img class="mb-4" src="https://media.giphy.com/media/gIfb10foLDtsWg1W3d/giphy.gif" alt="" width="92" height="77">
      <h1 class="h3 mb-3 fw-normal">Category Details</h1>
      <a href="index.php"><button type="button" name="button" class="w-10 btn btn-lg btn-dark">Back</button></a>
      <a href="add_dept.php"><button type="button" name="button" class="w-10 btn btn-lg btn-primary">Add Category</button></a>

    </div>

         <table cellpadding="20px"  class="center" >
                   <thead>
                     <th>Category Id</th>
                     <th>Category</th>
                     <th>Status</th>
                     <th>Action</th>
                   </thead>

                 <?php while($fetch=mysqli_fetch_object($result)){ ?>
                   <tbody>
                 <tr>
                   <td><?php echo $fetch->c_id;  ?></td>
                   <td><?php echo $fetch->c_name;  ?></td>
                   <td>
                     <?php if($fetch->status=='active') {?>
                       <button type="button" name="button" class="btn btn-success"><a class="active" href="?status=inactive&id=<?php echo $fetch->c_id;?>">Active</a>
                     <?php }
                      else if($fetch->status=='inactive'){
                      ?>
                      <button type="button" name="button" class="btn btn-danger"><a class="inactive" href="?status=active&id=<?php echo $fetch->c_id;?>">Inactive</a>
                    <?php } ?>
                  </td>
                   <td><button type="button" name="button" class="btn btn-info"><a class="edit" href="edit_dept.php?id=<?php echo $fetch->c_id;?>">Edit</a></td>
                   <td><button type="button" name="button" class="btn btn-warning"><a class="del" href="dept.php?del=<?php echo $fetch->c_id;?>">Delete</a></td>
                 </tr>
                 </tbody>
               <?php } ?>

                 </table>

 </main>
   </body>
 </html>
