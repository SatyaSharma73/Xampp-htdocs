<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="signin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comic+sans+ms:wght@700&display=swap" rel="stylesheet">
  </head>
  <style>
    html,
body {
  height: 100%;
  background-image: url("https://pdxinc.com/wp-content/uploads/iStock-1139879730.jpg");
}
td{
  text-decoration: none;
  font-family: 'Brush Script Std', serif;
  color: #800000;
  font-weight: bolder;
  font-size: 18px;
}

th{
  text-decoration: underline;
  font-family: 'Comic sans ms', serif;
  color: black;
  font-weight: bolder;
  font-size: 25px;
}
p{
  text-decoration: none;
  font-family: 'Fantasy', serif;
  color: black;
}

.text{
  color: #14213d;
  font-size: 15px;
  padding-top: 50px;
  font-weight: bold;
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
left: 25%;
}
</style>

<?php
include("connection.php");

$query="select * from category where status='active'";
$result=mysqli_query($con,$query);
?>
<table cellpadding="20px"  class="center" >
          <thead>
            <th>Category Id</th>
            <th>Category</th>
          </thead>

        <?php while($fetch=mysqli_fetch_object($result)){ ?>
          <tbody>
        <tr>
          <td><?php echo $fetch->c_id;  ?></td>
          <td><?php echo $fetch->c_name;  ?></td>
        </tr>
      <?php } ?>
      </table>

      <body class="text-center">
<a href="index.php"><button type="button" name="button" class="w-10 btn btn-lg btn-primary">Back</button></a>
    <div class="write">
          <div class="foot-section">
                  <aside id="f1">
                    <p class="text">Software Engineering Lab Project, 2021. Developed by CS 3B Smriti Choudhury_60, Shristi Pradhan_58, Shubhangi_59</p>
                  </aside>
</div>


    </body>
</html>
