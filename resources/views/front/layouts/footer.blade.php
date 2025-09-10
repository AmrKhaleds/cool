<footer>
    <div class="container">
        <article class="footer_article aos-init aos-animate" data-aos="fade-up">
            <img src="{{ asset('storage/' . $settings->site_logo) }}"
                alt="logo" class="logo">
        </article>
        <article class="footer_article">
            <div class="links countries">
                <ul>
                    <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
                        <h3>{{ $settings->getLocalized('first_address_title') }}</h3>
                        <p>{{ $settings->getLocalized('first_address') }}</p>
                        <a href="https://wa.me/{{ $settings->first_address_phone }}"> <span><i
                                    class="fa-solid fa-phone-volume"></i></span>
                            {{ $settings->first_address_phone }}</a>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="450" class="aos-init aos-animate">
                        <h3>{{ $settings->getLocalized('second_address_title') }}</h3>
                        <p>{{ $settings->getLocalized('second_address') }}</p>
                        <a href="https://wa.me/{{ $settings->second_address_phone }}">
                            <span><i class="fa-solid fa-phone-volume"></i></span>
                            {{ $settings->second_address_phone }}</a>
                    </li>


                </ul>
            </div>
        </article>
        <article class="footer_article" id="footer_navLinks">
            <div class="links aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                <ul>
                    <li> <a href="#home" class=""><img src="{{ asset('front/media/WhiteHome.png') }}"
                                alt="homeIcon"> @lang('front.home') </a></li>

                    <li>
                        <a href="#service" class="">

                            <img src="{{ asset('front/media/car.png') }}" alt="homeIcon"> @lang('front.our_services') </a>
                    </li>

                    <li>
                        <a href="#feedback" class="">

                            <img src="{{ asset('front/media/testimonial.png') }}" alt="homeIcon">
                            @lang('front.testimonials')
                        </a>
                    </li>

                    <li>
                        <a href="#bookService" class="active">

                            <img src="{{ asset('front/media/bookNservice.png') }}" alt="homeIcon"> @lang('front.book_a_Service')
                        </a>
                    </li>
                </ul>
            </div>
        </article>
    </div>
</footer>
