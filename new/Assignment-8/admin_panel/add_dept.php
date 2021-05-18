<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="signin.css" rel="stylesheet">
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
  background-color: #80ffdb;
}
h1{
  color: black;
}
img{
  height: 100px;
}
td{
  color: black;
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
.form-signin input[type="text"] {
  margin-bottom: 1px;
  border-bottom-right-radius: 0px;
  border-bottom-left-radius: 0;
}
<?php
include("connection.php");

if (isset($_POST['insert'])) {
  $query="insert into course set c_name='".$_POST['name']."'";
  mysqli_query($con,$query);
  header("location:dept.php");
}
 ?>


</style>
  <body class="text-center">
<main class="form-signin">
  <form method="POST" action="">
    <img class="mb-4" src="https://media.giphy.com/media/kcZlnhiaB1p76tKS6S/giphy.gif" alt="" width="95" height="80">
    <h1 class="h3 mb-3 fw-normal">Add Category</h1>

    <table cellpadding="10px">
      <tr>
        <td>Category</td><td><input type="text" name="name" value="" placeholder="Eg. Snacks" class="form-control" required></td>
      </tr>
    </table>
    <input type="submit" name="insert" value="SUBMIT" class="w-10 btn btn-lg btn-primary">
    <a href="dept.php"><button type="button" name="button" class="w-10 btn btn-lg btn-warning">Back</button></a>
    <p class="mt-5 mb-3 text-muted">Software Engineering Lab Assignment-8  &copy; Smriti Choudhury_CS 3B_60</p>
  </form>
</main>
  </body>
</html>
