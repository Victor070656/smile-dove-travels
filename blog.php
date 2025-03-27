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
<!-- Mirrored from html.kodesolution.com/2024/vizox-php/news-grid.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 21:49:19 GMT -->
<!-- Added by HTTrack -->
<meta
  http-equiv="content-type"
  content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8" />
  <title>Smile Dove Travels | News Grid</title>
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
    $page = "blog";
    include "partials/header.php"; ?>
    <!--End Main Header -->

    <!-- Start main-content -->
    <section
      class="page-title"
      style="background-image: url(images/background/page-title.jpg)">
      <div class="auto-container">
        <div class="title-outer">
          <h1 class="title">Blog</h1>
          <ul class="page-breadcrumb">
            <li><a href="index-2.html">Home</a></li>
            <li>News</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!-- News Section -->
    <section class="">
      <div class="container pb-70">
        <div class="row">
          <!-- News Block -->
          <div class="news-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image">
                  <a href="news-details.html"><img src="images/resource/news-1.jpg" alt="" /></a>
                </figure>
                <span class="date"><b>20</b> SEP</span>
              </div>
              <div class="content-box">
                <div class="content">
                  <ul class="post-info">
                    <li><i class="fa fa-user"></i> by Admin</li>
                    <li><i class="fa fa-comments"></i> 2 Comments</li>
                  </ul>
                  <h4 class="title">
                    <a href="news-details.html">The quality role of the elementary teacher in
                      education</a>
                  </h4>
                  <a href="news-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- News Block -->
          <div class="news-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image">
                  <a href="news-details.html"><img src="images/resource/news-2.jpg" alt="" /></a>
                </figure>
                <span class="date"><b>20</b> SEP</span>
              </div>
              <div class="content-box">
                <div class="content">
                  <ul class="post-info">
                    <li><i class="fa fa-user"></i> by Admin</li>
                    <li><i class="fa fa-comments"></i> 2 Comments</li>
                  </ul>
                  <h4 class="title">
                    <a href="news-details.html">The quality role of the elementary teacher in
                      education</a>
                  </h4>
                  <a href="news-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- News Block -->
          <div class="news-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image">
                  <a href="news-details.html"><img src="images/resource/news-3.jpg" alt="" /></a>
                </figure>
                <span class="date"><b>20</b> SEP</span>
              </div>
              <div class="content-box">
                <div class="content">
                  <ul class="post-info">
                    <li><i class="fa fa-user"></i> by Admin</li>
                    <li><i class="fa fa-comments"></i> 2 Comments</li>
                  </ul>
                  <h4 class="title">
                    <a href="news-details.html">The quality role of the elementary teacher in
                      education</a>
                  </h4>
                  <a href="news-details.html" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End News Section -->
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