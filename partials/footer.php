<footer class="main-footer">
    <div class="auto-container">
        <div class="upper-box">
            <div class="logo">
                <a href="./"><img src="images/logo-2.png" style="height: 50px" class="rounded" alt="Logo"
                        title="Vizox" /></a>
                <!-- <a href="index.php"><img src="images/logo-2.png" alt=""></a> -->
            </div>
            <div class="subscribe-form">
                <h5 class="title">Subscribe to Newsletter</h5>
                <form method="post">
                    <div class="form-group">
                        <input type="email" name="email" class="email" value=""
                            placeholder="Enter your email to subscribe to our newsletter" required="" />
                        <button type="submit" name="subscribe" class="theme-btn btn-style-one">
                            <span class="btn-title">Subscribe</span>
                        </button>
                    </div>

                    <?php
                    if (isset($_POST["subscribe"])) {
                        $email = $_POST["email"];

                        $insert = mysqli_query($conn, "INSERT INTO `newsletters` (`email`) VALUES ('$email')");
                        if ($insert) {
                            echo "<script>alert('Successfully subscribed to our newsletter!')</script>";
                        }
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>

    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-12">
                    <div class="">
                        <p class="text-center text-light">
                            At Smile Dove Travels, we specialize in hassle-free
                            immigration solutions tailored to your needs. Our
                            experienced team has helped thousands of clients
                            successfully relocate, study, and work abroad.
                        </p>
                    </div>
                    <div class="footer-column">
                        <div class="footer-widget about-widget">
                            <ul class="contact-info d-flex justify-content-center gap-3 flex-wrap">
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a
                                        href="mailto:info@smiledovetravels.com.ng"><span>info@smiledovetravels.com.ng</span></a><br />
                                </li>
                                <li>
                                    <i class="fa fa-phone-square"></i>
                                    <a href="tel:+2349069503394">+234 906 9503 394</a><br />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Footer Column-->

                <!--Footer Column-->
                <div class="footer-column col-12 mb-0">
                    <div class="footer-widget links-widget">
                        <ul class="user-links d-flex justify-content-center gap-3 flex-wrap">
                            <li><a href="services.php">Services</a></li>
                            <li><a href="ielts.php">IELTS</a></li>
                            <li><a href="visa.php">Visa</a></li>
                            <li><a href="booking.php">Booking</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container">
                <div class="copyright-text text-center">
                    &copy; Copyright Reserved by
                    <a href="./">Smile Dove Travels</a>
                </div>

                <ul class="social-icon-two">
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>