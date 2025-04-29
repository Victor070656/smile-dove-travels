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
  <title>Smile Dove Travels | Pilgrimage</title>
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
    <section class="page-title" style="background-image: url(images/travel/new/10.jpeg)">
      <div class="auto-container">
        <div class="title-outer">
          <h1 class="title">Pilgrimage </h1>
          <ul class="page-breadcrumb">
            <li><a href="./">Home</a></li>
            <li>Pilgrimage</li>
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
              <video src="images/travel/new/pilgrim_intro.mp4" style="width: 100%; border-radius: 10px;"
                controls></video>
              <div class="row mt-4 align-items-center">
                <div class="col-md-5">
                  <img src="images/travel/new/20b.jpeg" alt="" class="img-fluid" style="border-radius: 10px;" />
                </div>
                <div class="col-md-7">
                  <h2 class="mt-4">Pilgrimage Travel Packages</h2>
                  <h5>Experience life-changing journeys to sacred destinations around the world.</h5>
                  <p>
                    At Smile Dove Travels, we believe that a pilgrimage is more than just a journey — it’s a spiritual
                    experience that deepens your faith, renews your spirit, and connects you to divine history. Whether
                    you’re visiting biblical sites in Israel, sacred mountains in Jordan, or the Vatican in Rome, every
                    step of the journey is crafted to leave a lasting impact on your soul.

                    We are passionate about helping believers explore the holy lands in comfort, safety, and reverence.
                    From visa assistance to spiritual tour guides, we take care of every detail — so you can focus on
                    what truly matters: connecting with your faith and fellow travelers.
                  </p>
                </div>

              </div>

              <div class="row mt-40">
                <div class="col-md-7">
                  <h3>What Makes Our Pilgrimage Trips Unique?</h3>
                  <ul>
                    <li>▪️Spiritually enriching itineraries designed with pastors, church leaders, and faith-based
                      organizations.</li>
                    <li>▪️Daily devotionals and group prayers led by trained guides or spiritual leaders.</li>
                    <li>▪️Dedicated tour coordinators to handle logistics and support throughout your journey.</li>
                    <li>▪️Quiet time and reflection moments at sacred sites for a more personal encounter.</li>
                  </ul>
                  <div class="row">
                    <div class="col-md-6">
                      <h5 class="mt-3">Inclusions</h5>
                      <ul>
                        <li>▪️Complimentary Breakfast</li>
                        <li>▪️Local Guides/Maps</li>
                        <li>▪️Collision Coverage</li>
                        <li>▪️Transportation</li>
                        <li>▪️Deluxe Coach</li>
                        <li>▪️Guides / Assistance</li>
                        <li>▪️Live entertainment</li>
                        <li>▪️Dinner</li>
                        <li>▪️Cruise</li>
                        <li>▪️Professional tour escort</li>
                        <li>▪️Roundtrip Hotel Transfers</li>
                        <li>▪️Historic Area Nearby</li>
                        <li>▪️Service fee for tour guide</li>
                        <li>▪️Air Conditioning</li>
                        <li>▪️Internet Access</li>
                        <li>▪️Hotel pickup and drop off</li>
                        <li>▪️Lunch</li>
                        <li>▪️Wheelchair</li>
                        <li>▪️Security System</li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <h5 class="mt-3">Exclusions</h5>
                      <ul>
                        <li>▪️Extra stay pre/post tour</li>
                        <li>▪️Extra water bottle charges</li>
                        <li>▪️Medicines required if any</li>
                        <li>▪️Passport costs</li>
                        <li>▪️Tips to coach drivers</li>
                        <li>▪️Tips and Gratuities</li>
                        <li>▪️Any optional tours</li>
                        <li>▪️Any airport arrival/departure tax</li>
                        <li>▪️Alcoholic beverages</li>
                      </ul>
                    </div>
                  </div>


                </div>
                <div class="col-md-5">
                  <img src="images/travel/new/09.jpeg" alt="" class="img-fluid" style="border-radius: 10px;" />
                </div>
              </div>

              <div class="row mt-4">
                <h3 class="">Pilgrimage Application</h3>
                <p class="">
                  Ready to embark on a life-changing journey of faith? We’re excited to have you join one of our
                  upcoming pilgrimage trips to the Holy Land and other sacred destinations. Please review the
                  information below and complete your application to begin your journey.
                </p>
                <div class="table-responsive">
                  <table class="table table-all table-striped">
                    <thead>
                      <tr>
                        <th>Category</th>
                        <th>Cost</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Nigerian National</td>
                        <td>₦<?= number_format($pilgrimPrice['nigeria']) ?></td>
                      </tr>
                      <tr>
                        <td>Foreign National</td>
                        <td>$<?= number_format($pilgrimPrice['diaspora']) ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <h5 class="">Application Process</h5>
                <ol>
                  <li>
                    <b class="fw-bold">Download the Pilgrimage Application Form</b><br>
                    <span>Click the link below to download the form in PDF format.</span>
                  </li>
                  <li>
                    <b class="fw-bold">Fill Out the Form</b><br>
                    <span>Fill out all required information</span>
                  </li>
                  <li>
                    <b class="fw-bold">Submit the Form</b><br>
                    <span>submit the completed form in the provided field below</span>
                  </li>
                </ol>
              </div>

              <a href="General_Pilgrimage_Form.pdf" download=""
                class="mt-4 text-primary text-decoration-underline">Click here to download the Pilgrimage Registration
                form</a>

              <div class="py-3">
                <h5>Our Partner in Jerusalem</h5>
                <span class="me-2"><b class="fw-bold">Email: </b>info@aqabawaytourism.com</span>
                <span><b class="fw-bold">Website: </b>aqabawaytourism.com</span>
                <p class="mb-0">
                  <b class="fw-bold">Address: </b>
                  Jordan - Aqaba - Fourth commercial area - Ad Dar Albayda` Str. Khawla
                  Al-Rowad Bldg - 1st floor - Office #1
                </p>
                <span class="me-2"><b class="fw-bold">Whatsapp: </b>00962772621070</span>
                <span><b class="fw-bold">Tel: </b>00962777621070</span>
              </div>

              <form method="post" enctype="multipart/form-data" class="mt-4">
                <h3 class="">Submit Your Pilgrimage Form</h3>
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
                      <label for="group" class="form-label">Departure Group</label>
                      <select name="group" id="group" required class="form-control form-select shadow">
                        <option value="" selected hidden>--- Select a Departure Group ----</option>
                        <?php
                        $getGroups = mysqli_query($conn, "SELECT * FROM `pilgrim_dates`");
                        if (mysqli_num_rows($getGroups) > 0) {
                          while ($group = mysqli_fetch_assoc($getGroups)) {
                            ?>
                            <option><?= $group["location"] . " " . date("d M Y",strtotime($group["from"])) . " To " . date("d M Y",strtotime($group["to_"])); ?></option>
                            <?php
                          }
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <label for="origin" class="form-label">Ethnic Origin</label>
                      <select name="origin" id="origin" required class="form-control form-select shadow">
                        <option value="">--- Select an Origin ----</option>
                        <option value="nigerian">Nigerian National</option>
                        <option value="foreigner">Foreign National</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <label for="file" class="form-label">Registration Form (PDF)</label>
                      <input type="file" name="file" id="file" class="form-control shadow" accept=".pdf" required />
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