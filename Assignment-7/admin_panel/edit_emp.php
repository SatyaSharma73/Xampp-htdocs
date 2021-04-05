<?php
include("connection.php");
$query="select * from db where U_ID='".$_REQUEST['id']."'";
$result=mysqli_query($con,$query);
$fetch=mysqli_fetch_object($result);

if (isset($_POST['Update'])) {

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


  $query="update db set Name='".$_POST['name']."',Address='".$_POST['address']."',Email='".$_POST['email']."' ,c_id='".$_POST['course']."',p_image='".$file."' where U_ID='".$_POST['id']."' ";
  mysqli_query($con,$query);
  header("location:employee.php");
}

$query1="select * from course";
$result1=mysqli_query($con,$query1);

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
  overflow: hidden;
  background-image: url("https://cutewallpaper.org/21/abstergo-wallpaper/assassins-creed-abstergo-industries-1600x900-wallpaper-High-.jpg");
}
h1,td{
  color: black;
  font-weight: bolder;
  font-family: sans-serif;
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
  padding: 5px;
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
  <form method="POST" enctype="multipart/form-data">
    <img src="user_image/<?php echo $fetch->p_image;?>" style="width:180px;height:200px;border-radius: 50%;">
    <h1 class="h3 mb-3 fw-normal">Update Data</h1>
    <table cellpadding="10px">
      <tr>
        <td>Name</td><td><input type="text" name="name" class="form-control" value="<?php echo $fetch->Name;?>" placeholder="Eg. John" class="area"></td>
      </tr>

      <tr>
        <td>Department</td><td><select name="course" class="form-control" id="cars">
  <?php while($fetch1=mysqli_fetch_object($result1)){   ?>
  <option value="<?php echo $fetch1->c_id;?>"<?php if($fetch->c_id==$fetch1->c_id) {?>selected="selected" <?php } ?>><?php echo $fetch1->c_name;?></option>
  <?php } ?>
</select></td>
      </tr>
      <tr>
        <td>Address</td><td><input type="text" name="address" class="form-control" value="<?php echo $fetch->Address;?>" placeholder="Eg. Cal Tech"></td>
      </tr>
      <tr>
        <td>Email</td><td><input type="email" name="email" class="form-control" value="<?php echo $fetch->Email;  ?>" placeholder="Eg. Email@email.com"></td>
      </tr>
      <tr>
        <td>Profile Picture</td>
        <td><input type="file" id="file" name="file"  class="form-control" ></td>
      </tr>
    </table>
    <input type="submit" name="Update" value="Update" class="w-10 btn btn-lg btn-primary"><input type="hidden" name="id" value="<?php echo $fetch->U_ID;?>">
    <a href="employee.php"><button type="button" name="button" class="w-10 btn btn-lg btn-success">List Employee</button></a>
    <p class="mt-5 mb-3 text-muted">Assignment-5 for Software Engineering Lab</p>
  </form>
</main>
  </body>
</html>
