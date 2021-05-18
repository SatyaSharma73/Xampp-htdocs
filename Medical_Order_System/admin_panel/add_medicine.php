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

  $query="insert into medicine set Name='".$_POST['name']."',Description='".$_POST['description']."',Price='".$_POST['price']."',c_id='".$_POST['category']."' ,m_image='".$file."'";
  mysqli_query($con,$query);
  header("location:medicine.php");
}

$query="select * from category where status = 'active'";
$result=mysqli_query($con,$query);
 ?>


</style>
  <body class="text-center">
<main class="form-signin">
  <form method="POST" action="" enctype="multipart/form-data">
    <img class="mb-4" src="https://media.giphy.com/media/MXoyvLVaXqYbi6KUhu/giphy.gif" alt="" width="95" height="80">
    <h1 class="h3 mb-3 fw-normal">Add Medicine</h1>

    <table cellpadding="10px">
      <tr>
        <td>Name </td><td><input type="text" name="name" value="" placeholder="Eg. Arnica" class="form-control"></td>
      </tr>
      <tr>
        <td>Description</td>
        <td><input type="text" id="text" name="description" value="" class="form-control" placeholder="To treat hair loss, arthritis, inflammation, bruises" required></td>
      </tr>
      <tr>
        <td>Price</td>
        <td><input type="text" id="price" name="price" class="form-control" placeholder="100" required autofocus></td>
      </tr>
      <tr>
        <td>Category Id </td><td><select name="category" class="form-control" id="cars">
  <?php while($fetch=mysqli_fetch_object($result)){   ?>
  <option value="<?php echo $fetch->c_id;?>"><?php echo $fetch->c_name;?></option>
  <?php } ?>
</select></td>
      </tr>
      <tr>
        <td>Medicine Image</td>
        <td><input type="file" id="file" name="file" class="form-control" required autofocus></td>
      </tr>
    </table>
    <input type="submit" name="insert" value="SUBMIT" class="w-10 btn btn-lg btn-primary">
     <a href="medicine.php"><button type="button" name="button" class="w-10 btn btn-lg btn-warning">Back</button></a>

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
