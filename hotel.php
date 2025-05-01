<?php
include_once "config/config.php";
session_start();
$loggedIn = false;
if (!empty($_SESSION["sdtravels_user"])) {
  $loggedIn = true;
  $uid = $_SESSION["sdtravels_user"];
}

if (empty($_GET["hid"])) {
  echo "<script>location.href = 'booking.php'</script>";
}
$hid = $_GET["hid"];
$getHotel = mysqli_query($conn, "SELECT * FROM `hotels` WHERE `hotelid` = '$hid'");
if (mysqli_num_rows($getHotel) == 0) {
  echo "<script>location.href = 'booking.php'</script>";
}
$hotel = mysqli_fetch_assoc($getHotel);

?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from html.kodesolution.com/2024/vizox-php/page-country-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 21:48:57 GMT -->
<!-- Added by HTTrack -->
<meta
  http-equiv="content-type"
  content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8" />
  <title>Smile Dove Travels | Country Details</title>
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
          <h1 class="title">Hotel</h1>
          <ul class="page-breadcrumb">
            <li><a href="./">Home</a></li>
            <li>Hotel</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!--Countries Details Start-->
    <section class="country-details">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="country-details__img">
              <img src="uploads/<?= $hotel["image"] ?>" alt="" />
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="country-content">
              <h3><?= $hotel["name"] ?></h3>
              <p style="text-align: justify;">
                <?= $hotel["description"] ?>
              </p>
              <ul class="country-details-list">
                <li>
                  <span>Country</span>
                  <span><?= $hotel["country"] ?></span>
                </li>
                <li>
                  <span>City</span>
                  <span><?= $hotel["city"] ?></span>
                </li>
                <li>
                  <span>Address</span>
                  <span><?= $hotel["address"] ?></span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Countries Details End-->

    <!-- Countries Section Three -->
    <section class="countries-section-three">
      <div class="anim-icons">
        <span class="icon icon-object-1"></span>
      </div>
      <div class="outer-box">
        <div class="auto-container">
          <div class="sec-title text-center">
            <!-- <span class="sub-title">Countries we offer</span> -->
            <h2>Our Rooms</h2>
          </div>

          <!--  Countries Carousel -->
          <div class="row">

            <?php
            $getRooms = mysqli_query($conn, "SELECT * FROM `hotel_rooms` WHERE `hotelid` = '$hid'");
            if (mysqli_num_rows($getRooms) > 0) {
              while ($room = mysqli_fetch_assoc($getRooms)) {
            ?>
                <!-- Country Block Three-->
                <div class="country-block-three col-lg-4 col-md-6 col-sm-12">
                  <div class="card" style="border-radius: 10px;">
                    <div class="card-body p-3">
                      <h4 class="mb-1"><?= $room["name"]; ?></h4>
                      <small>Room Size: <b class="fw-bold"><?= $room["roomtype"]; ?></b></small>
                      <?php
                      if ((bool)$room["available"]) {
                      ?>
                        <small class="badge bg-primary">
                          Available
                        </small>
                      <?php
                      } else {
                      ?>
                        <small class="badge bg-warning">
                          Booked
                        </small>
                      <?php
                      }
                      ?>
                      <div class="text-primary d-flex gap-3 align-items-center fw-semibold mb-3">
                        <small>Max guest: <b class="fw-bold"><?= $room["max_guest"]; ?></b></small>
                        <small>Per night: <b class="fw-bold">$<?= $room["price"]; ?></b></small>
                      </div>
                      <a href="book-room.php?rid=<?= $room["roomid"]; ?>" class="btn btn-sm btn-dark fw-bold text-center w-100">Book Room</a>
                    </div>
                  </div>
                </div>
              <?php
              }
            } else {
              ?>
            <?php
            }
            ?>

          </div>
        </div>
      </div>
    </section>
    <!--End Countries Section -->
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