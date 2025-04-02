<?php
include "../config/config.php";
session_start();
if (!isset($_SESSION['sdtravels_user'])) {
     echo "<script>alert('Please Login First'); location.href = 'login.php'</script>";
}
$uid = $_SESSION["sdtravels_user"];
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from stackbros.in/Smile Dove Travels/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Mar 2025 10:05:24 GMT -->

<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Smile Dove Admin || Hotel Reservations</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="Smile Dove Travels: An advanced, fully responsive admin dashboard template packed with features to streamline your analytics and management needs." />
     <meta name="author" content="StackBros" />
     <meta name="keywords" content="Smile Dove Travels, admin dashboard, responsive template, analytics, modern UI, management tools" />
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


                    <div class="card rounded-4 py-2">
                         <div class="card-header d-flex justify-content-between align-items-center">
                              <h5 class="">
                                   All Reservations
                              </h5>
                         </div>

                         <div class="card-body">
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
                                                  <th scope="col">Amount</th>
                                                  <th scope="col">Date</th>
                                                  <th scope="col">Action</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                             $getReservation = mysqli_query($conn, "SELECT re.*, h.name as hotelname, r.name as roomname  FROM `hotel_reservations` as re JOIN `hotels` as h ON re.hotelid = h.hotelid JOIN `hotel_rooms` as r ON r.roomid = re.roomid WHERE re.userid = '$uid' ORDER BY `created_at` DESC");
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