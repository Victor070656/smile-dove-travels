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
<!-- Mirrored from html.kodesolution.com/2024/vizox-php/page-contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 21:49:20 GMT -->
<!-- Added by HTTrack -->
<meta
  http-equiv="content-type"
  content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8" />
  <title>Smile Dove Travels | Contact Us</title>
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
    $page = "contact";
    include "partials/header.php"; ?>
    <!--End Main Header -->

    <!-- Start main-content -->
    <section
      class="page-title"
      style="background-image: url(images/background/page-title.jpg)">
      <div class="auto-container">
        <div class="title-outer">
          <h1 class="title">Contact Us</h1>
          <ul class="page-breadcrumb">
            <li><a href="index-2.html">Home</a></li>
            <li>Contact</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!--Contact Details Start-->
    <section class="contact-details">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-lg-6">
            <div class="sec-title">
              <span class="sub-title">Send us email</span>
              <h2>Feel free to write</h2>
            </div>
            <!-- Contact Form -->
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
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <input
                      name="form_subject"
                      class="form-control required"
                      type="text"
                      placeholder="Enter Subject" />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <input
                      name="form_phone"
                      class="form-control"
                      type="text"
                      placeholder="Enter Phone" />
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <textarea
                  name="form_message"
                  class="form-control required"
                  rows="7"
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
                  <span class="btn-title">Send message</span>
                </button>
                <button
                  type="reset"
                  class="theme-btn btn-style-one bg-theme-color5">
                  <span class="btn-title">Reset</span>
                </button>
              </div>
            </form>
            <!-- Contact Form Validation-->
          </div>
          <div class="col-xl-5 col-lg-6">
            <div class="contact-details__right">
              <div class="sec-title">
                <span class="sub-title">Need any help?</span>
                <h2>Get in touch with us</h2>
                <div class="text">
                  Lorem ipsum is simply free text available dolor sit amet
                  consectetur notted adipisicing elit sed do eiusmod tempor
                  incididunt simply dolore magna.
                </div>
              </div>
              <ul class="list-unstyled contact-details__info">
                <li>
                  <div class="icon">
                    <span class="lnr-icon-phone-plus"></span>
                  </div>
                  <div class="text">
                    <h6>Have any question?</h6>
                    <a href="tel:980089850"><span>Free</span> +92 (020)-9850</a>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <span class="lnr-icon-envelope1"></span>
                  </div>
                  <div class="text">
                    <h6>Write email</h6>
                    <a
                      href="https://html.kodesolution.com/cdn-cgi/l/email-protection#244a4141404c41485464474b4954454a5d0a474b49"><span
                        class="__cf_email__"
                        data-cfemail="610f04040509040d1121020e0c11000f184f020e0c">[email&#160;protected]</span></a>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <span class="lnr-icon-location"></span>
                  </div>
                  <div class="text">
                    <h6>Visit anytime</h6>
                    <span>66 broklyn golden street. New York</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Contact Details End-->

    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid p-0">
        <div class="row">
          <!-- Google Map HTML Codes -->
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.843149788316!2d144.9537131159042!3d-37.81714274201087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sbn!2sbd!4v1583760510840!5m2!1sbn!2sbd"
            data-tm-width="100%"
            height="500"
            frameborder="0"
            allowfullscreen=""></iframe>
        </div>
      </div>
    </section>
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