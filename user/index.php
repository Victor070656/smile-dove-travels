<?php
include "../config/config.php";
session_start();
if (!isset($_SESSION['sdtravels_user'])) {
     echo "<script>alert('Please Login First'); location.href = 'login.php'</script>";
}
$uid = $_SESSION["sdtravels_user"];


$getVisa = mysqli_query($conn, "SELECT * FROM `applicants` WHERE `userid` = '$uid'");
$getRes = mysqli_query($conn, "SELECT * FROM `hotel_reservations` WHERE `userid` = '$uid'");
$getFlight = mysqli_query($conn, "SELECT * FROM `flight_bookings` WHERE `userid` = '$uid'");
$res = $getFlight->num_rows + $getRes->num_rows;

?>
<!DOCTYPE html>
<html lang="en">



<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Smile Dove User || Dashboard</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="robots" content="index, follow" />
     <meta name="theme-color" content="#ffffff">

     <!-- App favicon -->
     <link rel="shortcut icon" href="../images/favicon.png">

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
                                   <h4 class="mb-0">Dashboard</h4>
                                   <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Smile Dove</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                   </ol>
                              </div>
                         </div>
                    </div>
                    <!-- ========== Page Title End ========== -->

                    <div class="row">
                         <!-- Card 1 -->
                         <div class="col-md-6 col-xl-4">
                              <div class="card rounded-4">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-primary bg-opacity-10 rounded-circle">
                                                       <iconify-icon icon="solar:buildings-2-broken"
                                                            class="fs-32 text-primary avatar-title"></iconify-icon>
                                                  </div>
                                             </div>
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Hotels</p>
                                                  <h3 class="text-dark mt-2 mb-0"><?= $getRes->num_rows ?? 0; ?></h3>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </div>

                         <!-- Card 2 -->
                         <div class="col-md-6 col-xl-4">
                              <div class="card rounded-4">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-primary bg-opacity-10 rounded-circle">
                                                       <iconify-icon icon="solar:rocket-2-linear"
                                                            class="fs-32 text-primary avatar-title"></iconify-icon>
                                                  </div>
                                             </div>
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Flight</p>
                                                  <h3 class="text-dark mt-2 mb-0"><?= $getFlight->num_rows ?? 0 ?></h3>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </div>

                         <!-- Card 3 -->
                         <div class="col-md-6 col-xl-4">
                              <div class="card rounded-4">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-primary bg-opacity-10 rounded-circle">
                                                       <iconify-icon icon="solar:documents-bold"
                                                            class="fs-32 text-primary avatar-title"></iconify-icon>
                                                  </div>
                                             </div>
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Visa</p>
                                                  <h3 class="text-dark mt-2 mb-0"><?= $getVisa->num_rows ?? 0 ?></h3>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </div>




                    </div>


                    <div class="row">

                         <div class="col-12">
                              <div class="card rounded-4">
                                   <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                             <h4 class="card-title">Recent Hotel Reservations</h4>
                                        </div>

                                        <div class="table-responsive">
                                             <table class="table table-striped w-100" id="tablee">
                                                  <thead>
                                                       <tr class="table-nowrap">
                                                            <th scope="col">#</th>
                                                            <th scope="col">Reference ID</th>
                                                            <th scope="col">Hotel</th>
                                                            <th scope="col">Room</th>
                                                            <th scope="col">Full Name</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Check-In</th>
                                                            <th scope="col">Check-Out</th>
                                                            <th scope="col">Duration</th>
                                                            <th scope="col">No. Of Guests</th>
                                                            <th scope="col">Amount ($)</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Action</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <?php
                                                       $getReservation = mysqli_query($conn, "SELECT re.*, h.name as hotelname, r.name as roomname  FROM `hotel_reservations` as re JOIN `hotels` as h ON re.hotelid = h.hotelid JOIN `hotel_rooms` as r ON r.roomid = re.roomid WHERE re.userid = '$uid' ORDER BY `created_at` DESC LIMIT 5");
                                                       if (mysqli_num_rows($getReservation) > 0) {

                                                            while ($row = mysqli_fetch_assoc($getReservation)) {
                                                       ?>
                                                                 <tr>
                                                                      <td><?= $row["reservationid"]; ?></td>
                                                                      <td>
                                                                           <?= $row["ref"]; ?>
                                                                      </td>
                                                                      <td><?= $row["hotelname"]; ?></td>
                                                                      <td><?= $row["roomname"]; ?></td>
                                                                      <td><?= $row["fullname"]; ?></td>
                                                                      <td><?= $row["email"]; ?></td>
                                                                      <td><?= date("d-m-Y", strtotime($row["checkin"])); ?></td>
                                                                      <td><?= date("d-m-Y", strtotime($row["checkout"])); ?></td>
                                                                      <td><?= $row["duration"]; ?></td>
                                                                      <td><?= $row["guests"]; ?></td>
                                                                      <td><?= $row["amount"]; ?></td>
                                                                      <td><?= date("d-m-Y H:i", strtotime($row["created_at"])); ?></td>
                                                                      <td class="">
                                                                           <a href="view-reservation.php?id=<?= $row["reservationid"]; ?>" class="btn btn-primary btn-sm">View</a>
                                                                      </td>
                                                                 </tr>
                                                       <?php
                                                            }
                                                       }
                                                       ?>
                                                  </tbody>
                                             </table>
                                        </div>
                                   </div>
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                    </div> <!-- end row -->


               </div>
               <!-- End Container Fluid -->

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
          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->

     </div>
     <!-- END Wrapper -->

     <!-- Vendor Javascript -->
     <script src="assets/js/vendor.min.js"></script>

     <!-- App Javascript -->
     <script src="assets/js/app.js"></script>

     <!-- Vector Map Js -->
     <script src="assets/vendor/jsvectormap/js/jsvectormap.min.js"></script>
     <script src="assets/vendor/jsvectormap/maps/world-merc.js"></script>
     <script src="assets/vendor/jsvectormap/maps/world.js"></script>

     <!-- Dashboard Js -->
     <script src="assets/js/pages/dashboard.js"></script>

</body>


<!-- Mirrored from stackbros.in/Smile Dove Travels/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Mar 2025 10:04:58 GMT -->

</html>