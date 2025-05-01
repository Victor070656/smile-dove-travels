<?php
include_once "config/config.php";
include_once "config/function.php";
session_start();

$loggedIn = false;
if (!empty($_SESSION["sdtravels_user"])) {
  $loggedIn = true;
  $uid = $_SESSION["sdtravels_user"];
} else {
  echo "<script>alert('You need to be logged in'); location.href = 'user/login.php'</script>";
}


if (isset($_GET["rid"])) {
  $rid = $_GET["rid"];
} else {
  echo "<script>location.href = 'booking.php'</script>";
}

$getRoom = mysqli_query($conn, "SELECT * FROM `hotel_rooms` WHERE `roomid` = '$rid'");
if (mysqli_num_rows($getRoom) == 0) {
  echo "<script>location.href = 'booking.php'</script>";
}
$room = mysqli_fetch_assoc($getRoom);
if (!(bool)$room["available"]) {
  echo "<script>location.href = 'booking.php'; alert('Room already booked')</script>";
}

$price_usd = $room["price"];

$max_guest = $room["max_guest"];


// var_dump($price_usd);

// $res = getCurrencyExchange();
// // var_dump($res);
// $rate = $res["conversion_rate"] ?? 1500;
// $rate = (int)$rate;

// $price_ngn = $rate * $price_usd;
// var_dump(__DIR__);
// makePayment("ikechukwuv052@gmail.com", 5000, "http://localhost/sdtravels/callback.php");
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from html.kodesolution.com/2024/vizox-php/page-course.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 21:49:00 GMT -->
<!-- Added by HTTrack -->
<meta
  http-equiv="content-type"
  content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8" />
  <title>Smile Dove Travels | Book Room</title>
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
    $page = "booking";
    include "partials/header.php"; ?>
    <!--End Main Header -->

    <!-- Start main-content -->
    <section
      class="page-title"
      style="background-image: url(images/background/page-title.jpg)">
      <div class="auto-container">
        <div class="title-outer">
          <h1 class="title">Flight Booking</h1>
          <ul class="page-breadcrumb">
            <li><a href="./">Home</a></li>
            <li>Booking</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!-- Courses Section -->
    <section class="">
      <div class="container pb-100">
        <div class="row">
          <!-- flight -->
          <div class="col-12 mb-5">
            <div class="card " style="border-radius: 15px;">
              <div class="card-body">
                <h5 class="card-title">Hotel Reservation</h5>

                <form method="post">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="fullname" class="form-label fw-bold">Full Name</label>
                      <input type="text" id="fullname" name="fullname" required class="form-control">
                      <input type="hidden" id="hotelid" name="hotelid" value="<?= $room['hotelid']; ?>" class="form-control">
                      <input type="hidden" id="roomid" name="roomid" value="<?= $room['roomid']; ?>" class="form-control">
                      <input type="hidden" id="price_per_night" name="price_per_night" value="<?= $price_usd; ?>" class="form-control">

                    </div>


                    <div class="col-md-6 mb-3">
                      <label for="email" class="form-label fw-bold">Email</label>
                      <input type="email" id="email" required name="email" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="phone" class="form-label fw-bold">Phone Number</label>
                      <input type="tel" id="phone" name="phone" required placeholder="+234 xxxxxxxxx" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="gender" class="form-label fw-bold">Gender</label>
                      <select name="gender" id="gender" class="form-control form-select">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="nationality" class="form-label fw-bold">Nationality</label>
                      <input type="text" id="nationality" required name="nationality" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="idtype" class="form-label fw-bold">ID Type</label>
                      <select name="idtype" id="idtype" class="form-control form-select">
                        <option value="International Passport">International Passport</option>
                        <option value="National ID Card">National ID Card</option>
                        <option value="NIN">NIN</option>
                      </select>
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="idnum" class="form-label fw-bold">ID Number</label>
                      <input type="text" id="idnum" required name="idnum" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="idexp" class="form-label fw-bold">ID Expiry</label>
                      <input type="text" id="idexp" name="idexp" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="checkin" class="form-label fw-bold">Checkin Date</label>
                      <input type="date" id="checkin" required name="checkin" class="form-control">
                      <div class="invalid-feedback">Check-in date cannot be in the past</div>
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="checkout" class="form-label fw-bold">Checkout Date</label>
                      <input type="date" id="checkout" required name="checkout" class="form-control">
                      <div class="invalid-feedback">Check-out must be after check-in date</div>
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="duration" class="form-label fw-bold">Duration</label>
                      <input type="text" id="duration" readonly required name="duration" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="guest" class="form-label fw-bold">Number of guests</label>
                      <input type="number" min="0" max="<?= $max_guest; ?>" value="0" id="guest" required name="guest" class="form-control" oninput="this.value = this.value > <?= $max_guest; ?> ? <?= $max_guest; ?> : Math.abs(this.value)">
                    </div>


                    <div class="col-12 mb-3">
                      <label for="amount" class="form-label fw-bold">Room Price ($)</label>
                      <input type="text" id="amount" name="amount" readonly class="form-control">
                    </div>



                    <div class="">
                      <button type="submit" class="btn btn-dark">Book Room</button>
                    </div>
                  </div>

                  <?php
                  unset($_SESSION["flight"]);
                  if ($_POST) {
                    $_SESSION["hotel"] = $_POST;
                    $email = $_POST["email"];
                    $amount_usd = $_POST["amount"];

                    $res = getCurrencyExchange();
                    // var_dump($res);
                    $rate = $res["conversion_rate"] ?? 1500;
                    $rate = (int)$rate;

                    $amount_ngn = $rate * $amount_usd;

                    makePayment($email, $amount_ngn, "http://localhost/sdtravels/hotel-callback.php");
                  }
                  ?>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End Courses Section-->
    <!-- Main Footer -->
    <?php include "partials/footer.php"; ?>
    <!--End Main Footer -->
  </div>
  <!-- End Page Wrapper -->

  <!-- Scroll To Top -->
  <div class="scroll-to-top scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
  </div>


  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const checkinInput = document.getElementById('checkin');
      const checkoutInput = document.getElementById('checkout');
      const today = new Date().toISOString().split('T')[0];

      // Set initial minimum dates
      checkinInput.min = today;

      // Validate check-in when changed
      checkinInput.addEventListener('change', function() {
        const isValid = new Date(this.value) >= new Date(today);
        this.classList.toggle('is-invalid', !isValid);

        // If check-in is valid, update checkout min date
        if (isValid) {
          const nextDay = new Date(this.value);
          nextDay.setDate(nextDay.getDate() + 1);
          checkoutInput.min = nextDay.toISOString().split('T')[0];

          // Re-validate checkout if it exists
          if (checkoutInput.value) {
            validateCheckout();
          }
        }
      });

      // Validate checkout when changed
      checkoutInput.addEventListener('change', validateCheckout);

      function validateCheckout() {
        if (!checkinInput.value) return;

        const isValid = new Date(checkoutInput.value) > new Date(checkinInput.value);
        checkoutInput.classList.toggle('is-invalid', !isValid);
      }
    });
  </script>
  <script>
    let checkIn = document.getElementById("checkin");
    let checkOut = document.getElementById("checkout");
    let pricePerNight = document.getElementById("price_per_night").value;
    let amount = document.getElementById("amount");

    function getDateDifferenceInDays(date1, date2) {
      // Convert both dates to milliseconds
      const date1_ms = date1.getTime();
      const date2_ms = date2.getTime();

      // Calculate the difference in milliseconds
      const difference_ms = Math.abs(date2_ms - date1_ms);

      // Convert back to days
      return Math.floor(difference_ms / (1000 * 60 * 60 * 24));
    }


    checkOut.addEventListener("change", () => {
      let date1 = new Date(checkIn.value);
      let date2 = new Date(checkOut.value);
      const daysDifference = getDateDifferenceInDays(date1, date2);
      // console.log(daysDifference);
      document.getElementById("duration").value = daysDifference;

      let newAmount = pricePerNight * daysDifference;
      amount.value = newAmount;
    })
  </script>


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