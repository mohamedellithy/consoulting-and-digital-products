@php

$logo_url = upload_assets(get_settings('website_logo'),true);
@endphp

<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta name="google-site-verification" content="40aCnX7tt4Ig1xeLHMATAESAkTL2pn15srB14sB-EOs" />
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
    <style>
        .accordion .accordion-collapse .accordion-body{
            max-height: 500px;
            overflow: auto;
        }
        .accordion .accordion-item{
            margin: 18px;
        }
    </style>
    <script>
        // window.onload = function() {
        //     var iframe = document.getElementById('myframe');
        //     iframe.contentWindow.document.addEventListener('contextmenu', function(event) {
        //         event.preventDefault(); // Prevent the default right-click behavior
        //     });
        // };
    </script>
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
    <main class="fix" id="myfix">

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
    <script src="{{ asset('front/assets/js/iframeResizer.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/iframeResizer.contentWindow.min.js') }}"></script>

    <script>
        jQuery('document').ready(function(){
            setTimeout(() => {
                jQuery('.show-notify').fadeOut(5000);
            }, 3000);
        });
    </script>

    <script>
        //Disable right click
        const element = document.getElementById("myfix");
        element.addEventListener("contextmenu", (event) => {
            event.preventDefault(); // show a custom context menu
        });

        // const elementembed = document.getElementById("myframe");
        // elementembed.addEventListener("contextmenu", (event) => {
        //     event.preventDefault(); // show a custom context menu
        // });

        window.addEventListener('contextmenu', function(event) {
            event.preventDefault(); // Prevent the default right-click behavior
        });

        //Disable F12
        jQuery(document).keydown(function (event) {
            if (event.keyCode == 123) { // Prevent F12
                return false;
            } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I
                return false;
            }
        });

        jQuery('#myiframe').iFrameResize([{
            log: false, // Disable logging (optional)
            enableContextMenu: false, // Disable right-click (optional)
        }]);
        window.frames["myiframe"].document.oncontextmenu = function(){ return false; };
    </script>
    <script>
        jQeury('body').on('keyup','#search',function(e){
            alert('hi');
        });
    </script>
    @stack('scripts')
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-VH38BJFLC8"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-VH38BJFLC8'); </script>

</body>

</html>
