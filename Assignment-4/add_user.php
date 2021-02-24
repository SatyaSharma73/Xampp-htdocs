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
  background-color: black;
}
h1{
  color: white;
}
img{
  height: 100px;
}
td{
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
<?php
include("connection.php");

if (isset($_POST['insert'])) {
  $query="insert into db set Name='".$_POST['name']."',Address='".$_POST['address']."',Email='".$_POST['email']."',c_id='".$_POST['course']."' ";
  mysqli_query($con,$query);
  header("location:user.php");
}

$query="select * from course";
$result=mysqli_query($con,$query);
 ?>


</style>
  <body class="text-center">
<main class="form-signin">
  <form method="POST" action="">
    <img class="mb-4" src="https://media.giphy.com/media/G2wQuhm5SraFTqQRbK/giphy.gif" alt="" width="95" height="80">
    <h1 class="h3 mb-3 fw-normal">Insert</h1>

    <table cellpadding="10px">
      <tr>
        <td>Name </td><td><input type="text" name="name" value="" placeholder="Eg. John" class="form-control"></td>
      </tr>
      <tr>
        <td>Address</td>
        <!-- <td><input type="text" name="address" value="" placeholder="Eg. Cal Tech"></td> -->
        <td><input type="text" id="text" name="address" value="" class="form-control" placeholder="NewTown" required></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" id="inputEmail" name="email" class="form-control" placeholder="xyz@gmail.com" required autofocus></td>
      </tr>
      <tr>
        <td>Course Id </td><td><select name="course" class="form-control" id="cars">
  <?php while($fetch=mysqli_fetch_object($result)){   ?>
  <option value="<?php echo $fetch->c_id;?>"><?php echo $fetch->c_name;?></option>
  <?php } ?>
</select></td>
      </tr>
    </table>
    <input type="submit" name="insert" value="INSERT" class="w-10 btn btn-lg btn-primary">
    <p class="mt-5 mb-3 text-muted">Assignment-4 for Software Engineering Lab</p>
  </form>
</main>
  </body>
</html>
