<?php
include "../config/config.php";
session_start();
if (!isset($_SESSION['sdtravels_manager'])) {
     echo "<script>alert('Please Login First'); location.href = 'login.php'</script>";
}

if (isset($_GET["rid"])) {
     $id = $_GET["rid"];
     $getRoom = mysqli_query($conn, "SELECT * FROM `hotel_rooms` WHERE `roomid` = '$id'");
     if (mysqli_num_rows($getRoom) == 0) {
          echo "<script>alert('Room not found'); location.href = 'hotels.php'</script>";
     }
     $room = mysqli_fetch_assoc($getRoom);
} else {
     echo "<script>alert('Room not found'); location.href = 'hotels.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from stackbros.in/taplox/forms-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Mar 2025 10:05:20 GMT -->

<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Smile Dove Admin || Delete Room</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="Taplox: An advanced, fully responsive admin dashboard template packed with features to streamline your analytics and management needs." />
     <meta name="author" content="StackBros" />
     <meta name="keywords" content="Taplox, admin dashboard, responsive template, analytics, modern UI, management tools" />
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
                                   <h4 class="mb-0">Delete Room</h4>
                                   <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Smile Dove</a></li>
                                        <li class="breadcrumb-item active">Delete Room</li>
                                   </ol>
                              </div>
                         </div>
                    </div>
                    <!-- ========== Page Title End ========== -->

                    <div class="row">
                         <div class="col-12">
                              <div class="card rounded-4">
                                   <div class="card-header">
                                        <h5 class="card-title mb-0">Delete Room #<?= $id; ?></h5>
                                   </div>

                                   <div class="card-body">
                                        <div class="p-5 text-center">
                                             <h4 class="mb-4">Are you sure you want to delete this room?</h4>
                                             <p>This can't be undone</p>
                                             <form method="POST">
                                                  <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                             </form>
                                             <?php
                                             if (isset($_POST["delete"])) {
                                                  $deleteRoom = mysqli_query($conn, "DELETE FROM `hotel_rooms` WHERE `roomid` = '$id'");
                                                  if ($deleteRoom) {
                                                       echo "<script>alert('Room Deleted Successfully'); location.href = 'hotels.php'</script>";
                                                  } else {
                                                       echo "<script>alert('Failed to delete room')</script>";
                                                  }
                                             }
                                             ?>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
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
     <script>
          document.getElementById('fileupload').addEventListener('change', function() {
               document.getElementById('confirmFile').innerHTML = this.files[0].name;
          });
     </script>
     <script src="assets/js/vendor.min.js"></script>

     <!-- App Javascript -->
     <script src="assets/js/app.js"></script>
     <script src="assets/js/pages/form-fileupload.js"></script>

</body>


<!-- Mirrored from stackbros.in/taplox/forms-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Mar 2025 10:05:20 GMT -->

</html>