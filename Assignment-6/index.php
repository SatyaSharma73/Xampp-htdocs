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
    margin-top: 500px;
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
.form-signin input[type="email"] {
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
    <h1 class="h3 mb-3 fw-normal">Abstergo Industries</h1>
    <a href="employee.php"><button type="button" name="button" class="w-10 btn btn-lg btn-success">Employee</button></a>
    <a href="dept.php"><button type="button" name="button" class="w-10 btn btn-lg btn-secondary">Department</button></a>
    <p class="mt-5 text-muted">Assignment No.5 for Software Engineering Lab @_satyasharma_ on 3/01/2021</p>

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
