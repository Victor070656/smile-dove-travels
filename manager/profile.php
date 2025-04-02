<?php
include "../config/config.php";
session_start();
if (!isset($_SESSION['sdtravels_manager'])) {
     echo "<script>alert('Please Login First'); location.href = 'login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from stackbros.in/Smile Dove Travels/forms-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Mar 2025 10:05:20 GMT -->

<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Smile Dove Admin || Profile</title>
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
                                   <h4 class="mb-0">Profile</h4>
                                   <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Smile Dove</a></li>
                                        <li class="breadcrumb-item active">Profile</li>
                                   </ol>
                              </div>
                         </div>
                    </div>
                    <!-- ========== Page Title End ========== -->

                    <div class="row">
                         <div class="col-12">
                              <div class="card rounded-4">
                                   <div class="card-header">
                                        <h5 class="card-title mb-0">Edit Profile</h5>
                                   </div>

                                   <div class="card-body">
                                        <form method="post" enctype="multipart/form-data">
                                             <div class="row">
                                                  <?php
                                                  $getInfo = mysqli_query($conn, "SELECT * FROM `admin`");
                                                  $info = mysqli_fetch_assoc($getInfo);
                                                  ?>
                                                  <div class="mb-3 col-md-6">
                                                       <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                                       <input type="email" id="email" name="email" required
                                                            class="form-control" value="<?= $info['email']; ?>" placeholder="Email">
                                                  </div>

                                                  <div class="mb-3 col-md-6">
                                                       <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                                       <input type="text" id="password" value="<?= $info['password']; ?>" name="password" required class="form-control"
                                                            placeholder="********">
                                                  </div>


                                                  <div class="">
                                                       <button type="submit" name="send" class="btn btn-dark">Update</button>
                                                  </div>
                                             </div>
                                             <?php
                                             if (isset($_POST["send"])) {

                                                  $email = $_POST["email"];
                                                  $password = $_POST["password"];

                                                  $sql = "UPDATE `admin` SET `email` = '$email', `password` = '$password'";
                                                  $query = mysqli_query($conn, $sql);
                                                  if ($query) {
                                                       echo "<script>alert('Profile updated successfully'); location.href = 'profile.php'</script>";
                                                  } else {
                                                       echo "<script>alert('Failed to update profile')</script>";
                                                  }
                                             }
                                             ?>
                                        </form>
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


<!-- Mirrored from stackbros.in/Smile Dove Travels/forms-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Mar 2025 10:05:20 GMT -->

</html>