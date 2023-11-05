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
                            <h2 class="title">Booking List</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Booking List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- booking-area -->
        <!-- <div class="booking-area booking-style-two">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="booking-wrap">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="bOOKing-tab" data-bs-toggle="tab"
                                                    data-bs-target="#bOOKing-tab-pane" type="button" role="tab"
                                                    aria-controls="bOOKing-tab-pane" aria-selected="true"><i class="flaticon-flight"></i>air
                                                    BOOKing</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="trips-tab" data-bs-toggle="tab"
                                                    data-bs-target="#trips-tab-pane" type="button" role="tab" aria-controls="trips-tab-pane"
                                                    aria-selected="false"><i class="flaticon-file"></i> my trips</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="check-tab" data-bs-toggle="tab"
                                                    data-bs-target="#check-tab-pane" type="button" role="tab" aria-controls="check-tab-pane"
                                                    aria-selected="false"><i class="flaticon-tick"></i> check-in</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="flight-tab" data-bs-toggle="tab"
                                                    data-bs-target="#flight-tab-pane" type="button" role="tab"
                                                    aria-controls="flight-tab-pane" aria-selected="false"><i class="flaticon-clock"></i>
                                                    Flight status</button>
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
                                                                    <li><a href="#">Multi-city</a></li>
                                                                </ul>
                                                            </div>
                                                            <form action="#" class="booking-form">
                                                                <ul>
                                                                    <li>
                                                                        <div class="form-grp">
                                                                            <input type="text" placeholder="From">
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-grp">
                                                                            <input type="text" placeholder="To">
                                                                            <button class="exchange-icon"><i
                                                                                    class="flaticon-exchange-1"></i></button>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-grp select">
                                                                            <label for="shortBy">Trip</label>
                                                                            <select id="shortBy" name="select" class="form-select"
                                                                                aria-label="Default select example">
                                                                                <option value="">Tour type</option>
                                                                                <option>Adventure Travel</option>
                                                                                <option>Family Tours</option>
                                                                                <option>Newest Item</option>
                                                                                <option>Nature & wildlife</option>
                                                                            </select>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-grp date">
                                                                            <ul>
                                                                                <li>
                                                                                    <label for="shortBy">Depart</label>
                                                                                    <input type="text" class="date"
                                                                                        placeholder="Select Date">
                                                                                </li>
                                                                                <li>
                                                                                    <label for="shortBy">Return</label>
                                                                                    <input type="text" class="date"
                                                                                        placeholder="Select Date">
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-grp economy">
                                                                            <label for="text">Passenger/ Class</label>
                                                                            <input type="text" id="text" placeholder="1 Passenger, Economy">
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </form>
                                                            <div class="content-bottom">
                                                                <a href="booking-details.html" class="promo-code">+ Add Promo code</a>
                                                                <a href="booking-details.html" class="btn">Show Flights <i class="flaticon-flight-1"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="trips-tab-pane" role="tabpanel" aria-labelledby="trips-tab"
                                                tabindex="0">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="tab-content-wrap">
                                                            <div class="content-top">
                                                                <ul>
                                                                    <li class="active"><a href="#">Roundtrip</a></li>
                                                                    <li><a href="#">One-way</a></li>
                                                                    <li><a href="#">Multi-city</a></li>
                                                                </ul>
                                                            </div>
                                                            <form action="#" class="booking-form">
                                                                <ul>
                                                                    <li>
                                                                        <div class="form-grp">
                                                                            <input type="text" placeholder="From">
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-grp">
                                                                            <input type="text" placeholder="To">
                                                                            <button class="exchange-icon"><i class="flaticon-exchange-1"></i></button>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-grp select">
                                                                            <label for="shortByTwo">Trip</label>
                                                                            <select id="shortByTwo" name="select" class="form-select" aria-label="Default select example">
                                                                                <option value="">Tour type</option>
                                                                                <option>Adventure Travel</option>
                                                                                <option>Family Tours</option>
                                                                                <option>Newest Item</option>
                                                                                <option>Nature & wildlife</option>
                                                                            </select>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-grp date">
                                                                            <ul>
                                                                                <li>
                                                                                    <label for="shortBy">Depart</label>
                                                                                    <input type="text" class="date" placeholder="Select Date">
                                                                                </li>
                                                                                <li>
                                                                                    <label for="shortBy">Return</label>
                                                                                    <input type="text" class="date" placeholder="Select Date">
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-grp economy">
                                                                            <label for="textTwo">Passenger/ Class</label>
                                                                            <input type="text" id="textTwo" placeholder="1 Passenger, Economy">
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </form>
                                                            <div class="content-bottom">
                                                                <a href="booking-details.html" class="promo-code">+ Add Promo code</a>
                                                                <a href="booking-details.html" class="btn">Show Flights <i class="flaticon-flight-1"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="check-tab-pane" role="tabpanel" aria-labelledby="check-tab"
                                                tabindex="0">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="tab-content-wrap">
                                                            <div class="content-top">
                                                                <ul>
                                                                    <li class="active"><a href="#">Roundtrip</a></li>
                                                                    <li><a href="#">One-way</a></li>
                                                                    <li><a href="#">Multi-city</a></li>
                                                                </ul>
                                                            </div>
                                                            <form action="#" class="booking-form">
                                                                <ul>
                                                                    <li>
                                                                        <div class="form-grp">
                                                                            <input type="text" placeholder="From">
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-grp">
                                                                            <input type="text" placeholder="To">
                                                                            <button class="exchange-icon"><i class="flaticon-exchange-1"></i></button>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-grp select">
                                                                            <label for="shortByThree">Trip</label>
                                                                            <select id="shortByThree" name="select" class="form-select" aria-label="Default select example">
                                                                                <option value="">Tour type</option>
                                                                                <option>Adventure Travel</option>
                                                                                <option>Family Tours</option>
                                                                                <option>Newest Item</option>
                                                                                <option>Nature & wildlife</option>
                                                                            </select>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-grp date">
                                                                            <ul>
                                                                                <li>
                                                                                    <label for="shortBy">Depart</label>
                                                                                    <input type="text" class="date" placeholder="Select Date">
                                                                                </li>
                                                                                <li>
                                                                                    <label for="shortBy">Return</label>
                                                                                    <input type="text" class="date" placeholder="Select Date">
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-grp economy">
                                                                            <label for="textThree">Passenger/ Class</label>
                                                                            <input type="text" id="textThree" placeholder="1 Passenger, Economy">
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </form>
                                                            <div class="content-bottom">
                                                                <a href="booking-details.html" class="promo-code">+ Add Promo code</a>
                                                                <a href="booking-details.html" class="btn">Show Flights <i class="flaticon-flight-1"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="flight-tab-pane" role="tabpanel" aria-labelledby="flight-tab"
                                                tabindex="0">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="tab-content-wrap">
                                                            <div class="content-top">
                                                                <ul>
                                                                    <li class="active"><a href="#">Roundtrip</a></li>
                                                                    <li><a href="#">One-way</a></li>
                                                                    <li><a href="#">Multi-city</a></li>
                                                                </ul>
                                                            </div>
                                                            <form action="#" class="booking-form">
                                                                <ul>
                                                                    <li>
                                                                        <div class="form-grp">
                                                                            <input type="text" placeholder="From">
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-grp">
                                                                            <input type="text" placeholder="To">
                                                                            <button class="exchange-icon"><i class="flaticon-exchange-1"></i></button>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-grp select">
                                                                            <label for="shortByFour">Trip</label>
                                                                            <select id="shortByFour" name="select" class="form-select" aria-label="Default select example">
                                                                                <option value="">Tour type</option>
                                                                                <option>Adventure Travel</option>
                                                                                <option>Family Tours</option>
                                                                                <option>Newest Item</option>
                                                                                <option>Nature & wildlife</option>
                                                                            </select>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-grp date">
                                                                            <ul>
                                                                                <li>
                                                                                    <label for="shortBy">Depart</label>
                                                                                    <input type="text" class="date" placeholder="Select Date">
                                                                                </li>
                                                                                <li>
                                                                                    <label for="shortBy">Return</label>
                                                                                    <input type="text" class="date" placeholder="Select Date">
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-grp economy">
                                                                            <label for="textFour">Passenger/ Class</label>
                                                                            <input type="text" id="textFour" placeholder="1 Passenger, Economy">
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </form>
                                                            <div class="content-bottom">
                                                                <a href="booking-details.html" class="promo-code">+ Add Promo code</a>
                                                                <a href="booking-details.html" class="btn">Show Flights <i class="flaticon-flight-1"></i></a>
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
                    </div> -->
        <!-- booking-area-end -->

        <!-- booking-list-area -->
        <div class="booking-list-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-27 order-2 order-xl-0">
                        <aside class="booking-sidebar">
                            <div class="widget filters">
                                <h2 class="title">filters</h2>
                                {{-- <div class="filters-wrap">
                                        <h2 class="widget-title">Price Range</h2>
                                        <div class="price_filter">
                                            <div id="slider-range"></div>
                                            <div class="price_slider_amount">
                                                <span>Price :</span>
                                                <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                                <input type="submit" class="btn" value="Filter">
                                            </div>
                                        </div>
                                    </div> --}}
                            </div>
                            <div class="widget">
                                <h2 class="widget-title">Departure Time</h2>
                                <ul class="departure-wrap">
                                    <li><a href="#"><i class="flaticon-sunrise"></i>00:00 - 05:59</a></li>
                                    <li><a href="#"><i class="flaticon-sunny"></i>06:00 - 11:59</a></li>
                                    <li><a href="#"><i class="flaticon-sunset"></i>12:00 - 17:59</a></li>
                                    <li><a href="#"><i class="flaticon-crescent-moon"></i>18:00 - 23:59</a></li>
                                </ul>
                            </div>
                            {{-- <div class="widget">
                                    <h2 class="widget-title">Number of Stops</h2>
                                    <form action="#" class="flight-stops">
                                        <label for="stopNumber"><i class="flaticon-flight"></i></label>
                                        <select id="stopNumber" name="select" class="form-select" aria-label="Default select example">
                                            <option value="">Direct</option>
                                            <option>One Stops</option>
                                            <option>Two Stops</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="widget">
                                    <h2 class="widget-title">Airlines</h2>
                                    <ul class="airlines-cat-list">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="catOne">
                                                <label class="form-check-label" for="catOne">Etihad Airway<span>(12)</span></label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="catTwo">
                                                <label class="form-check-label" for="catTwo">Lankan Airlines<span>(09)</span></label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="catThree">
                                                <label class="form-check-label" for="catThree">Dubai Airway<span>(12)</span></label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="catFour">
                                                <label class="form-check-label" for="catFour">NOVOAIR<span>(36)</span></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div> --}}
                            <div class="widget">
                                <h2 class="widget-title">Weights</h2>
                                <ul class="airlines-cat-list weights-list">
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="weightsOne">
                                            <label class="form-check-label" for="weightsOne">25 KG</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget">
                                <h2 class="widget-title">Refundable</h2>
                                <ul class="airlines-cat-list">
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="refOne">
                                            <label class="form-check-label" for="refOne">Non Refundable</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="refTwo">
                                            <label class="form-check-label" for="refTwo">Refundable</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="refThree">
                                            <label class="form-check-label" for="refThree">Rules Wise</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-73">
                        @forelse ($results as $result)
                            <div class="booking-list-item">
                                <div class="booking-list-item-inner">
                                    <div class="booking-list-top">
                                        <div class="flight-airway">
                                            <div class="flight-logo">
                                                <img src="assets/img/icon/booking_icon02.jpg" alt="">
                                                <h5 class="title">EasyFly Airways</h5>
                                            </div>
                                            <span>Operated by EasyFly</span>
                                        </div>
                                        <ul class="flight-info">
                                            <li>{{ Carbon\Carbon::parse($result->departure)->format('l') }},
                                                <span>{{ Carbon\Carbon::parse($result->departure)->format('jS  F ') }}</span>
                                            </li>
                                            <li class="time"><span>
                                                    {{ date('h : i A', strtotime($result->departure)) }}</span></li>
                                        </ul>
                                        <div class="flight-price">
                                            <h4 class="title">{{ $result->price }}</h4>
                                            <form
                                                action="{{ route('booking', ['id' => $result->flight_id]) }}"method="POST">
                                                @csrf
                                                <input type="hidden" name="flightid1" value="{{ $flightid1 }}">
                                                <input type="hidden" name="price1" value="{{ $price1 }}">
                                                <input type="hidden" name="flightid2" value="{{ $result->flight_id }}">
                                                <input type="hidden" name="price2" value="{{ $result->price }}">
                                                <input type="hidden" name="class" value="{{ $class }}">
                                                <input type="hidden" name="quantity" value="{{ $passenger }}">
                                                <button type="submit" class="btn">Select <i
                                                        class="flaticon-flight-1"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="booking-list-bottom">
                                        <ul>
                                            <li class="detail"><i class="fa-solid fa-angle-down"></i> Flight Detail
                                            </li>
                                            <li>Price per person (incl. taxes & fees)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flight-detail-wrap">
                                    <div class="flight-date">
                                        <ul>
                                            <li> {{ Carbon\Carbon::parse($result->departure)->format('d-m-Y') }}</li>
                                            <li> Departure:
                                                <span>{{ Carbon\Carbon::parse($result->departure)->format('jS  F ') }} -
                                                    {{ date('h : i A', strtotime($result->departure)) }}</span>
                                            </li>
                                            <li> Arrival:
                                                <span>{{ Carbon\Carbon::parse($result->arrival)->format('jS  F ') }} -
                                                    {{ date('h : i A', strtotime($result->arrival)) }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flight-detail-right">
                                        <h4 class="title">{{ $result->FromPlace }} - {{ $result->fromcity }}</h4>
                                        <div class="flight-detail-info">
                                            <img src="assets/img/icon/booking_icon02.jpg" alt="">
                                            <ul>
                                                <li>Tpm Line</li>
                                                <li>Operated by EasyFly</li>
                                                <li>{{ $class }} | Flight ID: {{ $result->flight_id }} |
                                                    {{ $result->PlaneName }}</li>
                                                <li>Adult(s): 25KG luggage free</li>
                                            </ul>
                                        </div>
                                        <h4 class="title title-two">{{ $result->ToPlace }} - {{ $result->tocity }}
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h4 style="text-align: center;">No information about your flight, please wait for us to update
                            </h4>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <!-- booking-list-area-end -->

    </main>
    <!-- main-area-end -->
@endsection
