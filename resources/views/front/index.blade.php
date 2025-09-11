@extends('front.layouts.app')

@section('content')
    <!-- start of hero -->
    <section class="header" id="home">
        <!-- feedback floating div -->
        <article class="floating_feedback">
            <span>
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i <= $banner->stars)
                        <i class="fa-solid fa-star colored_star"></i>
                    @else
                        <i class="fa-solid fa-star gray_star"></i>
                    @endif
                @endfor
            </span>
            <p>{{ $banner?->review }}</p>
        </article>
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
        <div class="intro" data-aos="fade-up">
            <div class="special_intro">@lang('front.about_us')</div>
        </div>
        <div class="container">
            {{-- Banner Image --}}
            <div class="why_banner" data-aos="fade-right">
                <img src="{{ $whyChooseUs->getFirstMediaUrl('why_choose_us') ?: asset('front/media/serviceBanner.jpg') }}"
                    alt="serviceBanner" />
            </div>

            <div class="why_details">
                {{-- Intro --}}
                <article class="why_intro" data-aos="fade-left" data-aos-delay="300">
                    <h1>{{ $whyChooseUs->getTranslation('title', app()->getLocale()) }}</h1>
                    <p>{{ $whyChooseUs->getTranslation('description', app()->getLocale()) }}</p>
                </article>

                {{-- Cards --}}
                <div class="why_holder">
                    <article class="why_article" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('front/media/building.png') }}" alt="buildingImg" />
                        <h3>{{ $whyChooseUs->getTranslation('card_title_1', app()->getLocale()) }}</h3>
                        <p>{{ $whyChooseUs->getTranslation('card_description_1', app()->getLocale()) }}</p>
                    </article>

                    <article class="why_article" data-aos="fade-up" data-aos-delay="400">
                        <img src="{{ asset('front/media/fan.png') }}" alt="buildingImg" />
                        <h3>{{ $whyChooseUs->getTranslation('card_title_2', app()->getLocale()) }}</h3>
                        <p>{{ $whyChooseUs->getTranslation('card_description_2', app()->getLocale()) }}</p>
                    </article>

                    <article class="why_article" data-aos="fade-up" data-aos-delay="500">
                        <img src="{{ asset('front/media/bucket.png') }}" alt="buildingImg" />
                        <h3>{{ $whyChooseUs->getTranslation('card_title_3', app()->getLocale()) }}</h3>
                        <p>{{ $whyChooseUs->getTranslation('card_description_3', app()->getLocale()) }}</p>
                    </article>

                    <article class="why_article" data-aos="fade-up" data-aos-delay="600">
                        <img src="{{ asset('front/media/gear.png') }}" alt="buildingImg" />
                        <h3>{{ $whyChooseUs->getTranslation('card_title_4', app()->getLocale()) }}</h3>
                        <p>{{ $whyChooseUs->getTranslation('card_description_4', app()->getLocale()) }}</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- end of whyChoose -->

    <!-- start of services -->
    <section class="services" id="service">
        <div class="intro" data-aos="fade-up">
            <div class="special_intro">@lang('front.services')</div>
            @lang('front.what_we_do')
            <p>@lang('front.find_out_what_we_do')</p>
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
                        <a href="#bookService">
                            <button type="button" class="btn">
                                @lang('front.book_now')
                                <span class="button_icon"><i class="fa-solid fa-arrow-right"></i></span>
                            </button>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
    <!-- end of services -->

    <!-- start of statistics -->
    <section class="experience">
        <div class="container">
            @foreach ($numbers as $number)
                <article class="statis" data-aos="fade-up">
                    <span class="counter">
                        <h2 data-target="{{ $number?->number ?? 0 }}">{{ $number?->number ?? 0 }}</h2>
                    </span>
                    <div class="statis-details">
                        <h4>{{ $number?->title ?? '' }}</h4>
                        <p>{{ $number?->description ?? '' }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
    <!-- end of statistics -->

    <!-- start of countries -->
    <section class="areas" id="countries">
        <span class="areas_overlay"></span>
        <span class="mask"></span>
        <div class="intro" data-aos="fade-up">
            <div class="special_intro">@lang('front.countries')</div>
            @lang('front.countries_we_operate_in')
            <span>@lang('front.providing_trusted_services')</span>
        </div>
        <div class="areas_maps" data-aos="fade-up">
            <article>
                <div class="map_mask USA"></div>
                <h3>@lang('front.united_states')</h3>
            </article>
            <img src="{{ asset('front/media/Arrow 13.png') }}" alt="arrowToRight" class="arrow" />
            <article>
                <div class="map_mask SAUDI"></div>
                <h3>@lang('front.saudi_arabia')</h3>
            </article>
            <!-- <img src=".media/Arrow 12.png" alt="arrowToRight" class="arrow" />

                                                                <article>
                                                                    <div class="map_mask UAE"></div>
                                                                    <h3>United Arab Emirates</h3>
                                                                </article> -->
        </div>
    </section>
    <!-- end of countries -->

    <!-- start of clientFeedback -->
    <section class="feedback" id="feedback">
        <div class="intro" data-aos="fade-up">
            <div class="special_intro">@lang('front.testimonials')</div>
            <h4>@lang('front.hear_from_out_clients')</h4>
            <p>
                @lang('front.hear_from_description')
            </p>
        </div>
        @foreach ($reviews->chunk(15) as $chunk)
            <div class="marquee">
                @foreach ($chunk as $review)
                    <article class="client_review">
                        <div class="client_rating">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $review->stars)
                                    <i class="fa-solid fa-star colored_star"></i>
                                @else
                                    <i class="fa-solid fa-star gray_star"></i>
                                @endif
                            @endfor
                        </div>
                        <div class="client_feedback">
                            {{ $review?->review }}
                        </div>
                        <div class="client_profile">
                            <span class="client_face">
                                <img src="{{ $review->getFirstMediaUrl('reviews') }}" alt="clientImg" />
                            </span>
                            <h3>{{ $review?->client }}</h3>
                        </div>
                    </article>
                @endforeach
            </div>
        @endforeach

        {{-- <div class="marquee">
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
        </div> --}}
    </section>
    <!-- end of clientFeedback -->

    <!-- start of commen questions -->
    <section class="answer_question">
        <div class="container">

            <div class="intro" data-aos="fade-up">
                <div class="special_intro">@lang('front.faqs')</div>
                <h4>@lang('front.answering_your_questions')</h4>
                <p>
                    @lang('front.get_more_questions')
                </p>
                <button type="button" class="btn">@lang('front.get_in_touch')<span class="button_icon"><i
                            class="fa-solid fa-arrow-right"></i></span></button>
            </div>

            <article class="questions" data-aos="fade-up" data-aos-delay="200">
                @foreach ($faqs as $faq)
                    <div class="question_tag ">
                        <span class="question_opener"><i class="fa-solid fa-plus"></i></span>
                        <h3>{{ $faq->question }}</h3>
                        <p>{{ $faq->answer }}</p>
                    </div>
                @endforeach
            </article>
        </div>
    </section>
    <!-- end of commen questions -->

    <!-- start of bookService -->
    <section class="book_service" id="bookService">
        <div class="intro" data-aos="fade-up">
            <div class="special_intro">@lang('front.booking')</div>
            <h4>@lang('front.book_a_Service')</h4>
            <p>
                @lang('front.schedule_service')
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
                    <input type="text" name="name" id="name" placeholder="@lang('front.your_name')"
                        autocomplete="name" inputmode="text" required value="{{ old('name') }}" />
                    <label for="name">
                        <img src="{{ asset('front/media/user.png') }}" alt="userImg" />
                    </label>
                </div>

                <!-- Email -->
                <div class="input_holder">
                    <input type="email" name="email" id="email" placeholder="@lang('front.your_email')"
                        autocomplete="email" inputmode="email" required value="{{ old('email') }}" />
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
                            <option value="" disabled selected>@lang('front.types_of_services')</option>
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
                    <input type="text" name="location" id="location" placeholder="@lang('front.location')"
                        autocomplete="street-address" inputmode="text" value="{{ old('location') }}" />
                </div>

                <!-- Date -->
                <div class="input_holder">
                    <input type="text" name="date" placeholder="@lang('front.selet_a_date')" id="date" />
                    <label for="date">
                        <img src="{{ asset('front/media/calendar.png') }}" alt="calenderImg" />
                    </label>
                </div>

                <!-- Additional Details -->
                <div class="input_holder">
                    <label for="details">
                        <img src="{{ asset('front/media/file.png') }}" alt="detailsImg" />
                    </label>
                    <input type="text" name="additional_details" id="details" placeholder="@lang('front.additional_details')"
                        autocomplete="off" inputmode="text" value="{{ old('additional_details') }}" />
                </div>

                <button type="submit" class="read_more">
                    <img src="{{ asset('front/media/bookNservice.png') }}" alt="bookNowImg" />@lang('front.book_now')
                </button>
            </form>
        </div>
    </section>
    <!-- end of bookService -->
@endsection
