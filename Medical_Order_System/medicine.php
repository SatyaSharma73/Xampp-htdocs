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

p{
  text-decoration: none;
  font-family: 'Fantasy', serif;
  color: black;
}

td{
  text-decoration: none;
  font-family: 'Brush Script Std', serif;
  color: #3B3131;
  font-weight: bold;
}

th{
  text-decoration: underline;
  font-family: 'Comic sans ms', serif;
  color: black;
  font-size: 25px;
  font-weight: bolder;
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
.button {
      background-color: #ff6b81;
      border: none;
      color: white;
      padding: 5px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
      margin: 4px 2px;
      border-radius: 10px;
}
.button:hover{
      background-color: #fb8b24;
      color: #212529;
}
.button:active{
      background-color: #02c39a;
}
</style>
 <?php
include("connection.php");
$query="select * from medicine";
$result=mysqli_query($con,$query);

?>

<a href="view_cart.php"><?php
$_SESSION['cart']=session_id();
$query="SELECT distinct m_id FROM order_session WHERE session='".$_SESSION['cart']."'";
$orders_select = mysqli_query($con,$query);
$c = mysqli_num_rows($orders_select);

echo $c;
?>View Cart</a>


<table cellpadding="20px"  class="center" >
          <thead>
            <th>Medicine Id</th>
            <th>Name</th>
            <th>Image</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
             <th>Operation</th>
          </thead>

        <?php while($fetch=mysqli_fetch_object($result)){ ?>
          <tbody>
        <tr>
          <td><?php echo $fetch->M_ID;  ?></td>
          <td><?php echo $fetch->Name;  ?></td>
          <td><img src="admin_panel/medicine_image/<?php echo $fetch->m_image;?>" style="width:85px;height:90px;border-radius: 10px;"></td>
          <td><?php
               $query1="select c_name from category where c_id ='".$fetch->c_id."'";
               $result1=mysqli_query($con,$query1);
               $fetch1=mysqli_fetch_object($result1);
               echo $fetch1->c_name;
               ?>
          <td><?php echo $fetch->Description;  ?></td>
          <td><?php echo $fetch->Price;  ?></td>
          <td><a href="cart.php?id=<?php echo $fetch->M_ID; ?>"><button type="button" class="button">Add to Cart</button></a></td>
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
