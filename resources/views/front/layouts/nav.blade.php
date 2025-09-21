<!-- start of nav -->
<nav id="navbar" data-aos="fade-down">
    <div class="container" id="nav_container">
        <img src="{{ asset('front/media/coloredLogoWhite.png') }}" alt="logo" class="logo" />
        <ul>
            <span class="main_Links">
                <li class="active navLink" href="#home">
                    <img src="{{ asset('front/media/WhiteHome.png') }}" alt="homeIcon" /> @lang('front.home')
                </li>

                <li class="navLink" href="#service">
                    <img src="{{ asset('front/media/car.png') }}" alt="homeIcon" /> @lang('front.our_services')
                </li>
                <li class="navLink" href="#feedback">
                    <img src="{{ asset('front/media/testimonial.png') }}" alt="homeIcon" />
                    @lang('front.testimonials')
                </li>
                <li class="navLink" href="#bookService">
                    <img src="{{ asset('front/media/bookNservice.png') }}" alt="homeIcon" /> @lang('front.book_a_Service')
                </li>
            </span>
            <li id="lang">
                <div id="lang_changer" class="hide_lang_changer">
                    <a href="{{ route('lang.switch', 'en') }}"
                        class="langs {{ app()->getLocale() == 'en' ? 'active' : '' }}">
                        @lang('front.english')
                        <img src="{{ asset('front/media/USA.jpg') }}" alt="USA" class="en" />
                    </a>
                    <a href="{{ route('lang.switch', 'ar') }}"
                        class="langs {{ app()->getLocale() == 'ar' ? 'active' : '' }}">
                        @lang('front.arabic')
                        <span class="ar">
                            <img src="{{ asset('front/media/SAUDI.jpg') }}" alt="Saudi" />
                            <img src="{{ asset('front/media/UAE.jpg') }}" alt="UAE" />
                        </span>
                    </a>
                </div>
                <img src="{{ asset('front/media/earthIcon.png') }}" alt="homeIcon" />
                <span>
                    <span id="active_lang">{{ strtoupper(app()->getLocale()) == 'EN' ? __('front.english') : __('front.arabic') }}</span>
                    <img src="{{ asset('front/media/arrowDown.png') }}" alt="arrow" />
                </span>
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
                    <img src="{{ asset('front/media/WhiteHome.png') }}" alt="homeIcon" /> @lang('front.home')
                </li>

                <li class="navLink" href="#service">
                    <img src="{{ asset('front/media/car.png') }}" alt="homeIcon" /> @lang('front.our_services')
                </li>
                <li class="navLink" href="#feedback">
                    <img src="{{ asset('front/media/testimonial.png') }}" alt="homeIcon" />
                    @lang('front.testimonials')
                </li>
                <li class="navLink" href="#bookService">
                    <img src="{{ asset('front/media/bookNservice.png') }}" alt="homeIcon" /> @lang('front.book_a_Service')
                </li>
            </span>

    </div>

</nav>
<!-- end of nav -->
