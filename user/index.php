<?php
include "../config/config.php";
session_start();
if (!isset($_SESSION['sdtravels_user'])) {
     echo "<script>alert('Please Login First'); location.href = 'login.php'</script>";
}
$uid = $_SESSION["sdtravels_user"];



$getHotels = mysqli_query($conn, "SELECT * FROM hotels");
// $getVisa = mysqli_query($con, "SELECT * FROM visa");
// var_dump(__DIR__);
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
                         <div class="col-md-6 col-xl-3">
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
                                                  <h3 class="text-dark mt-2 mb-0"><?= $getHotels->num_rows ?? 0; ?></h3>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </div>

                         <!-- Card 2 -->
                         <div class="col-md-6 col-xl-3">
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
                                                  <h3 class="text-dark mt-2 mb-0">8,764</h3>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </div>

                         <!-- Card 3 -->
                         <div class="col-md-6 col-xl-3">
                              <div class="card rounded-4">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-primary bg-opacity-10 rounded-circle">
                                                       <iconify-icon icon="solar:calendar-date-outline"
                                                            class="fs-32 text-primary avatar-title"></iconify-icon>
                                                  </div>
                                             </div>
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Bookings</p>
                                                  <h3 class="text-dark mt-2 mb-0">5,123</h3>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </div>

                         <!-- Card 4 -->
                         <div class="col-md-6 col-xl-3">
                              <div class="card rounded-4">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-primary bg-opacity-10 rounded-circle">
                                                       <iconify-icon icon="solar:users-group-two-rounded-outline"
                                                            class="fs-32 text-primary avatar-title"></iconify-icon>
                                                  </div>
                                             </div>
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Users</p>
                                                  <h3 class="text-dark mt-2 mb-0">12,945</h3>
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
                                             <h4 class="card-title">Recent Hotels</h4>

                                             <a href="add-hotel.php" class="btn btn-primary btn-sm ">Add Hotel +</a>
                                        </div>
                                   </div> <!-- end card body -->
                                   <div class="table-responsive">
                                        <table class="table table-striped table-centered w-100" id="tablee">
                                             <thead>
                                                  <tr>
                                                       <th scope="col">#</th>
                                                       <th scope="col">Hotel</th>
                                                       <th scope="col">Country</th>
                                                       <th scope="col">City</th>
                                                       <th scope="col">Address</th>
                                                       <th scope="col">Date</th>
                                                       <th scope="col">Action</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <?php
                                                  $getHotels = mysqli_query($conn, "SELECT * FROM `hotels` ORDER BY `created_at` DESC LIMIT 5");
                                                  if (mysqli_num_rows($getHotels) > 0) {

                                                       while ($row = mysqli_fetch_assoc($getHotels)) {
                                                  ?>
                                                            <tr>
                                                                 <td><?= $row["hotelid"]; ?></td>
                                                                 <td>
                                                                      <span class="me-2">
                                                                           <img src="../uploads/<?= $row['image']; ?>" style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;" alt="">
                                                                      </span>
                                                                      <?= $row["name"]; ?>
                                                                 </td>
                                                                 <td><?= $row["country"]; ?></td>
                                                                 <td><?= $row["city"]; ?></td>
                                                                 <td><?= $row["address"]; ?></td>
                                                                 <td><?= date("d-m-Y H:i", strtotime($row["created_at"])); ?></td>
                                                                 <td class="">


                                                                      <div class="dropdown">
                                                                           <button
                                                                                class="btn btn-secondary rounded-4 btn-sm dropdown-toggle"
                                                                                type="button"
                                                                                id="triggerId"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false">
                                                                           </button>
                                                                           <div
                                                                                class="dropdown-menu dropdown-menu-end position-relative "
                                                                                aria-labelledby="triggerId">
                                                                                <a class="dropdown-item" href="add-room.php?hid=<?= $row["hotelid"]; ?>">Add Room</a>
                                                                                <a class="dropdown-item" href="view-rooms.php?hid=<?= $row["hotelid"]; ?>">View Rooms</a>
                                                                                <a class="dropdown-item text-primary" href="edit-hotel.php?hid=<?= $row["hotelid"]; ?>">Edit Hotel</a>
                                                                                <a class="dropdown-item text-danger" href="delete-hotel.php?hid=<?= $row["hotelid"]; ?>">Delete Hotel</a>
                                                                           </div>
                                                                      </div>
                                                                 </td>
                                                            </tr>
                                                  <?php
                                                       }
                                                  }
                                                  ?>
                                             </tbody>
                                        </table>
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
                                        </script> &copy; Taplox.</a>
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


<!-- Mirrored from stackbros.in/taplox/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Mar 2025 10:04:58 GMT -->

</html>