<!-- Resuming the session if any exist -->
<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description"
    content="ShreeTechLabs - Our aim is to provide FREE TECHNICAL EDUCATION to the non-privilaged & technically retarted people of india. We also provide IT consultancy service for our clients.">
  <meta name="author" content="ShreeTechLabs">
  <meta name="google-site-verification" content="9AYAnZSWSW2IiA1DkGnxYCR0jfi2_kUgl15OTujOdxI" />
  <meta name="keywords"
    content="shreetech, shreetechlabs, shreetechlab, SHREETECH, SHREETECHLABS, robotics, arduino, web development, internet of things, electronic, robotics school, shreetechlabs@gmail.com, ShreeTechLabs">

  <!-- Attaching link.php -->
  <?php
   Require 'link.php';
   ?>

  <title>Home | ShreeTechLabs | For Tech Geeks | Free! Tech Education To Everyone </title>
</head>

<body>
  <!-- navigation bar -->
  <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">

    <a class="navbar-brand" href="index.php">
      <img src="images/logo/st.png" width="40" height="40" class="d-inline-block align-top" alt="..." loading="lazy">
      | ShreeTechLabs
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Courses <span class="badge badge-info">Free!</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Robotics <span class="badge badge-secondary">New</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Internet Of Things <span class="badge badge-secondary">New</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Actuators</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Sensors</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Electronic Components</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Projects <span class="badge badge-info">3</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Birthday Wisher <span class="badge badge-secondary">New</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Smart Matka <span class="badge badge-secondary">New</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Mobile Controlled Car <span class="badge badge-secondary">New</span></a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>

      </ul>

      <!-- Login-Logout-Name -->
      <?php if(isset($_SESSION['id'])){ ?>
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="#">Welcome <?php echo $_SESSION['fname']; ?></a>
        </li>
      </ul>
      <?php }else{ ?>
      <a href="login.php">
        <button type="button" class="btn btn_clr">Login</button>
      </a>
      <?php } ?>
      <ul class="navbar-nav">
        <li class="nav-item ">
          <?php  if(isset($_SESSION['id'])){ ?>
          <a href="user_courses.php">
            <button type="button" class="btn btn_clr">Go To Classroom</button>
          </a>
          <?php } ?>
        </li>
      </ul>

    </div>
  </nav>

  <!-- alert -->
  <?php
   Require 'alert.php';
   ?>

  <!-- Banner 1 -->
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/banner/1.jpg" class="d-block w-100" alt="Loading">
        <div class="carousel-caption d-md-block">
          <h5>Tech Education <span class="badge badge-secondary">Free!</span></h5>
          <p></p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="images/banner/2.jpg" class="d-block w-100" alt="Loading">
        <div class="carousel-caption d-md-block">
          <h5>Robotics using Arduino <span class="badge badge-secondary">Coming Soon!</span></h5>
          <p></p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="images/banner/3.jpg" class="d-block w-100" alt="Loading">
        <div class="carousel-caption d-md-block">
          <h5>Internet of things <span class="badge badge-secondary">Coming Soon!</span></h5>
          <p></p>
        </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>

  <!-- about section -->
  <section style="margin: 0px;" class="jumbotron text-center">
    <div class="container">

      <div style="text-align: center;">
        <h3>About Us</h3>
      </div><br>

      <div class="row">
        <div class="col-md-4">
          <p style="font-size: 1rem; color: black;" class="lead text-muted">In the
            prime hour of the world,&nbsp;when many are unknown to technology, <b><em>ShreeTechLab</em></b> is created
            with an idea to provide <b> free technical education</b> to the non-privilaged & technically retarted people
            of india.<br> <br> &nbsp; &nbsp; The <b> vision</b> of our founders is to make people of every age
            tech-friendly
            and make
            them believe in themselves that everyone can learn modern technologies. </p>

          <a href="https://www.youtube.com/channel/UCWFNyPgY48GuVMp5jdt3XuA" target="_blank"
            style="text-decoration: none;">
            <button
              class="bg-gray-200 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-300 focus:outline-none "
              id="yt-btn">
              <img src="images/logo/youtube.png" alt="" width="35px" height="35px">
              <span class="ml-4 flex items-start flex-col leading-none">
                <span class="text-xs text-gray-600 mb-1">CHECK IT ON</span>
                <span class="title-font font-medium">YouTube</span>
              </span>
            </button>
          </a>
          <a href="https://www.youtube.com/channel/UCWFNyPgY48GuVMp5jdt3XuA" style="text-decoration: none;">
            <button
              class="bg-gray-200 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-300 focus:outline-none"
              id="pl-btn">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 512 512">
                <path
                  d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z">
                </path>
              </svg>
              <span class="ml-4 flex items-start flex-col leading-none">
                <span class="text-xs text-gray-600 mb-1">GET IT ON</span>
                <span class="title-font font-medium">Google Play</span>
              </span>
            </button>
          </a><br><br>
        </div>

        <!-- about banner -->
        <div class="col-md-8">
          <div id="carouselExampleCaptions2" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions2" data-slide-to="0" class="active"></li>
              - <li data-target="#carouselExampleCaptions2" data-slide-to="1"></li>
              <li datatarget="#carouselExampleCaptions2" data-slide-to="2"></li>
              <li data-target="#carouselExampleCaptions2" data-slide-to="3"></li>
              <li datatarget="#carouselExampleCaptions2" data-slide-to="4"></li>
            </ol>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/workshop/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p></p>
                </div>
              </div>

              <div class="carousel-item">
                <img src="images/workshop/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p></p>
                </div>
              </div>

              <div class="carousel-item">
                <img src="images/workshop/3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p></p>
                </div>
              </div>

              <div class="carousel-item">
                <img src="images/workshop/4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p></p>
                </div>
              </div>

              <div class="carousel-item">
                <img src="images/workshop/5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p></p>
                </div>
              </div>

            </div>

            <a class="carousel-control-prev" href="#carouselExampleCaptions2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleCaptions2" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

          </div>
        </div>
  </section>

  <!-- courses -->
  <div class="album py-5 bg-light">
    <div class="container">
      <div style="text-align: center;">
        <h3>What do you want to learn from us?</h3>
      </div> <br>

      <div class="row">

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="images/courses/web.jpg" class="card-img-top" alt="loading">
            <div class="card-body">
              <h6>Web Development <span class="badge badge-info">Soon!</span></h6>
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Check it Now!</button>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="images/courses/robo.jpg" class="card-img-top" alt="loading">
            <div class="card-body">
              <h6>Robotics using Arduino <span class="badge badge-info">New!</span></h6>
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Check it Now!</button>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="images/courses/iot.jpg" class="card-img-top" alt="loading">
            <div class="card-body">
              <h6>Internet of things <span class="badge badge-info">New!</span></h6>
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Check it Now!</button>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="images/courses/elec.jpg" class="card-img-top" alt="loading">
            <div class="card-body">
              <h6>Basic Electronics <span class="badge badge-info">New!</span></h6>
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Check it Now!</button>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="images/courses/sensor.jpg" class="card-img-top" alt="loading">
            <div class="card-body">
              <h6>Sensors <span class="badge badge-info">New!</span></h6>
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Check it Now!</button>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="images/courses/servo.jpg" class="card-img-top" alt="loading">
            <div class="card-body">
              <h6>Actuators <span class="badge badge-info">New!</span></h6>
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Check it Now!</button>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- projects -->
  <div class="container"><br>

    <div style="text-align: center;">
      <h3>Projects</h3>
    </div><br>

    <div class="row mb-2">

      <div class="col-md-6">
        <div
          class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Robotics using Arduino</strong>
            <h3 class="mb-0">Smart Matka</h3>
            <div class="mb-1 text-muted">Aug 16</div>
            <p class="mb-auto" style="font-size: 0.7rem;">In this time which is affected by COVID-19, there is much need
              for cleanliness. Therefore, We have brought equipment for you all by which you can fill water without
              touching anything. A cheap and effective method, which will help us to escape this pandemic situation.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" src="images/project/smart-matka.jpg" alt="" width="200" height="250">
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div
          class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Robotics using Arduino</strong>
            <h3 class="mb-0">Tech Birthday Wisher</h3>
            <div class="mb-1 text-muted">sept 19</div>
            <p class="mb-auto" style="font-size: 0.7rem;">It is a innovative way to suprise any one, who is special for
              you by greeting him on their birthday in such way using ARDUINO UNO, LCD display, etc. </p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" src="images/project/birth.jpg" alt="" width="200" height="250">
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- footer -->
  <?php
 Require 'footer.php';
 ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</body>

</html>