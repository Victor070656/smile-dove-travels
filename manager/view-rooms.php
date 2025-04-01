<?php
include "../config/config.php";
session_start();
if (!isset($_SESSION['sdtravels_manager'])) {
     echo "<script>alert('Please Login First'); location.href = 'login.php'</script>";
}

if (isset($_GET["hid"])) {
     $id = $_GET["hid"];
     $getHotels = mysqli_query($conn, "SELECT * FROM `hotels` WHERE `hotelid` = '$id'");
     if (mysqli_num_rows($getHotels) == 0) {
          echo "<script>alert('Hotel not found'); location.href = 'hotels.php'</script>";
     }
     $hotel = mysqli_fetch_assoc($getHotels);
} else {
     echo "<script>alert('Hotel not found'); location.href = 'hotels.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from stackbros.in/Smile Dove Travels/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Mar 2025 10:05:24 GMT -->

<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Smile Dove Admin || Rooms</title>
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
                                   <h4 class="mb-0">Hotel Rooms</h4>
                                   <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Smile dove</a></li>
                                        <li class="breadcrumb-item active">Rooms</li>
                                   </ol>
                              </div>
                         </div>
                    </div>
                    <!-- ========== Page Title End ========== -->


                    <div class="card rounded-4 py-2">
                         <div class="card-header d-flex justify-content-between align-items-center">
                              <h5 class="">
                                   Rooms for <?= $hotel["name"]; ?>
                              </h5>
                              <a href="add-room.php?hid=<?= $id; ?>" class="btn btn-primary btn-sm ">Add Room +</a>

                         </div>

                         <div class="card-body">
                              <div class="table-responsive">
                                   <table class="table table-striped w-100" id="tablee">
                                        <thead>
                                             <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Room Name</th>
                                                  <th scope="col">Room Type</th>
                                                  <th scope="col">Max Guest</th>
                                                  <th scope="col">Price ($)</th>
                                                  <th scope="col">Available</th>
                                                  <th scope="col">Date</th>
                                                  <th scope="col">Action</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                             $getRooms = mysqli_query($conn, "SELECT * FROM `hotel_rooms` WHERE `hotelid` = '$id' ORDER BY `id` DESC");
                                             if (mysqli_num_rows($getRooms) > 0) {

                                                  while ($row = mysqli_fetch_assoc($getRooms)) {
                                             ?>
                                                       <tr>
                                                            <td><?= $row["roomid"]; ?></td>
                                                            <td><?= $row["name"]; ?></td>
                                                            <td><?= $row["roomtype"]; ?></td>
                                                            <td><?= $row["max_guest"]; ?></td>
                                                            <td><?= $row["price"]; ?></td>
                                                            <td><?= $row["available"] == true ? "Yes" : "No"; ?></td>
                                                            <td>
                                                                 <small><?= date("d-m-Y H:i", strtotime($row["created_at"])); ?></small>
                                                            </td>
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
                                                                           <a class="dropdown-item text-primary" href="edit-room.php?rid=<?= $row["roomid"]; ?>">Edit Room</a>
                                                                           <a class="dropdown-item text-danger" href="delete-room.php?rid=<?= $row["roomid"]; ?>">Delete Room</a>
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