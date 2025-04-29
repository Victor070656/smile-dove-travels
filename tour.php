<?php
include_once "config/config.php";
include_once "config/function.php";
session_start();
$loggedIn = false;
if (!empty($_SESSION["sdtravels_user"])) {
  $loggedIn = true;
  $uid = $_SESSION["sdtravels_user"];
  $getUser = mysqli_query($conn, "SELECT * FROM users WHERE `userid` = '$uid'");
  if (mysqli_num_rows($getUser) > 0) {
    $user = mysqli_fetch_assoc($getUser);
  } else {
    $loggedIn = false;
  }
}

$getPilgrimPrice = mysqli_query($conn, "SELECT * FROM pilgrimage_prices");
if (mysqli_num_rows($getPilgrimPrice) > 0) {
  $pilgrimPrice = mysqli_fetch_assoc($getPilgrimPrice);
} else {
  $pilgrimPrice = [
    "nigeria" => 3200000,
    "diaspora" => 1450
  ];
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from html.kodesolution.com/2024/vizox-php/page-service-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 21:49:01 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8" />
  <title>Smile Dove Travels | Tours</title>
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
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
    <!-- <div class="preloader"></div> -->
    <!-- Main Header-->
    <?php
    $page = "pilgrimage";
    include "partials/header.php";
    ?>
    <!--End Main Header -->

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(images/travel/new/others/flight1.jpeg)">
      <div class="auto-container">
        <div class="title-outer">
          <h1 class="title">Tour </h1>
          <ul class="page-breadcrumb">
            <li><a href="./">Home</a></li>
            <li>Tour</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!--Start Services Details-->
    <section class="services-details">
      <div class="container">
        <div class="row">


          <!--Start Services Details Content-->
          <div class="col-12">
            <div class="services-details__content">

              <div class="row mt-4 align-items-center">
                <div class="col-md-5">
                  <img src="images/travel/new/others/flight2.jpeg" alt="" class="img-fluid"
                    style="border-radius: 10px;" />
                </div>
                <ul class="col-md-7">
                  <h2 class="mt-4">Explore Our Tour Packages</h2>
                  <p>
                    At Smile Dove Travels, we offer carefully curated tours that give you unforgettable experiences
                    across the globe. Whether you're seeking cultural adventures, relaxing beach holidays, or
                    breathtaking nature escapes, we have something perfect for you.
                  </p>
                  <h3>Why Book a Tour With Us?</h3>
                  <ul>
                    <li>▪️Tailor-Made Itineraries: Designed to match your interests, schedule, and budget.</li>
                    <li>▪️Experienced Tour Guides: Friendly professionals who know the best spots.</li>
                    <li>▪️Comfort & Safety First: Top-rated hotels, comfortable transport, and 24/7 support.</li>
                    <li>▪️Affordable Packages: Best value deals without compromising quality.</li>
                  </ul>
              </div>

            </div>

            <div class="row mt-40">

              <h3 class="">Tour Destinations</h3>
              <div class="table-responsive">
                <table class="table table-all table-striped">
                  <thead>
                    <tr>
                      <th>Destination</th>
                      <th>Visa</th>
                      <th>Duration</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $getTours = mysqli_query($conn, "SELECT * FROM `tour_countries`");
                    if (mysqli_num_rows($getTours) > 0) {
                      while ($tour = mysqli_fetch_assoc($getTours)) {
                        ?>
                        <tr>
                          <td><?= $tour["country"]; ?></td>
                          <td><?= $tour["visa"]; ?></td>
                          <td><?= $tour["duration"]; ?></td>
                        </tr>
                        <?php
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>


            <form method="post" enctype="multipart/form-data" class="mt-4">
              <h4 class="">Book Your Tour</h4>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your Full Name"
                      class="form-control shadow" accept=".pdf" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Your Email"
                      class="form-control shadow" accept=".pdf" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter Your Phone Number"
                      class="form-control shadow" accept=".pdf" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <label for="dest" class="form-label">Tour Destination</label>
                    <select name="dest" id="dest" required class="form-control form-select shadow">
                      <option value="" selected hidden>--- Select a Tour Destination ----</option>
                      <?php
                      $getGroups = mysqli_query($conn, "SELECT * FROM `tour_countries`");
                      if (mysqli_num_rows($getGroups) > 0) {
                        while ($group = mysqli_fetch_assoc($getGroups)) {
                          ?>
                          <option>
                            <?= $group["country"] . " - " . $group["visa"]; ?>
                          </option>
                          <?php
                        }
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <label for="depart" class="form-label">Departure Date</label>
                    <input type="date" name="depart" id="depart" class="form-control shadow" accept=".pdf" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <label for="duration" class="form-label">Duration</label>
                    <input type="text" name="duration" id="duration" placeholder="How many days are you staying..."
                      class="form-control shadow" accept=".pdf" required />
                  </div>
                </div>
                <div class="">
                  <button type="submit" class="btn btn-dark">Complete Registration</button>
                </div>
              </div>

              <?php
              if ($_POST) {
                if (!$loggedIn) {
                  echo "<script>alert('You need to be logged in'); location.href = 'user/login.php'</script>";
                } else {

                  $origin = $_POST['origin'];
                  $file = $_FILES['file'];
                  if ($origin == 'nigerian') {
                    $price = $pilgrimPrice['nigeria'];
                    $price_ngn = $price;
                  } else {
                    $price = $pilgrimPrice['diaspora'];

                    $res = getCurrencyExchange();
                    // var_dump($res);
                    $rate = $res["conversion_rate"] ?? 1500;
                    $rate = (int) $rate;

                    $price_ngn = $rate * $price;
                  }
                  $_POST["price"] = $price;

                  $email = $user['email'];


                  if ($file['type'] == 'application/pdf') {
                    $fileName = time() . "_" . basename($file['name']);
                    $upload_dir = "uploads/temp/"; // Store files temporarily
                    if (!is_dir($upload_dir)) {
                      mkdir($upload_dir, 0777, true);
                    }
                    $targetFilePath = $upload_dir . $fileName;

                    if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
                      // Save to database
                      $_POST["file"] = $targetFilePath;
                      $_SESSION["pilgrim"] = $_POST;

                      // Redirect to payment page
                      makePayment($email, $price_ngn, "http://localhost/sdtravels/pilgrim-callback.php");
                    } else {
                      echo "<div class='alert alert-danger'>Error uploading file. Please try again.</div>";
                    }
                  } else {
                    echo "<div class='alert alert-danger'>Invalid file type. Only PDF files are allowed.</div>";
                  }
                }
              }
              ?>
            </form>


            <div class="row mt-5">
              <div class="col-md-3">
                <img src="images/travel/new/others/p1.jpeg" alt="" class="w-100" style="border-radius: 10px;">
              </div>
              <div class="col-md-3">
                <img src="images/travel/new/others/p2.jpeg" alt="" class="w-100" style="border-radius: 10px;">
              </div>
              <div class="col-md-3">
                <img src="images/travel/new/others/p3.jpeg" alt="" class="w-100" style="border-radius: 10px;">
              </div>
              <div class="col-md-3">
                <img src="images/travel/new/others/p4.jpeg" alt="" class="w-100" style="border-radius: 10px;">
              </div>
            </div>
          </div>
        </div>
        <!--End Services Details Content-->
      </div>
  </div>
  </section>
  <!--End Services Details-->

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