<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="signin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
  color: white;
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
  background-color: #121013;
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

</style>
  <body class="text-center">

<main class="form-signin">

    <img class="mb-4" src="https://media.giphy.com/media/LNf5SDcjnBsg0gPsQ3/giphy.gif" alt="" width="95" height="80">
    <h1 class="h3 mb-3 fw-normal">Welcome</h1>

    <a href="user.php"><button type="button" name="button" class="w-10 btn btn-lg btn-success">User</button></a>
    <a href="course.php"><button type="button" name="button" class="w-10 btn btn-lg btn-secondary">Courses</button></a>

    <p class="mt-5 text-muted">Assignment-4 for Software Engineering Lab</p>
  </form>
</main>
  </body>
</html>
