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

  $file = ""; // intialing file name as a blank
									if(isset($_FILES['file'])) {
										$folder = "user_image";
										//uploading
										$file_exts = array("jpg", "JPG", "JPEG", "bmp", "jpeg", "gif", "png", "doc", "docx", "pdf");
										$value = explode(".", $_FILES["file"]["name"]);
										$upload_exts = end($value);
										if ((($_FILES["file"]["type"] == "image/gif")
										|| ($_FILES["file"]["type"] == "image/jpeg")
										|| ($_FILES["file"]["type"] == "image/jpg")
										|| ($_FILES["file"]["type"] == "image/JPG")
										|| ($_FILES["file"]["type"] == "image/JPEG")
										|| ($_FILES["file"]["type"] == "image/png")
										|| ($_FILES["file"]["type"] == "image/pjpeg")
										|| ($_FILES["file"]["type"] == "application/msword")
										|| ($_FILES["file"]["type"] == "application/msword")
										|| ($_FILES["file"]["type"] == "application/pdf"))
										&& ($_FILES["file"]["size"] < 2000000000)
										&& in_array($upload_exts, $file_exts))
										{
										if ($_FILES["file"]["error"] > 0)
										{

										}
										else
										{
										// Enter your path to <span id="IL_AD5" class="IL_AD">upload file</span> here
										if (file_exists("$folder/" .
										$_FILES["file"]["name"]))
										{
										echo "<div class='error'>"."(".$_FILES["file"]["name"].")".
										" already exists. "."</div>";
										}
										else
										{
											//randome name
											 $ran = md5(time().rand()) ;
											 $file = $ran.".".$upload_exts;
										move_uploaded_file($_FILES["file"]["tmp_name"],
										"$folder/".$file);
										}
										}
										}
											}

  $query="insert into db set Name='".$_POST['name']."',Address='".$_POST['address']."',Email='".$_POST['email']."',c_id='".$_POST['course']."' ,p_image='".$file."'";
  mysqli_query($con,$query);
  header("location:employee.php");
}

$query="select * from course where status = 'active'";
$result=mysqli_query($con,$query);
 ?>


</style>
  <body class="text-center">
<main class="form-signin">
  <form method="POST" action="" enctype="multipart/form-data">
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
        <td>Dept Id </td><td><select name="course" class="form-control" id="cars">
  <?php while($fetch=mysqli_fetch_object($result)){   ?>
  <option value="<?php echo $fetch->c_id;?>"><?php echo $fetch->c_name;?></option>
  <?php } ?>
</select></td>
      </tr>
      <tr>
        <td>Profile Picture</td>
        <td><input type="file" id="file" name="file" class="form-control" required autofocus></td>
      </tr>
    </table>
    <input type="submit" name="insert" value="INSERT" class="w-10 btn btn-lg btn-primary">
    <p class="mt-5 mb-3 text-muted">Assignment-5 for Software Engineering Lab</p>
  </form>
</main>
  </body>
</html>
