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
            <li><a href="./">Home</a></li>
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
              action="https://formsubmit.co/info@smiledovetravels.com"
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
                  Have an enquiry? reach out to us.
                </div>
              </div>
              <ul class="list-unstyled contact-details__info">
                <li>
                  <div class="icon">
                    <span class="lnr-icon-phone-plus"></span>
                  </div>
                  <div class="text">
                    <h6>Have any question?</h6>
                    <a href="tel:+2349069503394"><b>Secretary:</b> +234 906 9503 394</a><br>
                    <a href="tel:+2349023297280"><b>Manager:</b> +234 902 3297 280</a><br>
                    <a href="tel:+2348145450396"><b>MD:</b> +234 814 5450 396</a>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <span class="lnr-icon-envelope1"></span>
                  </div>
                  <div class="text">
                    <h6>Write email</h6>
                    <a
                      href="mailto:info@smiledovetravels.com"><span
                        class="">info@smiledovetravels.com</span></a>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <span class="lnr-icon-location"></span>
                  </div>
                  <div class="text">
                    <h6>Visit anytime</h6>
                    <span style="font-size: 15px !important;"><b>Location 1:</b><br> 4 animashaun st OPP teju hospital ajegbe ring road Ibadan, Oyo State.</span><br>
                    <span style="font-size: 15px !important;"><b>Location 2:</b><br> Properties plaza beside bank of industry first bank junction alagbaka Akure Ondo state</span><br>
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

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.0228649087003!2d3.872499073870538!3d7.35132861299248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10398d001d271eb3%3A0x81ed092bffc4ca30!2sSmile%20Dove%20Nigeria%20Limited!5e0!3m2!1sen!2sng!4v1744215177663!5m2!1sen!2sng"
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