<!-- ========== HEADER ========== -->
<header class="horizontal-header sticky-header" data-menutoggle="991">
    <div class="container">
        <!-- BRAND -->
        <div class="brand">
            <div class="logo">
                <a href="index.html">
                    <img src={{ asset('images/logo.svg') }} alt="Hotel Himara">
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
                    <a href={{ route("home") }}>HOME</a>
                </li>
                <li class="menu-item dropdown">
                    <a href={{ route("roomslist") }}>ROOMS</a>
                </li>
                <li class="menu-item dropdown">
                    <a href={{ route("staff") }}>TEAM</a>
                </li>
                <li class="menu-item dropdown">
                    <a href={{ route("gallery") }}>GALLERY</a>
                </li>
                <li class="menu-item">
                    <a href={{ route("contact") }}>CONTACT US</a>
                </li>
                {{-- <li class="menu-item dropdown">
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
                </li> --}}
                <li class="menu-item menu-btn">
                    <a href="booking-form.html" class="btn">
                        <i class="fa fa-user"></i>
                        LOG IN</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

