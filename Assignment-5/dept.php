<?php
include("connection.php");

$query="select * from course";
$result=mysqli_query($con,$query);

if (isset($_REQUEST['del'])) {
  $query="delete from course where c_id='".$_REQUEST['del']."'";
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
  background-image: url("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/1ef5f058-274f-4b9b-a6bc-9c8fa61f6326/d5ccx50-e0dda585-1f92-4bcd-b022-60392074a8f0.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvMWVmNWYwNTgtMjc0Zi00YjliLWE2YmMtOWM4ZmE2MWY2MzI2XC9kNWNjeDUwLWUwZGRhNTg1LTFmOTItNGJjZC1iMDIyLTYwMzkyMDc0YThmMC5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.qD4qOXuGduGsSv1PNPLx1nVer2vuwCmMhC-GOWw2_bM");

}
h1,td{
  color: White;
  font-family: sans-serif;
}
th{
  color: White;
  font-weight: bolder;
  font-family: sans-serif;
}
a:hover{
  text-decoration: none;
  color: black;
}
.del{
  text-decoration: none;
  color: #e40017;
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
      <a href="add_dept.php"><button type="button" name="button" class="w-10 btn btn-lg btn-success">Add Department</button></a>

    </div>

         <table cellpadding="20px"  class="center" >
                   <thead>
                     <th>Dept Id</th>
                     <th>Department</th>
                     <th>Action</th>
                   </thead>

                 <?php while($fetch=mysqli_fetch_object($result)){ ?>
                   <tbody>
                 <tr>
                   <td><?php echo $fetch->c_id;  ?></td>
                   <td><?php echo $fetch->c_name;  ?></td>
                   <td><a class="edit" href="edit_dept.php?id=<?php echo $fetch->c_id;?>">Edit</a></td>
                   <td><a class="del" href="dept.php?del=<?php echo $fetch->c_id;?>">Del</a></td>
                 </tr>
                 </tbody>
               <?php } ?>

                 </table>

 </main>
   </body>
 </html>
