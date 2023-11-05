@extends('layout.main')

@section('content')
    <!-- main-area -->
    <main>

        <!-- slider-area -->
        <section class="slider-area">
            <div class="slider-active">
                <div class="single-slider slider-bg" data-background="assets/img/slider/slider_bg01.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-10">
                                <div class="slider-content">
                                    <h2 class="title" data-animation="fadeInUp" data-delay=".2s">A Lifetime of Discounts?
                                        It's EasyFly.</h2>
                                    <p data-animation="fadeInUp" data-delay=".4s">Get rewarded for your travels – unlock
                                        instant savings of 10% or more with a free EasyFlyinfo.com account</p>
                                        @guest
                                    <a href="{{ route('login') }}" class="btn" data-animation="fadeInUp"
                                        data-delay=".6s">Sign in / Register</a>
                                        @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-bg" data-background="assets/img/slider/slider_bg02.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-10">
                                <div class="slider-content">
                                    <h2 class="title" data-animation="fadeInUp" data-delay=".2s">A Lifetime of Discounts?
                                        It's EasyFly.</h2>
                                    <p data-animation="fadeInUp" data-delay=".4s">Get rewarded for your travels – unlock
                                        instant savings of 10% or more with a free EasyFlyinfo.com account</p>
                                        @guest
                                    <a href="{{ route('login') }}" class="btn" data-animation="fadeInUp"
                                        data-delay=".6s">Sign in / Register</a>
                                        @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-bg" data-background="assets/img/slider/slider_bg03.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-10">
                                <div class="slider-content">
                                    <h2 class="title" data-animation="fadeInUp" data-delay=".2s">A Lifetime of Discounts?
                                        It's EasyFly.</h2>
                                    <p data-animation="fadeInUp" data-delay=".4s">Get rewarded for your travels – unlock
                                        instant savings of 10% or more with a free EasyFlyinfo.com account</p>
                                        @guest
                                    <a href="{{ route('login') }}" class="btn" data-animation="fadeInUp"
                                        data-delay=".6s">Sign in / Register</a>
                                        @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider-area-end -->

        <!-- booking-area -->
        <div class="booking-area booking-style-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="booking-wrap">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="bOOKing-tab" data-bs-toggle="tab"
                                        data-bs-target="#bOOKing-tab-pane" type="button" role="tab"
                                        aria-controls="bOOKing-tab-pane" aria-selected="true"><i
                                            class="flaticon-flight"></i>air
                                        BOOKing</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="bOOKing-tab-pane" role="tabpanel"
                                    aria-labelledby="bOOKing-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tab-content-wrap">
                                                <div class="content-top">
                                                    <ul>
                                                        <li class="active"><a href="#">Roundtrip</a></li>
                                                        <li><a href="#">One-way</a></li>
                                                        <!-- <li><a href="#">Multi-city</a></li> -->
                                                    </ul>
                                                </div>
                                                <form action="{{ route('searchflight') }}" method="POST"
                                                    class="booking-form">
                                                    @csrf
                                                    <ul>
                                                        <li>
                                                            <div class="form-grp select">
                                                                <label for="from">From</label>
                                                                <select id="from" name="from" class="form-select abc"
                                                                    aria-label="Default select example">
                                                                    @foreach ($airports as $airport)
                                                                        <option value="{{ $airport->airport_code }}">
                                                                            {{ $airport->airport_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp select">
                                                                <label for="to">To</label>
                                                                <select id="to" name="to" class="form-select abc"
                                                                    aria-label="Default select example">
                                                                    @foreach ($airports as $airport)
                                                                        <option value="{{ $airport->airport_code }}">
                                                                            {{ $airport->airport_name }}</option>
                                                                    @endforeach
                                                                </select>

                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp select">
                                                                <label for="shortBy">Seat Class</label>
                                                                <select id="class" name="class" class="form-select"
                                                                    aria-label="Default select example">
                                                                    <option value="Economy" selected>Economy</option>
                                                                    <option value="Business">Business</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp date">
                                                                <ul>
                                                                    <li>
                                                                        <label for="shortBy">Depart</label>
                                                                        <input type="date" name="depart" style="width: 97.1px"
                                                                            value="<?php echo date('Y-m-d'); ?>" />

                                                                    </li>
                                                                    <li>
                                                                        <label for="shortBy"  >Return</label>
                                                                        <input type="date" style="width: 97.1px" name="return"
                                                                            value="<?php echo date('Y-m-d'); ?>" />
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp economy">
                                                                <label for="text">Passenger</label>
                                                                <input type="number" id="text" value="1"
                                                                    name="passenger">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="content-bottom">
                                                        <a href="#" class="promo-code">+ Add Promo code</a>
                                                        <button type="submit" class="btn">Show Flights <i
                                                                class="flaticon-flight-1"></i></button>
                                                    </div>
                                                </form>
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul class="list-unstyled">
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                @if (session()->has('error'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ session()->get('error') }}
                                                </div>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- booking-area-end -->

        <!-- features-area -->
        <section class="features-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-sm-10">
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="flaticon-help"></i>
                            </div>
                            <div class="features-content">
                                <h6 class="title">We are now available</h6>
                                <p>Call +1 555 666 888 for contuct with us</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-10">
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="flaticon-plane"></i>
                            </div>
                            <div class="features-content">
                                <h6 class="title">International Flight</h6>
                                <p>Call +1 555 666 888 for booking assistance</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-10">
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="flaticon-money-back-guarantee"></i>
                            </div>
                            <div class="features-content">
                                <h6 class="title">Check Refund</h6>
                                <p>Call +1 555 666 888 for check refund status</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-area-end -->

        <!-- flight-offer-area -->
        <section class="flight-offer-area">
            <div class="container">
                <div class="row align-items-center mb-35">
                    <div class="col-md-8">
                        <div class="section-title">
                            <span class="sub-title">Offer Deals</span>
                            <h2 class="title">Flight Offer Deals</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="best-price text-end">
                            <a href="booking-list.html">Best Price Guarantee <i class="flaticon-check"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="flight-offer-item">
                            <div class="flight-offer-thumb">
                                <img src="assets/img/images/offer_img01.jpg" alt="">
                            </div>
                            <div class="flight-offer-content">
                                <h2 class="title">Dhaka to Dubai</h2>
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <p>Economy from</p>
                                <h4 class="price">$ 980</h4>
                            </div>
                            <div class="overlay-content">
                                <h2 class="title">Dhaka to Dubai</h2>
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <p>Economy from</p>
                                <h4 class="price">$ 980</h4>
                                <div class="content-bottom">
                                    <a href="booking-details.html" class="btn">Booking Now</a>
                                    <a href="booking-list.html" class="discover">Discover</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="flight-offer-item offer-item-two">
                                    <div class="flight-offer-thumb">
                                        <img src="assets/img/images/offer_img02.jpg" alt="">
                                    </div>
                                    <div class="flight-offer-content">
                                        <h2 class="title">New York to California</h2>
                                        <span>09 Jun 2022 - 16 Jun 2022</span>
                                        <p>Economy from</p>
                                        <h4 class="price">$ 290</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <h2 class="title">New York to California</h2>
                                        <span>09 Jun 2022 - 16 Jun 2022</span>
                                        <p>Economy from</p>
                                        <h4 class="price">$ 290</h4>
                                        <div class="content-bottom">
                                            <a href="booking-details.html" class="btn">Booking Now</a>
                                            <a href="booking-list.html" class="discover">Discover</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="flight-offer-item offer-item-two">
                                    <div class="flight-offer-thumb">
                                        <img src="assets/img/images/offer_img03.jpg" alt="">
                                    </div>
                                    <div class="flight-offer-content">
                                        <h2 class="title">Malaga to Finland</h2>
                                        <span>09 Jun 2022 - 16 Jun 2022</span>
                                        <p>Economy from</p>
                                        <h4 class="price">$ 792</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <h2 class="title">Malaga to Finland</h2>
                                        <span>09 Jun 2022 - 16 Jun 2022</span>
                                        <p>Economy from</p>
                                        <h4 class="price">$ 792</h4>
                                        <div class="content-bottom">
                                            <a href="booking-details.html" class="btn">Booking Now</a>
                                            <a href="booking-list.html" class="discover">Discover</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="flight-offer-item offer-item-two">
                                    <div class="flight-offer-thumb">
                                        <img src="assets/img/images/offer_img04.jpg" alt="">
                                    </div>
                                    <div class="flight-offer-content">
                                        <h2 class="title">Dubai to Maldives</h2>
                                        <span>09 Jun 2022 - 16 Jun 2022</span>
                                        <p>Economy from</p>
                                        <h4 class="price">$ 980</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <h2 class="title">Dubai to Maldives</h2>
                                        <span>09 Jun 2022 - 16 Jun 2022</span>
                                        <p>Economy from</p>
                                        <h4 class="price">$ 980</h4>
                                        <div class="content-bottom">
                                            <a href="booking-details.html" class="btn">Booking Now</a>
                                            <a href="booking-list.html" class="discover">Discover</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="flight-offer-item offer-item-two">
                                    <div class="flight-offer-thumb">
                                        <img src="assets/img/images/offer_img05.jpg" alt="">
                                    </div>
                                    <div class="flight-offer-content">
                                        <h2 class="title">Dubai to New York</h2>
                                        <span>09 Jun 2022 - 16 Jun 2022</span>
                                        <p>Economy from</p>
                                        <h4 class="price">$ 350</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <h2 class="title">Dubai to New York</h2>
                                        <span>09 Jun 2022 - 16 Jun 2022</span>
                                        <p>Economy from</p>
                                        <h4 class="price">$ 350</h4>
                                        <div class="content-bottom">
                                            <a href="booking-details.html" class="btn">Booking Now</a>
                                            <a href="booking-list.html" class="discover">Discover</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- flight-offer-area-end -->

        <!-- destination-area -->
        <section class="destination-area destination-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="section-title">
                            <span class="sub-title">Offer Deals</span>
                            <h2 class="title">Your Great Destination</h2>
                        </div>
                        <div class="destination-content">
                            <p>Get rewarded for your travels – unlock instant savings of 10% or more with a free
                                <span>EasyFlyinfo.com</span> account</p>
                            <ul>
                                <li>
                                    <div class="counter-item">
                                        <div class="counter-content">
                                            <h2 class="count"><span class="odometer" data-count="5830"></span>+</h2>
                                            <p>Happy Customers</p>
                                        </div>
                                        <div class="counter-icon">
                                            <i class="flaticon-group"></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="counter-item">
                                        <div class="counter-content">
                                            <h2 class="count"><span class="odometer" data-count="100"></span>%</h2>
                                            <p>Client Setisfied</p>
                                        </div>
                                        <div class="counter-icon">
                                            <i class="flaticon-globe"></i>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="content-bottom">
                                <p>Discover the latest offers & news and start planning</p>
                                <a href="contact.html">contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- destination-area-end -->

        <!-- fly-next-area -->
        <section class="fly-next-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center">
                            <span class="sub-title">Flynext Package</span>
                            <h2 class="title">Your Great Destination</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="fly-next-nav">
                            <button class="active" data-filter="*">Flights <i class="flaticon-flight"></i></button>
                            <!-- <button class="" data-filter=".cat-one">Car Rentals <i class="flaticon-car-1"></i></button>
                                    <button class="" data-filter=".cat-two">Taxis <i class="flaticon-taxi"></i></button> -->
                        </div>
                    </div>
                </div>
                <div class="row fly-next-active justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-two">
                        <div class="fly-next-item">
                            <div class="fly-next-thumb">
                                <a href="booking-details.html"><img src="assets/img/images/fly_img01.jpg"
                                        alt=""></a>
                            </div>
                            <div class="fly-next-content">
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <h4 class="title">Dubai (DXB)</h4>
                                <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                                <h4 class="title">New York (USA)</h4>
                                <a href="booking-details.html" class="air-logo"><img src="assets/img/icon/fly_icon01.jpg"
                                        alt=""></a>
                                <div class="content-bottom">
                                    <p>Economy from</p>
                                    <h4 class="price">$195</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-one cat-two">
                        <div class="fly-next-item">
                            <div class="fly-next-thumb">
                                <a href="booking-details.html"><img src="assets/img/images/fly_img02.jpg"
                                        alt=""></a>
                            </div>
                            <div class="fly-next-content">
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <h4 class="title">Switzerland (SWL)</h4>
                                <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                                <h4 class="title">New York (USA)</h4>
                                <a href="booking-details.html" class="air-logo"><img src="assets/img/icon/fly_icon02.jpg"
                                        alt=""></a>
                                <div class="content-bottom">
                                    <p>Business Class</p>
                                    <h4 class="price">$800</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-two">
                        <div class="fly-next-item">
                            <div class="fly-next-thumb">
                                <a href="booking-details.html"><img src="assets/img/images/fly_img03.jpg"
                                        alt=""></a>
                            </div>
                            <div class="fly-next-content">
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <h4 class="title">Denmark (DEK)</h4>
                                <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                                <h4 class="title">New York (USA)</h4>
                                <a href="booking-details.html" class="air-logo"><img src="assets/img/icon/fly_icon03.jpg"
                                        alt=""></a>
                                <div class="content-bottom">
                                    <p>Economy from</p>
                                    <h4 class="price">$ 350</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-one">
                        <div class="fly-next-item">
                            <div class="fly-next-thumb">
                                <a href="booking-details.html"><img src="assets/img/images/fly_img04.jpg"
                                        alt=""></a>
                            </div>
                            <div class="fly-next-content">
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <h4 class="title">Jakarta (DXB)</h4>
                                <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                                <h4 class="title">New York (USA)</h4>
                                <a href="booking-details.html" class="air-logo"><img src="assets/img/icon/fly_icon01.jpg"
                                        alt=""></a>
                                <div class="content-bottom">
                                    <p>Business Class</p>
                                    <h4 class="price">$ 220</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-two">
                        <div class="fly-next-item">
                            <div class="fly-next-thumb">
                                <a href="booking-details.html"><img src="assets/img/images/fly_img05.jpg"
                                        alt=""></a>
                            </div>
                            <div class="fly-next-content">
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <h4 class="title">Dubai (DXB)</h4>
                                <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                                <h4 class="title">New York (USA)</h4>
                                <a href="booking-details.html" class="air-logo"><img src="assets/img/icon/fly_icon03.jpg"
                                        alt=""></a>
                                <div class="content-bottom">
                                    <p>Economy from</p>
                                    <h4 class="price">$195</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-one">
                        <div class="fly-next-item">
                            <div class="fly-next-thumb">
                                <a href="booking-details.html"><img src="assets/img/images/fly_img06.jpg"
                                        alt=""></a>
                            </div>
                            <div class="fly-next-content">
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <h4 class="title">Dubai (DXB)</h4>
                                <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                                <h4 class="title">New York (USA)</h4>
                                <a href="booking-details.html" class="air-logo"><img src="assets/img/icon/fly_icon02.jpg"
                                        alt=""></a>
                                <div class="content-bottom">
                                    <p>Business Class</p>
                                    <h4 class="price">$175</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-two cat-one">
                        <div class="fly-next-item">
                            <div class="fly-next-thumb">
                                <a href="booking-details.html"><img src="assets/img/images/fly_img07.jpg"
                                        alt=""></a>
                            </div>
                            <div class="fly-next-content">
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <h4 class="title">Switzerland (SWL)</h4>
                                <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                                <h4 class="title">New York (USA)</h4>
                                <a href="booking-details.html" class="air-logo"><img src="assets/img/icon/fly_icon01.jpg"
                                        alt=""></a>
                                <div class="content-bottom">
                                    <p>Economy from</p>
                                    <h4 class="price">$195</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-two">
                        <div class="fly-next-item">
                            <div class="fly-next-thumb">
                                <a href="booking-details.html"><img src="assets/img/images/fly_img08.jpg"
                                        alt=""></a>
                            </div>
                            <div class="fly-next-content">
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <h4 class="title">Turkish (SWL)</h4>
                                <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                                <h4 class="title">New York (USA)</h4>
                                <a href="booking-details.html" class="air-logo"><img src="assets/img/icon/fly_icon02.jpg"
                                        alt=""></a>
                                <div class="content-bottom">
                                    <p>Business Class</p>
                                    <h4 class="price">$350</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fly-next-area-end -->

        <!-- brand-area -->
        <div class="brand-area brand-bg">
            <div class="container">
                <div class="row brand-active">
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="assets/img/brand/brand_img01.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="assets/img/brand/brand_img02.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="assets/img/brand/brand_img03.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="assets/img/brand/brand_img04.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="assets/img/brand/brand_img05.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="assets/img/brand/brand_img06.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="assets/img/brand/brand_img03.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- service-area -->
        <section class="service-area">
            <div class="container">
                <div class="row align-items-end mb-50">
                    <div class="col-md-8">
                        <div class="section-title">
                            <span class="sub-title">Why Air EasyFly</span>
                            <h2 class="title">Our Great Flight Options</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-nav"></div>
                    </div>
                </div>
                <div class="row service-active">
                    <div class="col-lg-4">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="assets/img/icon/service_icon01.png" alt="">
                            </div>
                            <div class="service-content">
                                <span>Service 01</span>
                                <h2 class="title">Pre-Book Your Baggage</h2>
                                <div class="service-list">
                                    <ul>
                                        <li>Pre-book your baggage <i class="flaticon-check-mark"></i></li>
                                        <li>Allowance now and save up <i class="flaticon-check-mark"></i></li>
                                        <li>90% of baggage charges <i class="flaticon-check-mark"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="assets/img/icon/service_icon02.png" alt="">
                            </div>
                            <div class="service-content">
                                <span>Service 02</span>
                                <h2 class="title">Reserve preferred seat!</h2>
                                <div class="service-list">
                                    <ul>
                                        <li>What will it be, window or aisle? <i class="flaticon-check-mark"></i></li>
                                        <li>Select your preferred seat prior <i class="flaticon-check-mark"></i></li>
                                        <li>Reserved for you. <i class="flaticon-check-mark"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="assets/img/icon/service_icon03.png" alt="">
                            </div>
                            <div class="service-content">
                                <span>Service 03</span>
                                <h2 class="title">Enjoy stress-free travel</h2>
                                <div class="service-list">
                                    <ul>
                                        <li>Travel stress-free by getting<i class="flaticon-check-mark"></i></li>
                                        <li>Covered for flight modification <i class="flaticon-check-mark"></i></li>
                                        <li>Cancellation, accident & medical <i class="flaticon-check-mark"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="assets/img/icon/service_icon02.png" alt="">
                            </div>
                            <div class="service-content">
                                <span>Service 02</span>
                                <h2 class="title">Reserve preferred seat!</h2>
                                <div class="service-list">
                                    <ul>
                                        <li>What will it be, window or aisle? <i class="flaticon-check-mark"></i></li>
                                        <li>Select your preferred seat prior <i class="flaticon-check-mark"></i></li>
                                        <li>Reserved for you. <i class="flaticon-check-mark"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-area-end -->

        <!-- blog-area -->
        <section class="blog-area blog-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center">
                            <span class="sub-title">our News Feeds</span>
                            <h2 class="title">Latest News Update</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-53">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog_img01.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><i class="fa-regular fa-user"></i> <a href="#">Emely Watson</a></li>
                                        <li><i class="fa-solid fa-calendar-days"></i> February 19, 2022</li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href="blog-details.html">Depending on your departure point and
                                        destination flights</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-47">
                        <div class="blog-item small-item">
                            <div class="blog-thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog_img02.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><i class="fa-regular fa-user"></i> <a href="#">Emely Watson</a></li>
                                        <li><i class="fa-solid fa-calendar-days"></i> February 19, 2022</li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href="blog-details.html">Happy International Country Flight
                                        Attendant Day</a></h2>
                            </div>
                        </div>
                        <div class="blog-item small-item">
                            <div class="blog-thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog_img03.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><i class="fa-regular fa-user"></i> <a href="#">Emely Watson</a></li>
                                        <li><i class="fa-solid fa-calendar-days"></i> February 19, 2022</li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href="blog-details.html">The US is a Large Country and Climate
                                        Varies by Region</a></h2>
                            </div>
                        </div>
                        <div class="blog-item small-item">
                            <div class="blog-thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog_img04.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><i class="fa-regular fa-user"></i> <a href="#">Emely Watson</a></li>
                                        <li><i class="fa-solid fa-calendar-days"></i> February 19, 2022</li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href="blog-details.html">But There are Dozen of Low-cost Airlines
                                        Including</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

    </main>
@endsection
