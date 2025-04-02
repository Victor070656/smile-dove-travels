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
  <title>Smile Dove Travels | Blog</title>
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
            <li><a href="./">Home</a></li>
            <li>Blog</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!-- News Section -->
    <section class="">
      <div class="container pb-70">
        <div class="row">
          <?php
          $getBlogs = mysqli_query($conn, "SELECT * FROM `blogs` ORDER BY `id` DESC");
          if (mysqli_num_rows($getBlogs) > 0) {
            while ($blog = mysqli_fetch_assoc($getBlogs)) {
          ?>
              <!-- News Block -->
              <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image shadow rounded">
                      <a href="blog-details.php?id=<?= $blog['blogid']; ?>"><img src="uploads/blog/<?= $blog["image"]; ?>" alt="" class="bg-transparent" style="width: 100%; height: 270px; object-fit: cover; border-radius: 10px;" /></a>
                    </figure>
                  </div>
                  <div class="content-box">
                    <div class="content">
                      <ul class="post-info">
                        <li><i class="fa fa-clock"></i> <?= date("d M Y", strtotime($blog["created_at"])); ?></li>
                      </ul>
                      <h4 class="title text-truncate">
                        <a href="blog-details.php?id=<?= $blog['blogid']; ?>" class="text-truncate"><?= $blog["title"]; ?></a>
                      </h4>
                      <p class="text-truncate"><?= $blog["title"]; ?></p>
                      <a href="blog-details.php?id=<?= $blog['blogid']; ?>" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            }
          } else {
            ?>
            <p class="p-4 text-center">No Blog Posted Yet</p>
          <?php
          }
          ?>

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