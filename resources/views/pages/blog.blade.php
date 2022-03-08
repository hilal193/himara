@extends('layouts.index')

@section('content')

    @include('partials.navMobile')

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
                        <li class="menu-item dropdown">
                            <a href="#">HOME</a>
                            <ul class="submenu">
                                <li class="menu-item">
                                    <a href="index.html">Home Version 1</a>
                                </li>
                                <li class="menu-item">
                                    <a href="index2.html">Home Version 2</a>
                                </li>
                                <li class="menu-item">
                                    <a href="index3.html">Home Version 3</a>
                                </li>
                                <li class="menu-item">
                                    <a href="index4.html">Home Version 4</a>
                                </li>
                                <li class="menu-item">
                                    <a href="index5.html">Home Version 5</a>
                                </li>
                                <li class="menu-item">
                                    <a href="index6.html">Home Version 6</a>
                                </li>
                                <li class="menu-item">
                                    <a href="index7.html">Home Version 7</a>
                                </li>
                                <li class="menu-item">
                                    <a href="index8.html">Home Version 8</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#">ROOMS</a>
                            <ul class="submenu">
                                <li class="menu-item dropdown">
                                    <a href="#">Rooms</a>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="rooms-list.html">List View</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="rooms-grid.html">Grid View</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="rooms-block.html">Block View</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown">
                                    <a href="#">Room Details</a>
                                    <ul class="submenu">
                                        <li class="menu-item dropdown">
                                            <a href="#">Style 1</a>
                                            <ul class="submenu">
                                                <li class="menu-item">
                                                    <a href="room.html">Right Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="room-left-sidebar.html">Left Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="room-full-width.html">Full Width</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item dropdown">
                                            <a href="#">Style 2</a>
                                            <ul class="submenu">
                                                <li class="menu-item">
                                                    <a href="room-style2.html">Right Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="room-style2-left-sidebar.html">Left Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="room-style2-full-width.html">Full Width</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item dropdown active">
                            <a href="#">BLOG</a>
                            <ul class="submenu">
                                <li class="menu-item dropdown">
                                    <a href="#">Blog Archive</a>
                                    <ul class="submenu">
                                        <li class="menu-item dropdown">
                                            <a href="#">List View</a>
                                            <ul class="submenu">
                                                <li class="menu-item">
                                                    <a href="blog.html">Right Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-left-sidebar.html">Left Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-full-width.html">Full Width</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item dropdown">
                                            <a href="#">Classic View</a>
                                            <ul class="submenu">
                                                <li class="menu-item">
                                                    <a href="blog-classic.html">Right Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-classic-left-sidebar.html">Left Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-classic-full-width.html">Full Width</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item dropdown">
                                            <a href="#">Grid View</a>
                                            <ul class="submenu">
                                                <li class="menu-item">
                                                    <a href="blog-grid.html">Right Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-grid-left-sidebar.html">Left Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-grid-full-width.html">Full Width</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown">
                                    <a href="#">Blog Post</a>
                                    <ul class="submenu">
                                        <li class="menu-item dropdown">
                                            <a href="#">Style 1</a>
                                            <ul class="submenu">
                                                <li class="menu-item">
                                                    <a href="blog-post.html">Right Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-post-left-sidebar.html">Left Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-post-full-width.html">Full Width</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item dropdown">
                                            <a href="#">Style 2</a>
                                            <ul class="submenu">
                                                <li class="menu-item">
                                                    <a href="blog-post-style2.html">Right Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-post-style2-left-sidebar.html">Left Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-post-style2-full-width.html">Full Width</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#">PAGES</a>
                            <ul class="submenu">
                                <li class="menu-item dropdown">
                                    <a href="#">Gallery</a>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="gallery.html">Gallery 4 Columns</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="gallery-3columns.html">Gallery 3 Columns</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="gallery-2columns.html">Gallery 2 Columns</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="gallery-without-filters.html">Gallery Without Filters</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="gallery-slider.html">Gallery Slider</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown">
                                    <a href="#">More Pages</a>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="places.html">Places</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="place-details.html">Place Details</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="events.html">Events</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="event-details.html">Event Details</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="offers.html">Offers</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="offer.html">Offer Details</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="staff.html">Our Staff</a>
                                        </li>
                                        <li class="menu-item dropdown">
                                            <a href="#">Loading Page</a>
                                            <ul class="submenu">
                                                <li class="menu-item">
                                                    <a href="loading.html">Loading Page 1</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="loading-style2.html">Loading Page 2</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="loading-style3.html">Loading Page 3</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item dropdown">
                                            <a href="#">Coming Soon</a>
                                            <ul class="submenu">
                                                <li class="menu-item">
                                                    <a href="coming-soon.html">Coming Soon Image</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="coming-soon-video.html">Coming Soon Video</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="page.html">Right Sidebar Page</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="page-left-sidebar.html">Left Sidebar Page</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="page-full-width.html">Full Width Page</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="404.html">404 Style 1</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="404-style2.html">404 Style 2</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="testimonials.html">Testimonials</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown">
                                    <a href="#">Contact</a>
                                    <ul class="submenu">
                                        <li class="menu-item">
                                            <a href="contact.html">Contact Style 1</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="contact-style2.html">Contact Style 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown">
                                    <a href="#">Shop</a>
                                    <ul class="submenu">
                                        <li class="menu-item dropdown">
                                            <a href="#">Shop</a>
                                            <ul class="submenu">
                                                <li class="menu-item">
                                                    <a href="shop.html">Right Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop-left-sidebar.html">Left Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop-full-width.html">Full Width</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item dropdown">
                                            <a href="#">Shop Details</a>
                                            <ul class="submenu">
                                                <li class="menu-item">
                                                    <a href="shop-details.html">Right Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop-details-left-sidebar.html">Left Sidebar</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop-details-full-width.html">Full Width</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="restaurant.html">Our Restaurant</a>
                                </li>
                                <li class="menu-item">
                                    <a href="spa.html">Our Spa</a>
                                </li>
                                <li class="menu-item">
                                    <a href="about-us.html">About Us</a>
                                </li>
                                <li class="menu-item">
                                    <a href="location.html">Our Location</a>
                                </li>
                            </ul>
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
                        <li class="menu-item">
                            <a href="contact.html">CONTACT US</a>
                        </li>
                        <li class="menu-item menu-btn">
                            <a href="booking-form.html" class="btn">
                                <i class="fa fa-calendar"></i>
                                BOOK ONLINE</a>
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
                    <h1>Blog</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Blog</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ========== MAIN ========== -->
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-12">
                        <!-- POSTS -->
                        <div class="blog-posts">
                            <!-- POST -->
                            <article class="post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-thumbnail">
                                            <figure class="gradient-overlay-hover link-icon">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post1.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="post-details">
                                            <h2 class="post-title">
                                                <a href="blog-post.html">10 Tips for Holiday Travel</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="author">
                                                    <a href="#"><img src="images/users/admin.jpg" width="16"
                                                            alt="Image">JANE Doe</a>
                                                </span>
                                                <span class="date">
                                                    <a href="#">
                                                        <i class="fa fa-clock-o"></i>August 13, 2017</a>
                                                </span>
                                                <span class="comments">
                                                    <a href="#">
                                                        <i class="fa fa-commenting-o"></i>1 Comment</a>
                                                </span>
                                                <span class="category">
                                                    <i class="fa fa-folder-open-o"></i>IN
                                                    <a href="#">News</a>,
                                                    <a href="#">Events</a>
                                                </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                                                reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque,
                                                officiis dicta! Sit numquam qui tenetur tempore officia minus, a
                                                dignissimos ...</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- POST -->
                            <article class="post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-thumbnail">
                                            <figure class="gradient-overlay-hover link-icon">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post2.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="post-details">
                                            <h2 class="post-title">
                                                <a href="blog-post.html">Are you ready to enjoy your holidays</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="author">
                                                    <a href="#"><img src="images/users/admin.jpg" width="16"
                                                            alt="Image">JANE Doe</a>
                                                </span>
                                                <span class="date">
                                                    <a href="#">
                                                        <i class="fa fa-clock-o"></i>August 16, 2017</a>
                                                </span>
                                                <span class="comments">
                                                    <a href="#">
                                                        <i class="fa fa-commenting-o"></i>5 Comments</a>
                                                </span>
                                                <span class="category">
                                                    <i class="fa fa-folder-open-o"></i>IN
                                                    <a href="#">News</a>,
                                                    <a href="#">Events</a>
                                                </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam impedit
                                                nihil est modi amet, sapiente sed hic quaerat suscipit sunt labore, ea
                                                quas ut cumque, cum nam accusantium molestiae ipsum ...</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- POST -->
                            <article class="post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-thumbnail">
                                            <figure class="gradient-overlay-hover link-icon">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post3.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="post-details">
                                            <h2 class="post-title">
                                                <a href="blog-post.html">Honeymoon in Hotel Himara</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="author">
                                                    <a href="#"><img src="images/users/admin.jpg" width="16"
                                                            alt="Image">JANE Doe</a>
                                                </span>
                                                <span class="date">
                                                    <a href="#">
                                                        <i class="fa fa-clock-o"></i>January 03, 2018</a>
                                                </span>
                                                <span class="comments">
                                                    <a href="#">
                                                        <i class="fa fa-commenting-o"></i>3 Comments</a>
                                                </span>
                                                <span class="category">
                                                    <i class="fa fa-folder-open-o"></i>IN
                                                    <a href="#">News</a>,
                                                    <a href="#">Events</a>
                                                </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                                                assumenda eius amet obcaecati hic soluta nisi fugiat minima, molestias
                                                nam consequatur rem cupiditate, consequuntur laborum harum enim, ratione
                                                vitae doloribus ...</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- POST -->
                            <article class="post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-thumbnail">
                                            <figure class="gradient-overlay-hover link-icon">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post4.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="post-details">
                                            <h2 class="post-title">
                                                <a href="blog-post.html">Travel Gift Ideas for Every Type of
                                                    Traveler</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="author">
                                                    <a href="#"><img src="images/users/admin.jpg" width="16"
                                                            alt="Image">JANE Doe</a>
                                                </span>
                                                <span class="date">
                                                    <a href="#">
                                                        <i class="fa fa-clock-o"></i>February 03, 2018</a>
                                                </span>
                                                <span class="comments">
                                                    <a href="#">
                                                        <i class="fa fa-commenting-o"></i>2 Comments</a>
                                                </span>
                                                <span class="category">
                                                    <i class="fa fa-folder-open-o"></i>IN
                                                    <a href="#">News</a>,
                                                    <a href="#">Events</a>
                                                </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                                                reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque,
                                                officiis dicta! Sit numquam qui tenetur tempore officia minus, a
                                                dignissimos ...</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- POST -->
                            <article class="post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-thumbnail">
                                            <figure class="gradient-overlay-hover link-icon">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post5.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="post-details">
                                            <h2 class="post-title">
                                                <a href="blog-post.html">Breakfast with coffee and orange juice</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="author">
                                                    <a href="#"><img src="images/users/admin.jpg" width="16"
                                                            alt="Image">JANE Doe</a>
                                                </span>
                                                <span class="date">
                                                    <a href="#">
                                                        <i class="fa fa-clock-o"></i>February 23, 2018</a>
                                                </span>
                                                <span class="comments">
                                                    <a href="#">
                                                        <i class="fa fa-commenting-o"></i>7 Comments</a>
                                                </span>
                                                <span class="category">
                                                    <i class="fa fa-folder-open-o"></i>IN
                                                    <a href="#">News</a>,
                                                    <a href="#">Events</a>
                                                </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                                                reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque,
                                                officiis dicta! Sit numquam qui tenetur tempore officia minus, a
                                                dignissimos ...</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- POST -->
                            <article class="post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-thumbnail">
                                            <figure class="gradient-overlay-hover link-icon">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post6.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="post-details">
                                            <h2 class="post-title">
                                                <a href="blog-post.html">Running On Sand</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="author">
                                                    <a href="#"><img src="images/users/admin.jpg" width="16"
                                                            alt="Image">JANE Doe</a>
                                                </span>
                                                <span class="date">
                                                    <a href="#">
                                                        <i class="fa fa-clock-o"></i>March 04, 2018</a>
                                                </span>
                                                <span class="comments">
                                                    <a href="#">
                                                        <i class="fa fa-commenting-o"></i>0 Comments</a>
                                                </span>
                                                <span class="category">
                                                    <i class="fa fa-folder-open-o"></i>IN
                                                    <a href="#">News</a>,
                                                    <a href="#">Events</a>
                                                </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                                                reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque,
                                                officiis dicta! Sit numquam qui tenetur tempore officia minus, a
                                                dignissimos ...</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- ========== PAGINATION ========== -->
                        <nav class="pagination">
                            <ul>
                                <li class="prev-pagination">
                                    <a href="#">
                                        &nbsp;<i class="fa fa-angle-left"></i>
                                        Previous &nbsp;</a>
                                </li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>...</li>
                                <li>
                                    <a href="#">18</a>
                                </li>
                                <li>
                                    <a href="#">19</a>
                                </li>
                                <li>
                                    <a href="#">20</a>
                                </li>
                                <li class="next_pagination">
                                    <a href="#">
                                        &nbsp; Next
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp;
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- SIDEBAR -->
                    <div class="col-lg-3 col-12">
                        <div class="sidebar">
                            <aside class="widget noborder">
                                <div class="search">
                                    <form class="widget-search">
                                        <input type="search" placeholder="Search">
                                        <button class="btn-search" id="searchsubmit" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </aside>
                            <!-- WIDGET -->
                            <aside class="widget">
                                <h4 class="widget-title">CATEGORIES</h4>
                                <ul class="categories">
                                    <li>
                                        <a href="#">Travel<span class="posts-num">51</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Rooms<span class="posts-num">24</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Holidays
                                            <span class="posts-num">9</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Travel<span class="posts-num">12</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Events<span class="posts-num">28</span></a>
                                    </li>
                                </ul>
                            </aside>
                            <!-- WIDGET -->
                            <aside class="widget">
                                <h4 class="widget-title">Latest Posts</h4>
                                <div class="latest-posts">
                                    <!-- ITEM -->
                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="blog-post.html">
                                                        <img src="images/blog/blog-post1.jpg" class="img-fluid"
                                                            alt="Image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-7">
                                                <div class="post-details">
                                                    <h6 class="post-title">
                                                        <a href="blog-post.html">10 Tips for Holiday Travel</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="blog-post.html">
                                                        <img src="images/blog/blog-post2.jpg" class="img-fluid"
                                                            alt="Image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-7">
                                                <div class="post-details">
                                                    <h6 class="post-title">
                                                        <a href="blog-post.html">Are you ready to enjoy your
                                                            holidays</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="blog-post.html">
                                                        <img src="images/blog/blog-post3.jpg" class="img-fluid"
                                                            alt="Image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-7">
                                                <div class="post-details">
                                                    <h6 class="post-title">
                                                        <a href="blog-post.html">Honeymoon in Hotel Himara</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="blog-post.html">
                                                        <img src="images/blog/blog-post4.jpg" class="img-fluid"
                                                            alt="Image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-7">
                                                <div class="post-details">
                                                    <h6 class="post-title">
                                                        <a href="blog-post.html">Travel Gift Ideas for Every Type of
                                                            Traveler</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="blog-post.html">
                                                        <img src="images/blog/blog-post5.jpg" class="img-fluid"
                                                            alt="Image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-7">
                                                <div class="post-details">
                                                    <h6 class="post-title">
                                                        <a href="blog-post.html">Breakfast with coffee and orange
                                                            juic</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <!-- WIDGET -->
                            <aside class="widget">
                                <h4 class="widget-title">Tags</h4>
                                <div class="tagcloud">
                                    <a href="#">
                                        <span class="tag">Party</span></a>
                                    <a href="#">
                                        <span class="tag">Travel</span></a>
                                    <a href="#">
                                        <span class="tag">Wedding</span></a>
                                    <a href="#">
                                        <span class="tag">Food</span></a>
                                    <a href="#">
                                        <span class="tag">Music</span></a>
                                    <a href="#">
                                        <span class="tag">City</span></a>
                                    <a href="#">
                                        <span class="tag">Image</span></a>
                                    <a href="#">
                                        <span class="tag">Hotel</span></a>
                                </div>
                            </aside>
                        </div>
                    </div>
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

    @include('partials.notification')

    {{-- <div class="back-to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div> --}}



@endsection
