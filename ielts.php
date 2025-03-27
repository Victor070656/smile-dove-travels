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
<!-- Mirrored from html.kodesolution.com/2024/vizox-php/page-course-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 21:49:00 GMT -->
<!-- Added by HTTrack -->
<meta
  http-equiv="content-type"
  content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8" />
  <title>Smile Dove Travels | Coaching Details</title>
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
    $page = "ielts";
    include "partials/header.php"; ?>
    <!--End Main Header -->

    <!-- Start main-content -->
    <section
      class="page-title"
      style="background-image: url(images/background/page-title.jpg)">
      <div class="auto-container">
        <div class="title-outer">
          <h1 class="title">IELTS Registration</h1>
          <ul class="page-breadcrumb">
            <li><a href="./">Home</a></li>
            <li>IELTS</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!--Start courses Details-->
    <section class="course-details">
      <div class="container">
        <div class="row flex-xl-row-reverse">
          <!--Start courses Details Content-->
          <div class="col-12">
            <div class="courses-details__content">
              <img src="images/resource/course-details.jpg" alt="" />
              <h2 class="mt-4">IELTS Preparation & Registration</h2>
              <p>
                Prepare for success in the IELTS exam with our expert-led coaching and registration assistance. We provide personalized training, practice tests, and proven strategies to help you achieve your desired band score. Whether you're taking the Academic or General IELTS, our course covers all four modules:
              </p>
              <p>
                When an unknown printer took a galley of type and scrambled it
                to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged.
              </p>
              <div class="content mt-40">
                <div class="text">
                  <h3>What You Will Learn?</h3>
                  <p>
                    Lorem ipsum is simply free text used by copytyping
                    refreshing. Neque porro est qui dolorem ipsum quia quaed
                    inventore veritatis et quasi architecto beatae vitae dicta
                    sunt explicabo.
                  </p>
                </div>
                <div class="row mt-30">
                  <!-- Feature Block -->
                  <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                      <div class="icon-box">
                        <span class="count">01</span>
                        <i class="icon flaticon-passport"></i>
                      </div>
                      <div class="content-box">
                        <h5 class="title">Apply for New Visa Online</h5>
                        <div class="text">
                          Lorem ipsum is simply free dolo sit amet, ctetur.
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Feature Block -->
                  <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                      <div class="icon-box">
                        <span class="count">02</span>
                        <i class="icon flaticon-visa-4"></i>
                      </div>
                      <div class="content-box">
                        <h5 class="title">Skilled Immigration Programs</h5>
                        <div class="text">
                          Lorem ipsum is simply free dolo sit amet, ctetur.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-25">
                <h3>Frequently Asked Question</h3>
                <p>
                  Lorem ipsum is simply free text used by copytyping
                  refreshing. Neque porro est qui dolorem ipsum quia quaed
                  inventore veritatis et quasi architecto beatae vitae dicta
                  sunt explicabo.
                </p>
                <ul class="accordion-box wow fadeInRight">
                  <!--Block-->
                  <li class="accordion block">
                    <div class="acc-btn">
                      Is my technology allowed on tech?
                      <div class="icon fa fa-plus"></div>
                    </div>
                    <div class="acc-content">
                      <div class="content">
                        <div class="text">
                          There are many variations of passages the majority
                          have suffered alteration in some fo injected humour,
                          or randomised words believable.
                        </div>
                      </div>
                    </div>
                  </li>
                  <!--Block-->
                  <li class="accordion block active-block">
                    <div class="acc-btn active">
                      How to soft launch your business?
                      <div class="icon fa fa-plus"></div>
                    </div>
                    <div class="acc-content current">
                      <div class="content">
                        <div class="text">
                          There are many variations of passages the majority
                          have suffered alteration in some fo injected humour,
                          or randomised words believable.
                        </div>
                      </div>
                    </div>
                  </li>
                  <!--Block-->
                  <li class="accordion block">
                    <div class="acc-btn">
                      How to turn visitors into contributors
                      <div class="icon fa fa-plus"></div>
                    </div>
                    <div class="acc-content">
                      <div class="content">
                        <div class="text">
                          There are many variations of passages the majority
                          have suffered alteration in some fo injected humour,
                          or randomised words believable.
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--End courses Details Content-->

        </div>
      </div>
    </section>
    <!--End courses Details-->
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