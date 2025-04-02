<?php
include_once "config/config.php";
session_start();
$loggedIn = false;
if (!empty($_SESSION["sdtravels_user"])) {
  $loggedIn = true;
  $uid = $_SESSION["sdtravels_user"];
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from html.kodesolution.com/2024/vizox-php/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 21:46:04 GMT -->
<!-- Added by HTTrack -->
<meta
  http-equiv="content-type"
  content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8" />
  <title>Smile Dove Travels | Home Page 01</title>
  <!-- Stylesheets -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <link
    href="plugins/revolution/css/settings.css"
    rel="stylesheet"
    type="text/css" />
  <!-- REVOLUTION SETTINGS STYLES -->
  <link
    href="plugins/revolution/css/layers.css"
    rel="stylesheet"
    type="text/css" />
  <!-- REVOLUTION LAYERS STYLES -->
  <link
    href="plugins/revolution/css/navigation.css"
    rel="stylesheet"
    type="text/css" />
  <!-- REVOLUTION NAVIGATION STYLES 
-->

  <link href="css/style.css" rel="stylesheet" />

  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
  <link rel="icon" href="images/favicon.png" type="image/x-icon" />

  <link href="intro/intro.css" rel="stylesheet" />
  <script src="js/jquery.js"></script>

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <!--[if lt IE 9
      ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script
    ><![endif]-->
  <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="intro/rev/css/rs6.css" />
</head>

<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <?php
    $page = "home";
    include "partials/header.php";
    ?>
    <!--End Main Header -->

    <!-- Banner Section Two-->
    <section class="banner-section">
      <div class="banner-carousel owl-carousel owl-theme">
        <!-- Slide Item -->
        <div class="slide-item">
          <div
            class="bg-image"
            style="background-image: url(images/main-slider/2.jpg)"></div>
          <div class="auto-container">
            <div class="content-box">
              <span class="sub-title animate-1">Get your Tourist, Student, or Work Visa approved
                hassle-free.</span>
              <h1 class="title animate-2">
                Fast & Reliable Visa Processing!
              </h1>
              <div class="btn-box animate-3">
                <a href="page-about.html" class="theme-btn btn-style-one"><span class="btn-title">Apply now</span></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide Item -->
        <div class="slide-item">
          <div
            class="bg-image"
            style="background-image: url(images/main-slider/1.jpg)"></div>
          <div class="auto-container">
            <div class="content-box">
              <span class="sub-title animate-1">Get professional guidance on universities, scholarships, and
                visa processing.</span>
              <h1 class="title animate-2">
                Your Dream of Studying Abroad Starts Here!
              </h1>
              <div class="btn-box animate-3">
                <a href="page-about.html" class="theme-btn btn-style-one"><span class="btn-title">Explore now</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--END Banner Section Two -->
    <!-- Features Section -->
    <section class="features-section" id="coaching">
      <div class="anim-icons">
        <span class="icon icon-object-1"></span>
      </div>
      <div class="auto-container">
        <div class="outer-box">
          <div class="row">
            <!-- Feature Block -->
            <div
              class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="count">01</span>
                  <i class="icon flaticon-passport"></i>
                </div>
                <div class="content-box">
                  <h5 class="title">Hassle-Free Visa Processing</h5>
                  <div class="text">
                    We handle Tourist, Student, Work, and PR Visas with a high
                    success rate and expert guidance.
                  </div>
                </div>
              </div>
            </div>

            <!-- Feature Block -->
            <div
              class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp"
              data-wow-delay="400ms">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="count">02</span>
                  <i class="icon flaticon-visa-4"></i>
                </div>
                <div class="content-box">
                  <h5 class="title">IELTS Registration & Coaching</h5>
                  <div class="text">
                    Prepare for IELTS, TOEFL, and PTE with expert trainers,
                    study materials, and mock exams.
                  </div>
                </div>
              </div>
            </div>

            <!-- Feature Block -->
            <div
              class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp"
              data-wow-delay="800ms">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="count">03</span>
                  <i class="icon flaticon-stamp-1"></i>
                </div>
                <div class="content-box">
                  <h5 class="title">Flight & Travel Bookings</h5>
                  <div class="text">
                    We offer flight booking, hotel reservations, and travel
                    insurance to make your journey smooth.
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="bottom-text">
            Trusted by Thousands of Travelers – Success Guaranteed!
          </div>
        </div>
      </div>
    </section>
    <!-- End Features Section--><!-- About Section -->
    <section class="about-section" id="about">
      <div class="auto-container">
        <div class="row align-items-center">
          <div
            class="content-column col-xl-6 col-lg-7 order-2 wow fadeInRight"
            data-wow-delay="600ms">
            <div class="inner-column">
              <div class="sec-title">
                <span class="sub-title">About our company</span>
                <h3>
                  Your Trusted Partner for Hassle-Free Travel & Visa
                  Processing
                </h3>
                <!-- <h4>Canada Based Immigration Consultant Agency.</h4> -->
                <div class="text">
                  At Smile Dove Travels, we specialize in making your travel
                  dreams a reality. Whether it's visa applications, study
                  abroad consultations, IELTS registration, or flight
                  bookings, we handle everything with expert guidance and 99%
                  success rates.
                </div>
              </div>

              <div class="row">
                <div class="about-block col-lg-6 col-md-6">
                  <div class="inner">
                    <i class="icon flaticon-worldwide"></i>
                    <h5 class="title">
                      10+ Years of Experience in Visa & Travel Services
                    </h5>
                  </div>
                </div>

                <div class="about-block col-lg-6 col-md-6">
                  <div class="inner">
                    <i class="icon flaticon-passport-16"></i>
                    <h5 class="title">Trusted by 5,000+ Clients Worldwide</h5>
                  </div>
                </div>
              </div>

              <div class="btm-box">
                <a href="page-about.html" class="theme-btn btn-style-one"><span class="btn-title">Explore now</span></a>
              </div>
            </div>
          </div>

          <!-- Image Column -->
          <div class="image-column col-xl-6 col-lg-5">
            <div class="inner-column wow fadeInLeft">
              <img
                src="images/travel/01.webp"
                class="overlay-anim wow fadeInUp rounded-4"
                alt="" />
              <div class="experience bounce-y">
                <div class="inner">
                  <i class="icon flaticon-increase"></i>
                  <div class="text"><strong>10+</strong> Work Experience</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Emd About Section --><!-- Countries Section -->
    <section class="countries-section">
      <div class="auto-container">
        <div class="bg-layer"></div>

        <div class="sec-title text-center light">
          <span class="sub-title">Countries we offer</span>
          <h2>
            Some of the Countries<br />
            We Support for Immigration.
          </h2>
        </div>

        <div class="carousel-outer">
          <!-- Countries Carousel -->
          <div class="countries-carousel owl-carousel owl-theme">
            <!-- Country Block -->
            <div class="country-block">
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <a
                      href="images/resource/country-1.jpg"
                      class="lightbox-image"><img src="images/resource/country-1.jpg" alt="" /></a>
                  </figure>
                </div>
                <div class="content-box">
                  <h5 class="title">
                    <a href="page-country-details.html">Australia</a>
                  </h5>
                  <!-- <div class="text">
                      Fusce pretium sem ism the eget mattis.
                    </div> -->
                </div>
              </div>
            </div>

            <!-- Country Block -->
            <div class="country-block">
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <a
                      href="images/resource/country-2.jpg"
                      class="lightbox-image"><img src="images/resource/country-2.jpg" alt="" /></a>
                  </figure>
                </div>
                <div class="content-box">
                  <!-- <div class="flag">
                      <img src="images/resource/flag-usa.jpg" alt="" />
                    </div> -->
                  <h5 class="title">
                    <a href="page-country-details.html">United States</a>
                  </h5>
                  <!-- <div class="text">
                      Fusce pretium sem ism the eget mattis.
                    </div> -->
                </div>
              </div>
            </div>

            <!-- Country Block -->
            <div class="country-block">
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <a
                      href="images/resource/country-3.jpg"
                      class="lightbox-image"><img src="images/resource/country-3.jpg" alt="" /></a>
                  </figure>
                </div>
                <div class="content-box">
                  <!-- <div class="flag">
                      <img src="images/resource/flag-dub.jpg" alt="" />
                    </div> -->
                  <h5 class="title">
                    <a href="page-country-details.html">Dubai</a>
                  </h5>
                  <!-- <div class="text">
                      Fusce pretium sem ism the eget mattis.
                    </div> -->
                </div>
              </div>
            </div>

            <!-- Country Block -->
            <div class="country-block">
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <a
                      href="images/resource/country-4.jpg"
                      class="lightbox-image"><img src="images/resource/country-4.jpg" alt="" /></a>
                  </figure>
                </div>
                <div class="content-box">
                  <!-- <div class="flag">
                      <img src="images/resource/flag-la.jpg" alt="" />
                    </div> -->
                  <h5 class="title">
                    <a href="page-country-details.html">Los Angeles</a>
                  </h5>
                  <!-- <div class="text">
                      Fusce pretium sem ism the eget mattis.
                    </div> -->
                </div>
              </div>
            </div>

            <!-- Country Block -->
            <div class="country-block">
              <div class="inner-box">
                <div class="image-box">
                  <figure class="image">
                    <a
                      href="images/resource/country-5.jpg"
                      class="lightbox-image"><img src="images/resource/country-5.jpg" alt="" /></a>
                  </figure>
                </div>
                <div class="content-box">
                  <!-- <div class="flag">
                      <img src="images/resource/flag-in.jpg" alt="" />
                    </div> -->
                  <h5 class="title">
                    <a href="page-country-details.html">India</a>
                  </h5>
                  <!-- <div class="text">
                      Fusce pretium sem ism the eget mattis.
                    </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Countries Section --><!-- Services Section -->
    <section class="services-section pt-0" id="services">
      <div class="anim-icons">
        <span class="icon icon-object-2"></span>
        <span class="icon icon-object-3"></span>
      </div>
      <div class="auto-container">
        <div class="sec-title">
          <div class="row">
            <div class="col-lg-7">
              <span class="sub-title">What we offer</span>
              <h2>Hassle-Free Visa Services</h2>
            </div>
            <div class="col-lg-5">
              <div class="text">
                We provide expert assistance to help you secure your visa
                smoothly and without stress. Whether you are a student,
                traveling with family, or exploring new destinations, we have
                the right visa solution for you.
              </div>
            </div>
          </div>
        </div>

        <div class="row align-items-stretch">
          <!-- Service Block -->
          <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image">
                  <a href="visa.php"><img src="images/travel/01.webp" alt="" style="width: 100%; height: 200px; object-fit: cover;" /></a>
                </figure>
                <div class="icon-box">
                  <i class="icon fa fa-graduation-cap"></i>
                </div>
              </div>
              <div class="content-box">
                <h5 class="title">
                  <a href="visa.php">Student Visa</a>
                </h5>
                <div class="text">
                  Apply for study visas hassle-free with guidance on
                  admission, IELTS, and documentation.
                </div>
                <a href="visa.php" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Service Block -->
          <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image">
                  <a href="visa.php"><img src="images/travel/13.jpg" alt="" style="width: 100%; height: 200px; object-fit: cover;" /></a>
                </figure>
                <div class="icon-box"><i class="icon fa fa-school"></i></div>
              </div>
              <div class="content-box">
                <h5 class="title">
                  <a href="visa.php">Family Visa</a>
                </h5>
                <div class="text">
                  Travel together with ease – we assist with dependent and
                  spousal visa applications.
                </div>
                <a href="visa.php" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Service Block -->
          <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
            <div class="inner-box h-100">
              <div class="image-box">
                <figure class="image">
                  <a href="visa.php"><img src="images/travel/03.webp" alt="" style="width: 100%; height: 200px; object-fit: cover;" /></a>
                </figure>
                <div class="icon-box"><i class="icon fa fa-school"></i></div>
              </div>
              <div class="content-box">
                <h5 class="title">
                  <a href="visa.php">Tourist Visa</a>
                </h5>
                <div class="text">
                  Visit your dream destinations with seamless visa application
                  support.
                </div>
                <a href="visa.php" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Services Section-->

    <!-- Features Section Two -->
    <section class="features-section-two">
      <div class="auto-container">
        <div class="outer-box">
          <span class="icon-plane"></span>
          <div class="row">
            <div class="title-column col-lg-6">
              <div class="inner-column">
                <div class="sec-title light">
                  <span class="sub-title">Visa company</span>
                  <h2>Trusted Visa & <br />Immigration Experts</h2>
                </div>
              </div>
            </div>
            <div class="features-column col-lg-6">
              <div class="inner-column">
                <figure class="image">
                  <img src="images/resource/image-1.png" alt="" />
                </figure>
                <ul class="features-list">
                  <li>Entering & Leaving Countries</li>
                  <li>Visa Processing</li>
                  <li>Country Citizenship</li>
                  <li>Settling in a New Country</li>
                  <li>24/7 Help & Support</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Features Section Two --><!-- Testimonial Section -->
    <section class="testimonial-section" id="testimonial">
      <div
        class="bg-image"
        style="background-image: url(images/background/1.jpg)"></div>
      <div class="anim-icons">
        <span class="icon icon-wide-map"></span>
      </div>
      <div class="auto-container">
        <div class="sec-title text-center light">
          <span class="sub-title">Clients feedbacks</span>
          <h2>What Our Clients Say</h2>
        </div>
        <div class="carousel-outer">
          <div class="testimonial-carousel owl-carousel owl-theme">

            <?php
            $getTest = mysqli_query($conn, "SELECT * FROM `testimonials` ORDER BY `created_at` DESC LIMIT 10");
            if (mysqli_num_rows($getTest) > 0) {
              while ($test = mysqli_fetch_assoc($getTest)) {
            ?>
                <!-- Testimonial Block -->
                <div class="testimonial-block">
                  <div class="inner-box">
                    <div class="content-box">
                      <div class="text">
                        <?= $test["message"]; ?>
                      </div>
                      <div class="info-box">
                        <h5 class="name"><?= $test["name"]; ?></h5>
                        <span class="designation"><?= $test["position"]; ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
              }
            } else {
              ?>
              <h3 class="text-center py-4 text-light">No Testimonial Yet</h3>
            <?php
            }
            ?>



          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonial Section --><!-- About Section Two -->
    <section class="about-section-two">
      <div class="auto-container">
        <div class="row">
          <div
            class="content-column col-xl-6 col-lg-12 col-md-12 wow fadeInRight"
            data-wow-delay="600ms">
            <div class="inner-column">
              <div class="sec-title">
                <span class="sub-title">Visa company</span>
                <h2>Leading Immigration Consulting Firm</h2>
                <div class="text">
                  At Smile Dove Travels, we specialize in hassle-free
                  immigration solutions tailored to your needs. Our
                  experienced team has helped thousands of clients
                  successfully relocate, study, and work abroad.
                </div>
              </div>

              <!--Skills-->
              <div class="skills">
                <!--Skill Item-->
                <div class="skill-item">
                  <div class="skill-header">
                    <h6 class="skill-title">Visa Process</h6>
                  </div>
                  <div class="skill-bar">
                    <div class="bar-inner">
                      <div class="bar progress-line" data-width="99">
                        <div class="skill-percentage">
                          <div class="count-box">
                            <span
                              class="count-text"
                              data-speed="3000"
                              data-stop="99">0</span>%
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <ul class="list-style-two">
                <li>
                  <i class="fa fa-check-circle"></i> Proven Success Rate
                </li>
                <li><i class="fa fa-check-circle"></i> Expert Guidance</li>
                <li>
                  <i class="fa fa-check-circle"></i> Personalized Consultation
                </li>
              </ul>
            </div>
          </div>

          <!-- Image Column -->
          <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
            <div class="inner-column wow fadeInLeft">
              <div class="image-box">
                <figure class="image overlay-anim wow fadeInUp">
                  <img src="images/travel/05.jpg" alt="" />
                </figure>
                <span class="float-text">Trusted by Clients</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Emd About Section Two -->
    <!-- Fun Fact Section -->
    <section class="fun-fact-section">
      <div class="bg-layer"></div>
      <div class="auto-container">
        <div class="fact-counter">
          <div class="row">
            <!-- Counter block-->
            <div
              class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
              <div class="inner">
                <i class="icon flaticon-passport-16"></i>
                <div class="count-box">
                  <span class="count-text" data-speed="3000" data-stop="10">0</span>+
                </div>
                <h6 class="counter-title">Visa Categories</h6>
              </div>
            </div>

            <!--Counter block-->
            <div
              class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp"
              data-wow-delay="300ms">
              <div class="inner">
                <i class="icon flaticon-group"></i>
                <div class="count-box">
                  <span class="count-text" data-speed="3000" data-stop="100">0</span>+
                </div>
                <h6 class="counter-title">Team Members</h6>
              </div>
            </div>

            <!--Counter block-->
            <div
              class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp"
              data-wow-delay="600ms">
              <div class="inner">
                <i class="icon flaticon-life-insurance"></i>
                <div class="count-box">
                  <span class="count-text" data-speed="3000" data-stop="2">0</span>k
                </div>
                <h6 class="counter-title">Visa Process</h6>
              </div>
            </div>

            <!--Counter block-->
            <div
              class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp"
              data-wow-delay="900ms">
              <div class="inner">
                <i class="icon flaticon-cooperation"></i>
                <div class="count-box">
                  <span class="count-text" data-speed="3000" data-stop="99">0</span>%
                </div>
                <h6 class="counter-title">Success Rates</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Fun Fact Section --><!-- Gallery Section -->
    <section class="gallery-section pt-0">
      <div class="auto-container">
        <div class="carousel-outer">
          <!--clients carousel-->
          <ul class="gallery-carousel owl-carousel owl-theme wow fadeInUp">
            <li class="gallery-item">
              <a href="images/travel/02.webp" class="lightbox-image"><img
                  src="images/travel/02.webp"
                  style="width: 100%; height: 300px; object-fit: cover"
                  alt="" /></a>
            </li>
            <li class="gallery-item">
              <a href="images/travel/03.webp" class="lightbox-image"><img
                  src="images/travel/03.webp"
                  style="width: 100%; height: 300px; object-fit: cover"
                  alt="" /></a>
            </li>
            <li class="gallery-item">
              <a href="images/travel/04.webp" class="lightbox-image"><img
                  src="images/travel/04.webp"
                  style="width: 100%; height: 300px; object-fit: cover"
                  alt="" /></a>
            </li>
            <li class="gallery-item">
              <a href="images/travel/07.jpg" class="lightbox-image"><img
                  src="images/travel/07.jpg"
                  style="width: 100%; height: 300px; object-fit: cover"
                  alt="" /></a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!--End Gallery Section --><!-- Why Choose Us -->
    <section class="why-choose-us" id="visa">
      <div class="auto-container">
        <div class="row">
          <!-- Content Column -->
          <div class="content-column col-xl-6 col-lg-12 col-md-12">
            <div class="inner-column wow fadeInRight">
              <div class="sec-title">
                <i class="sub-title">Our benefits</i>
                <h2>Few Reasons to Choose Our Company.</h2>
                <div class="text">
                  At Smile Dove Travels, we simplify your immigration journey
                  with a seamless, transparent, and successful process. Here’s
                  why thousands trust us:
                </div>
              </div>

              <div class="info-box">
                <i class="icon flaticon-job-interview"></i>
                <span class="sub-title">Benefit 01</span>
                <h4 class="title">Direct Online Interviews</h4>
                <a href="page-about.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
              </div>

              <div class="info-box">
                <i class="icon flaticon-approved-1"></i>
                <span class="sub-title">Benefit 02</span>
                <h4 class="title">Quick & Easy Process</h4>
                <a href="page-about.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
              </div>

              <div class="info-box">
                <i class="icon flaticon-passport-16"></i>
                <span class="sub-title">Benefit 03</span>
                <h4 class="title">99% Visa Approvals</h4>
                <a href="page-about.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Content Column -->
          <div class="image-column col-xl-6 col-lg-12 col-md-12">
            <div class="inner-column wow fadeInLeft">
              <div class="image-box">
                <figure class="plane">
                  <img src="images/resource/icon-plane.png" alt="" />
                </figure>
                <figure class="image">
                  <img src="images/resource/image-3.png" alt="" />
                </figure>
                <figure class="stemp">
                  <img src="images/resource/stemp-2.png" alt="" />
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Why Choose Us -->
    <!-- FAQ Section -->
    <section class="faqs-section">
      <div class="anim-icons">
        <span class="icon icon-object-2"></span>
        <span class="icon icon-object-3"></span>
      </div>
      <div class="auto-container">
        <div class="row">
          <!-- FAQ Column -->
          <div class="faq-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column">
              <div class="sec-title">
                <span class="sub-title">Our faqs</span>
                <h2>Frequently Asked Questions.</h2>
                <div class="text">
                  We understand that immigration can be complex. Here are
                  answers to some of the most common questions to help guide
                  you.
                </div>
              </div>

              <ul class="accordion-box wow fadeInRight">
                <!--Block-->
                <li class="accordion block active-block">
                  <div class="acc-btn active">
                    What services does Smile Dove Travels offer?
                    <div class="icon fa fa-angle-right"></div>
                  </div>
                  <div class="acc-content current">
                    <div class="content">
                      <div class="text">
                        We provide visa processing, study abroad consultation, IELTS coaching, pilgrimage travel, flight bookings, and more.
                      </div>
                    </div>
                  </div>
                </li>
                <!--Block-->
                <li class="accordion block">
                  <div class="acc-btn">
                    How long does visa processing take?
                    <div class="icon fa fa-angle-right"></div>
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">
                        Visa processing times vary by country. On average:
                        <ul>
                          <li>Student Visa: 3-6 weeks</li>
                          <li>Tourist Visa: 2-4 weeks</li>
                          <li>Business Visa: 1-3 weeks</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>

                <!--Block-->
                <li class="accordion block">
                  <div class="acc-btn">
                    Can I register for the IELTS exam through you?
                    <div class="icon fa fa-angle-right"></div>
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">
                        Yes! We help with official IELTS registration and exam booking.
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <!-- Form Column -->
          <div class="content-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column">
              <div class="banner-box-one">
                <i class="icon flaticon-visa-4"></i>
                <h3 class="title">
                  With 10+ years of immigration experience, we ensure a smooth
                  visa approval process.
                </h3>
              </div>
              <div class="banner-box-two">
                <figure class="image">
                  <img src="images/resource/image-4.jpg" alt="" />
                </figure>
                <h5 class="caption">Immigration Consultant Agency.</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End FAQ Section --><!--Call To Action -->
    <section class="call-to-action">
      <div class="auto-container">
        <div class="inner-container">
          <h5 class="title">
            Are you Looking for Visa Applications Just Call us!
          </h5>
          <a href="tel:+2349069503394" class="info-btn"><i class="fa fa-phone"></i> +234 906 9503 394</a>
        </div>
      </div>
    </section>
    <!--End Call To Action --><!-- News Section -->
    <section class="news-section" id="news">
      <div class="auto-container">
        <div class="sec-title text-center">
          <span class="sub-title">recent news feed</span>
          <h2>Latest News & Articles <br />From the Blog.</h2>
        </div>

        <div class="row">
          <?php
          $getBlogs = mysqli_query($conn, "SELECT * FROM `blogs` ORDER BY `id` DESC LIMIT 3");
          if (mysqli_num_rows($getBlogs) > 0) {
            while ($blog = mysqli_fetch_assoc($getBlogs)) {
          ?>
              <!-- News Block -->
              <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image shadow rounded">
                      <a href="blog-details.php?id=<?= $blog['blogid']; ?>"><img src="uploads/blog/<?= $blog["image"]; ?>" alt="" class="bg-transparent" style="width: 100%; height: 270px; object-fit: cover; border-radius: 10px;" /></a>
                    </figure>
                  </div>
                  <div class="content-box">
                    <div class="content">
                      <ul class="post-info">
                        <li><i class="fa fa-clock"></i> <?= date("d M Y", strtotime($blog["created_at"])); ?></li>
                      </ul>
                      <h4 class="title text-truncate">
                        <a href="blog-details.php?id=<?= $blog['blogid']; ?>" class="text-truncate"><?= $blog["title"]; ?></a>
                      </h4>
                      <p class="text-truncate"><?= $blog["title"]; ?></p>
                      <a href="blog-details.php?id=<?= $blog['blogid']; ?>" class="read-more">Read More <i class="fa fa-long-arrow-alt-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            }
          } else {
            ?>
            <p class="p-4 text-center">No Blog Posted Yet</p>
          <?php
          }
          ?>
        </div>
      </div>
    </section>
    <!--End News Section -->
    <!-- Main Footer -->
    <?php include "partials/footer.php"; ?>
    <!--End Main Footer -->
  </div>
  <!-- End Page Wrapper -->

  <!-- Scroll To Top -->
  <div class="scroll-to-top scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
  </div>


  <script src="js/jquery.js"></script>
  <script src="js/popper.min.js"></script>

  <!--Revolution Slider-->
  <script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script src="js/main-slider-script.js"></script>
  <!--Revolution Slider-->

  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.fancybox.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/appear.js"></script>
  <script src="js/select2.min.js"></script>
  <script src="js/owl.js"></script>
  <script src="js/mixitup.js"></script>
  <script src="js/bxslider.js"></script>
  <script src="js/script.js"></script>
</body>

</html>