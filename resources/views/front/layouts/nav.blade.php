<!-- start of nav -->
<nav id="navbar" data-aos="fade-down">
    <div class="container" id="nav_container">
        <img src="{{ asset('storage/' . $settings->site_logo) }}" alt="logo" class="logo" />
        <ul>
            <span class="main_Links">
                <li class="active navLink" href="#home">
                    <img src="{{ asset('front/media/WhiteHome.png') }}" alt="homeIcon" /> home
                </li>

                <li class="navLink" href="#service">
                    <img src="{{ asset('front/media/car.png') }}" alt="homeIcon" /> Our Services
                </li>
                <li class="navLink" href="#feedback">
                    <img src="{{ asset('front/media/testimonial.png') }}" alt="homeIcon" />
                    Testimonials
                </li>
                <li class="navLink" href="#bookService">
                    <img src="{{ asset('front/media/bookNservice.png') }}" alt="homeIcon" /> Book a
                    Service
                </li>
            </span>
            <li id="lang">
                <div id="lang_changer" class="hide_lang_changer">
                    <a href="index.html" class="langs">ENGLISH <img src="{{ asset('front/media/USA.jpg') }}" alt="USA"
                            class="en" /></a>
                    <a href="./ar/index.html" class="langs">ARABIC
                        <span class="ar"><img src="{{ asset('front/media/SAUDI.jpg') }}" alt="USA" /><img src="{{ asset('front/media/UAE.jpg') }}"
                                alt="USA" /></></a>
                </div>
                <img src="{{ asset('front/media/earthIcon.png') }}" alt="homeIcon" />
                <span>
                    <span id="active_lang">English</span>
                    <img src="{{ asset('front/media/arrowDown.png') }}" alt="arrow" /></span>
            </li>
            <li id="menu">
                <i class="fa-solid fa-bars"></i>
            </li>
        </ul>
    </div>
    <div id="navigation_dropdown">
        <ul class="container">
            <span class="main_Links">
                <li class="active navLink" href="#home">
                    <img src="{{ asset('front/media/WhiteHome.png') }}" alt="homeIcon" /> home
                </li>

                <li class="navLink" href="#service">
                    <img src="{{ asset('front/media/car.png') }}" alt="homeIcon" /> Our Services
                </li>
                <li class="navLink" href="#feedback">
                    <img src="{{ asset('front/media/testimonial.png') }}" alt="homeIcon" />
                    Testimonials
                </li>
                <li class="navLink" href="#bookService">
                    <img src="{{ asset('front/media/bookNservice.png') }}" alt="homeIcon" /> Book a
                    Service
                </li>
            </span>

    </div>

</nav>
<!-- end of nav -->
