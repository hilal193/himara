@extends('layouts.index')

@section('content')

@include('partials.navMobile')
    {{-- <!-- ========== MOBILE MENU ========== -->
    <nav id="mobile-menu"></nav> --}}
    <!-- ========== WRAPPER ========== -->
    <div class="wrapper">
        @include('partials.topbar')
        {{-- <!-- ========== TOP MENU ========== -->
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
        </div> --}}
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
                    <h1>UPCOMING EVENTS</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Upcoming Events</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ========== MAIN ========== -->
        <main>
            <div class="container">
                <div class="row">
                    <!-- ITEM -->
                    <div class="col-lg-3 col-md-6">
                        <div class="event-item mb30">
                            <div class="date">
                                <span class="event-calendar"></span>
                                <div class="day">31</div>
                                <div class="month">January</div>
                            </div>
                            <div class="details">
                                <h6 class="title">
                                    <a href="event-details.html">Family Party</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            </div>
                            <div class="align-center">
                                <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="col-lg-3 col-md-6">
                        <div class="event-item mb30">
                            <div class="date">
                                <span class="event-calendar"></span>
                                <div class="day">17</div>
                                <div class="month">Mars</div>
                            </div>
                            <div class="details">
                                <h6 class="title">
                                    <a href="event-details.html">Traditional Music Festival</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            </div>
                            <div class="align-center">
                                <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="col-lg-3 col-md-6">
                        <div class="event-item mb30">
                            <div class="date">
                                <span class="event-calendar"></span>
                                <div class="day">05</div>
                                <div class="month">July</div>
                            </div>
                            <div class="details">
                                <h6 class="title">
                                    <a href="event-details.html">Summer Party</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            </div>
                            <div class="align-center">
                                <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="col-lg-3 col-md-6">
                        <div class="event-item mb30">
                            <div class="date">
                                <span class="event-calendar"></span>
                                <div class="day">16</div>
                                <div class="month">August</div>
                            </div>
                            <div class="details">
                                <h6 class="title">
                                    <a href="event-details.html">Wedding Party</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            </div>
                            <div class="align-center">
                                <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="col-lg-3 col-md-6">
                        <div class="event-item mb30">
                            <div class="date">
                                <span class="event-calendar"></span>
                                <div class="day">10</div>
                                <div class="month">September</div>
                            </div>
                            <div class="details">
                                <h6 class="title">
                                    <a href="event-details.html">Pool Party</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            </div>
                            <div class="align-center">
                                <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="col-lg-3 col-md-6">
                        <div class="event-item mb30">
                            <div class="date">
                                <span class="event-calendar"></span>
                                <div class="day">20</div>
                                <div class="month">October</div>
                            </div>
                            <div class="details">
                                <h6 class="title">
                                    <a href="event-details.html">Season Closing Party</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            </div>
                            <div class="align-center">
                                <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="col-lg-3 col-md-6">
                        <div class="event-item mb30">
                            <div class="date">
                                <span class="event-calendar"></span>
                                <div class="day">06</div>
                                <div class="month">November</div>
                            </div>
                            <div class="details">
                                <h6 class="title">
                                    <a href="event-details.html">Beer Party</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            </div>
                            <div class="align-center">
                                <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="col-lg-3 col-md-6">
                        <div class="event-item mb30">
                            <div class="date">
                                <span class="event-calendar"></span>
                                <div class="day">28</div>
                                <div class="month">November</div>
                            </div>
                            <div class="details">
                                <h6 class="title">
                                    <a href="event-details.html">Latin Dance Party</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            </div>
                            <div class="align-center">
                                <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="load-more">
                    LOAD MORE EVENTS
                </div>
            </div>
        </main>
        @include('partials.footer')
        {{-- <!-- ========== FOOTER ========== -->
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
        </footer> --}}
    </div>
    @include('partials.notification')
    {{-- <div class="notification"></div> --}}
    {{-- <!-- ========== BACK TO TOP ========== -->
    <div class="back-to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div> --}}

    @endsection
