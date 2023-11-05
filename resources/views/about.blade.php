@extends('layout.main')

@section('content')
  <!-- main-area -->
  <main>

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb-content text-center">
                    <h2 class="title">About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- about-area -->
<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 order-0 order-lg-2">
                <div class="about-img">
                    <img src="assets/img/images/about_img01-1.jpg" alt="img">
                    <img src="assets/img/images/about_img02.jpg" alt="img" class="img-two">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-content">
                    <div class="section-title">
                        <span class="sub-title">who we are</span>
                        <h2 class="title">The most famous airline in Vietnam!</h2>
                    </div>
                    <p>On the journey to explore the sky, EasyFly has connected potential destinations, thereby bringing good values of Vietnamese culture and people to the rest of the world.</p>
                    <ul>
                        <li><i class="flaticon-tick-1"></i>Pre-Book Your Baggage Donating</li>
                        <li><i class="flaticon-tick-1"></i>Reserve preferred seat!</li>
                        <li><i class="flaticon-tick-1"></i>90% of baggage charges</li>
                    </ul>
                    <a href="contact.html" class="btn">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-area-end -->

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
                    <p>Get rewarded for your travels – unlock instant savings of 10% or more with a free <span>EasyFly</span> account</p>
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

<!-- service-area -->
<section class="service-area service-style-two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="section-title text-center mb-40">
                    <span class="sub-title">Why Air geair</span>
                    <h2 class="title">Our Great Flight Options</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-6 col-md-6">
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
            <div class="col-xl-4 col-lg-6 col-md-6">
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
            <div class="col-xl-4 col-lg-6 col-md-6">
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
        </div>
    </div>
</section>
<!-- service-area-end -->


<!-- faq-area -->
<section class="faq-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="faq-content">
                    <div class="section-title">
                        <span class="sub-title">asked questions</span>
                        <h2 class="title">Flight Asked Questions</h2>
                    </div>
                    <p>Frequently Asked Questions About Flights.</p>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    Pre-Book Your Baggage Donating a Small <span class="dot"></span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Prepaid baggage must be purchased at least 06 hours before departure. Pre-paid baggage is allowed to change travel date/ itinerary with equal or higher cost.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Search and Save on Cheap Flights <span class="dot"></span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Compare cheap flight prices from all major airlines and travel agents, and find the cheapest tickets to all your favourite destinations. Book online today.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Leave it to us when it comes to finding you <span class="dot"></span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Collect Your Luggage. Finding the baggage terminal for your flight can be tricky in an unfamiliar airport.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-10">
                <div class="faq-img">
                    <img src="assets/img/images/faq_img.jpg" alt="img">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq-area-end -->

</main>
<!-- main-area-end -->
@endsection
