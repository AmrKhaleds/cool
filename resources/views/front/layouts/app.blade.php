<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('storage/' . $settings->site_favicon) }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" />
    <link rel="stylesheet" href="{{ asset('front/css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />

    <title>{{ $settings->getLocalized('site_name') }}</title>

    <style>
        .map_mask.USA {
            min-width: 363px;
            height: 237px;
            mask-image: url("{{ asset('front/media/map1.png') }}");
            background-image: url({{ asset('front/media/Flag-United-States-of-America.webp') }});

            -webkit-mask-image: url("{{ asset('front/media/map1.png') }}");
        }

        .map_mask.SAUDI {
            mask-image: url("{{ asset('front/media/map2.png') }}");
            -webkit-mask-image: url("{{ asset('front/media/map2.png') }}");
            background-image: url({{ asset('front/media/Flag_of_Saudi_Arabia.svg.webp') }});
            height: 316px;
            min-width: 365px;
            background-size: 95%;
            background-position: center left -33%;
            background-color: #005430;
        }

        .map_mask.UAE {
            mask-image: url("{{ asset('front/media/map3.png') }}");
            -webkit-mask-image: url("{{ asset('front/media/map3.png') }}");
            background-image: url({{ asset('front/media/Flag_of_the_United_Arab_Emirates.svg.png') }});
            height: 211px;
            min-width: 275px;
        }
    </style>
</head>

<body dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

    @include('front.layouts.nav')

    @yield('content')

    @include('front.layouts.footer')
</body>
<!-- 1. Third-party libraries (that don’t depend on your code) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<!-- 2. Lenis (module must come before your script if you use it inside) -->
<script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.27/bundled/lenis.min.js"></script>
<script>
    const lenis = new Lenis({
        duration: 1.5, // close to native (default ~0.4–0.5)
        smooth: true,
        lerp: 0.5, // very small easing factor (0.05–0.1 is subtle)
    });

    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);
</script>
<!-- 3. Your own scripts (that depend on libs being loaded) -->
<script src="{{ asset('front/js/swiper.js') }}"></script>
<script src="{{ asset('front/js/script.js') }}" defer></script>

<!-- 4. Init AOS after everything -->
<script>
    AOS.init({
        duration: 1000,
        once: false,
    });
</script>

</html>
