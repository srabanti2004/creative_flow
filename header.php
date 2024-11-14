<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Title -->
    <title>CreativeFlow-Freelanceer</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon-two.png" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <!-- Slick -->
    <link rel="stylesheet" href="assets/css/slick.css" />
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <!-- line awesome -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css" />
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
    <!--==================== Preloader Start ====================-->

    <div class="loader-mask">
        <div class="loader"></div>
        <div class="loader"></div>
        <div class="loader"></div>
    </div>
    <!--==================== Preloader End ====================-->

    <!--==================== Overlay Start ====================-->
    <div class="overlay"></div>
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ==================== Scroll to Top End Here ==================== -->

    <!-- ==================== Mobile Menu Start Here ==================== -->
    <div class="mobile-menu d-lg-none d-block">
        <button type="button" class="close-button">
            <i class="las la-times"></i>
        </button>
        <div class="mobile-menu__inner">
            <a href="index.php" class="mobile-menu__logo">
                <img src="assets/images/logo/logo.png" alt="Logo" class="white-version" />
                <img src="assets/images/logo/logo-light.png" alt="Logo" class="dark-version" />
            </a>
            <div class="mobile-menu__menu">
                <ul class="nav-menu flx-align nav-menu--mobile">
                    <li class="nav-menu__item">
                        <a href="index.php" class="nav-menu__link">Home</a>
                    </li>
                    <li class="nav-menu__item">
                        <a href="about.php" class="nav-menu__link">About Us</a>
                    </li>
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="ourWorks.php" class="nav-submenu__link"> our works</a>
                            </li>
                            <!-- <li class="nav-submenu__item">
                                <a href="our_team.php" class="nav-submenu__link">
                                    Our Team</a>
                            </li> -->
                            <li class="nav-submenu__item">
                                <a href="faq.php" class="nav-submenu__link"> FAQ's</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item">
                        <a href="contact.php" class="nav-menu__link">Contact</a>
                    </li>
                </ul>
                <div class="header-right__inner d-lg-none my-3 gap-1 d-flex flx-align">
                    <!-- <a href="registration.php" class="btn btn-main pill">
              <span class="icon-left icon">
                <img src="assets/images/icons/user.svg" alt="" /> </span
              >Create Account
            </a> -->
                    <div class="call-us-now flx-align" onclick="window.open('tel:8159830701');">
                        <img src="assets/images/icons/phone.svg" alt="" class="globe-icon white-version" />
                        <img src="assets/images/icons/phone_light.svg" alt="" class="globe-icon dark-version" />
                        <span>Call us now</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==================== Mobile Menu End Here ==================== -->

    <main class="change-gradient">
        <!-- ============================ Sale Offer Start =========================== -->
        <div class="sale-offer">
            <div class="container container-full">
                <div class="sale-offer__content flx-between position-relative">
                    <div class="sale-offer__countdown">
                        <div class="countdown" data-date="14-10-2026" data-time="12:00">
                            <div class="day">
                                <span class="num"></span><span class="word"></span>
                            </div>
                            <div class="hour">
                                <span class="num"></span><span class="word"></span>
                            </div>
                            <div class="min">
                                <span class="num"></span><span class="word"></span>
                            </div>
                            <div class="sec">
                                <span class="num"></span><span class="word"></span>
                            </div>
                        </div>
                    </div>
                    <div class="sale-offer__discount flx-align gap-2">
                        <span class="sale-offer__text text-heading text-capitalize">Diwali Discount Awaits Your
                            Business!</span>
                        <strong class="sale-offer__qty text-heading font-heading">45% OFF</strong>
                        <a href="contact.php" class="btn btn-sm btn-white pill fw-500">Contact Now</a>
                    </div>
                    <div class="sale-offer__button">
                        <button type="submit" class="sale-offer__close text-heading">
                            <i class="las la-times"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================ Sale Offer End =========================== -->
        <!-- ==================== Header Start Here ==================== -->
        <header class="header">
            <div class="container container-full">
                <nav class="header-inner flx-between">
                    <!-- Logo Start -->
                    <div class="logo">
                        <a href="index.php" class="link white-version">
                            <img src="assets/images/logo/logo.png" alt="Logo" />
                        </a>
                        <a href="index.php" class="link dark-version">
                            <img src="assets/images/logo/logo-light.png" alt="Logo" />
                        </a>
                    </div>
                    <!-- Logo End  -->

                    <!-- Menu Start  -->
                    <div class="header-menu d-lg-block d-none">
                        <ul class="nav-menu flx-align">
                            <li class="nav-menu__item">
                                <a href="index.php" class="nav-menu__link">Home</a>
                            </li>
                            <li class="nav-menu__item">
                                <a href="about.php" class="nav-menu__link">About Us</a>
                            </li>
                            <li class="nav-menu__item has-submenu">
                                <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
                                <ul class="nav-submenu">
                                    <li class="nav-submenu__item">
                                        <a href="#" class="nav-submenu__link"> our works</a>
                                    </li>
                                    <!-- <li class="nav-submenu__item">
                                        <a href="our_team.php" class="nav-submenu__link">
                                            Our Team</a>
                                    </li> -->
                                    <li class="nav-submenu__item">
                                        <a href="faq.php" class="nav-submenu__link"> FAQ's</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-menu__item">
                                <a href="contact.php" class="nav-menu__link">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Menu End  -->

                    <!-- Header Right start -->
                    <div class="header-right flx-align">
                        <!-- Light Dark Mode -->
                        <div class="theme-switch-wrapper position-relative">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" class="d-none" id="checkbox" />
                                <span class="slider text-black header-right__button white-version">
                                    <img src="assets/images/icons/sun.svg" alt="" />
                                </span>
                                <span class="slider text-black header-right__button dark-version">
                                    <img src="assets/images/icons/moon.svg" alt="" />
                                </span>
                            </label>
                        </div>

                        <div class="header-right__inner gap-3 flx-align d-lg-flex d-none">
                            <!-- <a href="registration.php" class="btn btn-main pill">
                  <span class="icon-left icon">
                    <img src="assets/images/icons/user.svg" alt="" /> </span
                  >Create Account
                </a> -->
                            <div class="call-us-now flx-align">
                                <img src="assets/images/icons/phone.svg" alt="" class="globe-icon white-version" />
                                <img src="assets/images/icons/phone_light.svg" alt="" class="globe-icon dark-version" />
                                <span>Call us now</span>
                            </div>
                        </div>
                        <button type="button" class="toggle-mobileMenu d-lg-none">
                            <i class="las la-bars"></i>
                        </button>
                    </div>
                    <!-- Header Right End  -->
                </nav>
            </div>
        </header>
        <!-- ==================== Header End Here ==================== -->
        <script>
            function makeCall() {
                window.location.href = "tel:+918159830701"; // Replace with the desired phone number
            }
        </script>