<?php  ?>
<header class="main-header header-style-one" id="home">
    <!-- Header Lower -->
    <div class="header-lower">
        <!-- Main box -->
        <div class="main-box">
            <div class="logo-box">
                <div class="logo">
                    <a href="./" title=""><img
                            src="images/logo-2.png"
                            style="height: 40px"
                            alt=""
                            title="Tronis" /></a>
                </div>
            </div>

            <!--Nav Box-->
            <div class="nav-outer">
                <nav class="nav main-menu ">
                    <ul class="navigation">
                        <li class="<?= $page == "home" ? "current" : "" ?>">
                            <a href="./">Home</a>
                        </li>
                        <li class="<?= $page == "services" ? "current" : "" ?>">
                            <a href="services.php">Services</a>
                        </li>
                        <li class="<?= $page == "ielts" ? "current" : "" ?>">
                            <a href="ielts.php">IELTS</a>
                        </li>
                        <li class="<?= $page == "visa" ? "current" : "" ?>">
                            <a href="visa.php">Visa</a>
                        </li>
                        <li class="<?= $page == "booking" ? "current" : "" ?>">
                            <a href="booking.php">Booking</a>
                        </li>
                        <li class="<?= $page == "blog" ? "current" : "" ?>">
                            <a href="blog.php">Blog</a>
                        </li>
                        <li class="<?= $page == "contact" ? "current" : "" ?>"><a href="contact.php">Contact</a></li>
                        <li class="">
                            <?php if ($loggedIn): ?>
                                <a href="user">Dashboard</a>
                            <?php else: ?>
                                <a href="user/login.php">Login</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </nav>
                <!-- Main Menu End-->
                <div class="outer-box">
                    <!-- Mobile Nav toggler -->
                    <div class="mobile-nav-toggler">
                        <span class="icon lnr-icon-bars"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo">
                    <a href="index.html"><img
                            src="images/logo-2.png"
                            style="height: 40px"
                            alt=""
                            title="" /></a>
                </div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>

            <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </ul>
            <ul class="contact-list-one">
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <i class="icon lnr-icon-phone-handset"></i>
                        <span class="title">Call Now</span>
                        <a href="tel:+92880098670">+92 (8800) - 98670</a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-envelope1"></span>
                        <span class="title">Send Email</span>
                        <a
                            href="https://html.kodesolution.com/cdn-cgi/l/email-protection#ef878a839faf8c80829f8e8196c18c8082"><span
                                class="__cf_email__"
                                data-cfemail="244c41485464474b4954454a5d0a474b49">[email&#160;protected]</span></a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-clock"></span>
                        <span class="title">Send Email</span>
                        Mon - Sat 8:00 - 6:30, Sunday - CLOSED
                    </div>
                </li>
            </ul>

            <ul class="social-links">
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- End Mobile Menu -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">
                <!--Logo-->
                <div class="logo">
                    <a href="./" title=""><img
                            src="images/logo-2.png"
                            style="height: 40px"
                            alt=""
                            title="vizox" /></a>
                </div>

                <!--Right Col-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <span class="icon lnr-icon-bars"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sticky Menu -->
</header>