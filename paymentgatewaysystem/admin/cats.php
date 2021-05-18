<?php
include("./connection.php");

$query = "select * from cat";
$result = mysqli_query($con, $query);

if (isset($_REQUEST["del"])) {
  $query = "delete from cat where cid='" . $_REQUEST["del"] . "'";
  $result = mysqli_query($con, $query);
  header("location:cats.php");
}

if (isset($_REQUEST["active"])) {
  $query = "update cat set active='" . $_REQUEST['active'] . "' where cid='" . $_REQUEST["id"] . "'";
  $result = mysqli_query($con, $query);
  header("location:cats.php");
  echo $_REQUEST['active'];
}
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
a{
  text-decoration: none;
  color: #583d72;
}
</style>
<body>

  <a href="./cat_add.php" class="button">ADD Category</a>
  <table border="1px">
    <tr>
      <td>Category ID</td>
      <td>Name</td>
      <td>Active</td>
      <td>Edit</td>
      <td>Delete</td>
    </tr>

    <?php while ($fetch = mysqli_fetch_object($result)) { ?>
      <tr>
        <td><?php echo $fetch->cid ?></td>
        <td><?php echo $fetch->cname ?></td>
        <td>
          <?php if ($fetch->active) { ?>
            <a href="?active=0&id=<?php echo $fetch->cid ?>">Active</a>
          <?php } else { ?>
            <a href="?active=1&id=<?php echo $fetch->cid ?>">Inactive</a>
          <?php } ?>
        </td>
        <td><a href="cat_edit.php?id=<?php echo $fetch->cid ?>">Edit</a></td>
        <td><a href="cats.php?del=<?php echo $fetch->cid ?>">Delete</a></td>
      </tr>
    <?php } ?>
  </table>
</body>

</html>
