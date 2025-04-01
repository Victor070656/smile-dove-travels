<?php
include "../config/config.php";
session_start();
if (!isset($_SESSION['sdtravels_manager'])) {
     echo "<script>alert('Please Login First'); location.href = 'login.php'</script>";
}

if (empty($_GET["id"])) {
     echo "<script>location.href = 'visa-applications.php';</script>";
}
$id = $_GET["id"];

$sql = "SELECT a.*,
     t.destination_country, t.visa_type, t.purpose, t.entry_date, t.exit_date,
     e.certificate_files,
     em.employment_status, em.employer_name, em.monthly_income, em.bank_statement,
     h.medical_certificate, h.police_clearance,
     p.passport_number, p.issue_date, p.expiry_date, p.passport_scan,
     s.sponsor_name, s.sponsor_relationship, s.sponsor_letter
      FROM `applicants` as a
      LEFT JOIN `travel_details` as t
      ON a.id = t.applicant_id
      LEFT JOIN `education` as e
      ON a.id = e.applicant_id
      LEFT JOIN `employment` as em
      ON a.id = em.applicant_id
      LEFT JOIN `health_security` as h
      ON a.id = h.applicant_id
      LEFT JOIN `passports` as p
      ON a.id = p.applicant_id
      LEFT JOIN `sponsorships` as s
      ON a.id = s.applicant_id
       WHERE a.id = '$id'";

$getVisa = mysqli_query(
     $conn,
     $sql
);
if (mysqli_num_rows($getVisa) == 0) {
     echo "<script>location.href = 'visa-applications.php';</script>";
}
$visa = mysqli_fetch_assoc($getVisa);
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from stackbros.in/Smile Dove Travels/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Mar 2025 10:05:24 GMT -->

<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Smile Dove Admin || Flight</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="Smile Dove Travels: An advanced, fully responsive admin dashboard template packed with features to streamline your analytics and management needs." />
     <meta name="author" content="StackBros" />
     <meta name="keywords" content="Smile Dove Travels, admin dashboard, responsive template, analytics, modern UI, management tools" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="robots" content="index, follow" />
     <meta name="theme-color" content="#ffffff">

     <!-- App favicon -->
     <link rel="shortcut icon" href="assets/images/favicon.ico">

     <!-- Google Font Family link -->
     <link rel="preconnect" href="https://fonts.googleapis.com/index.html">
     <link rel="preconnect" href="https://fonts.gstatic.com/index.html" crossorigin>
     <link href="https://fonts.googleapis.com/css2c4ad.css?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">

     <!-- Vendor css -->
     <link href="assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

     <!-- Icons css -->
     <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

     <!-- App css -->
     <link href="assets/css/style.min.css" rel="stylesheet" type="text/css" />

     <!-- Theme Config js -->
     <script src="assets/js/config.js"></script>
     <link rel="stylesheet" href="assets/css/datatables.min.css">
</head>

<body>

     <!-- START Wrapper -->
     <div class="app-wrapper">

          <!-- Topbar Start -->
          <?php
          include "partials/header.php";
          ?>
          <!-- Topbar End -->

          <!-- App Menu Start -->
          <?php
          include "partials/sidebar.php";
          ?>
          <!-- App Menu End -->

          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container-fluid">

                    <!-- ========== Page Title Start ========== -->
                    <div class="row">
                         <div class="col-12">
                              <div class="page-title-box">
                                   <h4 class="mb-0">Visa</h4>
                                   <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Smile dove</a></li>
                                        <li class="breadcrumb-item active">Visa</li>
                                   </ol>
                              </div>
                         </div>
                    </div>
                    <!-- ========== Page Title End ========== -->


                    <div class="card rounded-4 py-4 px-3">
                         <h3 class="fw-bold mb-3"><b>Visa Application</b></h3>
                         <!-- Personal Info -->
                         <div class="row">
                              <div class="my-3">
                                   <h4 class="fw-bold"><b>Personal Information</b></h4>
                                   <hr>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Full Name</b></h5>
                                        <span class=""><?= $visa["full_name"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Email</b></h5>
                                        <span class=""><?= $visa["email"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Phone Number</b></h5>
                                        <span class=""><?= $visa["phone"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Gender</b></h5>
                                        <span class=""><?= $visa["gender"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Date Of Birth</b></h5>
                                        <span class=""><?= $visa["dob"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Place Of Birth</b></h5>
                                        <span class=""><?= $visa["place_of_birth"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Nationality</b></h5>
                                        <span class=""><?= $visa["nationality"] ?></span>
                                   </div>
                              </div>

                         </div>
                         <!-- Travel Info -->
                         <div class="row">
                              <div class="my-3">
                                   <h4 class="fw-bold"><b>Travel Information</b></h4>
                                   <hr>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Destination Country</b></h5>
                                        <span class=""><?= $visa["destination_country"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Visa Type</b></h5>
                                        <span class=""><?= $visa["visa_type"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Purpose</b></h5>
                                        <span class=""><?= $visa["purpose"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Entry Date</b></h5>
                                        <span class=""><?= date("d-m-Y", strtotime($visa["entry_date"])) ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Exit Date</b></h5>
                                        <span class=""><?= date("d-m-Y", strtotime($visa["exit_date"])) ?></span>
                                   </div>
                              </div>

                         </div>
                         <!-- Education Info -->
                         <div class="row">
                              <div class="my-3">
                                   <h4 class="fw-bold"><b>Academic Certificates</b></h4>
                                   <hr>
                              </div>
                              <?php
                              if (!empty($visa["certificate_files"])) {
                                   $certs = json_decode($visa["certificate_files"], true);
                                   if (count($certs) > 0) {
                                        foreach ($certs as $cert):
                              ?>
                                             <div class="col-md-4 mb-3">
                                                  <div class=" p-3 rounded-4 shadow-sm">
                                                       <h5 class=""><?= basename($cert) ?></h5>
                                                       <a href="../<?= $cert ?>" class="btn btn-sm btn-primary">View</a>
                                                       <a href="../<?= $cert ?>" download="" class="btn btn-sm btn-success">Download</a>
                                                  </div>
                                             </div>
                                        <?php
                                        endforeach;
                                   } else {
                                        ?>
                                        <p class="text-center">No certificates available</p>
                                   <?php
                                   }
                              } else {
                                   ?>
                                   <p class="text-center">No certificates available</p>
                              <?php
                              }
                              ?>

                         </div>
                         <!-- Employment Info -->
                         <div class="row">
                              <div class="my-3">
                                   <h4 class="fw-bold"><b>Employment Information</b></h4>
                                   <hr>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Employment Status</b></h5>
                                        <span class=""><?= $visa["employment_status"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Employer Name</b></h5>
                                        <span class=""><?= $visa["employer_name"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Monthly Income ($)</b></h5>
                                        <span class=""><?= $visa["monthly_income"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Bank Statement</b></h5>
                                        <?php if (!empty($visa["bank_statement"])): ?>
                                             <div class=" p-3 rounded-4 shadow-sm">
                                                  <h5 class=""><?= basename($visa["bank_statement"]) ?></h5>
                                                  <a href="../<?= $visa['bank_statement'] ?>" class="btn btn-sm btn-primary">View</a>
                                                  <a href="../<?= $visa['bank_statement'] ?>" download="" class="btn btn-sm btn-success">Download</a>
                                             </div>
                                        <?php else: ?>
                                             <p class="">No bank statement uploaded</p>
                                        <?php endif; ?>
                                   </div>
                              </div>

                         </div>
                         <!-- Health & Security Info -->
                         <div class="row">
                              <div class="my-3">
                                   <h4 class="fw-bold"><b>Health & Security Information</b></h4>
                                   <hr>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Medical Certificate</b></h5>
                                        <?php if (!empty($visa["medical_certificate"])): ?>
                                             <div class=" p-3 rounded-4 shadow-sm">
                                                  <h5 class=""><?= basename($visa["medical_certificate"]) ?></h5>
                                                  <a href="../<?= $visa['medical_certificate'] ?>" class="btn btn-sm btn-primary">View</a>
                                                  <a href="../<?= $visa['medical_certificate'] ?>" download="" class="btn btn-sm btn-success">Download</a>
                                             </div>
                                        <?php else: ?>
                                             <p class="">No medical certificate uploaded</p>
                                        <?php endif; ?>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Police Clearance</b></h5>
                                        <?php if (!empty($visa["police_clearance"])): ?>
                                             <div class=" p-3 rounded-4 shadow-sm">
                                                  <h5 class=""><?= basename($visa["police_clearance"]) ?></h5>
                                                  <a href="../<?= $visa['police_clearance'] ?>" class="btn btn-sm btn-primary">View</a>
                                                  <a href="../<?= $visa['police_clearance'] ?>" download="" class="btn btn-sm btn-success">Download</a>
                                             </div>
                                        <?php else: ?>
                                             <p class="">No police clearance uploaded</p>
                                        <?php endif; ?>
                                   </div>
                              </div>

                         </div>
                         <!-- Passport Info -->
                         <div class="row">
                              <div class="my-3">
                                   <h4 class="fw-bold"><b>Health & Security Information</b></h4>
                                   <hr>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Passport Number</b></h5>
                                        <span class=""><?= $visa["passport_number"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Issued Date</b></h5>
                                        <span class=""><?= date("d-m-Y", strtotime($visa["issue_date"])) ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Expiry Date</b></h5>
                                        <span class=""><?= date("d-m-Y", strtotime($visa["expiry_date"])) ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Passport Scan</b></h5>
                                        <?php if (!empty($visa["passport_scan"])): ?>
                                             <div class=" p-3 rounded-4 shadow-sm">
                                                  <h5 class=""><?= basename($visa["passport_scan"]) ?></h5>
                                                  <a href="../<?= $visa['passport_scan'] ?>" class="btn btn-sm btn-primary">View</a>
                                                  <a href="../<?= $visa['passport_scan'] ?>" download="" class="btn btn-sm btn-success">Download</a>
                                             </div>
                                        <?php else: ?>
                                             <p class="">No passport scan uploaded</p>
                                        <?php endif; ?>
                                   </div>
                              </div>

                         </div>
                         <!-- Sponsorship Info -->
                         <div class="row">
                              <div class="my-3">
                                   <h4 class="fw-bold"><b>Sponsorship Information</b></h4>
                                   <hr>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Sponsor Name</b></h5>
                                        <span class=""><?= $visa["sponsor_name"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Sponsor Relationship</b></h5>
                                        <span class=""><?= $visa["sponsor_relationship"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Sponsor Letter</b></h5>
                                        <?php if (!empty($visa["sponsor_letter"])): ?>
                                             <div class=" p-3 rounded-4 shadow-sm">
                                                  <h5 class=""><?= basename($visa["sponsor_letter"]) ?></h5>
                                                  <a href="../<?= $visa['sponsor_letter'] ?>" class="btn btn-sm btn-primary">View</a>
                                                  <a href="../<?= $visa['sponsor_letter'] ?>" download="" class="btn btn-sm btn-success">Download</a>
                                             </div>
                                        <?php else: ?>
                                             <p class="">No sponsor letter uploaded</p>
                                        <?php endif; ?>
                                   </div>
                              </div>

                         </div>

                         <!-- status form -->
                         <form method="post">
                              <div class="mb-3">
                                   <label for="status" class="form-label">Status</label>
                                   <input type="text" name="status" required id="status" value="<?= $visa['status']; ?>" class="form-control">
                              </div>
                              <div class="mb-3">
                                   <label for="msg" class="form-label">Message</label>
                                   <textarea name="msg" id="msg" class="form-control"><?= $visa["message"]; ?></textarea>
                              </div>
                              <button type="submit" name="update" class="btn btn-dark">Update</button>
                              <?php
                              if (isset($_POST["update"])) {
                                   $status = $_POST["status"];
                                   $msg = $_POST["msg"];

                                   $query = mysqli_query($conn, "UPDATE `applicants` SET `status` = '$status', `message` = '$msg' WHERE `id` = '$id'");
                                   if ($query) {
                                        echo "<script>alert('Updated successfully!'); location.href = 'visa-applications.php'</script>";
                                   } else {
                                        echo "<script>alert('Something went wrong!')</script>";
                                   }
                              }
                              ?>
                         </form>
                    </div>

               </div> <!-- end col -->

          </div>
          <!-- End Container Fluid -->

          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->

          <!-- Footer Start -->
          <footer class="footer card mb-0 rounded-0 justify-content-center align-items-center">
               <div class="container-fluid">
                    <div class="row">
                         <div class="col-12 text-center">
                              <p class="mb-0">
                                   <script>
                                        document.write(new Date().getFullYear())
                                   </script> &copy; Smile Dove Travels.</a>
                              </p>
                         </div>
                    </div>
               </div>
          </footer>
          <!-- Footer End -->
     </div>

     </div>
     <!-- END Wrapper -->

     <!-- Vendor Javascript -->
     <script src="assets/js/jquery-3.6.min.js"></script>
     <script src="assets/js/datatables.min.js"></script>
     <script src="assets/js/vendor.min.js"></script>

     <script>
          $(document).ready(function() {
               $('#tablee').DataTable({
                    "scrollX": "100%",
               });
          });
     </script>

     <!-- App Javascript -->
     <script src="assets/js/app.js"></script>

</body>


<!-- Mirrored from stackbros.in/Smile Dove Travels/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Mar 2025 10:05:24 GMT -->

</html>