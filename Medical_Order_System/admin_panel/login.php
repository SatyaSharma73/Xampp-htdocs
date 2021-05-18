<style >
body{
  background-image: url("https://www.desktopbackground.org/download/o/2015/02/19/905234_background-images-for-html-hd-wallpapers-and-pictures_1920x1080_h.jpg")
}
td{
  text-decoration: none;
  color: white;
  font-size:20px;
  font-weight: bold;
}
p{
    text-decoration: none;
    font-family: 'Fantasy', serif;
    color: black;
}

.text-center{
  text-align: center;
}
.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
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
img{
  height: 100px;
}
.text{
  color: #14213d;
  font-size: 15px;
  padding-top: 50px;
  font-weight: lighter;
}
.write{
  color: #03071e;
  font-size: 15px;
  padding-top: 50px;
  font-weight: lighter;
   font-style: italic;
}
.pen{
  position: absolute;
  right: 50px;
  top: 20px;
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
padding-top: 100px;
left: 40%;
}

</style>
  <body class="text-center">
<main class="form-signin">
  <form method="POST" action="login_do.php" enctype="multipart/form-data">
    <img class="mb-4" src="https://media.giphy.com/media/j1nZ1ayZkESKquKMvN/giphy.gif" alt="" width="95" height="80">
    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <table cellpadding="10px">

      <tr>
        <td>Email Id</td>
        <td><input type="email" id="inputEmail" name="email" class="form-control" placeholder="abc@gmail.com" required autofocus></td>
      </tr>

      <tr>
        <td>Password</td>
        <td><input type="password" id="file" name="password" value="" class="form-control" required autofocus></td>
      </tr>
    </table>
    <input type="submit" name="login" value="LOGIN" class="w-10 btn btn-lg btn-primary">
       <a class="pen" href="http://localhost/Medical_Order_System/index.php"><button type="button" name="button" class="w-10 btn btn-lg btn-info">Home</button></a>

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

  </form>
</main>
  </body>
</html>
