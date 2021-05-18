<?php
include("./connection.php");

if (isset($_POST['insert'])) {
  $query = "insert into cat set cname='" . $_POST['name'] . "'";
  $result = mysqli_query($con, $query);
  header("location:cats.php");
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
  text-align: center;
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
  <h1>Add Category</h1>
  <form method="POST" action="">
    <label for="name">Category Name</label>
    <input type="text" name="name" id="name">
    <input type="submit" name="insert" value="Insert">
      </form>


</body>

</html>
