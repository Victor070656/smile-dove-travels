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
<!-- Mirrored from html.kodesolution.com/2024/vizox-php/news-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 21:49:19 GMT -->
<!-- Added by HTTrack -->
<meta
  http-equiv="content-type"
  content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8" />
  <title>Smile Dove Travels | News Details</title>
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
    <?php include "partials/header.php"; ?>
    <!--End Main Header -->

    <!-- Start main-content -->
    <section
      class="page-title"
      style="background-image: url(images/background/page-title.jpg)">
      <div class="auto-container">
        <div class="title-outer">
          <h1 class="title">News Details</h1>
          <ul class="page-breadcrumb">
            <li><a href="index-2.html">Home</a></li>
            <li>News</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!--Blog Details Start-->
    <section class="blog-details">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 col-lg-7">
            <div class="blog-details__left">
              <div class="blog-details__img">
                <img src="images/resource/news-details.jpg" alt="" />
                <div class="blog-details__date">
                  <span class="day">28</span>
                  <span class="month">Aug</span>
                </div>
              </div>
              <div class="blog-details__content">
                <ul class="list-unstyled blog-details__meta">
                  <li>
                    <a href="news-details.html"><i class="fas fa-user-circle"></i> Admin</a>
                  </li>
                  <li>
                    <a href="news-details.html"><i class="fas fa-comments"></i> 02 Comments</a>
                  </li>
                </ul>
                <h3 class="blog-details__title">
                  Reasons for Australian Student Visa Refusal
                </h3>
                <p class="blog-details__text-2">
                  Mauris non dignissim purus, ac commodo diam. Donec sit amet
                  lacinia nulla. Aliquam quis purus in justo pulvinar tempor.
                  Aliquam tellus nulla, sollicitudin at euismod nec, feugiat
                  at nisi. Quisque vitae odio nec lacus interdum tempus.
                  Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
                  pellentesque vitae et nunc. Sed vitae leo vitae nisl
                  pellentesque semper.
                </p>
                <p class="blog-details__text-2">
                  Mauris non dignissim purus, ac commodo diam. Donec sit amet
                  lacinia nulla. Aliquam quis purus in justo pulvinar tempor.
                  Aliquam tellus nulla, sollicitudin at euismod nec, feugiat
                  at nisi. Quisque vitae odio nec lacus interdum tempus.
                  Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
                  pellentesque vitae et nunc. Sed vitae leo vitae nisl
                  pellentesque semper.
                </p>
                <p class="blog-details__text-2">
                  Mauris non dignissim purus, ac commodo diam. Donec sit amet
                  lacinia nulla. Aliquam quis purus in justo pulvinar tempor.
                  Aliquam tellus nulla, sollicitudin at euismod nec, feugiat
                  at nisi. Quisque vitae odio nec lacus interdum tempus.
                  Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
                  pellentesque vitae et nunc. Sed vitae leo vitae nisl
                  pellentesque semper.
                </p>
              </div>
              <div class="blog-details__bottom">
                <p class="blog-details__tags">
                  <span>Tags</span>
                  <a href="news-details.html">Immigration</a>
                  <a href="news-details.html">Visa Consultancy</a>
                </p>
                <div class="blog-details__social-list">
                  <a href="news-details.html"><i class="fab fa-twitter"></i></a>
                  <a href="news-details.html"><i class="fab fa-facebook"></i></a>
                  <a href="news-details.html"><i class="fab fa-pinterest-p"></i></a>
                  <a href="news-details.html"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
              <div class="nav-links">
                <div class="prev">
                  <a href="news-details.html" rel="prev">True factors of the modern healthy lifestyle</a>
                </div>
                <div class="next">
                  <a href="news-details.html" rel="next">How to lead a healthy &amp; well-balanced life</a>
                </div>
              </div>
              <div class="comment-one">
                <h3 class="comment-one__title">2 Comments</h3>
                <div class="comment-one__single">
                  <div class="comment-one__image">
                    <img src="images/resource/testimonial-4.jpg" alt="" />
                  </div>
                  <div class="comment-one__content">
                    <h3>Kevin Martin</h3>
                    <p>
                      Mauris non dignissim purus, ac commodo diam. Donec sit
                      amet lacinia nulla. Aliquam quis purus in justo pulvinar
                      tempor. Aliquam tellus nulla, sollicitudin at euismod.
                    </p>
                    <a
                      href="news-details.html"
                      class="theme-btn btn-style-one bg-theme-color4 comment-one__btn"><span class="btn-title">Reply</span></a>
                  </div>
                </div>
                <div class="comment-one__single">
                  <div class="comment-one__image">
                    <img src="images/resource/testimonial-5.jpg" alt="" />
                  </div>
                  <div class="comment-one__content">
                    <h3>Sarah Albert</h3>
                    <p>
                      Mauris non dignissim purus, ac commodo diam. Donec sit
                      amet lacinia nulla. Aliquam quis purus in justo pulvinar
                      tempor. Aliquam tellus nulla, sollicitudin at euismod.
                    </p>
                    <a
                      href="news-details.html"
                      class="theme-btn btn-style-one bg-theme-color4 comment-one__btn"><span class="btn-title">Reply</span></a>
                  </div>
                </div>
                <div class="comment-form">
                  <h3 class="comment-form__title">Leave a Comment</h3>
                  <form
                    id="contact_form"
                    name="contact_form"
                    class=""
                    action="https://html.kodesolution.com/2024/vizox-php/includes/sendmail.php"
                    method="post">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <input
                            name="form_name"
                            class="form-control"
                            type="text"
                            placeholder="Enter Name" />
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="mb-3">
                          <input
                            name="form_email"
                            class="form-control required email"
                            type="email"
                            placeholder="Enter Email" />
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <textarea
                        name="form_message"
                        class="form-control required"
                        rows="5"
                        placeholder="Enter Message"></textarea>
                    </div>
                    <div class="mb-3">
                      <input
                        name="form_botcheck"
                        class="form-control"
                        type="hidden"
                        value="" />
                      <button
                        type="submit"
                        class="theme-btn btn-style-one"
                        data-loading-text="Please wait...">
                        <span class="btn-title">Submit Comment</span>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="sidebar">
              <div class="sidebar__single sidebar__search">
                <form action="#" class="sidebar__search-form">
                  <input type="search" placeholder="Search here" />
                  <button type="submit">
                    <i class="lnr-icon-search"></i>
                  </button>
                </form>
              </div>
              <div class="sidebar__single sidebar__post">
                <h3 class="sidebar__title">Latest Posts</h3>
                <ul class="sidebar__post-list list-unstyled">
                  <li>
                    <div class="sidebar__post-image">
                      <img src="images/resource/news-1.jpg" alt="" />
                    </div>
                    <div class="sidebar__post-content">
                      <h3>
                        <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i>Admin</span>
                        <a href="news-details.html">Top crypto exchange influencers</a>
                      </h3>
                    </div>
                  </li>
                  <li>
                    <div class="sidebar__post-image">
                      <img src="images/resource/news-2.jpg" alt="" />
                    </div>
                    <div class="sidebar__post-content">
                      <h3>
                        <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i>Admin</span>
                        <a href="news-details.html">Necessity may give us best virtual court</a>
                      </h3>
                    </div>
                  </li>
                  <li>
                    <div class="sidebar__post-image">
                      <img src="images/resource/news-3.jpg" alt="" />
                    </div>
                    <div class="sidebar__post-content">
                      <h3>
                        <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i>Admin</span>
                        <a href="news-details.html">You should know about business plan</a>
                      </h3>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="sidebar__single sidebar__category">
                <h3 class="sidebar__title">Categories</h3>
                <ul class="sidebar__category-list list-unstyled">
                  <li>
                    <a href="news-details.html">Abroad Study<span class="icon-right-arrow"></span></a>
                  </li>
                  <li class="active">
                    <a href="news-details.html">Green card<span class="icon-right-arrow"></span></a>
                  </li>
                  <li>
                    <a href="news-details.html">PR Applicants<span class="icon-right-arrow"></span></a>
                  </li>
                  <li>
                    <a href="news-details.html">Travel Insurance<span class="icon-right-arrow"></span></a>
                  </li>
                  <li>
                    <a href="news-details.html">Visa Consultancy<span class="icon-right-arrow"></span></a>
                  </li>
                  <li>
                    <a href="news-details.html">Work Permits<span class="icon-right-arrow"></span></a>
                  </li>
                </ul>
              </div>
              <div class="sidebar__single sidebar__tags">
                <h3 class="sidebar__title">Tags</h3>
                <div class="sidebar__tags-list">
                  <a href="#">Education</a> <a href="#">Visa</a>
                  <a href="#">Immigration</a> <a href="#">Digital</a>
                  <a href="#">Travel</a> <a href="#">Language</a>
                </div>
              </div>
              <div class="sidebar__single sidebar__comments">
                <h3 class="sidebar__title">Recent Comments</h3>
                <ul class="sidebar__comments-list list-unstyled">
                  <li>
                    <div class="sidebar__comments-icon">
                      <i class="fas fa-comments"></i>
                    </div>
                    <div class="sidebar__comments-text-box">
                      <p>
                        A wordpress commenter on <br />
                        launch new mobile app
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="sidebar__comments-icon">
                      <i class="fas fa-comments"></i>
                    </div>
                    <div class="sidebar__comments-text-box">
                      <p><span>John Doe</span> on template:</p>
                      <h5>comments</h5>
                    </div>
                  </li>
                  <li>
                    <div class="sidebar__comments-icon">
                      <i class="fas fa-comments"></i>
                    </div>
                    <div class="sidebar__comments-text-box">
                      <p>
                        A wordpress commenter on <br />
                        launch new mobile app
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="sidebar__comments-icon">
                      <i class="fas fa-comments"></i>
                    </div>
                    <div class="sidebar__comments-text-box">
                      <p><span>John Doe</span> on template:</p>
                      <h5>comments</h5>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Blog Details End-->
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