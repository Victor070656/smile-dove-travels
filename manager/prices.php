<?php
include "../config/config.php";
session_start();
if (!isset($_SESSION['sdtravels_manager'])) {
     echo "<script>alert('Please Login First'); location.href = 'login.php'</script>";
}
$getFlightPrices = mysqli_query($conn, "SELECT * FROM `flight_prices`");
$flightPrices = mysqli_fetch_assoc($getFlightPrices);

$getVisaPrices = mysqli_query($conn, "SELECT * FROM `visa_prices`");
$visaPrice = mysqli_fetch_assoc($getVisaPrices);


?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from stackbros.in/Smile Dove Travels/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Mar 2025 10:05:24 GMT -->

<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Smile Dove Admin || Prices</title>
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
                                   <h4 class="mb-0">Prices</h4>
                                   <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Smile dove</a></li>
                                        <li class="breadcrumb-item active">Prices</li>
                                   </ol>
                              </div>
                         </div>
                    </div>
                    <!-- ========== Page Title End ========== -->


                    <div class="card rounded-4 py-2 mb-4">
                         <div class="card-header d-flex justify-content-between align-items-center">
                              <h5 class="">
                                   Flight Prices
                              </h5>
                         </div>

                         <div class="card-body">
                              <form method="post">
                                   <div class="mb-2">
                                        <label for="one-way" class="form-label">One Way ($)</label>
                                        <input type="number" name="one-way" value="<?= $flightPrices['one_way']; ?>" class="form-control" id="one-way">
                                   </div>
                                   <div class="mb-2">
                                        <label for="round-trip" class="form-label">Round Trip ($)</label>
                                        <input type="number" name="round-trip" value="<?= $flightPrices['round_trip']; ?>" class="form-control" id="round-trip">
                                   </div>
                                   <button class="btn btn-primary" name="flight">Update</button>
                                   <?php
                                   if (isset($_POST["flight"])) {
                                        $one_way = $_POST["one-way"];
                                        $round_trip = $_POST["round-trip"];

                                        $query = mysqli_query($conn, "UPDATE `flight_prices` SET `one_way` = '$one_way', `round_trip` = '$round_trip'");
                                        if ($query) {
                                             echo "<script>alert('Updated Successfully!'); location.href = 'prices.php'</script>";
                                        } else {
                                             echo "<script>alert('Something went wrong!'); </script>";
                                        }
                                   }
                                   ?>
                              </form>
                         </div>
                    </div>
                    <div class="card rounded-4 py-2">
                         <div class="card-header d-flex justify-content-between align-items-center">
                              <h5 class="">
                                   Visa Price
                              </h5>
                         </div>

                         <div class="card-body">
                              <form method="post">
                                   <div class="mb-2">
                                        <label for="visa_price" class="form-label">Visa Fee ($)</label>
                                        <input type="number" name="visa_price" value="<?= $visaPrice['price']; ?>" class="form-control" id="visa_price">
                                   </div>
                                   <button class="btn btn-primary" name="visa">Update</button>
                                   <?php
                                   if (isset($_POST["visa"])) {
                                        $visa_price = $_POST["visa_price"];

                                        $query = mysqli_query($conn, "UPDATE `visa_prices` SET `price` = '$visa_price'");
                                        if ($query) {
                                             echo "<script>alert('Updated Successfully!'); location.href = 'prices.php'</script>";
                                        } else {
                                             echo "<script>alert('Something went wrong!'); </script>";
                                        }
                                   }
                                   ?>
                              </form>
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