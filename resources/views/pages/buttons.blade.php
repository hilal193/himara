@extends('layouts.index')

@section('content')
    <!-- ========== MOBILE MENU ========== -->
    <nav id="mobile-menu"></nav>
    <!-- ========== WRAPPER ========== -->
    <div class="wrapper">
        <!-- ========== TOP MENU ========== -->
        <div class="topbar">
            <div class="container">
                <div class="welcome-mssg">
                    Welcome to Hotel Himara.
                </div>
                <div class="top-right-menu">
                    <ul class="top-menu">
                        <li class="d-none d-md-inline">
                            <a href="tel:+18881234567">
                                <i class="fa fa-phone"></i>+1 888 123 4567
                            </a>
                        </li>
                        <li class="d-none d-md-inline">
                            <a href="mailto:contact@hotelhimara.com">
                                <i class="fa fa-envelope-o "></i>contact@hotelhimara.com</a>
                        </li>
                        <li class="language-menu">
                            <a href="#" class="active-language"><img src="images/icons/flags/gb.png"
                                    alt="Image">English</a>
                            <ul class="languages">
                                <li class="language">
                                    <a href="#"><img src="images/icons/flags/it.png" alt="Image">Italiano</a>
                                </li>
                                <li class="language">
                                    <a href="#"><img src="images/icons/flags/gr.png" alt="Image">Ελληνικα</a>
                                </li>
                                <li class="language">
                                    <a href="#"><img src="images/icons/flags/al.png" alt="Image">Shqip</a>
                                </li>
                                <li class="language">
                                    <a href="#"><img src="images/icons/flags/fr.png" alt="Image">Français</a>
                                </li>
                                <li class="language">
                                    <a href="#"><img src="images/icons/flags/es.png" alt="Image">Español</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ========== HEADER ========== -->
        <header class="horizontal-header sticky-header" data-menutoggle="991">
            <div class="container">
                <!-- BRAND -->
                <div class="brand">
                    <div class="logo">
                        <a href="index.html">
                            <img src="images/logo.svg" alt="Hotel Himara">
                        </a>
                    </div>
                </div>
                <!-- MOBILE MENU BUTTON -->
                <div id="toggle-menu-button" class="toggle-menu-button">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
                <!-- MAIN MENU -->
                <nav id="main-menu" class="main-menu">
                    <ul class="menu">
                        <li class="menu-item dropdown active">
                            <a href="index.html">HOME</a>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="rooms-list.html">ROOMS</a>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="staff.html">TEAM</a>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="gallery.html">GALLERY</a>
                        </li>
                        <li class="menu-item">
                            <a href="contact.html">CONTACT US</a>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#">ELEMENTS</a>
                            <ul class="submenu">
                                <li class="menu-item">
                                    <a href="style-guide.html">Style Guide</a>
                                </li>
                                <li class="menu-item">
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li class="menu-item">
                                    <a href="icons.html">Icons</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-btn">
                            <a href="booking-form.html" class="btn">
                                <i class="fa fa-user"></i>
                                LOG IN</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- ========== PAGE TITLE ========== -->
        <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
      background-size: cover;">
            <div class="container">
                <div class="inner">
                    <h1>Buttons</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Buttons</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ========== MAIN ========== -->
        <main class="demo-page">
            <div class="container">
                <!-- BUTTONS -->
                <h3 class="mb50">Buttons
                </h3>
                <div class="row">
                    <div class="col-md-3">
                        <button class="btn btn-lg">LARGE BUTTON</button>
                        <button class="btn">DEFAULT BUTTON</button>
                        <button class="btn btn-sm">SMALL BUTTON</button>
                        <button class="btn btn-xs">EXTRA SMALL BUTTON</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-lg btn-dark">LARGE BUTTON</button>
                        <button class="btn btn btn-dark">DEFAULT BUTTON</button>
                        <button class="btn btn-sm btn-dark">SMALL BUTTON</button>
                        <button class="btn btn-xs btn-dark">EXTRA SMALL BUTTON</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-lg btn-gray">LARGE BUTTON</button>
                        <button class="btn btn-gray">DEFAULT BUTTON</button>
                        <button class="btn btn-sm btn-gray">SMALL BUTTON</button>
                        <button class="btn btn-xs btn-gray">EXTRA SMALL BUTTON</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-lg btn-blue">LARGE BUTTON</button>
                        <button class="btn btn-blue">DEFAULT BUTTON</button>
                        <button class="btn btn-sm btn-blue">SMALL BUTTON</button>
                        <button class="btn btn-xs btn-blue">EXTRA SMALL BUTTON</button>
                    </div>
                </div>
                <!-- BUTTONS WITH ICONS -->
                <h3 class="mb50 mt50">Buttons With Icons
                </h3>
                <div class="row">
                    <div class="col-md-3">
                        <button class="btn btn-lg">
                            <i class="fa fa-bed"></i>LARGE BUTTON</button>
                        <button class="btn">
                            <i class="fa fa-bed"></i>DEFAULT BUTTON</button>
                        <button class="btn btn-sm">
                            <i class="fa fa-bed"></i>SMALL BUTTON</button>
                        <button class="btn btn-xs">
                            <i class="fa fa-bed"></i>EXTRA SMALL BUTTON</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-lg btn-dark">
                            <i class="fa fa-bed"></i>LARGE BUTTON</button>
                        <button class="btn btn-dark">
                            <i class="fa fa-bed"></i>DEFAULT BUTTON</button>
                        <button class="btn btn-sm btn-dark">
                            <i class="fa fa-bed"></i>SMALL BUTTON</button>
                        <button class="btn btn-xs btn-dark">
                            <i class="fa fa-bed"></i>EXTRA SMALL BUTTON</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-lg btn-gray">
                            <i class="fa fa-bed"></i>LARGE BUTTON</button>
                        <button class="btn btn-gray">
                            <i class="fa fa-bed"></i>DEFAULT BUTTON</button>
                        <button class="btn btn-sm btn-gray">
                            <i class="fa fa-bed"></i>SMALL BUTTON</button>
                        <button class="btn btn-xs btn-gray">
                            <i class="fa fa-bed"></i>EXTRA SMALL BUTTON</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-lg btn-blue">
                            <i class="fa fa-bed"></i>LARGE BUTTON</button>
                        <button class="btn btn-blue">
                            <i class="fa fa-bed"></i>DEFAULT BUTTON</button>
                        <button class="btn btn-sm btn-blue">
                            <i class="fa fa-bed"></i>SMALL BUTTON</button>
                        <button class="btn btn-xs btn-blue">
                            <i class="fa fa-bed"></i>EXTRA SMALL BUTTON</button>
                    </div>
                </div>
                <!-- BUTTONS ROUNDED -->
                <h3 class="mb50 mt50">Rounded Buttons
                </h3>
                <div class="row">
                    <div class="col-md-3">
                        <button class="btn btn-lg btn-rounded">LARGE BUTTON</button>
                        <button class="btn btn-rounded">DEFAULT BUTTON</button>
                        <button class="btn btn-sm btn-rounded">SMALL BUTTON</button>
                        <button class="btn btn-xs btn-rounded">EXTRA SMALL BUTTON</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-lg btn-dark btn-rounded">LARGE BUTTON</button>
                        <button class="btn btn btn-dark btn-rounded">DEFAULT BUTTON</button>
                        <button class="btn btn-sm btn-dark btn-rounded">SMALL BUTTON</button>
                        <button class="btn btn-xs btn-dark btn-rounded">EXTRA SMALL BUTTON</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-lg btn-gray btn-rounded">LARGE BUTTON</button>
                        <button class="btn btn-gray btn-rounded">DEFAULT BUTTON</button>
                        <button class="btn btn-sm btn-gray btn-rounded">SAMLL BUTTON</button>
                        <button class="btn btn-xs btn-gray btn-rounded">EXTRA SMALL BUTTON</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-lg btn-blue btn-rounded">LARGE BUTTON</button>
                        <button class="btn btn-blue btn-rounded">DEFAULT BUTTON</button>
                        <button class="btn btn-sm btn-blue btn-rounded">SMALL BUTTON</button>
                        <button class="btn btn-xs btn-blue btn-rounded">EXTRA SMALL BUTTON</button>
                    </div>
                </div>
                <!-- BUTTONS ROUNDED -->
                <h3 class="mb50 mt50">Social Media Buttons
                </h3>
                <div class="social-media">
                    <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="#">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip" href="#">
                        <i class="fa fa-pinterest"></i>
                    </a>
                    <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="#">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a class="youtube" data-original-title="Youtube" data-toggle="tooltip" href="#">
                        <i class="fa fa-youtube"></i>
                    </a>
                    <a class="tripadvisor" data-original-title="Tripadvisor" data-toggle="tooltip" href="#">
                        <i class="fa fa-tripadvisor"></i>
                    </a>
                    <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </main>
        <!-- ========== FOOTER ========== -->
        <footer>
            <div class="footer-widgets">
                <div class="container">
                    <div class="row">
                        <!-- WIDGET -->
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <img src="images/logo.svg" class="footer-logo" alt="Hotel Himara">
                                <div class="inner">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, velit placeat
                                        assumenda incidunt dolorem aliquam!</p>
                                    <a href="https://www.tripadvisor.com/" target="_blank">
                                        <div class="tripadvisor-banner">
                                            <span class="review">Recommended</span>
                                            <img src="images/icons/tripadvisor.png" alt="Image">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- WIDGET -->
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <h3>LATEST NEWS</h3>
                                <div class="inner">
                                    <ul class="latest-posts">
                                        <li>
                                            <a href="blog-post.html">10 Tips for holiday travel</a>
                                        </li>
                                        <li>
                                            <a href="blog-post.html">Are you ready to enjoy your holidays</a>
                                        </li>
                                        <li>
                                            <a href="blog-post.html">Honeymoon at Hotel Himara</a>
                                        </li>
                                        <li>
                                            <a href="blog-post.html">Travel gift ideas for every type of traveler</a>
                                        </li>
                                        <li>
                                            <a href="blog-post.html">Breakfast with coffee and orange juice</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- WIDGET -->
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <h3>USEFUL LINKS</h3>
                                <div class="inner">
                                    <ul class="useful-links">
                                        <li>
                                            <a href="about-us.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Shop</a>
                                        </li>
                                        <li>
                                            <a href="gallery.html">Himara Gallery</a>
                                        </li>
                                        <li>
                                            <a href="location.html">Our Location</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- WIDGET -->
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <h3>Contact Info</h3>
                                <div class="inner">
                                    <ul class="contact-details">
                                        <li>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            Lorem ipsum dolor, 25, Himara
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            Phone: +1 888 123 4567
                                        </li>
                                        <li>
                                            <i class="fa fa-fax"></i>
                                            Fax: +1 888 123 4567
                                        </li>
                                        <li>
                                            <i class="fa fa-globe"></i>
                                            Web: www.hotelhimara.com
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            Email:
                                            <a href="mailto:info@site.com">contact@hotelhimara.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SUBFOOTER -->
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyrights">&copy; 2018 Hotel Himara. Designed by
                                <a href="https://eagle-themes.com/" target="_blank">Eagle-Themes</a>.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-media">
                                <a class="facebook" data-original-title="Facebook" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                                <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a class="youtube" data-original-title="Youtube" data-toggle="tooltip" href="#">
                                    <i class="fa fa-youtube"></i>
                                </a>
                                <a class="instagram" data-original-title="Instagram" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="notification"></div>
    <!-- ========== BACK TO TOP ========== -->
    <div class="back-to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    @endsection
