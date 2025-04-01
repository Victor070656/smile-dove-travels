<?php
include "../config/config.php";
session_start();
if (!isset($_SESSION['sdtravels_manager'])) {
     echo "<script>alert('Please Login First'); location.href = 'login.php'</script>";
}

if (empty($_GET["id"])) {
     echo "<script>location.href = 'flight-bookings.php';</script>";
}
$id = $_GET["id"];

$getFlight = mysqli_query($conn, "SELECT * FROM `flight_bookings` WHERE `id` = '$id' ORDER BY `created_at` DESC");
if (mysqli_num_rows($getFlight) == 0) {
     echo "<script>location.href = 'flight-bookings.php';</script>";
}
$flight = mysqli_fetch_assoc($getFlight);
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
                                   <h4 class="mb-0">Flight</h4>
                                   <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Smile dove</a></li>
                                        <li class="breadcrumb-item active">Flight</li>
                                   </ol>
                              </div>
                         </div>
                    </div>
                    <!-- ========== Page Title End ========== -->


                    <div class="card rounded-4 py-4 px-3">
                         <h3 class="fw-bold mb-3"><b>Flight Booking</b></h3>
                         <div class="row">

                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Payment Reference</b></h5>
                                        <span class=""><?= $flight["ref"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Full Name</b></h5>
                                        <span class=""><?= $flight["fullname"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Email</b></h5>
                                        <span class=""><?= $flight["email"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Phone Number</b></h5>
                                        <span class=""><?= $flight["phone"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Gender</b></h5>
                                        <span class=""><?= $flight["gender"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Date Of Birth</b></h5>
                                        <span class=""><?= $flight["dob"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Nationality</b></h5>
                                        <span class=""><?= $flight["nationality"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>ID Type</b></h5>
                                        <span class=""><?= $flight["id_type"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>ID Number</b></h5>
                                        <span class=""><?= $flight["id_num"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>ID Expiry</b></h5>
                                        <span class=""><?= $flight["id_exp"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Departure City</b></h5>
                                        <span class=""><?= $flight["depart_city"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Destination City</b></h5>
                                        <span class=""><?= $flight["dest_city"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Destination Country</b></h5>
                                        <span class=""><?= $flight["dest_country"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Departure Date</b></h5>
                                        <span class=""><?= date("d-m-Y", strtotime($flight["depart_date"])); ?></span>
                                   </div>
                              </div>

                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class="">
                                             <tion>Ticket Type</b>
                                        </h5>
                                        <span class=""><?= $flight["ticket_type"] ?> day(s)</span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Airline Class</b></h5>
                                        <span class=""><?= $flight["airline_class"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class="">
                                             <tion>Price</b>
                                        </h5>
                                        <span class="">$<?= $flight["price"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Date</b></h5>
                                        <span class=""><?= date("d-m-Y H:i", strtotime($flight["created_at"])) ?></span>
                                   </div>
                              </div>

                         </div>
                         <form method="post">
                              <div class="mb-3">
                                   <label for="status" class="form-label">Status</label>
                                   <input type="text" name="status" required id="status" value="<?= $flight['status']; ?>" class="form-control">
                              </div>
                              <div class="mb-3">
                                   <label for="msg" class="form-label">Message</label>
                                   <textarea name="msg" id="msg" class="form-control"><?= $flight["message"]; ?></textarea>
                              </div>
                              <button type="submit" name="update" class="btn btn-dark">Update</button>
                              <?php
                              if (isset($_POST["update"])) {
                                   $status = $_POST["status"];
                                   $msg = $_POST["msg"];

                                   $query = mysqli_query($conn, "UPDATE `flight_bookings` SET `status` = '$status', `message` = '$msg' WHERE `id` = '$id'");
                                   if ($query) {
                                        echo "<script>alert('Updated successfully!'); location.href = 'flight-bookings.php'</script>";
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