<?php
   include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <!-- <script src="./JSLink/bootstrap.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Bookmovies, movie booking anytime anywhere.</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="logo.png" alt="" srcset="" width="80" height="70" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="contact.php"
                >Contact us</a
              >
            </li>
          </ul>
          <?php


         


          $query = "SELECT 'name' FROM tbl_signin";
          $fire = mysqli_query($con,$query) or die("cannot fetch data from database".mysqli_error($con));
          if($fire) echo "recieved data from database";
          $con->close(); ?>
        </div>
      </div>
    </nav>
    <div
      id="carouselExampleFade"
      class="carousel slide carousel-fade"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="1.jpg"
            class="d-block w-100"
            alt="..."
            width="700"
            height="700"
          />
        </div>
        <div class="carousel-item">
          <img
            src="2.jpg"
            class="d-block w-100"
            alt="..."
            width="700"
            height="700"
          />
        </div>
        <div class="carousel-item">
          <img
            src="4.jpg"
            class="d-block w-100"
            alt="..."
            width="700"
            height="700"
          />
        </div>
        <div class="carousel-item">
          <img
            src="5.jpg"
            class="d-block w-100"
            alt="..."
            width="700"
            height="700"
          />
        </div>
        <div class="carousel-item">
          <img
            src="6.jpg"
            class="d-block w-100"
            alt="..."
            width="700"
            height="700"
          />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleFade"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleFade"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    -->

    <!-- Optional JavaScript; choose one of the two! -->
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <svg
              class="bd-placeholder-img card-img-top"
              width="100%"
              height="225"
              xmlns="http://www.w3.org/2000/svg"
              role="img"
              aria-label="Placeholder: Thumbnail"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <image href="8.jpg" height="100%" width="100%" />
            </svg>

            <div class="card-body">
              <p class="card-text">
                K.G.F Chapter 2 is an Indian Kannada-language period action film
                produced by Vijay Kiragandur. The second installment of the
                two-part series, it is a sequel to the 2018 film K.G.F: Chapter
                1.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a
                    class="btn btn-outline-primary"
                    href="https://www.youtube.com/watch?v=EfxU3M47jTQ"
                    role="button"
                    >View trailer</a
                  >
                  <a
                    class="btn btn-outline-danger"
                    href="booking.php"
                    role="button"
                    >Book</a
                  >
                </div>
                <small class="text-muted">2 hrs 46 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg
              class="bd-placeholder-img card-img-top"
              width="100%"
              height="225"
              xmlns="http://www.w3.org/2000/svg"
              role="img"
              aria-label="Placeholder: Thumbnail"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <image href="7.jpg" height="100%" width="100%" />
            </svg>

            <div class="card-body">
              <p class="card-text">
                Princess Diana of an all-female Amazonian race rescues US pilot
                Steve. Upon learning of a war, she ventures into the world of
                men to stop Ares, the god of war, from destroying mankind.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a
                    class="btn btn-outline-primary"
                    href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"
                    role="button"
                    >View trailer</a
                  >
                  <a class="btn btn-outline-danger" href="booking.php" role="button"
                    >Book</a
                  >
                </div>
                <small class="text-muted">2 hrs 35 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg
              class="bd-placeholder-img card-img-top"
              width="100%"
              height="225"
              xmlns="http://www.w3.org/2000/svg"
              role="img"
              aria-label="Placeholder: Thumbnail"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <image href="3.jpg" height="100%" width="100%" />
            </svg>

            <div class="card-body">
              <p class="card-text">
                Samar kills his father, Prime Minister Devki Nandan Singh, to
                gain more power. However, he must make his moves carefully lest
                his secret spills out in the public.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a
                    class="btn btn-outline-primary"
                    href="https://www.youtube.com/watch?v=ZcFV_rJDa7s"
                    role="button"
                    >View trailer</a
                  >
                  <a class="btn btn-outline-danger" href="booking.php" role="button"
                    >Book</a
                  >
                </div>
                <small class="text-muted">1 hrs 56 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <svg
              class="bd-placeholder-img card-img-top"
              width="100%"
              height="225"
              xmlns="http://www.w3.org/2000/svg"
              role="img"
              aria-label="Placeholder: Thumbnail"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <image href="10.jpg" height="100%" width="100%" />
            </svg>

            <div class="card-body">
              <p class="card-text">
                Simba, a young lion prince, flees his kingdom after the murder
                of his father, Mufasa. Years later, a chance encounter with
                Nala, a lioness, causes him to return and take back what is
                rightfully his.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a
                    class="btn btn-outline-primary"
                    href="https://www.youtube.com/watch?v=7TavVZMewpY"
                    role="button"
                    >View trailer</a
                  >
                  <a class="btn btn-outline-danger" href="booking.php" role="button"
                    >Book</a
                  >
                </div>
                <small class="text-muted">2 hrs 19 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg
              class="bd-placeholder-img card-img-top"
              width="100%"
              height="225"
              xmlns="http://www.w3.org/2000/svg"
              role="img"
              aria-label="Placeholder: Thumbnail"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <image href="11.jpg" height="100%" width="100%" />
            </svg>

            <div class="card-body">
              <p class="card-text">
                After being thrown out in the streets by Joker, Harley struggles
                to pick herself up. However, Harley teams up with Huntress,
                Black Canary and Renee Montoya to defeat a gangster and protect
                a girl.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a
                    class="btn btn-outline-primary"
                    href="https://www.youtube.com/watch?v=kGM4uYZzfu0"
                    role="button"
                    >View trailer</a
                  >
                  <a class="btn btn-outline-danger" href="booking.php" role="button"
                    >Book</a
                  >
                </div>
                <small class="text-muted">1 hrs 49 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg
              class="bd-placeholder-img card-img-top"
              width="100%"
              height="225"
              xmlns="http://www.w3.org/2000/svg"
              role="img"
              aria-label="Placeholder: Thumbnail"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <image href="9.jpg" height="100%" width="100%" />
            </svg>

            <div class="card-body">
              <p class="card-text">
                Dominic and his family are caught in a quagmire when Shaw's
                brother seeks bloody revenge. They must not only deal with their
                enemy but also save a crucial programme from falling into the
                wrong hands.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a
                    class="btn btn-outline-primary"
                    href="https://www.youtube.com/watch?v=Skpu5HaVkOc"
                    role="button"
                    >View trailer</a
                  >
                  <a class="btn btn-outline-danger" href="booking.php" role="button"
                    >Book</a
                  >
                </div>
                <small class="text-muted">2 hrs 5 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <svg
              class="bd-placeholder-img card-img-top"
              width="100%"
              height="225"
              xmlns="http://www.w3.org/2000/svg"
              role="img"
              aria-label="Placeholder: Thumbnail"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <image href="12.jpg" height="100%" width="100%" />
            </svg>

            <div class="card-body">
              <p class="card-text">
                Kong and his protectors undertake a perilous journey to find his
                true home. However, they soon find themselves in the path of an
                enraged Godzilla as he cuts a swath of destruction across the
                globe.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a
                    class="btn btn-outline-primary"
                    href="https://www.youtube.com/watch?v=odM92ap8_c0"
                    role="button"
                    >View trailer</a
                  >
                  <a class="btn btn-outline-danger" href="booking.php" role="button"
                    >Book</a
                  >
                </div>
                <small class="text-muted">1 hr 49 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg
              class="bd-placeholder-img card-img-top"
              width="100%"
              height="225"
              xmlns="http://www.w3.org/2000/svg"
              role="img"
              aria-label="Placeholder: Thumbnail"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <image href="13.jpg" height="100%" width="100%" />
            </svg>

            <div class="card-body">
              <p class="card-text">
                Fueled by his restored faith in humanity and inspired by
                Superman's selfless act, Bruce Wayne enlists newfound ally Diana
                Prince to face an even greater threat.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a
                    class="btn btn-outline-primary"
                    href="https://www.youtube.com/watch?v=vM-Bja2Gy04"
                    role="button"
                    >View trailer</a
                  >
                  <a class="btn btn-outline-danger" href="booking.php" role="button"
                    >Book</a
                  >
                </div>
                <small class="text-muted">2 hrs 30 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg
              class="bd-placeholder-img card-img-top"
              width="100%"
              height="225"
              xmlns="http://www.w3.org/2000/svg"
              role="img"
              aria-label="Placeholder: Thumbnail"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <image href="14.jpg" height="100%" width="100%" />
            </svg>

            <div class="card-body">
              <p class="card-text">
                The revival of Emperor Palpatine resurrects the battle between
                the Resistance and the First Order while the Jedi's legendary
                conflict with the Sith Lord comes to a head.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a
                    class="btn btn-outline-primary"
                    href="https://www.youtube.com/watch?v=8Qn_spdM5Zg"
                    role="button"
                    >View trailer</a
                  >
                  <a class="btn btn-outline-danger" href="booking.php" role="button"
                    >Book</a
                  >
                </div>
                <small class="text-muted">2 hrs 12 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
