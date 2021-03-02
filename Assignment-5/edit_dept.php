<?php
include("connection.php");
$query="select * from course where c_id='".$_REQUEST['id']."'";
$result=mysqli_query($con,$query);
$fetch=mysqli_fetch_object($result);

if (isset($_POST['Update'])) {
  $query="update course set c_name='".$_POST['name']."' where c_id='".$_POST['id']."' ";
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
  padding-top: 40px;
  padding-bottom: 40px;

}
img{
  height: 130px;
}
a{
  text-decoration: none;
  color: white;
}
.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: 1px;
  border-bottom-right-radius: 0px;
  border-bottom-left-radius: 0;
}

</style>


  <body class="text-center">
<main class="form-signin">
  <form method="POST">
    <img class="mb-4" src="https://media.giphy.com/media/2x0tJVAL3IqFnZYhYt/giphy.gif" alt="" width="92" height="77">
    <h1 class="h3 mb-3 fw-normal">Update Data</h1>
    <table cellpadding="10px">
      <tr>
        <td>Department</td><td><input type="text" name="name" value="<?php echo $fetch->c_name;?>" placeholder="Eg. John" class="area"></td>
      </tr>
    </table>
    <input type="submit" name="Update" value="Update" class="w-10 btn btn-lg btn-primary"><input type="hidden" name="id" value="<?php echo $fetch->c_id;?>">
    <a href="dept.php"><button type="button" name="button" class="w-10 btn btn-lg btn-success">List Department</button></a>
    <p class="mt-5 mb-3 text-muted">Assignment-5 for Software Engineering Lab</p>
  </form>
</main>
  </body>
</html>
