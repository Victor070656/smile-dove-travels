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


if (isset($_GET["vid"])) {
  $id = $_GET["vid"];
} else {
  echo "<script>location.href = 'visa.php'</script>";
}

$getVisa = mysqli_query($conn, "SELECT * FROM `visa_prices` WHERE `id` = '$id'");
if (mysqli_num_rows($getVisa) === 0) {
  echo "<script>location.href = 'visa.php'</script>";
}
$visa = mysqli_fetch_assoc($getVisa);

$price_usd = $visa["price"];


// var_dump($price_usd);
// die();

$res = getCurrencyExchange();
// var_dump($res);
$rate = $res["conversion_rate"] ?? 1500;
$rate = (int) $rate;

$price_ngn = $rate * $price_usd;
// var_dump(__DIR__);
// makePayment("ikechukwuv052@gmail.com", 5000, "http://localhost/sdtravels/callback.php");
?>
<!DOCTYPE html>
<html lang="en">


<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>Smile Dove Travels | Visa Application</title>
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
    <div class="preloader"></div>
    <!-- Main Header-->
    <?php
    $page = "visa";
    include "partials/header.php"; ?>
    <!--End Main Header -->

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(images/background/page-title.jpg)">
      <div class="auto-container">
        <div class="title-outer">
          <h1 class="title">Visa Application</h1>
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
                <div class="mb-3">
                  <h5 class="card-title">Visa Application</h5>
                  <p class="">
                    A first deposit of <span class="fw-bold"> ₦<?= number_format($visa["deposit"]); ?></span> out of
                    <span class="fw-bold"> ₦<?= number_format($visa["price"]); ?></span> is to be
                    paid to Smile Dove Travels for <span class="fw-bold"><?= $visa["visa_type"] ?></span> Package, and
                    it is not refundable. Visa fee is not included in your charges fee. <br>
                    The more accurate information you give increases your chances for visa approval.
                  </p>
                </div>


                <form method="post" enctype="multipart/form-data">
                  <div class="row">
                    <!-- Personal Information -->
                    <div class="col-md-6 mb-3">
                      <label for="fullname" class="form-label fw-bold">Full Name <span
                          class="text-danger">*</span></label>
                      <input type="text" id="fullname" name="fullname" required class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="dob" class="form-label fw-bold">Date Of Birth <span
                          class="text-danger">*</span></label>
                      <input type="date" id="dob" name="dob" required class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="email" class="form-label fw-bold">Email <span class="text-danger">*</span></label>
                      <input type="email" id="email" name="email" required class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="phone" class="form-label fw-bold">Phone Number <span
                          class="text-danger">*</span></label>
                      <input type="tel" id="phone" name="phone" required placeholder="+234 xxxxxxxxx"
                        class="form-control">
                    </div>

                    <!-- Identity Details -->
                    <div class="col-md-6 mb-3">
                      <label for="gender" class="form-label fw-bold">Gender</label>
                      <select name="gender" id="gender" class="form-control form-select">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="pob" class="form-label fw-bold">State Of Origin <span
                          class="text-danger">*</span></label>
                      <input type="text" id="pob" name="pob" required class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="nationality" class="form-label fw-bold">Nationality <span
                          class="text-danger">*</span></label>
                      <input type="text" id="nationality" name="nationality" required class="form-control">
                    </div>

                    <!-- Passport Details -->
                    <div class="col-md-6 mb-3">
                      <label for="passport_num" class="form-label fw-bold">Passport Number <span
                          class="text-danger">*</span></label>
                      <input type="text" id="passport_num" name="passport_num" required class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="passport_issue" class="form-label fw-bold">Passport Issued Date </label>
                      <input type="date" id="passport_issue" name="passport_issue" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="passport_exp" class="form-label fw-bold">Passport Expiry Date</label>
                      <input type="date" id="passport_exp" name="passport_exp" class="form-control">
                    </div>

                    <!-- Travel Information -->
                    <div class="col-md-6 mb-3">
                      <label for="destin_country" class="form-label fw-bold">Destination Country <span
                          class="text-danger">*</span></label>
                      <input type="text" id="destin_country" name="destin_country" required class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="visa_type" class="form-label fw-bold">Visa Type</label>

                      <input type="text" id="visa_type" name="visa_type" required readonly
                        value="<?= $visa['visa_type']; ?>" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="entry_date" class="form-label fw-bold">Arrival Date <span
                          class="text-danger">*</span></label>
                      <input type="date" id="entry_date" name="entry_date" required class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="exit_date" class="form-label fw-bold">Departure Date <span
                          class="text-danger">*</span></label>
                      <input type="date" id="exit_date" name="exit_date" required class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="purpose_visit" class="form-label fw-bold">Purpose of Visit <span
                          class="text-danger">*</span></label>
                      <input type="text" id="purpose_visit" name="purpose_visit" required class="form-control">
                    </div>

                    <!-- Employment/Education Details -->
                    <div class="col-md-6 mb-3">
                      <label for="occupation" class="form-label fw-bold">Employment Status <span
                          class="text-danger">*</span></label>
                      <select name="occupation" id="occupation" required class="form-control form-select">
                        <option value="" selected hidden> -- Select an Employment status -- </option>

                        <option>Student</option>
                        <option>Self-Employed</option>
                        <option>Employed</option>
                        <option>Unemployed</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="employer" class="form-label fw-bold">Employer/Institution Name</label>
                      <input type="text" id="employer" name="employer" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="employer_address" class="form-label fw-bold">Employer/Institution Address</label>
                      <input type="text" id="employer_address" name="employer_address" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="income" class="form-label fw-bold">Monthly Income ($)</label>
                      <input type="text" id="income" name="income" class="form-control">
                    </div>

                    <!-- Accommodation & Contact in Destination Country -->
                    <div class="col-md-6 mb-3">
                      <label for="host_name" class="form-label fw-bold">Host/Hotel Name <span
                          class="text-danger">*</span></label>
                      <input type="text" id="host_name" name="host_name" required class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="host_address" class="form-label fw-bold">Host/Hotel Address <span
                          class="text-danger">*</span></label>
                      <input type="text" id="host_address" name="host_address" required class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="host_relationship" class="form-label fw-bold">Host Relationship</label>
                      <input type="text" id="host_relationship" name="host_relationship" class="form-control">
                    </div>

                    <!-- Sponsor -->
                    <div class="col-md-6 mb-3">
                      <label for="sponsor_name" class="form-label fw-bold">Sponsor Name</label>
                      <input type="text" id="sponsor_name" name="sponsor_name" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="sponsor_relationship" class="form-label fw-bold">Sponsor Relationship</label>
                      <input type="text" id="sponsor_relationship" name="sponsor_relationship" class="form-control">
                    </div>

                    <!-- File Uploads -->
                    <div class="col-md-6 mb-3">
                      <label for="passport_scan" class="form-label fw-bold">Upload Passport Scan</label>
                      <input type="file" id="passport_scan" name="passport_scan" class="form-control"
                        accept="image/*,application/pdf">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="certificates" class="form-label fw-bold">All Your Academic Certificates
                        <small>(O'level, BSC/HND/ND, SOP, CV, etc - <span class="text-danger">For Student Visa</span>
                          )</small></label>
                      <input type="file" id="certificates" name="certificates[]" multiple class="form-control"
                        accept="image/*,application/pdf">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="bank_statement" class="form-label fw-bold">Upload Bank Statement</label>
                      <input type="file" id="bank_statement" name="bank_statement" class="form-control"
                        accept="image/*,application/pdf">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="sponsor_letter" class="form-label fw-bold">Upload Sponsor Letter</label>
                      <input type="file" id="sponsor_letter" name="sponsor_letter" class="form-control"
                        accept="image/*,application/pdf">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="medical_certificate" class="form-label fw-bold">Upload Medical Certificate</label>
                      <input type="file" id="medical_certificate" name="medical_certificate" class="form-control"
                        accept="image/*,application/pdf">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="police_clearance" class="form-label fw-bold">Upload Police Clearance</label>
                      <input type="file" id="police_clearance" name="police_clearance" class="form-control"
                        accept="image/*,application/pdf">
                    </div>

                    <!-- Visa Processing Fee -->
                    <input type="hidden" id="visa_fee" name="visa_fee" value="<?= $visa['deposit']; ?>">


                    <div class="text-center mt-3">
                      <button type="submit" class="btn btn-dark">Apply for Visa</button>
                    </div>
                  </div>
                </form>

                <?php
                if ($_POST) {
                  $_SESSION['visa_application'] = $_POST;
                  $email = $_POST["email"];

                  // Handle file uploads (store temp file paths in session)
                  $upload_dir = "uploads/temp/"; // Store files temporarily
                  if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0777, true);
                  }

                  $uploaded_files = [];

                  // Process uploaded files
                  $file_fields = ['passport_scan', 'bank_statement', 'sponsor_letter', 'medical_certificate', 'police_clearance'];
                  foreach ($file_fields as $field) {
                    if (isset($_FILES[$field]) && $_FILES[$field]['error'] === 0) {
                      $filename = time() . "_" . basename($_FILES[$field]["name"]);
                      $target_path = $upload_dir . $filename;

                      if (move_uploaded_file($_FILES[$field]["tmp_name"], $target_path)) {
                        $uploaded_files[$field] = $target_path; // Save path in session
                      }
                    }
                  }

                  $certificates = [];
                  if (!empty($_FILES['certificates']['name'][0])) {
                    foreach ($_FILES['certificates']['name'] as $key => $name) {
                      $target_file = $upload_dir . basename($name);
                      if (move_uploaded_file($_FILES['certificates']['tmp_name'][$key], $target_file)) {
                        $certificates[] = $target_file;
                      }
                    }
                  }

                  // Store uploaded file paths in session
                  $_SESSION['visa_application']['files'] = $uploaded_files;
                  $_SESSION['visa_application']['certificates'] = $certificates;

                  makePayment($email, $visa['deposit'], "http://localhost/sdtravels/visa-callback.php");
                }

                ?>

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