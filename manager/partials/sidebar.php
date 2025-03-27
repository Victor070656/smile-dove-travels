<div class="app-sidebar">
    <!-- Sidebar Logo -->
    <div class="logo-box">
        <a href="index-2.html" class="logo-dark">
            <img src="assets/images/logo-sm.png" class="logo-sm" alt="logo sm">
            <img src="assets/images/logo-dark.png" class="logo-lg" alt="logo dark">
        </a>

        <a href="index-2.html" class="logo-light">
            <img src="assets/images/logo-sm.png" class="logo-sm" alt="logo sm">
            <img src="assets/images/logo-light.png" class="logo-lg" alt="logo light">
        </a>
    </div>

    <div class="scrollbar" data-simplebar>

        <ul class="navbar-nav" id="navbar-nav">

            <li class="menu-title">Menu...</li>

            <li class="nav-item">
                <a class="nav-link" href="./">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:widget-2-outline"></iconify-icon>
                    </span>
                    <span class="nav-text"> Dashboard </span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarMultiLevelDemo" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarMultiLevelDemo">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:share-circle-outline"></iconify-icon>
                    </span>
                    <span class="nav-text"> Hotel </span>
                </a>
                <div class="collapse" id="sidebarMultiLevelDemo">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="add-hotel.php">Add Hotel</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="hotels.php">
                                <span> Hotels</span>
                            </a>

                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#booking" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="booking">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:share-circle-outline"></iconify-icon>
                    </span>
                    <span class="nav-text"> Bookings </span>
                </a>
                <div class="collapse" id="booking">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="hotel-reservations.php">
                                Hotel Reservations
                            </a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="flight-bookings.php">
                                <span>Flight Bookings</span>
                            </a>

                        </li>
                    </ul>
                </div>
            </li>


        </ul>
    </div>
</div>