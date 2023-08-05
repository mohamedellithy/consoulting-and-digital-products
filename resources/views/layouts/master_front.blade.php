@php 

$logo_url = upload_assets(get_settings('website_logo'),true);
@endphp

<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> {{ get_settings('website_name') }} |  @yield('title','الرئيسية')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta_tags')

    <link rel="shortcut icon" type="image/x-icon" href="{{ $logo_url }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/update.css') }}">
    @stack('style')
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->


    @include('inc.front_header')

    @if(flash()->message)
        <div class="show-notify {{ flash()->class }}">
            {{ flash()->message }}
        </div>
    @endif

    @if($errors->any())
        <div class="show-notify alert alert-danger">
            هناك خطأ ما يمكنك مراجعته
        </div>
    @endif
    <!-- main-area -->
    <main class="fix">

        @yield('content')
       
    </main>

    @include('inc.front_footer')

    <!-- JS here -->
    <script src="{{ asset('front/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    {{-- <script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script> --}}
    <script src="{{ asset('front/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('front/assets/js/gsap.js') }}"></script>
    <script src="{{ asset('front/assets/js/ScrollTrigger.js') }}"></script>
    <script src="{{ asset('front/assets/js/SplitText.js') }}"></script>
    <script src="{{ asset('front/assets/js/gsap-animation.js') }}"></script>
    <script src="{{ asset('front/assets/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/jquery.parallaxScroll.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/particles.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('front/assets/js/aos.js') }}"></script>
    <script src="{{ asset('front/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/main.js') }}"></script>

    <script>
        jQuery('document').ready(function(){
            setTimeout(() => {
                jQuery('.show-notify').fadeOut(5000);
            }, 3000);
        });
    </script>

    @stack('scripts')
</body>

<!-- Mirrored from themeadapt.com/tf/gerow/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2023 22:01:30 GMT -->

</html>
