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
  background-image: url("https://wallpaperaccess.com/full/449903.jpg");
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
p{
    text-decoration: none;
    font-family: 'Fantasy', serif;
    color: black;
    text-align: center;
    left: 40%;
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
.text{
  color: #14213d;
  font-size: 15px;
  padding-top: 50px;
  font-weight: lighter;
}
.write{
  color: #03071e;
  font-size: 15px;
  padding-top: 50px;
  font-weight: lighter;
   font-style: normal;
}
.foot-section{
position: static;
}
#f1{
text-align: center;
position: absolute;
padding-top: 100px;
left: 25%;
}

<?php
include("connection.php");

if (isset($_POST['insert'])) {
  $query="insert into category set c_name='".$_POST['name']."'";
  mysqli_query($con,$query);
  header("location:category.php");
}
 ?>

</style>
  <body class="text-center">
<main class="form-signin">
  <form method="POST" action="">
    <img class="mb-4" src="https://media.giphy.com/media/MXoyvLVaXqYbi6KUhu/giphy.gif" alt="" width="95" height="80">
    <h1 class="h3 mb-3 fw-normal">Add Category</h1>

    <table cellpadding="10px">
      <tr>
        <td>Category</td><td><input type="text" name="name" value="" placeholder="Eg. Homoeopathy" class="form-control" required></td>
      </tr>
    </table>
    <input type="submit" name="insert" value="SUBMIT" class="w-10 btn btn-lg btn-primary">
    <a href="category.php"><button type="button" name="button" class="w-10 btn btn-lg btn-warning">Back</button></a>

    <div class="write">
      <div class="foot-section">
              <aside id="f1">
                <p class="text">Software Engineering Lab Project, 2021. Developed by CS 3B Smriti Choudhury_60, Shristi Pradhan_58, Shubhangi_59</p>
              </aside>
</div>

  </form>
</main>
  </body>
</html>
