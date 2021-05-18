<?php
include("connection.php");
$query="select * from category where c_id='".$_REQUEST['id']."'";
$result=mysqli_query($con,$query);
$fetch=mysqli_fetch_object($result);

if (isset($_POST['Update'])) {
  $query="update category set c_name='".$_POST['name']."' where c_id='".$_POST['id']."' ";
  mysqli_query($con,$query);
  header("location:category.php");
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
  background-image: url("https://www.par.com/files/1813/6628/2242/par-systems-marine-background.jpg");

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
.form-signin input[type="text"] {
  margin-bottom: 1px;
  border-bottom-right-radius: 0px;
  border-bottom-left-radius: 0;
}
.text{
  color: white;
  font-size: 15px;
  padding-top: 50px;
  font-weight: bold;
}
.write{
  color: black;
  font-size: 15px;
  padding-top: 50px;
  font-weight: bold;
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

</style>


  <body class="text-center">
<main class="form-signin">
  <form method="POST">
    <img class="mb-4" src="https://media.giphy.com/media/ZxQw9IxMDuTRunG4tF/giphy.gif" alt="" width="92" height="77">
    <h1 class="h3 mb-3 fw-normal">Update Data</h1>
    <table cellpadding="10px">
      <tr>
        <td>Category</td><td><input type="text" name="name" value="<?php echo $fetch->c_name;?>" placeholder="Eg. Homoeopathy" class="area"></td>
      </tr>
    </table>
    <input type="submit" name="Update" value="Update" class="w-10 btn btn-lg btn-success"><input type="hidden" name="id" value="<?php echo $fetch->c_id;?>">
    <a href="category.php"><button type="button" name="button" class="w-10 btn btn-lg btn-warning">Category List</button></a>

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
