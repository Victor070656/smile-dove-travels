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
<!-- Mirrored from html.kodesolution.com/2024/vizox-php/page-service.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 21:49:01 GMT -->
<!-- Added by HTTrack -->
<meta
  http-equiv="content-type"
  content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8" />
  <title>Smile Dove Travels | Visa Grid</title>
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
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
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
    $page = "services";
    include "partials/header.php";
    ?>
    <!--End Main Header -->

    <!-- Start main-content -->
    <section
      class="page-title"
      style="background-image: url(images/background/page-title.jpg)">
      <div class="auto-container">
        <div class="title-outer">
          <h1 class="title">Our Services</h1>
          <ul class="page-breadcrumb">
            <li><a href="./">Home</a></li>
            <li>Services</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!-- Services Section -->
    <section class="">
      <div class="container">
        <div class="row">
          <!-- Service Block -->
          <div class="service-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image">
                  <a href="page-service-details.html"><img
                      src="images/travel/12.jpg"
                      style="width: 100%; height: 200px; object-fit: cover"
                      alt="" /></a>
                </figure>
                <div class="icon-box">
                  <i class="icon fa fa-graduation-cap"></i>
                </div>
              </div>
              <div class="content-box">
                <h5 class="title">
                  <a href="page-service-details.html">Pilgrimage Packages</a>
                </h5>
                <div class="text">
                  Embark on a spiritual journey to Jordan, Jerusalem, and Rome
                  with our well-planned pilgrimage tours. We handle visas,
                  accommodations, and guided experiences.
                </div>
                <a href="page-service-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Service Block -->
          <div class="service-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image">
                  <a href="page-service-details.html"><img
                      src="images/travel/04.webp"
                      style="width: 100%; height: 200px; object-fit: cover"
                      alt="" /></a>
                </figure>
                <div class="icon-box"><i class="icon fa fa-users"></i></div>
              </div>
              <div class="content-box">
                <h5 class="title">
                  <a href="page-service-details.html">Study Abroad Visa & Consultation</a>
                </h5>
                <div class="text">
                  Get expert assistance for study visa applications,
                  university selection, and financial documentation. We ensure
                  a smooth process for international students.
                </div>
                <a href="page-service-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Service Block -->
          <div class="service-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image">
                  <a href="page-service-details.html"><img
                      src="images/travel/07.jpg"
                      style="width: 100%; height: 200px; object-fit: cover"
                      alt="" /></a>
                </figure>
                <div class="icon-box"><i class="icon fa fa-school"></i></div>
              </div>
              <div class="content-box">
                <h5 class="title">
                  <a href="page-service-details.html">IELTS Registration & Coaching</a>
                </h5>
                <div class="text">
                  Prepare for success with our IELTS coaching and registration
                  services. Our expert instructors help you achieve your
                  desired band score with ease.
                </div>
                <a href="page-service-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Service Block -->
          <div class="service-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image">
                  <a href="page-service-details.html"><img
                      src="images/travel/03.webp"
                      style="width: 100%; height: 200px; object-fit: cover"
                      alt="" /></a>
                </figure>
                <div class="icon-box"><i class="icon fa fa-school"></i></div>
              </div>
              <div class="content-box">
                <h5 class="title">
                  <a href="page-service-details.html">Business & Conference Travel</a>
                </h5>
                <div class="text">
                  Travel for work made easy! We assist with business visa
                  processing, conference invitations, and corporate travel
                  arrangements worldwide.
                </div>
                <a href="page-service-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Service Block -->
          <div class="service-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image">
                  <a href="page-service-details.html"><img
                      src="images/travel/13.jpg"
                      style="width: 100%; height: 200px; object-fit: cover"
                      alt="" /></a>
                </figure>
                <div class="icon-box">
                  <i class="icon fa fa-graduation-cap"></i>
                </div>
              </div>
              <div class="content-box">
                <h5 class="title">
                  <a href="page-service-details.html">Tourist & Family Visit Visas</a>
                </h5>
                <div class="text">
                  Planning a vacation or visiting family? We provide tourist
                  and family visit visa assistance for stress-free
                  international travel.
                </div>
                <a href="page-service-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Service Block -->
          <div class="service-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image">
                  <a href="page-service-details.html"><img
                      src="images/travel/15.png"
                      style="width: 100%; height: 200px; object-fit: cover"
                      alt="" /></a>
                </figure>
                <div class="icon-box"><i class="icon fa fa-users"></i></div>
              </div>
              <div class="content-box">
                <h5 class="title">
                  <a href="page-service-details.html">Group Tours & Excursions</a>
                </h5>
                <div class="text">
                  Join our exclusive group tours for tourism, networking, and
                  cultural exchange. Travel with ease while we handle the
                  logistics.
                </div>
                <a href="page-service-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
          <!-- Service Block -->
          <div class="service-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image">
                  <a href="page-service-details.html"><img
                      src="images/travel/02.webp"
                      style="width: 100%; height: 200px; object-fit: cover"
                      alt="" /></a>
                </figure>
                <div class="icon-box"><i class="icon fa fa-users"></i></div>
              </div>
              <div class="content-box">
                <h5 class="title">
                  <a href="page-service-details.html">Flight Ticket Booking & Reservation</a>
                </h5>
                <div class="text">
                  Book international and domestic flights hassle-free! Enjoy
                  our 24-hour hold option for added flexibility on ticket
                  reservations.
                </div>
                <a href="page-service-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
          <!-- Service Block -->
          <div class="service-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image">
                  <a href="page-service-details.html"><img
                      src="images/travel/14.png"
                      style="width: 100%; height: 200px; object-fit: cover"
                      alt="" /></a>
                </figure>
                <div class="icon-box"><i class="icon fa fa-users"></i></div>
              </div>
              <div class="content-box">
                <h5 class="title">
                  <a href="page-service-details.html">Hotel Reservations & Airport Pickup</a>
                </h5>
                <div class="text">
                  Secure the best hotels at great rates and enjoy smooth
                  airport pickups for a comfortable arrival at your
                  destination.
                </div>
                <a href="page-service-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Services Section-->
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