<?php
include("connection.php");?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medical Order System</title>
    <link href="signin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comic+sans+ms:wght@700&display=swap" rel="stylesheet">
  </head>
<style>
html,
body {
  height: 100%;
}
a{
  text-decoration: none;
  color: white;
}
h1{
  color: Black;
  font-family: 'Comic Sans MS', serif;
}
img{
  width: 150px;
  height: 150px;
}
body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  overflow: hidden;
  background-image: url("https://www.nwspecialists.com/wp-content/uploads/2019/10/5.jpg");
}
main{
}
main{
  padding-top: 10px;
}
.form-signin {
  width: 100%;
  max-width: 530px;
  padding: 1px;

  margin-left: auto;
    margin-right: auto;
    margin-top: 100px;
}
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
  font-weight: bold;
}
.write{
  color: #03071e;
  font-size: 15px;
  padding-top: 50px;
  font-weight: bold;
   font-style: italic;
}
.footTitle {
  font-family: 'Monospace', cursive;
  text-transform:none;
  font-weight:400;
  color:black !important;
  font-size: 2em !important;
}
.foot-section{
position: relative;
}
#f1{
text-align: center;
position: absolute;
padding-top: 50px;
left: 37%;
}

</style>


  <body class="text-center">

    <main class="form-signin">

    <h1 class="fs-1">Medico 24/7</h1>
    <p class="fs-3">Medicine company</p>

    <a href="medicine.php"><button type="button" name="button" class="w-10 btn btn-lg btn-success">Medicine</button></a>
    <a href="category.php"><button type="button" name="button" class="w-10 btn btn-lg btn-primary">Category</button></a>

  <div class="write">
    <aside id="f1">
    <p class="text">Software Engineering Lab Project, 2021.</p>
    <div class="foot-section">
              <p class="fs-7">Developed by CS 3B</p>
              <p class="fs-7">
                Smriti Choudhury_60, Shristi Pradhan_58, Shubhangi_59
              </p>
            </aside>
  </div>

</main>


  </body>
</html>
