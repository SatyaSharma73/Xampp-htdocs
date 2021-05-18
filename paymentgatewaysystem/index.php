<?php
include("./connection.php");

$query = "select * from prod, cat where cat.cid = prod.cid";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Store</title>
</head>
<style media="screen">
body{
  padding: 10px;
  position: relative;
  background-color: #ffc996;
}
.button {
background-color: #9f5f80;
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
cursor: pointer;
}

.button2 {
background-color: #ff8474;
color: black;
border: none;

padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
cursor: pointer;
}
.view{
  margin-left: 80%;
}
table{
  width:80%;
  margin-left:155px;
}
td{
  text-align: center;
}
footer{
  margin-top: 250px;
  text-align: center;
}
header{
    text-align: center;

}

</style>
<body>
  <header>
      <h3><strong><em> Shristi Noona</em></strong></h3>
  </header>
  <a href="admin/index.php" class="button">Admin Login</a>
  <a href="./cart.php"  class="view button2">View Cart</a>
  <table border="1px" padding="2px">
    <tr>
      <td>No of Ticket Available</td>
      <td>Movie</td>
      <td>Image</td>
      <td>Price</td>
      <td>Category</td>
      <td>Cart</td>
    </tr>

    <?php while ($fetch = mysqli_fetch_object($result)) { ?>
      <tr>
        <td><?php echo $fetch->pid ?></td>
        <td><?php echo $fetch->name ?></td>
        <td>
          <img src="./uploads/<?php echo $fetch->image ?>" style="max-width:100px">

        <td><?php echo $fetch->price ?></td>
        <td> <?php echo $fetch->cname ?>  </td>
        <td><a href="cart.php?id=<?php echo $fetch->pid ?>">Add to cart</a></td>
      </tr>
    <?php } ?>

  </table>

  <footer>
  <h3 >  <em> Shristi Noona</em></h3>
  </footer>
</body>

</html>
