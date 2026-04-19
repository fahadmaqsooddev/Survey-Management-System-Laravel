<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Survey')</title>

    <!-- Framework CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Icon Font -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-pro.css') }}">

    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <!-- MeanMenu -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">

    <!-- Cursor -->
    <link rel="stylesheet" href="{{ asset('assets/css/cursor.css') }}">

    <!-- Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">

    <!-- Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <!-- Select -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">

    <!-- Counter -->
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        .main-menu ul li a {
            color: black !important;
            font-size: 13px;
        }

        .site_header {
            background: white !important;
        }

        .slider {
            position: relative;
            width: 100%;
            height: 700px;
            overflow: hidden;
        }

        .slider-content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
        }

        .slider-text {
            position: absolute;
            bottom: 77px;
            left: 0;
            width: 100%;
            padding: 20px;
            color: #fff;
        }

        .active {
            display: block;
        }

        @media (min-width: 320px) and (max-width: 414px) {

            .site_header {
                background: white !important;
                padding: 0 !important;
            }

            .image_slider {
                height: 700px !important;
            }

            .slider {
                height: 800px !important;
            }
        }
    </style>

    @stack('styles')
    @livewireStyles
</head>

<body>

<!-- Offcanvas area start -->
<div class="fix">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">

                <div class="offcanvas__top mb-4 d-flex justify-content-between align-items-center">
                    
                    <div class="offcanvas__logo">
                        <a href="index.php">
                            <img src="" alt="logo not found">
                        </a>
                    </div>

                    <div class="offcanvas__close">
                        <svg class="menu-close-btn" xmlns="http://www.w3.org/2000/svg" width="33.666" height="33.666" viewBox="0 0 33.666 33.666">
                            <path d="m1.414 1.414 30.83763383 30.83763383"></path>
                            <path d="M1.414 32.252 32.25163383 1.41436617"></path>
                        </svg>
                    </div>

                </div>

                <div class="mobile-menu fix mb-4"></div>

                <div class="offcanvas__contact text-center">
                    <h4 class="offcanvas__title">Contact Info</h4>

                    <div class="offcanvas__contact-text mb-2">
                        <span>
                            <a href="tel:725214456">0800 772 0431</a>
                        </span>
                    </div>

                </div>

                <div class="offcanvas__devider"></div>

            </div>
        </div>
    </div>
</div>

<div class="offcanvas__overlay"></div>
<div class="offcanvas__overlay-white"></div>
<!-- Offcanvas area end -->

<!-- Page Wrapper -->
<div class="page_wrapper">

    <!-- Header -->
    @include('layouts.partials.header')

    <!-- Main Content -->
    <main class="page_content">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.partials.footer')

</div>





<!-- JS Files -->

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-dropdown-ml-hack.js') }}"></script>

<!-- Animation -->
<script src="{{ asset('assets/js/cursor.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/tilt.min.js') }}"></script>
<script src="{{ asset('assets/js/parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>

<!-- Carousel -->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>

<!-- Popup -->
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>

<!-- Select -->
<script src="{{ asset('assets/js/nice-select.min.js') }}"></script>

<!-- Counter -->
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>

<!-- Isotope -->
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>

<!-- Meanmenu -->
<script src="{{ asset('assets/js/meanmenu.min.js') }}"></script>

<!-- Masonry -->
<script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>

<!-- Countdown -->
<script src="{{ asset('assets/js/countdown.js') }}"></script>

<!-- Type -->
<script src="{{ asset('assets/js/type.js') }}"></script>

<!-- Settings -->
<script src="{{ asset('assets/js/setting.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>


@livewireScripts
@stack('scripts')
</body>
</html>