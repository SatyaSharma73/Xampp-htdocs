<?php
include("connection.php");

if (isset($_POST['insert'])) {

  $file = ""; // intialing file name as a blank
									if(isset($_FILES['file'])) {
										$folder = "image";
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

  $query="insert into items set name='".$_POST['name']."',price='".$_POST['price']."',model='".$_POST['model']."',p_image='".$file."' ";
  mysqli_query($con,$query);
  header("location:list_item.php");
}

// $query="select * from course";
// $result=mysqli_query($con,$query);
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
    body{
      text-align: center;
    }

  </style>
  <body>
    <h1>Enter Details</h1>
    <form class="" action="" method="post" enctype="multipart/form-data">
      <label for="name">Enter the Name</label>
      <input type="text" name="name" value="">
      <br>
      <label for="price">Enter the Price</label>
      <input type="text" name="price" value="">
      <br>
      <label for="model">Enter the Model</label>
      <input type="text" name="model" value="">
      <br>
      <label for="p_image">Enter the Image</label>
      <input type="file" type="file" id="file" name="file" value="">

       <input type="submit" name="insert" value="INSERT" class="w-10 btn btn-lg btn-primary">
    </form>
  </body>
</html>
