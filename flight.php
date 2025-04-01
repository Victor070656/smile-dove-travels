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


if (isset($_GET["class"]) && isset($_GET["type"])) {
  $class = $_GET["class"];
  $type = $_GET["type"];
} else {
  echo "<script>location.href = 'booking.php'</script>";
}

$getClassInfo = mysqli_query($conn, "SELECT * FROM `flight_prices` WHERE `class` = '$class'");
$classInfo = mysqli_fetch_assoc($getClassInfo);

$price_usd = 0;

if ($type == "One-Way") {
  $price_usd = (int)$classInfo["one_way"];
} elseif ($type == "Round-Trip") {
  $price_usd = (int)$classInfo["round_trip"];
}

// var_dump($price_usd);

$res = getCurrencyExchange();
// var_dump($res);
$rate = $res["conversion_rate"] ?? 1500;
$rate = (int)$rate;

$price_ngn = $rate * $price_usd;
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
  <title>Smile Dove Travels | Bookings</title>
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
            <li><a href="index-2.html">Home</a></li>
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
                <h5 class="card-title">Flight Booking</h5>

                <form method="post">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="fullname" class="form-label fw-bold">Full Name</label>
                      <input type="text" id="fullname" name="fullname" required class="form-control">

                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="dob" class="form-label fw-bold">Date Of Birth</label>
                      <input type="date" id="dob" name="dob" required class="form-control">
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
                      <label for="depart_date" class="form-label fw-bold">Departure Date</label>
                      <input type="date" id="depart_date" required name="depart_date" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="depart_city" class="form-label fw-bold">Departure City</label>
                      <input type="text" id="depart_city" required name="depart_city" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="destin_city" class="form-label fw-bold">Destination City</label>
                      <input type="text" id="destin_city" required name="destin_city" class="form-control">
                      <input type="hidden" id="ticket_type" name="ticket_type" value="<?= $type; ?>" class="form-control">
                      <input type="hidden" id="airline_class" name="airline_class" value="<?= $class; ?>" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="destin_country" class="form-label fw-bold">Destination Country</label>
                      <input type="text" id="destin_country" required name="destin_country" class="form-control">

                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="depart_city" class="form-label fw-bold">Ticket Type</label>
                      <input type="text" id="" value="<?= $type; ?>" readonly class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="depart_city" class="form-label fw-bold">Airline Class</label>
                      <input type="text" id="" value="<?= $class . " Class"; ?>" readonly class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="" class="form-label fw-bold">Flight Ticket Price</label>
                      <input type="text" id="" value="<?= "$" . $price_usd . " (₦" . number_format($price_ngn) . ")"; ?>" readonly class="form-control">
                      <input type="hidden" id="price" name="price" value="<?= $price_usd; ?>" class="form-control">
                    </div>



                    <div class="">
                      <button type="submit" class="btn btn-dark">Book Flight</button>
                    </div>
                  </div>
                  <?php
                  if ($_POST) {
                    $_SESSION["flight"] = $_POST;
                    $email = $_POST["email"];

                    makePayment($email, $price_ngn, "http://localhost/sdtravels/callback.php");
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