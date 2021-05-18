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

$query="select * from course where status='active'";
$result=mysqli_query($con,$query);
?>
<table cellpadding="20px"  class="center" >
          <thead>
            <th>Category Id</th>
            <th>Category</th>
          </thead>

        <?php while($fetch=mysqli_fetch_object($result)){ ?>
          <tbody>
        <tr>
          <td><?php echo $fetch->c_id;  ?></td>
          <td><?php echo $fetch->c_name;  ?></td>
        </tr>
      <?php } ?>
      </table>
  
      <body class="text-center">
    <p class="text">Software Engineering Lab Assignment-8  &copy; Smriti Choudhury_CS 3B_60 </p>

    <a href="index.php"><button type="button" name="button" class="w-10 btn btn-lg btn-primary">Back</button></a>
    </body> 
</html>