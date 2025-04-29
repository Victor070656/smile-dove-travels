<?php
include_once "config/config.php";
session_start();
$loggedIn = false;
if (!empty($_SESSION["sdtravels_user"])) {
  $loggedIn = true;
  $uid = $_SESSION["sdtravels_user"];
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from html.kodesolution.com/2024/vizox-php/page-course.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 21:49:00 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8" />
  <title>Smile Dove Travels | Bookings</title>
  <!-- Stylesheets -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <link href="css/style.css" rel="stylesheet" />

  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
  <link rel="icon" href="images/favicon.png" type="image/x-icon" />

  <link href="intro/intro.css" rel="stylesheet" />
  <script src="js/jquery.js"></script>

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <!--[if lt IE 9
      ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script
    ><![endif]-->
  <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="intro/rev/css/rs6.css" />
</head>

<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- Main Header-->
    <?php
    $page = "booking";
    include "partials/header.php"; ?>
    <!--End Main Header -->

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(images/background/page-title.jpg)">
      <div class="auto-container">
        <div class="title-outer">
          <h1 class="title">Bookings</h1>
          <ul class="page-breadcrumb">
            <li><a href="./">Home</a></li>
            <li>Booking</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!-- Courses Section -->
    <section class="">
      <div class="container pb-100">

        <!-- Features Section Two -->
        <section class="features-section-two mb-5">
          <div class="auto-container">
            <div class="outer-box">
              <span class="icon-plane"></span>
              <div class="row">
                <div class="title-column col-lg-6">
                  <div class="inner-column">
                    <a class="sec-title light">
                      <span class="sub-title">Tour & Guide</span>
                      <h2>Explore the World with Ease</h2>
                      <a href="tour.php" class="btn btn-light fw-bold mt-3 btn-lg">Book Your Tour Now</a>
                    </a>
                  </div>
                </div>
                <div class="features-column col-lg-6">
                  <div class="inner-column">
                    <figure class="image">
                      <img src="images/resource/image-1.png" alt="" />
                    </figure>
                    <ul class="features-list">
                      <li>Personalized Tour Packages</li>
                      <li>Personal & Group Tour</li>
                      <li>Party Tour</li>
                      <li>Expert Travel Guides</li>
                      <li>24/7 Help & Support</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Features Section Two -->
        <div class="row">
          <!-- flight -->
          <div class="col-12 mb-5">
            <div class="card " style="border-radius: 15px;">
              <div class="card-body">
                <h5 class="card-title">Flight Booking</h5>

                <form action="flight.php" method="get">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="class" class="form-label fw-bold">Flight Class</label>
                      <select name="class" id="class" class="form-control form-select">
                        <option value="Economy">Economy</option>
                        <option value="Business">Business</option>
                        <option value="Premium">Premium</option>
                        <option value="First">First Class</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="type" class="form-label fw-bold">Ticket Type</label>
                      <select name="type" id="type" class="form-control form-select">
                        <option value="One-Way">One Way</option>
                        <option value="Round-Trip">Round Trip</option>
                      </select>
                    </div>
                    <div class="">
                      <button type="submit" class="btn btn-dark">Book Flight</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>



          <div class="">
            <h4 class="">Hotel Reservations</h4>
          </div>

          <?php
          $getHotels = mysqli_query($conn, "SELECT * FROM `hotels` ORDER BY `id` DESC");
          if (mysqli_num_rows($getHotels) > 0) {
            while ($hotel = mysqli_fetch_assoc($getHotels)) {
              ?>
              <!-- Course Block Two-->
              <div class="col-lg-4 col-md-6 ">
                <!-- Training Block Three-->
                <div class="training-block-three overflow-hidden mb-4">
                  <div class="inner-box">
                    <div class="image-box">
                      <figure class="image">
                        <a href="hotel.php?hid=<?= $hotel['hotelid']; ?>"><img src="images/resource/course-8.jpg"
                            alt="" /></a>
                      </figure>
                      <a href="hotel.php?hid=<?= $hotel['hotelid']; ?>" class="read-more"><i
                          class="fa fa-long-arrow-alt-right"></i></a>
                      <div class="info-box">
                        <h4 class="title">
                          <a class="text-truncate" href="hotel.php?hid=<?= $hotel['hotelid']; ?>"><?= $hotel["name"] ?></a>
                        </h4>
                        <span class=""><?= $hotel["country"] ?></span>
                      </div>
                    </div>
                    <div class="overlay-content">
                      <div class="info-box">
                        <h4 class="title">
                          <a class="text-truncate" href="hotel.php?hid=<?= $hotel['hotelid']; ?>"><?= $hotel["name"] ?></a>
                        </h4>
                        <div class="text text-truncate">
                          <?= $hotel["description"] ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }
          }
          ?>



        </div>
      </div>
    </section>
    <!-- End Courses Section-->
    <!-- Main Footer -->
    <?php include "partials/footer.php"; ?>
    <!--End Main Footer -->
  </div>
  <!-- End Page Wrapper -->

  <!-- Scroll To Top -->
  <div class="scroll-to-top scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
  </div>


  <script src="js/jquery.js"></script>
  <script src="js/popper.min.js"></script>

  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.fancybox.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/appear.js"></script>
  <script src="js/select2.min.js"></script>
  <script src="js/owl.js"></script>
  <script src="js/mixitup.js"></script>
  <script src="js/bxslider.js"></script>
  <script src="js/script.js"></script>
</body>

</html>