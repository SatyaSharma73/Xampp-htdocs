<?php
include("connection.php");
$query="select * from db where U_ID='".$_REQUEST['id']."'";
$result=mysqli_query($con,$query);
$fetch=mysqli_fetch_object($result);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="signin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  </head>

  <body class="text-center">
<main class="form-signin">
  <form method="POST" action="result.php">
    <img class="mb-4" src="https://insights.dice.com/wp-content/uploads/2018/04/Social-Login-Dice.jpg" alt="" width="92" height="77">
    <h1 class="h3 mb-3 fw-normal">Update Data</h1>
    <table cellpadding="10px">
      <tr>
        <td>Name :</td><td><input type="text" name="name" value="<?php echo $fetch->Name;?>" placeholder="Eg. John" class="area"></td>
      </tr>
      <tr>
        <td>Address :</td><td><input type="text" name="address" value="<?php echo $fetch->Address;?>" placeholder="Eg. Cal Tech"></td>
      </tr>
      <tr>
        <td>Email Id:</td><td><input type="email" name="email" value="<?php echo $fetch->Email;  ?>" placeholder="Eg. Email@email.com"></td>
      </tr>
    </table>
    <input type="submit" name="Update" value="Update" class="w-10 btn btn-lg btn-primary"><input type="hidden" name="id" value="<?php echo $fetch->U_ID;?>">
    <p class="mt-5 mb-3 text-muted">Assignment-3 for Software Engineering Lab</p>
  </form>
</main>
  </body>
</html>
