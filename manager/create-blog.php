<?php
include "../config/config.php";
include "../config/function.php";
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
     <title>Smile Dove Admin || Create Blogs</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description"
          content="Smile Dove Travels: An advanced, fully responsive admin dashboard template packed with features to streamline your analytics and management needs." />
     <meta name="author" content="StackBros" />
     <meta name="keywords"
          content="Smile Dove Travels, admin dashboard, responsive template, analytics, modern UI, management tools" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="robots" content="index, follow" />
     <meta name="theme-color" content="#ffffff">

     <!-- App favicon -->
     <link rel="shortcut icon" href="../images/favicon.png">

     <!-- Google Font Family link -->
     <link rel="preconnect" href="https://fonts.googleapis.com/index.html">
     <link rel="preconnect" href="https://fonts.gstatic.com/index.html" crossorigin>
     <link href="https://fonts.googleapis.com/css2c4ad.css?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
          rel="stylesheet">

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
                                   <h4 class="mb-0">Blog</h4>
                                   <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Smile dove</a></li>
                                        <li class="breadcrumb-item active">Blog</li>
                                   </ol>
                              </div>
                         </div>
                    </div>
                    <!-- ========== Page Title End ========== -->


                    <div class="card rounded-4 py-2 mb-4">
                         <div class="card-header d-flex justify-content-between align-items-center">
                              <h5 class="">
                                   Create Blog
                              </h5>
                         </div>

                         <div class="card-body">
                              <form method="post" enctype="multipart/form-data">
                                   <div class="mb-2">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" required name="title" class="form-control" id="title">
                                   </div>
                                   <div class="mb-2">
                                        <label for="body" class="form-label">Content</label>
                                        <textarea name="body" required id="body" class="form-control"></textarea>
                                   </div>
                                   <div class="mb-2">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" required name="image" class="form-control" id="image">
                                   </div>
                                   <button class="btn btn-primary" name="send">Create Post</button>
                                   <?php
                                   if (isset($_POST["send"])) {
                                        $title = $_POST["title"];
                                        $content = $_POST["body"];
                                        $image = date("dmYHis") . $_FILES["image"]["name"];
                                        $tmp_name = $_FILES["image"]["tmp_name"];
                                        $blogid = uniqid();

                                        // for email notification
                                   
                                        $dir = "../uploads/blog";
                                        if (!dir($dir)) {
                                             mkdir($dir, 0777, true);
                                        }

                                        if (move_uploaded_file($tmp_name, $dir . "/$image")) {
                                             $query = mysqli_query($conn, "INSERT INTO `blogs` (`blogid`, `title`, `content`, `image`) VALUES ('$blogid', '$title', '$content', '$image')");
                                             if ($query) {
                                                  $subject = "Newsletter from Smile Dove Travels";
                                                  $body = '
                                                  <link
                                                       href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
                                                       rel="stylesheet"
                                                       integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7"
                                                       crossorigin="anonymous"
                                                  />
                                                  <h3 class="text-center mb-3">' . $title . '</h3>
                                                  <div class="container">
                                                       <img src="https://smiledovetravels.com.ng/uploads/blog/' . $image . '" alt="" class="img-fluid rounded-4 mb-3" />
                                                       <p>' . $content . '</p><br>
                                                       <p>For more details: <a href="https://smiledovetravels.com.ng/blog-details.php?id=' . $blogid . '" class="text-success fw-bold">Read More</a></p>
                                                       <p>For more information, visit our website: <a href="https://smiledovetravels.com.ng" class="fw-bold">Smile Dove Travels</a></p>
                                                       <p>Thank you for subscribing to our newsletter!</p>
                                                       <p>Best regards,</p>
                                                       <p>Smile Dove Travels</p>
                                                  </div>
                                                  <script
                                                       src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
                                                       integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
                                                       crossorigin="anonymous"
                                                  ></script>
                                                  ';
                                                  echo "<script>alert('Created Successfully!'); location.href = 'blogs.php'</script>";
                                                  $getSubs = mysqli_query($conn, "SELECT `email` FROM `newsletters`");
                                                  if (mysqli_num_rows($getSubs) > 0) {
                                                       while ($sub = mysqli_fetch_assoc($getSubs)) {
                                                            sendNotification($sub["email"], $subject, $body);
                                                       }
                                                  }
                                             } else {
                                                  echo "<script>alert('Something went wrong!'); </script>";
                                             }
                                        } else {
                                             echo "<script>alert('Something went wrong while uploading!'); </script>";
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
          $(document).ready(function () {
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