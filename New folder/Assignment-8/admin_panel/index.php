<?php
include("connection.php");?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="signin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
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
  font-family: 'Libre Baskerville', serif;
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
 /* background-image: url("https://images.unsplash.com/photo-1462206092226-f46025ffe607?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=753&q=80");*/

 background-image: url(https://steamup.in/send_up/2019/10/Pizza-Momos-Styling-2.jpg);
}
main{
}
main{
  padding-top: 100px;
}
.form-signin {
  width: 100%;
  max-width: 530px;
  padding: 15px;

  margin-left: auto;
    margin-right: auto;
    margin-top: 200px;
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
* { box-sizing: border-box; }
.video-background {
  background: #000;
  position: fixed;
  top: 0; right: 0; bottom: 0; left: 0;
  z-index: -99;
}
.video-foreground,
.video-background iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}
.text{
  color: #03071e;
  font-size: 15px;
  padding-top: 50px;
  font-weight: bold;
}

@media (min-aspect-ratio: 16/9) {
  .video-foreground { height: 300%; top: -100%; }
}
@media (max-aspect-ratio: 16/9) {
  .video-foreground { width: 300%; left: -100%; }
}
@media all and (max-width: 600px) {
.vid-info { width: 50%; padding: .5rem; }
.vid-info h1 { margin-bottom: .2rem; }
}
@media all and (max-width: 500px) {
.vid-info .acronym { display: none; }
}
</style>


  <body class="text-center">

    <main class="form-signin">

    <h1 class="fs-1">WowFood</h1>
    <p class="fs-3">Food company</p>

    <a href="employee.php"><button type="button" name="button" class="w-10 btn btn-lg btn-success">Food</button></a>
    <a href="dept.php"><button type="button" name="button" class="w-10 btn btn-lg btn-primary">Category</button></a>
   <p class="text">Software Engineering Lab Assignment-8  &copy; Smriti Choudhury_CS 3B_60 </p>

</main>

    <!-- <div class="video-background">
      <div class="video-foreground" >
      <iframe  frameborder="0"
        src="https://youtube.com/embed/Sfw87OVjZ4U?autoplay=1&controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=0" allowfullscreen>
      </iframe>
    </div>
    </div> -->

  </body>
</html>
