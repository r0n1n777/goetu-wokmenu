<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="ORIGINAL ASIAN TASTE IN EVERY DISH WITH A MODERN TWIST. WE SPECIALIZE IN THAI AND VIETNAMESE DISHES AND DESSERTS!">
        <meta name="keywords" content="thai, vietnamese, cuisine, delicacies, authentic, asian">
        <meta name="theme-color" content="#fee905">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="d-flex justify-content-center align-items-center p-2">
            <img src="{{ asset('images/logo.webp') }}" width="300px" data-aos="fade-up">
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container-fluid">
                <a class="d-block d-md-block d-lg-none navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.webp') }}" width="100px">
                    <span class="h1">WOKMENU</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header" aria-controls="header" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="header">
                    <ul class="navbar-nav bg-black">
                        <li id="left-shape" @if (request()->is('/')) class="bg-warning" @endif></li>
                        <li class="nav-item @if (request()->is('/')) bg-warning @endif">
                            <a class="h4 pb-0 px-3 nav-link text-white" href="{{ route('home') }}">
                                HOME
                            </a>
                        </li>
                        <li class="nav-item @if (request()->is('menu')) bg-warning @endif">
                            <a class="h4 pb-0 px-3 nav-link text-white" href="{{ route('menu') }}">
                                MENU
                            </a>
                        </li>
                        <li class="nav-item @if (request()->is('location')) bg-warning @endif">
                            <a class="h4 pb-0 px-3 nav-link text-white" href="{{ route('location') }}">
                                LOCATION
                            </a>
                        </li>
                        <li class="nav-item @if (request()->is('contact')) bg-warning @endif">
                            <a class="h4 pb-0 px-3 nav-link text-white" href="{{ route('contact') }}">
                                CONTACT US
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="h4 pb-0 px-3 nav-link text-white" href="#">
                                BOOK ONLINE
                            </a>
                        </li>
                        <li id="right-shape"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="header-button text-center header-line py-2" data-aos="fade-left">
            <button class="p-3 reservation-button rounded-0 border-0 h4">MAKE A RESERVATION</button>
        </div>
        @yield('content')

        <footer>
            <div class="row bg-black pb-5">
                <div class="col-5 text-center">
                    <img src="{{ asset('images/logo.webp') }}" width="200px" data-aos="fade-up">
                </div>
                <div class="col-7 d-flex flex-column justify-content-center align-items-center">
                    <p class="h1 text-white" data-aos="fade-up" data-aos-delay="100">
                        714 222 8081
                    </p>
                    <div class="row">
                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                            <a href="https://www.instagram.com/" target="_blank">
                                <img src="{{ asset('images/instagram.webp') }}" width="70px">
                            </a>
                        </div>
                        <div class="col" data-aos="fade-up" data-aos-delay="200">
                            <a href="https://www.yelp.com/" target="_blank">
                                <img src="{{ asset('images/yelp.webp') }}" width="70px">
                            </a>
                        </div>
                        <div class="col" data-aos="fade-up" data-aos-delay="300">
                            <a href="https://www.facebook.com/wokmenuu/" target="_blank">
                                <img src="{{ asset('images/facebook.webp') }}" width="70px">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>AOS.init();</script>
    </body>
</html>
