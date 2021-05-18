<?php
include("./connection.php");
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
  <a href="./prods.php" class="button">Movie</a>
  <a href="./cats.php"  class="view button2">Categories</a>

  <footer>
  <h3 >  <em> Shristi Noona</em></h3>
  </footer>
</html>
