<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EasyFly - Air Ticket Booking System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
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

    <!-- header-area -->
    <header>
        <div class="header-top">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="header-top-left">
                            <a href="#"><i class="fa-solid fa-plane"></i> COVID-19 update & travel requirements</a>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="header-top-right">
                            <ul>
                                <li><a href="#">Corporate Club</a></li>
                                <li><a href="#">Miles&Smiles</a></li>
                                <li><a href="#"><i class="fa-solid fa-comments"></i>Feedback</a></li>
                                <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i>Search</a></li>
                                <li><a href="#"><i class="fa-solid fa-dollar-sign"></i>Currency</a></li>
                                <li><a href="#"><i class="fa-solid fa-earth-asia"></i>EN - INT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="menu-area transparent-header">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav">
                                <div class="logo"><a href="{{route('index')}}"><img src="{{asset('assets/img/logo/easyfly.png')}}" style="max-height:97px;" alt=""></a></div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="{{ Route::currentRouteNamed('index') ? 'active' : ' ' }}"><a href="{{route('index')}}">Home</a></li>
                                        <li class="{{ Route::currentRouteNamed('about') ? 'active' : ' ' }}"><a href="{{route('about')}}">About</a></li>
                                        <li class="{{ Route::currentRouteNamed('todayflights') ? 'active' : ' ' }}"><a href="{{route('todayflights')}}">Flights</a>
                                            <!-- <ul class="submenu">
                                                    <li><a href="booking-list.html">Booking List</a></li>
                                                    <li><a href="booking-details.html">Booking Details</a></li>
                                                </ul> -->
                                        </li>
                                        <li class="menu-item-has-children {{ Route::currentRouteNamed('blog-details') ? 'active' : ' ' }} {{ Route::currentRouteNamed('blog') ? 'active' : ' ' }}"><a href={{route('blog')}}>Blog</a>
                                            {{-- <ul class="submenu ">
                                                    <li> <a href="{{route('blog')}}">Our Blog</a>
                                        </li>
                                        <li class="{{ Route::currentRouteNamed('blog-details') ? 'active' : ' ' }}"><a href="{{route('blog-details')}}">Blog Details</a></li>
                                    </ul> --}}
                                    </li>
                                    <li class="{{ Route::currentRouteNamed('contact') ? 'active' : ' ' }}"><a href="{{route('contact')}}">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="header-action d-none d-md-block">
                                    <ul>
                                        <!-- <li class="country"><a href="#">usd <img src="assets/img/icon/united-states.png" alt=""></a></li> -->
                                        <!-- <li class="question"><a href="contact.html">?</a></li> -->
                                        @guest
                                        <li class="header-btn"><a href="{{route('register')}}" class="btn">Register</a></li>
                                        <li class="header-btn sign-in"><a href="{{route('login')}}" class="btn">Sign In</a></li>
                                        @else
                                        @if (Auth::user()->role=='1')
                                        <li class="header-btn"><a href="{{route('dashboard')}}" class="btn">{{ Auth::user()->name }}</a></li>
                                        @else
                                        <li class="header-btn"><a href="{{route('user')}}" class="btn">{{ Auth::user()->name }}</a></li>
                                        @endif
                                        <li class="header-btn sign-in"><a href="{{route('userlogout')}}" class="btn">Log out</a></li>
                                        @endguest
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <nav class="menu-box">
                                <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
                                <div class="nav-logo"><a href="index.html"><img src="{{asset('assets/img/logo/easyfly.png')}}" alt="" title=""></a>
                                </div>
                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix">
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
                            <div class="nav-logo"><a href="index.html"><img src="{{asset('assets/img/logo/easyfly.png')}}" alt="" title=""></a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- header-area-end -->