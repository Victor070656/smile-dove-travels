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
  <title>Smile Dove Travels | IELTS</title>
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
              <img src="images/travel/09.jpg" class="w-100" style="border-radius: 10px;" alt="" />
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
                    With our comprehensive study materials, timed mock tests, and expert feedback, you'll feel confident on exam day.
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
                        <h5 class="title">Apply for IELTS with Ease</h5>
                        <div class="text">
                          We assist in seamless registration for your IELTS exam, guiding you through the booking process step-by-step.
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
                        <h5 class="title">Expert IELTS Coaching</h5>
                        <div class="text">
                          Our structured coaching covers test-taking strategies, time management, and practice exercises designed to maximise your band score.
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Feature Block -->
                  <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                      <div class="icon-box">
                        <span class="count">03</span>
                        <i class="icon flaticon-visa-4"></i>
                      </div>
                      <div class="content-box">
                        <h5 class="title">Mock Tests & Personalized Feedbacks</h5>
                        <div class="text">
                          Take realistic practice exams and receive detailed feedbacks to pinpoint areas of improvements.
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Feature Block -->
                  <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box">
                      <div class="icon-box">
                        <span class="count">04</span>
                        <i class="icon flaticon-visa-4"></i>
                      </div>
                      <div class="content-box">
                        <h5 class="title">Grammer & Vocabulary Enhancement</h5>
                        <div class="text">
                          Boost your grammer, vocabulary and fluency for both speaking and writing tasks.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center my-4">
                <a href="https://affiliates-britishcouncil.org/?a=113&c=488&p=r&s1=&s3=web" target="_blank" class="theme-btn btn-style-one fw-bold">Register For IELTS</a>
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

  <!-- Start of Glassix WhatsApp Widget -->
  <script>
    var glassixWidgetOptions = {
      "numbers": [
        {
          "number": "09069503394",
          "name": "Customer Support",
          "subtitle": "Contact us 24/7"
        }
      ],
      "left": false,
      "ltr": true,
      "popupText": "Need help?\nChat with us on WhatsApp",
      "title": "Hi There 👋", "subTitle": "Click to start a conversation"
    };
    !function (t) {
      var e = function () {
        window.requirejs && !window.whatsAppWidgetClient && (requirejs.config({ paths: { GlassixWhatsAppWidgetClient: "https://cdn.glassix.com/clients/whatsapp.widget.1.2.min.js" } }),
          require(["GlassixWhatsAppWidgetClient"], function (t) { window.whatsAppWidgetClient = new t(window.glassixWidgetOptions), whatsAppWidgetClient.attach() })),
          window.GlassixWhatsAppWidgetClient && "function" == typeof window.GlassixWhatsAppWidgetClient ? (window.whatsAppWidgetClient = new GlassixWhatsAppWidgetClient(t), whatsAppWidgetClient.attach()) : i()
      }, i = function () {
        a.onload = e, a.src = "https://cdn.glassix.net/clients/whatsapp.widget.1.2.min.js", s && s.parentElement && s.parentElement.removeChild(s), n.parentNode.insertBefore(a, n)
      }, n = document.getElementsByTagName("script")[0], s = document.createElement("script"); s.async = !0, s.type = "text/javascript", s.crossorigin = "anonymous", s.id = "glassix-whatsapp-widget-script"; var a = s.cloneNode();
      s.onload = e, s.src = "https://cdn.glassix.com/clients/whatsapp.widget.1.2.min.js", !document.getElementById(s.id) && document.body && (n.parentNode.insertBefore(s, n), s.onerror = i)
    }(glassixWidgetOptions);
  </script>
  <!-- End of Glassix WhatsApp Widget -->

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