<?php
include("connection.php");
$query="select * from medicine where M_ID='".$_REQUEST['id']."'";
$result=mysqli_query($con,$query);
$fetch=mysqli_fetch_object($result);

if (isset($_POST['Update'])) {

  $file = ""; // intialing file name as a blank
									if(isset($_FILES['file'])) {
										$folder = "medicine_image";
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


  $query="update medicine set Name='".$_POST['name']."',Description='".$_POST['description']."',Price='".$_POST['price']."' ,c_id='".$_POST['category']."',m_image='".$file."' where M_ID='".$_POST['id']."' ";
  mysqli_query($con,$query);
  header("location:medicine.php");
}

$query1="select * from category";
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
  background-image: url("https://static-cse.canva.com/blob/140234/Rainbow-Gradient-Pink-and-Purple-Zoom-Virtual-Background.png");
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
.form-signin input[type="text"] {
  margin-bottom: 1px;
  border-bottom-right-radius: 0px;
  border-bottom-left-radius: 0;
}

</style>

  <body class="text-center">
<main class="form-signin">
  <form method="POST" enctype="multipart/form-data">
    <img src="medicine_image/<?php echo $fetch->m_image;?>" style="width:180px;height:200px;border-radius: 20%;">
    <h1 class="h3 mb-3 fw-normal">Update Data</h1>
    <table cellpadding="10px">
      <tr>
        <td>Name</td><td><input type="text" name="name" class="form-control" value="<?php echo $fetch->Name;?>" placeholder="Eg. Arnica" class="area"></td>
      </tr>

      <tr>
        <td>Category</td><td><select name="category" class="form-control" id="cars">
  <?php while($fetch1=mysqli_fetch_object($result1)){   ?>
  <option value="<?php echo $fetch1->c_id;?>"<?php if($fetch->c_id==$fetch1->c_id) {?>selected="selected" <?php } ?>><?php echo $fetch1->c_name;?></option>
  <?php } ?>
</select></td>
      </tr>
      <tr>
        <td>Description</td><td><input type="text" name="description" class="form-control" value="<?php echo $fetch->Description;?>" placeholder="Eg. To treat hair loss, arthritis, inflammation"></td>
      </tr>
      <tr>
        <td>Price</td><td><input type="text" name="price" class="form-control" value="<?php echo $fetch->Price;  ?>" placeholder="Eg. 100"></td>
      </tr>
      <tr>
        <td>Medicine Image</td>
        <td><input type="file" id="file" name="file" class="form-control" value="<?php echo $fetch->m_image;?>" ></td>
      </tr>
    </table>
      <body class="text-center">
    <input type="submit" name="Update" value="Update" class="w-10 btn btn-lg btn-success"><input type="hidden" name="id" value="<?php echo $fetch->M_ID;?>">
    <a href="medicine.php"><button type="button" name="button" class="w-10 btn btn-lg btn-warning">Medicine List</button></a>
    <p class="mt-5 mb-3 text-muted">Software Engineering Lab Project, 2021.</p>
  </form>
</main>
  </body>
</html>
