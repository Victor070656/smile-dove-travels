<?php
include_once "config/config.php";
session_start();
$loggedIn = false;
if (!empty($_SESSION["sdtravels_user"])) {
  $loggedIn = true;
  $uid = $_SESSION["sdtravels_user"];
}

if (empty($_GET["id"])) {
  echo "<script>location.href = 'blog.php'</script>";
}
$id = $_GET["id"];

$getBlog = mysqli_query($conn, "SELECT * FROM `blogs` WHERE `blogid` = '$id'");
if (mysqli_num_rows($getBlog) == 0) {
  echo "<script>location.href = 'blog.php'</script>";
}

$blog = mysqli_fetch_assoc($getBlog);
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
  <title>Smile Dove Travels | Blog Details</title>
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
    <?php $page = "blog";
    include "partials/header.php"; ?>
    <!--End Main Header -->

    <!-- Start main-content -->
    <section
      class="page-title"
      style="background-image: url(images/background/page-title.jpg)">
      <div class="auto-container">
        <div class="title-outer">
          <h1 class="title">Blog Details</h1>
          <ul class="page-breadcrumb">
            <li><a href="./">Home</a></li>
            <li>Blog</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!--Blog Details Start-->
    <section class="blog-details">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="blog-details__left">
              <div class="blog-details__img">
                <img src="uploads/blog/<?= $blog['image']; ?>" class="w-100" alt="" />
                <div class="blog-details__date">
                  <span class="day"><?= date("d", strtotime($blog["created_at"])) ?></span>
                  <span class="month"><?= date("M", strtotime($blog["created_at"])) ?></span>
                </div>
              </div>
              <div class="blog-details__content">
                <ul class="list-unstyled blog-details__meta">
                  <li>
                    <a href="news-details.html"><i class="fas fa-clock"></i> <?= date("d M Y", strtotime($blog["created_at"])) ?></a>
                  </li>
                </ul>
                <h3 class="blog-details__title">
                  <?= $blog["title"]; ?>
                </h3>
                <p class="blog-details__text-2">
                  <?= $blog["content"]; ?>
                </p>
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