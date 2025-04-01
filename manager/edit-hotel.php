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


<!-- Mirrored from stackbros.in/Smile Dove Travels/forms-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Mar 2025 10:05:20 GMT -->

<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Smile Dove Admin || </title>
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
                                   <h4 class="mb-0">Edit Hotel</h4>
                                   <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Smile Dove</a></li>
                                        <li class="breadcrumb-item active">Edit Hotel</li>
                                   </ol>
                              </div>
                         </div>
                    </div>
                    <!-- ========== Page Title End ========== -->

                    <div class="row">
                         <div class="col-12">
                              <div class="card rounded-4">
                                   <div class="card-header">
                                        <h5 class="card-title mb-0">Update Hotel #<?= $id; ?></h5>
                                   </div>

                                   <div class="card-body">
                                        <form method="post" enctype="multipart/form-data">
                                             <div class="row">
                                                  <div class="mb-3">
                                                       <label for="hotel_name" class="form-label">Hotel Name <span class="text-danger">*</span></label>
                                                       <input type="text" id="hotel_name" name="hotel_name" required value="<?= $hotel['name']; ?>" placeholder="Hotel Name" class="form-control">
                                                  </div>

                                                  <div class="mb-3 col-md-6">
                                                       <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
                                                       <input type="text" id="country" value="<?= $hotel['country']; ?>" name="country" required
                                                            class="form-control" placeholder="Country">
                                                  </div>

                                                  <div class="mb-3 col-md-6">
                                                       <label for="city" class="form-label">City <span class="text-danger">*</span></label>
                                                       <input type="text" id="city" value="<?= $hotel['city']; ?>" name="city" required class="form-control"
                                                            placeholder="City">
                                                  </div>

                                                  <div class="mb-3">
                                                       <label for="address"
                                                            class="form-label">Address <span class="text-danger">*</span></label>
                                                       <input type="text" id="address" value="<?= $hotel['address']; ?>" name="address" required class="form-control"
                                                            placeholder="Address">
                                                  </div>

                                                  <div class="mb-3">
                                                       <label for="desc" class="form-label">Description <span class="text-danger">*</span></label>
                                                       <textarea class="form-control" id="desc" required name="desc"
                                                            rows="5"><?= $hotel['description']; ?></textarea>
                                                  </div>

                                                  <div class="mb-3">
                                                       <div class="">
                                                            <p class="form-label">Hotel Image <small class="text-primary">(Only choose image if you want to update the current image)</small></p>
                                                            <label for="fileupload" class="mb-1 p-5 w-100 rounded-3 text-center" style="border: 2px dashed #d8dfe7;">
                                                                 <svg class="text-dark" xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#d8dfe7">
                                                                      <path d="M180-120q-24 0-42-18t-18-42v-600q0-24 18-42t42-18h600q24 0 42 18t18 42v600q0 24-18 42t-42 18H180Zm0-60h600v-600H180v600Zm56-97h489L578-473 446-302l-93-127-117 152Zm-56 97v-600 600Z" />
                                                                 </svg>
                                                                 <h4 class="m-0">Select Hotel Image</h4>
                                                            </label>
                                                            <input name="image" hidden type="file" id="fileupload"
                                                                 class="form-control" />
                                                            <small id="confirmFile" class="text-success"></small>
                                                       </div>
                                                  </div>
                                                  <div class="">
                                                       <button type="submit" name="update" class="btn btn-dark">Add Hotel</button>
                                                  </div>
                                             </div>
                                             <?php
                                             if (isset($_POST["update"])) {

                                                  $hotel_name = $_POST["hotel_name"];
                                                  $country = $_POST["country"];
                                                  $city = $_POST["city"];
                                                  $address = $_POST["address"];
                                                  $desc = $_POST["desc"];
                                                  $image = date("dmyHis") . $_FILES["image"]["name"];
                                                  $tmp_name = $_FILES["image"]["tmp_name"];
                                                  $path = "../uploads/" . $image;

                                                  if (!empty($_FILES["image"]["name"])) {
                                                       if (move_uploaded_file($tmp_name, $path)) {
                                                            unlink("../uploads/" . $hotel['image']);
                                                            $sql = "UPDATE `hotels` SET `name` = '$hotel_name', `country` = '$country', `city` = '$city', `address` = '$address', `description` = '$desc', `image` = '$image' WHERE `hotelid` = '$id'";
                                                            $query = mysqli_query($conn, $sql);
                                                            if ($query) {
                                                                 echo "<script>alert('Hotel updated successfully'); location.href = 'hotels.php'</script>";
                                                            } else {
                                                                 echo "<script>alert('Failed to update hotel')</script>";
                                                            }
                                                       } else {
                                                            echo "<script>alert('Failed to upload image')</script>";
                                                       }
                                                  } else {
                                                       $sql = "UPDATE `hotels` SET `name` = '$hotel_name', `country` = '$country', `city` = '$city', `address` = '$address', `description` = '$desc' WHERE `hotelid` = '$id'";
                                                       $query = mysqli_query($conn, $sql);
                                                       if ($query) {
                                                            echo "<script>alert('Hotel updated successfully'); location.href = 'hotels.php'</script>";
                                                       } else {
                                                            echo "<script>alert('Failed to update hotel')</script>";
                                                       }
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