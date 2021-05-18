
<style >
body{
  background-color: #c8eed9;
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
a{
  text-decoration: none;
}
</style>
  <body class="text-center">
<main class="form-signin">
  <form method="POST" action="login_do.php" enctype="multipart/form-data">
    <img class="mb-4" src="https://media.giphy.com/media/G2wQuhm5SraFTqQRbK/giphy.gif" alt="" width="95" height="80">
    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <table cellpadding="10px">

      <tr>
        <td>Email</td>
        <td><input type="email" id="inputEmail" name="email" class="form-control" placeholder="xyz@gmail.com" required autofocus></td>
      </tr>

      <tr>
        <td>Password</td>
        <td><input type="password" id="file" name="password" value="" class="form-control" required autofocus></td>
      </tr>
    </table>
    <input type="submit" name="login" value="LOGIN" class="w-10 btn btn-lg btn-primary">
    <a href="createaccount.php">Register Here</a>
  </form>
</main>
  </body>
</html>
