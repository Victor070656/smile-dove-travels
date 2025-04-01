<?php
include "../config/config.php";
session_start();
if (!isset($_SESSION['sdtravels_manager'])) {
     echo "<script>alert('Please Login First'); location.href = 'login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from stackbros.in/Smile Dove Travels/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Mar 2025 10:05:24 GMT -->

<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Smile Dove Admin || Visa Application</title>
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
                                   <h4 class="mb-0">Visa Application</h4>
                                   <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Smile dove</a></li>
                                        <li class="breadcrumb-item active">Visa Application</li>
                                   </ol>
                              </div>
                         </div>
                    </div>
                    <!-- ========== Page Title End ========== -->


                    <div class="card rounded-4 py-2">
                         <div class="card-header d-flex justify-content-between align-items-center">
                              <h5 class="">
                                   All Visa Applications
                              </h5>
                         </div>

                         <div class="card-body">
                              <div class="table-responsive">
                                   <table class="table table-striped w-100" id="tablee">
                                        <thead>
                                             <tr class="table-nowrap">
                                                  <th scope="col">#</th>
                                                  <th scope="col">Full Name</th>
                                                  <th scope="col">Date Of Birth</th>
                                                  <th scope="col">Place Of Birth</th>
                                                  <th scope="col">Nationality</th>
                                                  <th scope="col">Gender</th>
                                                  <th scope="col">Email</th>
                                                  <th scope="col">Phone Number</th>
                                                  <th scope="col">Destination Country</th>
                                                  <th scope="col">Visa Type</th>
                                                  <th scope="col">Entry Date</th>
                                                  <th scope="col">Exit Date</th>
                                                  <th scope="col">Status</th>
                                                  <th scope="col">Message</th>
                                                  <th scope="col">Date</th>
                                                  <th scope="col">Action</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                             $getVisa = mysqli_query($conn, "SELECT a.*, t.destination_country, t.visa_type, t.entry_date, t.exit_date FROM `applicants` as a JOIN `travel_details` as t ON a.id = t.applicant_id ");
                                             if (mysqli_num_rows($getVisa) > 0) {

                                                  while ($row = mysqli_fetch_assoc($getVisa)) {
                                             ?>
                                                       <tr>
                                                            <td><?= $row["applicationid"]; ?></td>
                                                            <td>
                                                                 <?= $row["full_name"]; ?>
                                                            </td>
                                                            <td><?= $row["dob"]; ?></td>
                                                            <td><?= $row["place_of_birth"]; ?></td>
                                                            <td><?= $row["nationality"]; ?></td>
                                                            <td><?= $row["gender"]; ?></td>
                                                            <td><?= $row["email"]; ?></td>
                                                            <td><?= $row["phone"]; ?></td>
                                                            <td><?= $row["destination_country"]; ?></td>
                                                            <td><?= $row["visa_type"]; ?></td>
                                                            <td><?= $row["entry_date"]; ?></td>
                                                            <td><?= $row["exit_date"]; ?></td>
                                                            <td><?= $row["status"]; ?></td>
                                                            <td><?= $row["message"]; ?></td>
                                                            <td><?= date("d-m-Y H:i", strtotime($row["created_at"])); ?></td>
                                                            <td class="">
                                                                 <a href="view-visa.php?id=<?= $row["id"]; ?>" class="btn btn-primary btn-sm">View</a>
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