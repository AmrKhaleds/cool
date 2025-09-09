@extends('front.layouts.app')

@section('content')
    <!-- start of hero -->
    <section class="header" id="home">
        <span class="mask"></span>
        <span class="hero_overlay">
            <img src="{{ $banner?->getFirstMediaUrl('banners') ?: asset('front/media/heroImg.png') }}" alt="heroImg" />
        </span>
        <div class="container">
            <article class="hero_intro" data-aos="zoom-in" data-aos-delay="300">
                <div class="hero_intro">
                    <h1>{{ $banner?->title ?? 'Default Title' }}</h1>
                    <h3>{{ $banner?->description ?? 'Default Description' }}</h3>
                    <a href="{{ $banner?->link ?? '#' }}" class="btn">
                        {{ $banner?->link_title ?? 'Default Button' }}
                        <span class="button_icon"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>
            </article>
        </div>
    </section>
    <!-- end of hero -->



    <!-- start of whyChoose -->
    <section class="why" id="about">
        <div class="container">
            <div class="why_banner" data-aos="fade-right">
                <img src="{{ asset('front/media/serviceBanner.jpg') }}" alt="serviceBanner" />
            </div>
            <div class="why_details">
                <article class="why_intro" data-aos="fade-left" data-aos-delay="300">
                    <h1>Why People Choose Professional Cool?</h1>
                    <p>
                        Stay cool and comfortable all year round with our professional air
                        conditioning services. From installation and regular maintenance
                        to fast, reliable repairs, we provide tailored solutions that keep
                        your home or business at the perfect temperature.
                    </p>
                </article>
                <div class="why_holder">
                    <article class="why_article" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('front/media/building.png') }}" alt="buildingImg" />
                        <h3>Residential & Commercial HVAC</h3>
                        <p>
                            Tailored heating, ventilation, and air conditioning systems for
                            homes and businesses.
                        </p>
                    </article>
                    <article class="why_article" data-aos="fade-up" data-aos-delay="400">
                        <img src="{{ asset('front/media/fan.png') }}" alt="buildingImg" />
                        <h3>Commercial Refrigeration</h3>
                        <p>
                            High-performance refrigerators and freezers designed for
                            commercial needs.
                        </p>
                    </article>
                    <article class="why_article" data-aos="fade-up" data-aos-delay="500">
                        <img src="{{ asset('front/media/bucket.png') }}" alt="buildingImg" />
                        <h3>Walk-in Coolers & Freezers</h3>
                        <p>
                            Custom cold storage solutions for restaurants, supermarkets, and
                            warehouses.
                        </p>
                    </article>
                    <article class="why_article" data-aos="fade-up" data-aos-delay="600">
                        <img src="{{ asset('front/media/gear.png') }}" alt="buildingImg" />
                        <h3>Preventive Maintenance</h3>
                        <p>
                            Regular check-ups to ensure optimal performance and prevent
                            costly breakdowns.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- end of whyChoose -->


    <!-- start of services -->
    <section class="services" id="service">
        <div class="intro" data-aos="fade-up">
            Discover Expert HVAC Services Today
        </div>
        <div class="container">
            @foreach ($services as $service)
                <article class="service_article" data-aos="zoom-in-up">
                    <div class="service_banner">
                        <img src="{{ $service->getFirstMediaUrl('services') ?: asset('front/media/default-service.jpg') }}"
                            alt="{{ $service->getTranslation('title', app()->getLocale()) }}" />
                    </div>
                    <div class="service_details">
                        <div>
                            <h3>{{ $service->getTranslation('title', app()->getLocale()) }}</h3>
                            <p>{{ $service->getTranslation('description', app()->getLocale()) }}</p>
                        </div>
                        <div class="service_discount">
                            <h4>{{ number_format($service->discount) ?? 0 }}% <span>off</span></h4>
                            <p>{{ $service->getTranslation('keywords', app()->getLocale()) }}</p>
                        </div>
                        <button type="button" class="btn">
                            BOOK NOW
                            <span class="button_icon"><i class="fa-solid fa-arrow-right"></i></span>
                        </button>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
    <!-- end of services -->




    <!-- start of countries -->
    <section class="areas" id="countries">
        <span class="areas_overlay"></span>
        <span class="mask"></span>
        <div class="intro" data-aos="fade-up">
            countries we operate in
            <span>Providing trusted services</span>
        </div>
        <div class="areas_maps" data-aos="fade-up">
            <article>
                <div class="map_mask USA"></div>
                <h3>United States</h3>
            </article>
            <img src="{{ asset('front/media/Arrow 13.png') }}" alt="arrowToRight" class="arrow" />
            <article>
                <div class="map_mask SAUDI"></div>
                <h3>saudi Arabia</h3>
            </article>
            <!-- <img src=".media/Arrow 12.png" alt="arrowToRight" class="arrow" />

                    <article>
                        <div class="map_mask UAE"></div>
                        <h3>United Arab Emirates</h3>
                    </article> -->
        </div>
    </section>
    <!-- end of countries -->



    <!-- start of statistics -->
    <section class="experience">
        <div class="container">
            <article class="statis" data-aos="fade-up">
                <span class="counter">
                    <h2 data-target="8">0</h2>
                </span>
                <div class="statis-details">
                    <h4>Years Experience</h4>
                    <p>improving homes with expert craftsmanship for years</p>
                </div>
            </article>

            <article class="statis" data-aos="fade-up" data-aos-delay="200">
                <span class="counter">
                    <h2 data-target="250">0</h2>
                </span>
                <div class="statis-details">
                    <h4>Projects Completed</h4>
                    <p>over 250 successful projects delivered with quality and care</p>
                </div>
            </article>
            <article class="statis" data-aos="fade-up" data-aos-delay="300">
                <span class="counter">
                    <!-- <i class="fa-solid fa-users"></i> -->
                    <h2 data-target="30">0</h2>
                </span>
                <div class="statis-details">
                    <h4>Skilled Tradespeople</h4>
                    <p>our team of 30 experts ensures top-quality results</p>
                </div>
            </article>
            <article class="statis" data-aos="fade-up" data-aos-delay="300">
                <span class="counter">
                    <!-- <i class="fa-solid fa-users"></i> -->
                    <h2 data-target="100">0</h2>
                    <span style="font-size: 4rem">%</span>
                </span>
                <div class="statis-details">
                    <h4>Skilled Tradespeople</h4>
                    <p>our team of 30 experts ensures top-quality results</p>
                </div>
            </article>
        </div>
    </section>
    <!-- end of statistics -->

    <!-- start of clientFeedback -->
    <section class="feedback" id="feedback">
        <div class="intro" data-aos="fade-up">
            <h4>Hear from our clients</h4>
            <p>
                Hear from our happy clients about their experience working with Refit
                and the quality of our craftsmanship.
            </p>
        </div>
        <div class="marquee">
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    From the first consultation to the final touches, Refit delivered on
                    every promise. Our home extension is exactly what we
                    wanted—spacious, modern, and beautifully finished!
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
        </div>
        <div class="marquee">
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    From the first consultation to the final touches, Refit delivered on
                    every promise. Our home extension is exactly what we
                    wanted—spacious, modern, and beautifully finished!
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
            <article class="client_review">
                <div class="client_rating">
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star colored_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                    <i class="fa-solid fa-star gray_star"></i>
                </div>
                <div class="client_feedback">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    architecto ipsam accusamus tempora autem reiciendis temporibus,
                    inventore, laboriosam aspernatur est tempore deserunt adipisci
                    tenetur saepe enim. Facilis harum esse doloremque?
                </div>
                <div class="client_profile">
                    <span class="client_face"><img src="{{ asset('front/media/client.jpeg') }}"
                            alt="clientImg" /></span>
                    <h3>Charlotte Harris</h3>
                </div>
            </article>
        </div>
    </section>
    <!-- end of clientFeedback -->

    <!-- start of bookService -->
    <section class="who_we" id="bookService">
        <div class="intro" data-aos="fade-up">
            <h4>Book a Service</h4>
            <p>
                Schedule your service in just a few clicks – fast, easy, and reliable.
            </p>
        </div>
        <div class="container">
            {{-- Handel Erros --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="floating_fieldset" data-aos="fade-up" method="POST"
                action="{{ route('front.booking_service') }}">
                @csrf
                <!-- Name -->
                <div class="input_holder">
                    <input type="text" name="name" id="name" placeholder="Your Name" autocomplete="name"
                        inputmode="text" required value="{{ old('name') }}" />
                    <label for="name">
                        <img src="{{ asset('front/media/user.png') }}" alt="userImg" />
                    </label>
                </div>

                <!-- Email -->
                <div class="input_holder">
                    <input type="email" name="email" id="email" placeholder="Your Email" autocomplete="email"
                        inputmode="email" required value="{{ old('email') }}" />
                    <label for="email">
                        <img src="{{ asset('front/media/email.png') }}" alt="emailImg" />
                    </label>
                </div>

                <!-- Custom Select -->
                <div class="input_holder">
                    <label for="service">
                        <img src="{{ asset('front/media/blackCar.png') }}" alt="carImg" />
                    </label>

                    <div class="select_wrapper">
                        <select name="service" id="service">
                            <option value="" disabled selected>Types Of Service</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->title }}"
                                    {{ old('service') == $service->title ? 'selected' : '' }}>
                                    {{ $service->title }}
                                </option>
                            @endforeach
                        </select>

                        <span class="select_arrow">
                            <img src="{{ asset('front/media/arrowDown.png') }}" alt="arrowDown" />
                        </span>

                    </div>
                </div>
                <!-- Location -->
                <div class="input_holder">
                    <label for="location">
                        <img src="{{ asset('front/media/location.png') }}" alt="locationImg" />
                    </label>
                    <input type="text" name="location" id="location" placeholder="Location"
                        autocomplete="street-address" inputmode="text" value="{{ old('location') }}" />
                </div>

                <!-- Date -->
                <div class="input_holder">
                    <input type="date" name="date" id="date" autocomplete="off" inputmode="numeric" />
                    <label for="date">
                        <img src="{{ asset('front/media/calendar.png') }}" alt="calenderImg"
                            value="{{ old('date') }}" />
                    </label>
                </div>

                <!-- Additional Details -->
                <div class="input_holder">
                    <label for="details">
                        <img src="{{ asset('front/media/file.png') }}" alt="detailsImg" />
                    </label>
                    <input type="text" name="additional_details" id="details" placeholder="Additional Details"
                        autocomplete="off" inputmode="text" value="{{ old('additional_details') }}" />
                </div>

                <button type="submit" class="read_more">
                    <img src="{{ asset('front/media/bookNservice.png') }}" alt="bookNowImg" />BOOK NOW
                </button>
            </form>
        </div>
    </section>
    <!-- end of bookService -->
@endsection
