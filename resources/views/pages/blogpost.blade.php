@extends('layouts.index')

@section('content')
    <nav id="mobile-menu" class="mm-menu mm-menu_offcanvas mm-menu_position-right mm-menu_fx-menu-slide"
        aria-hidden="true">
        <div class="mm-panels">
            <div id="mm-1" class="mm-panel mm-panel_has-navbar mm-panel_opened">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="menu mmenu-init mm-listview">
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-2"><span class="mm-sronly">Open submenu (HOME)</span></a><a
                            href="#">HOME</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-3"><span class="mm-sronly">Open submenu (ROOMS)</span></a><a
                            href="#">ROOMS</a>

                    </li>
                    <li class="menu-item dropdown active mm-listitem">
                        <a class="mm-btn_next" href="#mm-8"><span class="mm-sronly">Open submenu (BLOG)</span></a><a
                            href="#">BLOG</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-16"><span class="mm-sronly">Open submenu (PAGES)</span></a><a
                            href="#">PAGES</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-25"><span class="mm-sronly">Open submenu
                                (ELEMENTS)</span></a><a href="#">ELEMENTS</a>

                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="contact.html">CONTACT US</a>
                    </li>
                    <li class="menu-item menu-btn mm-listitem">
                        <a href="booking-form.html" class="btn">
                            <i class="fa fa-calendar"></i>
                            BOOK ONLINE</a>
                    </li>
                </ul>
            </div>
            <div id="mm-2" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-1" aria-owns="mm-1"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-1">HOME</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="index.html">Home Version 1</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="index2.html">Home Version 2</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="index3.html">Home Version 3</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="index4.html">Home Version 4</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="index5.html">Home Version 5</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="index6.html">Home Version 6</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="index7.html">Home Version 7</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="index8.html">Home Version 8</a>
                    </li>
                </ul>
            </div>
            <div id="mm-3" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-1" aria-owns="mm-1"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-1">ROOMS</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-4"><span class="mm-sronly">Open submenu (Rooms)</span></a><a
                            href="#">Rooms</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-5"><span class="mm-sronly">Open submenu (Room
                                Details)</span></a><a href="#">Room Details</a>

                    </li>
                </ul>
            </div>
            <div id="mm-4" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-3" aria-owns="mm-3"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-3">Rooms</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="rooms-list.html">List View</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="rooms-grid.html">Grid View</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="rooms-block.html">Block View</a>
                    </li>
                </ul>
            </div>
            <div id="mm-5" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-3" aria-owns="mm-3"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-3">Room Details</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-6"><span class="mm-sronly">Open submenu (Style 1)</span></a><a
                            href="#">Style 1</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-7"><span class="mm-sronly">Open submenu (Style 2)</span></a><a
                            href="#">Style 2</a>

                    </li>
                </ul>
            </div>
            <div id="mm-6" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-5" aria-owns="mm-5"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-5">Style 1</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="room.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="room-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="room-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-7" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-5" aria-owns="mm-5"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-5">Style 2</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="room-style2.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="room-style2-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="room-style2-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-8" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-1" aria-owns="mm-1"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-1">BLOG</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-9"><span class="mm-sronly">Open submenu (Blog
                                Archive)</span></a><a href="#">Blog Archive</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-13"><span class="mm-sronly">Open submenu (Blog
                                Post)</span></a><a href="#">Blog Post</a>

                    </li>
                </ul>
            </div>
            <div id="mm-9" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-8" aria-owns="mm-8"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-8">Blog Archive</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-10"><span class="mm-sronly">Open submenu (List
                                View)</span></a><a href="#">List View</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-11"><span class="mm-sronly">Open submenu (Classic
                                View)</span></a><a href="#">Classic View</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-12"><span class="mm-sronly">Open submenu (Grid
                                View)</span></a><a href="#">Grid View</a>

                    </li>
                </ul>
            </div>
            <div id="mm-10" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-9" aria-owns="mm-9"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-9">List View</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-11" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-9" aria-owns="mm-9"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-9">Classic View</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog-classic.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-classic-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-classic-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-12" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-9" aria-owns="mm-9"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-9">Grid View</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog-grid.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-grid-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-grid-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-13" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-8" aria-owns="mm-8"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-8">Blog Post</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-14"><span class="mm-sronly">Open submenu (Style 1)</span></a><a
                            href="#">Style 1</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-15"><span class="mm-sronly">Open submenu (Style 2)</span></a><a
                            href="#">Style 2</a>

                    </li>
                </ul>
            </div>
            <div id="mm-14" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-13" aria-owns="mm-13"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-13">Style 1</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog-post.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-15" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-13" aria-owns="mm-13"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-13">Style 2</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-style2.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-style2-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-style2-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-16" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-1" aria-owns="mm-1"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-1">PAGES</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-17"><span class="mm-sronly">Open submenu (Gallery)</span></a><a
                            href="#">Gallery</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-18"><span class="mm-sronly">Open submenu (More
                                Pages)</span></a><a href="#">More Pages</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-21"><span class="mm-sronly">Open submenu (Contact)</span></a><a
                            href="#">Contact</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-22"><span class="mm-sronly">Open submenu (Shop)</span></a><a
                            href="#">Shop</a>

                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="restaurant.html">Our Restaurant</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="spa.html">Our Spa</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="about-us.html">About Us</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="location.html">Our Location</a>
                    </li>
                </ul>
            </div>
            <div id="mm-17" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-16" aria-owns="mm-16"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-16">Gallery</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="gallery.html">Gallery 4 Columns</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="gallery-3columns.html">Gallery 3 Columns</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="gallery-2columns.html">Gallery 2 Columns</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="gallery-without-filters.html">Gallery Without Filters</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="gallery-slider.html">Gallery Slider</a>
                    </li>
                </ul>
            </div>
            <div id="mm-18" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-16" aria-owns="mm-16"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-16">More Pages</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="places.html">Places</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="place-details.html">Place Details</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="events.html">Events</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="event-details.html">Event Details</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="offers.html">Offers</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="offer.html">Offer Details</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="staff.html">Our Staff</a>
                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-19"><span class="mm-sronly">Open submenu (Loading
                                Page)</span></a><a href="#">Loading Page</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-20"><span class="mm-sronly">Open submenu (Coming
                                Soon)</span></a><a href="#">Coming Soon</a>

                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="page.html">Right Sidebar Page</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="page-left-sidebar.html">Left Sidebar Page</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="page-full-width.html">Full Width Page</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="404.html">404 Style 1</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="404-style2.html">404 Style 2</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="testimonials.html">Testimonials</a>
                    </li>
                </ul>
            </div>
            <div id="mm-19" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-18" aria-owns="mm-18"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-18">Loading Page</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="loading.html">Loading Page 1</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="loading-style2.html">Loading Page 2</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="loading-style3.html">Loading Page 3</a>
                    </li>
                </ul>
            </div>
            <div id="mm-20" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-18" aria-owns="mm-18"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-18">Coming Soon</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="coming-soon.html">Coming Soon Image</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="coming-soon-video.html">Coming Soon Video</a>
                    </li>
                </ul>
            </div>
            <div id="mm-21" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-16" aria-owns="mm-16"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-16">Contact</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="contact.html">Contact Style 1</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="contact-style2.html">Contact Style 2</a>
                    </li>
                </ul>
            </div>
            <div id="mm-22" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-16" aria-owns="mm-16"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-16">Shop</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-23"><span class="mm-sronly">Open submenu (Shop)</span></a><a
                            href="#">Shop</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-24"><span class="mm-sronly">Open submenu (Shop
                                Details)</span></a><a href="#">Shop Details</a>

                    </li>
                </ul>
            </div>
            <div id="mm-23" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-22" aria-owns="mm-22"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-22">Shop</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="shop.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="shop-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="shop-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-24" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-22" aria-owns="mm-22"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-22">Shop Details</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="shop-details.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="shop-details-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="shop-details-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-25" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-1" aria-owns="mm-1"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-1">ELEMENTS</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="style-guide.html">Style Guide</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="icons.html">Icons</a>
                    </li>
                </ul>
            </div>
            <div id="mm-26" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="index.html">Home Version 1</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="index2.html">Home Version 2</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="index3.html">Home Version 3</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="index4.html">Home Version 4</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="index5.html">Home Version 5</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="index6.html">Home Version 6</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="index7.html">Home Version 7</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="index8.html">Home Version 8</a>
                    </li>
                </ul>
            </div>
            <div id="mm-27" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-28"><span class="mm-sronly">Open submenu (Rooms)</span></a><a
                            href="#">Rooms</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-29"><span class="mm-sronly">Open submenu (Room
                                Details)</span></a><a href="#">Room Details</a>

                    </li>
                </ul>
            </div>
            <div id="mm-28" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-27" aria-owns="mm-27"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-27">Rooms</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="rooms-list.html">List View</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="rooms-grid.html">Grid View</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="rooms-block.html">Block View</a>
                    </li>
                </ul>
            </div>
            <div id="mm-29" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-27" aria-owns="mm-27"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-27">Room Details</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-30"><span class="mm-sronly">Open submenu (Style 1)</span></a><a
                            href="#">Style 1</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-31"><span class="mm-sronly">Open submenu (Style 2)</span></a><a
                            href="#">Style 2</a>

                    </li>
                </ul>
            </div>
            <div id="mm-30" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-29" aria-owns="mm-29"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-29">Style 1</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="room.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="room-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="room-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-31" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-29" aria-owns="mm-29"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-29">Style 2</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="room-style2.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="room-style2-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="room-style2-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-32" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="rooms-list.html">List View</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="rooms-grid.html">Grid View</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="rooms-block.html">Block View</a>
                    </li>
                </ul>
            </div>
            <div id="mm-33" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-34"><span class="mm-sronly">Open submenu (Style 1)</span></a><a
                            href="#">Style 1</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-35"><span class="mm-sronly">Open submenu (Style 2)</span></a><a
                            href="#">Style 2</a>

                    </li>
                </ul>
            </div>
            <div id="mm-34" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-33" aria-owns="mm-33"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-33">Style 1</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="room.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="room-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="room-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-35" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-33" aria-owns="mm-33"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-33">Style 2</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="room-style2.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="room-style2-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="room-style2-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-36" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="room.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="room-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="room-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-37" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="room-style2.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="room-style2-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="room-style2-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-38" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-39"><span class="mm-sronly">Open submenu (Blog
                                Archive)</span></a><a href="#">Blog Archive</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-43"><span class="mm-sronly">Open submenu (Blog
                                Post)</span></a><a href="#">Blog Post</a>

                    </li>
                </ul>
            </div>
            <div id="mm-39" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-38" aria-owns="mm-38"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-38">Blog Archive</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-40"><span class="mm-sronly">Open submenu (List
                                View)</span></a><a href="#">List View</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-41"><span class="mm-sronly">Open submenu (Classic
                                View)</span></a><a href="#">Classic View</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-42"><span class="mm-sronly">Open submenu (Grid
                                View)</span></a><a href="#">Grid View</a>

                    </li>
                </ul>
            </div>
            <div id="mm-40" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-39" aria-owns="mm-39"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-39">List View</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-41" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-39" aria-owns="mm-39"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-39">Classic View</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog-classic.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-classic-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-classic-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-42" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-39" aria-owns="mm-39"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-39">Grid View</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog-grid.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-grid-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-grid-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-43" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-38" aria-owns="mm-38"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-38">Blog Post</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-44"><span class="mm-sronly">Open submenu (Style 1)</span></a><a
                            href="#">Style 1</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-45"><span class="mm-sronly">Open submenu (Style 2)</span></a><a
                            href="#">Style 2</a>

                    </li>
                </ul>
            </div>
            <div id="mm-44" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-43" aria-owns="mm-43"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-43">Style 1</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog-post.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-45" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-43" aria-owns="mm-43"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-43">Style 2</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-style2.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-style2-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-style2-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-46" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-47"><span class="mm-sronly">Open submenu (List
                                View)</span></a><a href="#">List View</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-48"><span class="mm-sronly">Open submenu (Classic
                                View)</span></a><a href="#">Classic View</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-49"><span class="mm-sronly">Open submenu (Grid
                                View)</span></a><a href="#">Grid View</a>

                    </li>
                </ul>
            </div>
            <div id="mm-47" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-46" aria-owns="mm-46"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-46">List View</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-48" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-46" aria-owns="mm-46"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-46">Classic View</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog-classic.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-classic-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-classic-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-49" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-46" aria-owns="mm-46"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-46">Grid View</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog-grid.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-grid-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-grid-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-50" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-51" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog-classic.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-classic-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-classic-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-52" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog-grid.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-grid-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-grid-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-53" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-54"><span class="mm-sronly">Open submenu (Style 1)</span></a><a
                            href="#">Style 1</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-55"><span class="mm-sronly">Open submenu (Style 2)</span></a><a
                            href="#">Style 2</a>

                    </li>
                </ul>
            </div>
            <div id="mm-54" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-53" aria-owns="mm-53"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-53">Style 1</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog-post.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-55" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-53" aria-owns="mm-53"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-53">Style 2</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-style2.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-style2-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-style2-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-56" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog-post.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-57" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-style2.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-style2-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="blog-post-style2-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-58" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-59"><span class="mm-sronly">Open submenu (Gallery)</span></a><a
                            href="#">Gallery</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-60"><span class="mm-sronly">Open submenu (More
                                Pages)</span></a><a href="#">More Pages</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-63"><span class="mm-sronly">Open submenu (Contact)</span></a><a
                            href="#">Contact</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-64"><span class="mm-sronly">Open submenu (Shop)</span></a><a
                            href="#">Shop</a>

                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="restaurant.html">Our Restaurant</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="spa.html">Our Spa</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="about-us.html">About Us</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="location.html">Our Location</a>
                    </li>
                </ul>
            </div>
            <div id="mm-59" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-58" aria-owns="mm-58"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-58">Gallery</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="gallery.html">Gallery 4 Columns</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="gallery-3columns.html">Gallery 3 Columns</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="gallery-2columns.html">Gallery 2 Columns</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="gallery-without-filters.html">Gallery Without Filters</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="gallery-slider.html">Gallery Slider</a>
                    </li>
                </ul>
            </div>
            <div id="mm-60" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-58" aria-owns="mm-58"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-58">More Pages</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="places.html">Places</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="place-details.html">Place Details</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="events.html">Events</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="event-details.html">Event Details</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="offers.html">Offers</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="offer.html">Offer Details</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="staff.html">Our Staff</a>
                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-61"><span class="mm-sronly">Open submenu (Loading
                                Page)</span></a><a href="#">Loading Page</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-62"><span class="mm-sronly">Open submenu (Coming
                                Soon)</span></a><a href="#">Coming Soon</a>

                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="page.html">Right Sidebar Page</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="page-left-sidebar.html">Left Sidebar Page</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="page-full-width.html">Full Width Page</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="404.html">404 Style 1</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="404-style2.html">404 Style 2</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="testimonials.html">Testimonials</a>
                    </li>
                </ul>
            </div>
            <div id="mm-61" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-60" aria-owns="mm-60"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-60">Loading Page</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="loading.html">Loading Page 1</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="loading-style2.html">Loading Page 2</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="loading-style3.html">Loading Page 3</a>
                    </li>
                </ul>
            </div>
            <div id="mm-62" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-60" aria-owns="mm-60"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-60">Coming Soon</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="coming-soon.html">Coming Soon Image</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="coming-soon-video.html">Coming Soon Video</a>
                    </li>
                </ul>
            </div>
            <div id="mm-63" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-58" aria-owns="mm-58"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-58">Contact</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="contact.html">Contact Style 1</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="contact-style2.html">Contact Style 2</a>
                    </li>
                </ul>
            </div>
            <div id="mm-64" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-58" aria-owns="mm-58"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-58">Shop</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-65"><span class="mm-sronly">Open submenu (Shop)</span></a><a
                            href="#">Shop</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-66"><span class="mm-sronly">Open submenu (Shop
                                Details)</span></a><a href="#">Shop Details</a>

                    </li>
                </ul>
            </div>
            <div id="mm-65" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-64" aria-owns="mm-64"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-64">Shop</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="shop.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="shop-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="shop-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-66" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-64" aria-owns="mm-64"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-64">Shop Details</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="shop-details.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="shop-details-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="shop-details-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-67" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="gallery.html">Gallery 4 Columns</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="gallery-3columns.html">Gallery 3 Columns</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="gallery-2columns.html">Gallery 2 Columns</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="gallery-without-filters.html">Gallery Without Filters</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="gallery-slider.html">Gallery Slider</a>
                    </li>
                </ul>
            </div>
            <div id="mm-68" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="places.html">Places</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="place-details.html">Place Details</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="events.html">Events</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="event-details.html">Event Details</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="offers.html">Offers</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="offer.html">Offer Details</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="staff.html">Our Staff</a>
                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-69"><span class="mm-sronly">Open submenu (Loading
                                Page)</span></a><a href="#">Loading Page</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-70"><span class="mm-sronly">Open submenu (Coming
                                Soon)</span></a><a href="#">Coming Soon</a>

                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="page.html">Right Sidebar Page</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="page-left-sidebar.html">Left Sidebar Page</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="page-full-width.html">Full Width Page</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="404.html">404 Style 1</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="404-style2.html">404 Style 2</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="testimonials.html">Testimonials</a>
                    </li>
                </ul>
            </div>
            <div id="mm-69" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-68" aria-owns="mm-68"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-68">Loading Page</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="loading.html">Loading Page 1</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="loading-style2.html">Loading Page 2</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="loading-style3.html">Loading Page 3</a>
                    </li>
                </ul>
            </div>
            <div id="mm-70" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-68" aria-owns="mm-68"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-68">Coming Soon</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="coming-soon.html">Coming Soon Image</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="coming-soon-video.html">Coming Soon Video</a>
                    </li>
                </ul>
            </div>
            <div id="mm-71" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="loading.html">Loading Page 1</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="loading-style2.html">Loading Page 2</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="loading-style3.html">Loading Page 3</a>
                    </li>
                </ul>
            </div>
            <div id="mm-72" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="coming-soon.html">Coming Soon Image</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="coming-soon-video.html">Coming Soon Video</a>
                    </li>
                </ul>
            </div>
            <div id="mm-73" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="contact.html">Contact Style 1</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="contact-style2.html">Contact Style 2</a>
                    </li>
                </ul>
            </div>
            <div id="mm-74" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-75"><span class="mm-sronly">Open submenu (Shop)</span></a><a
                            href="#">Shop</a>

                    </li>
                    <li class="menu-item dropdown mm-listitem">
                        <a class="mm-btn_next" href="#mm-76"><span class="mm-sronly">Open submenu (Shop
                                Details)</span></a><a href="#">Shop Details</a>

                    </li>
                </ul>
            </div>
            <div id="mm-75" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-74" aria-owns="mm-74"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-74">Shop</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="shop.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="shop-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="shop-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-76" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn" href="#mm-74" aria-owns="mm-74"
                        aria-haspopup="true"><span class="mm-sronly">Close submenu</span></a><a class="mm-navbar__title"
                        href="#mm-74">Shop Details</a></div>
                <ul class="submenu mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="shop-details.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="shop-details-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="shop-details-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-77" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="shop.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="shop-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="shop-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-78" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="shop-details.html">Right Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="shop-details-left-sidebar.html">Left Sidebar</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="shop-details-full-width.html">Full Width</a>
                    </li>
                </ul>
            </div>
            <div id="mm-79" class="mm-panel mm-hidden mm-panel_has-navbar" aria-hidden="true">
                <div class="mm-navbar"><a class="mm-navbar__title">Menu</a></div>
                <ul class="submenu mmenu-init mm-listview">
                    <li class="menu-item mm-listitem">
                        <a href="style-guide.html">Style Guide</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li class="menu-item mm-listitem">
                        <a href="icons.html">Icons</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="topbar mm-slideout">
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
                        <a href="#" class="active-language"><img src={{ asset("images/icons/flags/gb.png") }} alt="Image">English</a>
                        <ul class="languages">
                            <li class="language">
                                <a href="#"><img src={{ asset("images/icons/flags/it.png") }} alt="Image">Italiano</a>
                            </li>
                            <li class="language">
                                <a href="#"><img src={{ asset("images/icons/flags/gr.png") }} alt="Image">Ελληνικα</a>
                            </li>
                            <li class="language">
                                <a href="#"><img src={{ asset("images/icons/flags/al.png") }} alt="Image">Shqip</a>
                            </li>
                            <li class="language">
                                <a href="#"><img src={{ asset("images/icons/flags/fr.png") }} alt="Image">Français</a>
                            </li>
                            <li class="language">
                                <a href="#"><img src={{ asset("images/icons/flags/es.png") }} alt="Image">Español</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <header class="horizontal-header sticky-header loaded-header mobile-header mm-slideout" data-menutoggle="991">
        <div class="container">

            <div class="brand">
                <div class="logo">
                    <a href="index.html">
                        <img src={{ asset("images/logo.svg") }} alt="Hotel Himara">
                    </a>
                </div>
            </div>

            <div id="toggle-menu-button" class="toggle-menu-button">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>

            <nav id="main-menu" class="main-menu" style="display: none;">
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
    <div class="wrapper mm-page mm-slideout" id="mm-0">
        <div class="parallax-mirror"
            style="visibility: visible; z-index: 0; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 116.5px, 0px); height: 535px; width: 966px;">
        </div>





        <div class="blog-post-cover gradient-overlay op5" data-src={{ asset("images/blog/post/blog-full.jpg") }}
            data-parallax="scroll" data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0"
            style="margin-top: 0px;">
            <div class="container inner">
                <h2 class="blog-post-title">10 TIPS FOR HOLIDAY TRAVEL</h2>
                <div class="blog-post-info">
                    <img alt="" src={{ asset("images/blog/users/user1.jpg") }} class="author-avatar" width="16">
                    <p>by
                        <span>
                            <a href="#">JANE Doe</a></span>
                    </p>
                    <p>on
                        <time datetime="2017-09-27T06:52:20+00:00">September 27, 2017</time>
                    </p>
                </div>
            </div>
        </div>

        <main class="post-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-12">
                        <article class="entry">
                            <div class="details">
                                <p class="dropcap">Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                    nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                    wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                                    nisl ut aliquip ex ea
                                    <u>commodo consequat.</u>
                                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                    consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
                                    iusto odio dignissim qui blandit praesent luptatum zzril delenit...
                                </p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna
                                    <a href="#">aliquam</a>
                                    erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                    suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                    dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore
                                    eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                                    blandit praesent luptatum zzril delenit...
                                </p>
                                <blockquote>
                                    <p class="quote-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        <a href="#" data-toggle="tooltip" data-placement="top" data-trigger="hover"
                                            data-original-title="Marius Doe">Mauris
                                        </a>non laoreet dui, Morbi lacus massa, euismod ut turpis molestie, tristique
                                        sodales est There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration.
                                    </p>
                                </blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                    minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                    aliquip
                                    ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                                    velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero
                                    eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                                    dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
                                    qui blandit praesent luptatum zzril delenit...</p>
                                <figure>
                                    <img src={{ asset("images/blog/post/blog-post1.jpg") }} class="img-fluid">
                                    <figcaption>Image Caption
                                        <span class="source">
                                            <a href="#">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                                pexeles.com</a></span>
                                    </figcaption>
                                </figure>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                    minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                    aliquip
                                    ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                                    velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero
                                    eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                                    augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis
                                    eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim
                                    assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum
                                    claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt
                                    saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem
                                    consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus
                                    parum claram,
                                    anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta
                                    decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in
                                    futurum.</p>
                                <div class="row image-gallery">
                                    <div class="col-md-3">
                                        <figure>
                                            <div class="gradient-overlay-hover image-icon sm">
                                                <a href="images/blog/post/blog-post2.jpg">
                                                    <img src={{ asset("images/blog/post/blog-post2.jpg") }} class="img-fluid">
                                                </a>
                                            </div>
                                            <figcaption>Image Caption</figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-3">
                                        <figure>
                                            <div class="gradient-overlay-hover image-icon sm">
                                                <a href="images/blog/post/blog-post3.jpg">
                                                    <img src={{ asset("images/blog/post/blog-post3.jpg") }} class="img-fluid">
                                                </a>
                                            </div>
                                            <figcaption>Image Caption</figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-3">
                                        <figure>
                                            <div class="gradient-overlay-hover image-icon sm">
                                                <a href="images/blog/post/blog-post4.jpg">
                                                    <img src={{ asset("images/blog/post/blog-post4.jpg") }} class="img-fluid">
                                                </a>
                                            </div>
                                            <figcaption>Image Caption</figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-3">
                                        <figure>
                                            <div class="gradient-overlay-hover image-icon sm">
                                                <a href="images/blog/post/blog-post5.jpg">
                                                    <img src={{ asset("images/blog/post/blog-post5.jpg") }} class="img-fluid">
                                                </a>
                                            </div>
                                            <figcaption>Image Caption</figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
                                    quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus
                                    legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt
                                    lectores legere me lius quod ii legunt saepius. Claritas est etiam processus
                                    dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam
                                    littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas
                                    humanitatis
                                    per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur
                                    parum clari, fiant sollemnes in futurum.</p>
                                <div class="meta-post">
                                    <div class="tags">
                                        <span>
                                            <i class="fa fa-tags"></i>
                                            TAGS</span>
                                        <a href="#" rel="tag">Himara</a>
                                        <a href="#" rel="tag">Holiday</a>
                                        <a href="#" rel="tag">Summer</a>
                                    </div>
                                    <div class="share">
                                        <span>
                                            <i class="fa fa-share-alt"></i>
                                            SHARE</span>
                                        <div class="social-media">
                                            <a class="facebook" href="#" data-toggle="tooltip"
                                                data-original-title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a class="twitter" href="#" data-toggle="tooltip"
                                                data-original-title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a class="googleplus" href="#" data-toggle="tooltip"
                                                data-original-title="Google Plus">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                            <a class="pinterest" href="#" data-toggle="tooltip"
                                                data-original-title="Pinterest">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <div id="comments">
                            <div class="section-title">
                                <h4>COMMENTS</h4>
                                <p class="section-subtitle">Leave your comment</p>
                            </div>
                            <ul id="comments-list" class="comments-list">
                                <li>
                                    <div class="comment-main-level">
                                        <div class="comment-avatar"><img src={{ asset("images/blog/users/user1.jpg") }} alt=""></div>
                                        <div class="comment-box">
                                            <div class="comment_content">
                                                <h4 class="author-name">
                                                    <a href="#">JANE Doe</a>
                                                </h4>
                                                <a href="#comment-form" class="reply_link">Reply</a>
                                                <span class="comment_info">
                                                    <i class="fa fa-clock-o"></i>
                                                    <a href="#">
                                                        <time datetime="2017-10-01T19:56:36+00:00">October 1, 2017 at
                                                            7:56 pm</time>
                                                    </a>
                                                </span>
                                                <div class="comment_said_text">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                        aliquam erat volutpat.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="comments-list reply-list">
                                        <li>
                                            <div class="comment-avatar"><img src={{ asset("images/blog/users/user2.jpg") }} alt="">
                                            </div>
                                            <div class="comment-box">
                                                <div class="comment_content">
                                                    <h4 class="author-name">
                                                        <a href="#">
                                                            Ina Aldrich</a>
                                                    </h4>
                                                    <a href="#comment-form" class="reply_link">Edit</a>
                                                    <span class="comment_info">
                                                        <i class="fa fa-clock-o"></i>
                                                        <a href="#">
                                                            <time datetime="2017-10-01T19:56:36+00:00">October 1, 2017
                                                                at 7:56 pm</time>
                                                        </a>
                                                    </span>
                                                    <div class="comment_said_text">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                            aliquam erat volutpat, euismod tincidunt ut laoreet dolore
                                                            magna aliquam erat volutpat.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment-avatar">
                                                <img src={{ asset("images/blog/users/user3.jpg") }} alt="">
                                            </div>
                                            <div class="comment-box">
                                                <div class="comment_content">
                                                    <h4 class="author-name">
                                                        <a href="#">William Whiten</a>
                                                    </h4>
                                                    <a href="#comment-form" class="reply_link">Reply</a>
                                                    <span class="comment_info">
                                                        <i class="fa fa-clock-o"></i>
                                                        <a href="#">
                                                            <time datetime="2017-10-01T19:56:36+00:00">October 1, 2017
                                                                at 7:56 pm</time>
                                                        </a>
                                                    </span>
                                                    <div class="comment_said_text">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                            aliquam erat volutpat.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="comment-main-level">
                                        <div class="comment-avatar">
                                            <img src={{ asset("images/blog/users/user4.jpg") }} alt="">
                                        </div>
                                        <div class="comment-box">
                                            <div class="comment_content">
                                                <h4 class="author-name">
                                                    <a href="#">Amy Ellison</a>
                                                </h4>
                                                <a href="#comment-form" class="reply_link">Reply</a>
                                                <span class="comment_info">
                                                    <i class="fa fa-clock-o"></i>
                                                    <a href="#">
                                                        <time datetime="2017-10-01T19:56:36+00:00">October 1, 2017 at
                                                            7:56 pm</time>
                                                    </a>
                                                </span>
                                                <div class="comment_said_text">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                                        diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                        aliquam erat volutpat.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="section-title mt100">
                                <h4>LEAVE YOUR COMMENT</h4>
                                <p class="section-subtitle">Write your comment</p>
                            </div>
                            <form id="comment-form" class="comment-form">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="Name*">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="email" class="form-control" placeholder="Email*">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="Website">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="form-control" placeholder="Write Your Comment"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn float-right">
                                            POST YOUR COMMENT
                                        </button>
                                        <div class="align-left">*Your email address will not be published.</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

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

                            <aside class="widget">
                                <h4 class="widget-title">Latest Posts</h4>
                                <div class="latest-posts">

                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="blog-post.html">
                                                        <img src={{ asset("images/blog/blog-post1.jpg") }} class="img-fluid"
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

                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="blog-post.html">
                                                        <img src={{ asset("images/blog/blog-post2.jpg") }} class="img-fluid"
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

                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="blog-post.html">
                                                        <img src={{ asset("images/blog/blog-post3.jpg") }} class="img-fluid"
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

                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="blog-post.html">
                                                        <img src={{ asset("images/blog/blog-post4.jpg") }} class="img-fluid"
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

                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="blog-post.html">
                                                        <img src={{ asset("images/blog/blog-post5.jpg") }} class="img-fluid"
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
                                <img src={{ asset("images/logo.svg") }} class="footer-logo" alt="Hotel Himara">
                                <div class="inner">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, velit placeat
                                        assumenda incidunt dolorem aliquam!</p>
                                    <a href="https://www.tripadvisor.com/" target="_blank">
                                        <div class="tripadvisor-banner">
                                            <span class="review">Recommended</span>
                                            <img src={{ asset("images/icons/tripadvisor.png") }} alt="Image">
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
                                <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="#">
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
