<?php
include '../config/config.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from stackbros.in/taplox/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Mar 2025 10:05:01 GMT -->

<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title>Smile Dove User || Sign In</title>
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
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com/index.html">
    <link rel="preconnect" href="https://fonts.gstatic.com/index.html" crossorigin>
    <link href="https://fonts.googleapis.com/css2c4ad.css?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet"> -->

    <!-- Vendor css -->
    <link href="assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Config js -->
    <script src="assets/js/config.js"></script>

</head>

<body class="authentication-bg">
    <div class="account-pages py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <form method="post">

                        <div class="card border-0 shadow-lg">
                            <div class="card-body p-5">
                                <div class="text-center">
                                    <div class="mx-auto mb-4 text-center auth-logo">

                                    </div>
                                    <h4 class="fw-bold text-dark mb-2">Welcome Back!</h3>
                                        <p class="text-muted">Sign in to your account to continue</p>
                                </div>
                                <form method="post" class="mt-4">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <label for="password" class="form-label">Password</label>
                                        </div>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-dark btn-lg fw-medium" name="submit" type="submit">Sign In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <p class="text-center mt-4 text-white text-opacity-50">Don't have an account
                            <a href="register.php" class="text-decoration-none text-white fw-bold">Sign Up</a>
                        </p>
                        <?php
                        if (isset($_POST['submit'])) {
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                $_SESSION['sdtravels_user'] = $row["userid"];
                                echo "<script>alert('Login Successful'); location.href = '../'</script>";
                            } else {
                                echo "<script>alert('Invalid Email and Password combination')</script>";
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Vendor Javascript -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App Javascript -->
    <script src="assets/js/app.js"></script>


</body>


<!-- Mirrored from stackbros.in/taplox/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Mar 2025 10:05:01 GMT -->

</html>