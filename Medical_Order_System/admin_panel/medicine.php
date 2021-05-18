<?php
include("connection.php");

$query="select * from medicine";
$result=mysqli_query($con,$query);

if (isset($_REQUEST['del'])) {
  $query="delete from medicine where M_ID='".$_REQUEST['del']."'";
  mysqli_query($con,$query);
  header("location:medicine.php");
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
  display: inline-block;
  position: relative;
  align-items: center;
  padding-top: 30px;
  padding-bottom: 40px;
  padding-right: 120px;
  background-image: url("https://cdn.wallpapersafari.com/69/32/MUe2pq.jpg");
}
h1{
  color: #E3E4FA;
  font-family: Monospace, sans-serif;
  font-weight: bolder;
  text-decoration: underline;
}
td{
  color: #C8A2C8;
  font-family: Monospace, sans-serif;
  font-weight: bold;
  font-size: 18px;
}
th{
  color: white;
  font-weight: bolder;
  font-family: Monospace, sans-serif;
  font-size: 20px;
  text-decoration: underline;
}
a:hover{
  text-decoration: none;
  color: black;
}
.del{
  text-decoration: none;
  color: #31364c;
  font-weight:bolder;
}
.edit{
  text-decoration: none;
  color: #03045e;
  font-weight:bolder;
}

.form-signin {
  position: relative;
  width: 100%;
  max-width: 500px;
  padding: 15px;
  margin: auto;
}
.addon{
  text-align: center;
  padding-right: 50%;
}
.data{
  padding-left: 20%;
    padding-right: 10%;
        padding-top: 30px;
}
}
</style>

   <body >

<div class="addon">
       <img  src="https://media.giphy.com/media/gIfb10foLDtsWg1W3d/giphy.gif" alt="" width="92" height="77">
       <h1 class="h3 mb-3 fw-normal">Medicine Details</h1>
       <a href="index.php"><button type="button" name="button" class="w-10 btn btn-lg btn-dark">Back</button></a>
       <a href="add_medicine.php"><button type="button" name="button" class="w-10 btn btn-lg btn-success">Add Medicine</button></a>
</div>
<div class="data">
  <table cellpadding="20px"  class="center" >
            <thead>
              <th>Medicine Id</th>
              <th>Name</th>
              <th>Image</th>
              <th>Category</th>
              <th>Description</th>
              <th>Price</th>
              <th>Action</th>
            </thead>

          <?php while($fetch=mysqli_fetch_object($result)){ ?>
            <tbody>
          <tr>
            <td><?php echo $fetch->M_ID;  ?></td>
            <td><?php echo $fetch->Name;  ?></td>
            <td><img src="medicine_image/<?php echo $fetch->m_image;?>" style="width:85px;height:90px;border-radius: 10px;"></td>
            <td><?php
               $query1="select c_name from category where c_id ='".$fetch->c_id."'";
               $result1=mysqli_query($con,$query1);
               $fetch1=mysqli_fetch_object($result1);
               echo $fetch1->c_name;
               ?>
            <td><?php echo $fetch->Description;  ?></td>
            <td><?php echo $fetch->Price;  ?></td>


            <td><button type="button" name="button" class="btn btn-info"><a class="edit" href="edit_medicine.php?id=<?php echo $fetch->M_ID;?>">Edit</a></td>
            <td><button type="button" name="button" class="btn btn-warning"><a class="del" href="medicine.php?del=<?php echo $fetch->M_ID;?>">Delete</a></td>
          </tr>
          </tbody>
        <?php } ?>

          </table>
</div>


   </body>
 </html>
