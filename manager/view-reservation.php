<?php
include "../config/config.php";
session_start();
if (!isset($_SESSION['sdtravels_manager'])) {
     echo "<script>alert('Please Login First'); location.href = 'login.php'</script>";
}

if (empty($_GET["id"])) {
     echo "<script>location.href = 'hotel-reservations.php';</script>";
}
$id = $_GET["id"];

$getReservation = mysqli_query($conn, "SELECT re.*, h.name as hotelname, r.name as roomname  FROM `hotel_reservations` as re JOIN `hotels` as h ON re.hotelid = h.hotelid JOIN `hotel_rooms` as r ON r.roomid = re.roomid WHERE re.reservationid = '$id' ORDER BY `created_at` DESC");
if (mysqli_num_rows($getReservation) == 0) {
     echo "<script>location.href = 'hotel-reservations.php';</script>";
}
$reserve = mysqli_fetch_assoc($getReservation);

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from stackbros.in/Smile Dove Travels/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Mar 2025 10:05:24 GMT -->

<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Smile Dove Admin || Hotels</title>
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
                                   <h4 class="mb-0">Hotel Reservations</h4>
                                   <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Smile dove</a></li>
                                        <li class="breadcrumb-item active">Hotel Reservations</li>
                                   </ol>
                              </div>
                         </div>
                    </div>
                    <!-- ========== Page Title End ========== -->


                    <div class="card rounded-4 py-4 px-3">
                         <h3 class="fw-bold mb-3"><b>Hotel Reservation Details #<?= $reserve["reservationid"] ?></b></h3>
                         <div class="row">
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Hotel</b></h5>
                                        <span class=""><?= $reserve["hotelname"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Room</b></h5>
                                        <span class=""><?= $reserve["roomname"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Payment Reference</b></h5>
                                        <span class=""><?= $reserve["ref"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Full Name</b></h5>
                                        <span class=""><?= $reserve["fullname"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Email</b></h5>
                                        <span class=""><?= $reserve["email"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Phone Number</b></h5>
                                        <span class=""><?= $reserve["phone"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Gender</b></h5>
                                        <span class=""><?= $reserve["gender"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Nationality</b></h5>
                                        <span class=""><?= $reserve["nationality"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>ID Type</b></h5>
                                        <span class=""><?= $reserve["idtype"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>ID Number</b></h5>
                                        <span class=""><?= $reserve["idnum"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>ID Expiry</b></h5>
                                        <span class=""><?= $reserve["idexp"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Check-In Date</b></h5>
                                        <span class=""><?= date("d-m-Y", strtotime($reserve["checkin"])); ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Check-Out Date</b></h5>
                                        <span class=""><?= date("d-m-Y", strtotime($reserve["checkout"])); ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class="">
                                             <tion>Duration</b>
                                        </h5>
                                        <span class=""><?= $reserve["duration"] ?> day(s)</span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Guests</b></h5>
                                        <span class=""><?= $reserve["guests"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class="">
                                             <tion>Amount</b>
                                        </h5>
                                        <span class="">$<?= $reserve["amount"] ?></span>
                                   </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                   <div class="">
                                        <h5 class=""><b>Date</b></h5>
                                        <span class=""><?= date("d-m-Y H:i", strtotime($reserve["created_at"])) ?></span>
                                   </div>
                              </div>

                         </div>
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