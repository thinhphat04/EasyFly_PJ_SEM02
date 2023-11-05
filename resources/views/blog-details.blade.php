{{-- <!doctype html>
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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body class="white-background">


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
        <div id="sticky-header" class="menu-area menu-style-two">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav">
                                <div class="logo"><a href="{{route('index')}}"><img src="assets/img/logo/easyfly.png" style="max-height: 97px;" alt=""></a></div>
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
                                        <li class="active menu-item-has-children"><a href="#">Blog</a>
                                            <ul class=" submenu">
                                                <li> <a href="{{route('blog')}}">Our Blog</a></li>
                                                <li class="{{ Route::currentRouteNamed('blog-details') ? 'active' : ' ' }}"><a href="{{route('blog-details')}}">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="{{ Route::currentRouteNamed('contact') ? 'active' : ' ' }}"><a href="{{route('contact')}}">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="header-action d-none d-md-block">
                                    <ul>
                                        <!-- <li class="country"><a href="#">usd <img src="assets/img/icon/united-states.png" alt=""></a></li>
                                        <li class="question"><a href="contact.html">?</a></li> -->
                                        <li class="header-btn"><a href="contact.html" class="btn">Register</a></li>
                                        <li class="header-btn sign-in"><a href="contact.html" class="btn">Sign In</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <nav class="menu-box">
                                <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
                                <div class="nav-logo"><a href="index.html"><img src="assets/img/logo/logo_02.png" alt="" title=""></a>
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
    </header> --}}
    <!-- header-area-end -->

    @extends('layout.main')

    @section('content')
    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area-two breadcrumb-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="breadcrumb-content text-center">
                            <h2 class="title">News Details</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Single</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-details-area -->
        <section class="blog-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="inner-blog-item">
                            <div class="inner-blog-thumb">
                                <img src="assets/img/blog/blog_detail_2.jpg" alt="img">
                            </div>
                            <div class="inner-blog-content blog-details-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li class="tags"><i class="fa-regular fa-bookmark"></i>
                                            <a href="#">Airlines ,</a>
                                            <a href="#">Flight</a>
                                        </li>
                                        <li><i class="fa-regular fa-user"></i> <a href="#">Admin</a></li>
                                        <li><i class="fa-regular fa-bell"></i>Mar 10, 2022</li>
                                    </ul>
                                </div>
                                <h2 class="title">Purchase flight ticket easily & securely</h2>
                                <p>Enjoy an even safer and more comfortale travel experience with the Top class Airlines mobile apps You can complete all travel processes such as purchasing a ticket the creating a mobile boarding pass, or checking in via a single channel. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                <p>Comfortale travel experience with the Top class Airlines mobile apps You can complete all travel processes such as purchasing a ticket the creating a mobile boarding pass, or checking in via a single channel. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                <blockquote>
                                    <p>“ Comfortale travel experience with the Top class Airlines mobile apps You can complete all travel processes such as purchasing registered user profile through the mobile ”</p>
                                    <cite>Tomas Alexander</cite>
                                </blockquote>
                                <p>Enjoy an even safer and more comfortale travel experience with the Top class Airlines mobile apps You can complete all travel processes such as purchasing a ticket the creating a mobile boarding pass, or checking in via a single channel. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                <div class="blog-details-img">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="assets/img/blog/blog_detail_1.jpg" alt="img">
                                        </div>
                                        <div class="col-md-6">
                                            <img src="assets/img/blog/blog_detail_3.jpg" alt="img">
                                        </div>
                                    </div>
                                </div>
                                <p>Dnjoy an even safer and more comfortale travel experience with the Top class Airlines mobile apps You can complete all travel processes such as purchasing a ticket the creating a mobile boarding pass, or checking in via a single channel.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                <div class="blog-details-bottom">
                                    <div class="blog-details-tags">
                                        <ul>
                                            <li class="title"><i class="fa-solid fa-tags"></i>Tags :</li>
                                            <li><a href="#">Airlines</a></li>
                                            <li><a href="#">Travel</a></li>
                                            <li><a href="#">Booking</a></li>
                                            <li><a href="#">Hotel</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog-details-social">
                                        <ul>
                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="avatar-post">
                            <div class="avatar-post-img">
                                <img src="assets/img/blog/post-avatar-img.png" alt="img">
                            </div>
                            <div class="avatar-post-content">
                                <h4 class="title">Bui Tuan Khai</h4>
                                <p>Dnjoy an even safer and more comfortale travel experience with the Top class Airlines mobile apps You can complete</p>
                                <div class="blog-details-social">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blog-next-prev">
                            <a href="#"><img src="assets/img/icon/preview_arrow.png" alt="">Previous Post</a>
                        </div>
                        <div class="comment-reply-box">
                            <h4 class="title">Leave a Reply</h4>
                            <form action="#" class="comment-reply-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" placeholder="Author *">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="email" placeholder="Your Email *">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grp">
                                    <textarea name="comment" placeholder="Type Comment Here..."></textarea>
                                </div>
                                <div class="form-grp checkbox-grp">
                                    <input type="checkbox" id="checkbox">
                                    <label for="checkbox">Don’t show your email address</label>
                                </div>
                                <button type="submit" class="btn">Submit now</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="blog-sidebar">
                            <div class="blog-widget">
                                <h4 class="sidebar-title">Search</h4>
                                <div class="sidebar-search">
                                    <form action="#">
                                        <input type="text" placeholder="Search ...">
                                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="blog-widget">
                                <h4 class="sidebar-title">Categories</h4>
                                <div class="sidebar-cat-list">
                                    <ul>
                                        <li><a href="#">Insureance <i class="fa-solid fa-angles-right"></i></a></li>
                                        <li><a href="#">Destinations <i class="fa-solid fa-angles-right"></i></a></li>
                                        <li><a href="#">Flights <i class="fa-solid fa-angles-right"></i></a></li>
                                        <li><a href="#">Top Airlines <i class="fa-solid fa-angles-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-widget">
                                <h4 class="sidebar-title">Recent Post</h4>
                                <div class="rc-post-list">
                                    <div class="rc-post-item">
                                        <div class="rc-post-thumb">
                                            <a href="blog-details.html"><img src="assets/img/blog/rc_post_img01.jpg" alt=""></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <span class="date"><i class="fa-regular fa-bell"></i>Mar 10, 2022</span>
                                            <h4 class="title"><a href="blog-details.html">Car Rental Provider</a></h4>
                                            <a href="#" class="author">Alex Jonson</a>
                                        </div>
                                    </div>
                                    <div class="rc-post-item">
                                        <div class="rc-post-thumb">
                                            <a href="blog-details.html"><img src="assets/img/blog/rc_post_img02.jpg" alt=""></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <span class="date"><i class="fa-regular fa-bell"></i>Mar 10, 2022</span>
                                            <h4 class="title"><a href="blog-details.html">Purchase flight ticket</a></h4>
                                            <a href="#" class="author">Alex Jonson</a>
                                        </div>
                                    </div>
                                    <div class="rc-post-item">
                                        <div class="rc-post-thumb">
                                            <a href="blog-details.html"><img src="assets/img/blog/rc_post_img03.jpg" alt=""></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <span class="date"><i class="fa-regular fa-bell"></i>Mar 10, 2022</span>
                                            <h4 class="title"><a href="blog-details.html">Services in 7 different</a></h4>
                                            <a href="#" class="author">Alex Jonson</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-widget sidebar-newsletter">
                                <div class="sn-icon">
                                    <img src="assets/img/icon/sn_icon.png" alt="">
                                </div>
                                <div class="sn-title">
                                    <h4 class="title">Subscribe Newsletter</h4>
                                    <p>Signup For Latest News</p>
                                </div>
                                <form action="#" class="sn-form">
                                    <input type="email" placeholder="Enter Your Email">
                                    <button class="btn">subscribe</button>
                                </form>
                            </div>
                            <div class="blog-widget">
                                <h4 class="sidebar-title">Tags</h4>
                                <div class="sidebar-tags">
                                    <ul>
                                        <li><a href="#">Airlines</a></li>
                                        <li><a href="#">Travel</a></li>
                                        <li><a href="#">Booking</a></li>
                                        <li><a href="#">Beach</a></li>
                                        <li><a href="#">Creative</a></li>
                                        <li><a href="#">Hotel</a></li>
                                        <li><a href="#">Slider</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area-end -->

    </main>
    <!-- main-area-end -->
@endsection
    {{-- <!-- footer-area -->
    <footer>
        <div class="footer-area footer-bg">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/easyfly.png" style="max-height: 150px;" alt=""></a>
                                </div>
                                <div class="footer-content">
                                    <!-- <p>Online to make your journey even more memorable access or meet</p> -->
                                    <ul class="footer-social">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget">
                                <div class="fw-title">
                                    <h4 class="title">Explore</h4>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="contact.html">Travel alerts</a></li>
                                        <li><a href="contact.html">Awards</a></li>
                                        <li><a href="contact.html">Qatarisation</a></li>
                                        <li><a href="contact.html">Careers</a></li>
                                        <li><a href="contact.html">Beyond</a></li>
                                        <li><a href="contact.html">Press release</a></li>
                                        <li><a href="contact.html">Airways Cargo</a></li>
                                        <li><a href="contact.html">Sponsorship</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-4">
                            <div class="footer-widget privacy">
                                <div class="fw-title">
                                    <h4 class="title">Privacy</h4>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="booking-list.html">Airline fees</a></li>
                                        <li><a href="booking-list.html">Airline guides</a></li>
                                        <li><a href="booking-list.html">Airport guides</a></li>
                                        <li><a href="booking-list.html">Low fare tips</a></li>
                                        <li><a href="booking-list.html">Flights</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-8">
                            <div class="footer-widget">
                                <div class="fw-title">
                                    <h4 class="title">Contacts</h4>
                                </div>
                                <div class="footer-contact">
                                    <p>PO Box W75 Street lan West new queens</p>
                                    <h2 class="title"><a href="tel:0123456789">+1 246 333 - 0079</a></h2>
                                    <a href="#">EasyFly@company.com</a>
                                    <form action="#">
                                        <input type="email" placeholder="Enter your email">
                                        <button type="submit"><i class="flaticon-send"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="copyright-text">
                                <p>Copyright © 2023.All Rights Reserved By <span>EasyFly</span></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cart-img text-end">
                                <img src="assets/img/images/cart.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->


    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.odometer.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html> --}}