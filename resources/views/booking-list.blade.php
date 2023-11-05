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
                                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Booking List</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            <!-- booking-list-area -->
            <div class="booking-list-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-27 order-2 order-xl-0">
                            <aside class="booking-sidebar">
                                <div class="widget filters">
                                    <h2 class="title">filters</h2>
                                    <div class="filters-wrap">
                                        <h2 class="widget-title">Price Range</h2>
                                        <div class="price_filter">
                                            <div id="slider-range"></div>
                                            <div class="price_slider_amount">
                                                <span>Price :</span>
                                                <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                                <input type="submit" class="btn" value="Filter">
                                            </div>
                                        </div>
                                    </div>
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
                                <div class="widget">
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
                                </div>
                                <div class="widget">
                                    <h2 class="widget-title">Weights</h2>
                                    <ul class="airlines-cat-list weights-list">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="weightsOne">
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
                                                <input class="form-check-input" type="checkbox" value="" id="refOne">
                                                <label class="form-check-label" for="refOne">Non Refundable</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="refTwo">
                                                <label class="form-check-label" for="refTwo">Refundable</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="refThree">
                                                <label class="form-check-label" for="refThree">Rules Wise</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-73">
                            <div class="booking-list-item">
                                <div class="booking-list-item-inner">
                                    <div class="booking-list-top">
                                        <div class="flight-airway">
                                            <div class="flight-logo">
                                                <img src="assets/img/icon/booking_icon01.jpg" alt="">
                                                <h5 class="title">Etihad Airway</h5>
                                            </div>
                                            <span>Operated by Emirates</span>
                                        </div>
                                        <ul class="flight-info">
                                            <li>Thursday, <span>Jun 16</span></li>
                                            <li class="time"><span>12: 55</span>DAC</li>
                                            <li>22h<span>2 Stops</span></li>
                                        </ul>
                                        <div class="flight-price">
                                            <h4 class="title">US$ 1,056.40</h4>
                                            <a href="booking-details.html" class="btn">Select <i class="flaticon-flight-1"></i></a>
                                        </div>
                                    </div>
                                    <div class="booking-list-bottom">
                                        <ul>
                                            <li class="detail"><i class="fa-solid fa-angle-down"></i> Flight Detail</li>
                                            <li>Price per person (incl. taxes & fees)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flight-detail-wrap">
                                    <div class="flight-date">
                                        <ul>
                                            <li>Thursday, Jun 16</li>
                                            <li>Thursday, Jun 16 - 23:20 <span>22h 50m</span></li>
                                            <li>Friday, Jun 17 - 03:20</li>
                                        </ul>
                                    </div>
                                    <div class="flight-detail-right">
                                        <h4 class="title">IST - Istanbul Airport, Turkish</h4>
                                        <div class="flight-detail-info">
                                            <img src="assets/img/icon/booking_icon01.jpg" alt="">
                                            <ul>
                                                <li>Tpm Line</li>
                                                <li>Operated by Airlines</li>
                                                <li>Economy | Flight EK585 | Aircraft BOEING 777-300ER</li>
                                                <li>Adult(s): 25KG luggage free</li>
                                            </ul>
                                        </div>
                                        <h4 class="title title-two">DXB - Dubai, United Arab Emirates</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-list-item">
                                <div class="booking-list-item-inner">
                                    <div class="booking-list-top">
                                        <div class="flight-airway">
                                            <div class="flight-logo">
                                                <img src="assets/img/icon/booking_icon02.jpg" alt="">
                                                <h5 class="title">Qatar Airways</h5>
                                            </div>
                                            <span>Operated by Emirates</span>
                                        </div>
                                        <ul class="flight-info">
                                            <li>Thursday, <span>Jun 16</span></li>
                                            <li class="time"><span>12: 55</span>DAC</li>
                                            <li>22h<span>2 Stops</span></li>
                                        </ul>
                                        <div class="flight-price">
                                            <h4 class="title">US$ 1,099.40</h4>
                                            <a href="booking-details.html" class="btn">Select <i class="flaticon-flight-1"></i></a>
                                        </div>
                                    </div>
                                    <div class="booking-list-bottom">
                                        <ul>
                                            <li class="detail"><i class="fa-solid fa-angle-down"></i> Flight Detail</li>
                                            <li>Price per person (incl. taxes & fees)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flight-detail-wrap">
                                    <div class="flight-date">
                                        <ul>
                                            <li>Thursday, Jun 16</li>
                                            <li>Thursday, Jun 16 - 23:20 <span>22h 50m</span></li>
                                            <li>Friday, Jun 17 - 03:20</li>
                                        </ul>
                                    </div>
                                    <div class="flight-detail-right">
                                        <h4 class="title">IST - Istanbul Airport, Turkish</h4>
                                        <div class="flight-detail-info">
                                            <img src="assets/img/icon/booking_icon02.jpg" alt="">
                                            <ul>
                                                <li>Tpm Line</li>
                                                <li>Operated by Airlines</li>
                                                <li>Economy | Flight EK585 | Aircraft BOEING 777-300ER</li>
                                                <li>Adult(s): 25KG luggage free</li>
                                            </ul>
                                        </div>
                                        <h4 class="title title-two">DXB - Dubai, United Arab Emirates</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-list-item">
                                <div class="booking-list-item-inner">
                                    <div class="booking-list-top">
                                        <div class="flight-airway">
                                            <div class="flight-logo">
                                                <img src="assets/img/icon/booking_icon03.jpg" alt="">
                                                <h5 class="title">Envat (DXB)</h5>
                                            </div>
                                            <span>Operated by Emirates</span>
                                        </div>
                                        <ul class="flight-info">
                                            <li>Thursday, <span>Jun 16</span></li>
                                            <li class="time"><span>12: 55</span>DAC</li>
                                            <li>22h<span>2 Stops</span></li>
                                        </ul>
                                        <div class="flight-price">
                                            <h4 class="title">US$ 1,200.00</h4>
                                            <a href="booking-details.html" class="btn">Select <i class="flaticon-flight-1"></i></a>
                                        </div>
                                    </div>
                                    <div class="booking-list-bottom">
                                        <ul>
                                            <li class="detail"><i class="fa-solid fa-angle-down"></i> Flight Detail</li>
                                            <li>Price per person (incl. taxes & fees)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flight-detail-wrap">
                                    <div class="flight-date">
                                        <ul>
                                            <li>Thursday, Jun 16</li>
                                            <li>Thursday, Jun 16 - 23:20 <span>22h 50m</span></li>
                                            <li>Friday, Jun 17 - 03:20</li>
                                        </ul>
                                    </div>
                                    <div class="flight-detail-right">
                                        <h4 class="title">IST - Istanbul Airport, Turkish</h4>
                                        <div class="flight-detail-info">
                                            <img src="assets/img/icon/booking_icon03.jpg" alt="">
                                            <ul>
                                                <li>Tpm Line</li>
                                                <li>Operated by Airlines</li>
                                                <li>Economy | Flight EK585 | Aircraft BOEING 777-300ER</li>
                                                <li>Adult(s): 25KG luggage free</li>
                                            </ul>
                                        </div>
                                        <h4 class="title title-two">DXB - Dubai, United Arab Emirates</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-list-item">
                                <div class="booking-list-item-inner">
                                    <div class="booking-list-top">
                                        <div class="flight-airway">
                                            <div class="flight-logo">
                                                <img src="assets/img/icon/booking_icon04.jpg" alt="">
                                                <h5 class="title">Lankan Airlines</h5>
                                            </div>
                                            <span>Operated by Emirates</span>
                                        </div>
                                        <ul class="flight-info">
                                            <li>Thursday, <span>Jun 16</span></li>
                                            <li class="time"><span>12: 55</span>DAC</li>
                                            <li>22h<span>2 Stops</span></li>
                                        </ul>
                                        <div class="flight-price">
                                            <h4 class="title">US$ 1,056.40</h4>
                                            <a href="booking-details.html" class="btn">Select <i class="flaticon-flight-1"></i></a>
                                        </div>
                                    </div>
                                    <div class="booking-list-bottom">
                                        <ul>
                                            <li class="detail"><i class="fa-solid fa-angle-down"></i> Flight Detail</li>
                                            <li>Price per person (incl. taxes & fees)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flight-detail-wrap">
                                    <div class="flight-date">
                                        <ul>
                                            <li>Thursday, Jun 16</li>
                                            <li>Thursday, Jun 16 - 23:20 <span>22h 50m</span></li>
                                            <li>Friday, Jun 17 - 03:20</li>
                                        </ul>
                                    </div>
                                    <div class="flight-detail-right">
                                        <h4 class="title">IST - Istanbul Airport, Turkish</h4>
                                        <div class="flight-detail-info">
                                            <img src="assets/img/icon/booking_icon04.jpg" alt="">
                                            <ul>
                                                <li>Tpm Line</li>
                                                <li>Operated by Airlines</li>
                                                <li>Economy | Flight EK585 | Aircraft BOEING 777-300ER</li>
                                                <li>Adult(s): 25KG luggage free</li>
                                            </ul>
                                        </div>
                                        <h4 class="title title-two">DXB - Dubai, United Arab Emirates</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-list-item">
                                <div class="booking-list-item-inner">
                                    <div class="booking-list-top">
                                        <div class="flight-airway">
                                            <div class="flight-logo">
                                                <img src="assets/img/icon/booking_icon05.jpg" alt="">
                                                <h5 class="title">Dubai (DXB)</h5>
                                            </div>
                                            <span>Operated by Emirates</span>
                                        </div>
                                        <ul class="flight-info">
                                            <li>Thursday, <span>Jun 16</span></li>
                                            <li class="time"><span>12: 55</span>DAC</li>
                                            <li>22h<span>2 Stops</span></li>
                                        </ul>
                                        <div class="flight-price">
                                            <h4 class="title">US$ 1,056.40</h4>
                                            <a href="booking-details.html" class="btn">Select <i class="flaticon-flight-1"></i></a>
                                        </div>
                                    </div>
                                    <div class="booking-list-bottom">
                                        <ul>
                                            <li class="detail"><i class="fa-solid fa-angle-down"></i> Flight Detail</li>
                                            <li>Price per person (incl. taxes & fees)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flight-detail-wrap">
                                    <div class="flight-date">
                                        <ul>
                                            <li>Thursday, Jun 16</li>
                                            <li>Thursday, Jun 16 - 23:20 <span>22h 50m</span></li>
                                            <li>Friday, Jun 17 - 03:20</li>
                                        </ul>
                                    </div>
                                    <div class="flight-detail-right">
                                        <h4 class="title">IST - Istanbul Airport, Turkish</h4>
                                        <div class="flight-detail-info">
                                            <img src="assets/img/icon/booking_icon05.jpg" alt="">
                                            <ul>
                                                <li>Tpm Line</li>
                                                <li>Operated by Airlines</li>
                                                <li>Economy | Flight EK585 | Aircraft BOEING 777-300ER</li>
                                                <li>Adult(s): 25KG luggage free</li>
                                            </ul>
                                        </div>
                                        <h4 class="title title-two">DXB - Dubai, United Arab Emirates</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-list-item">
                                <div class="booking-list-item-inner">
                                    <div class="booking-list-top">
                                        <div class="flight-airway">
                                            <div class="flight-logo">
                                                <img src="assets/img/icon/booking_icon01.jpg" alt="">
                                                <h5 class="title">Etihad Airway</h5>
                                            </div>
                                            <span>Operated by Emirates</span>
                                        </div>
                                        <ul class="flight-info">
                                            <li>Thursday, <span>Jun 16</span></li>
                                            <li class="time"><span>12: 55</span>DAC</li>
                                            <li>22h<span>2 Stops</span></li>
                                        </ul>
                                        <div class="flight-price">
                                            <h4 class="title">US$ 1,056.40</h4>
                                            <a href="booking-details.html" class="btn">Select <i class="flaticon-flight-1"></i></a>
                                        </div>
                                    </div>
                                    <div class="booking-list-bottom">
                                        <ul>
                                            <li class="detail"><i class="fa-solid fa-angle-down"></i> Flight Detail</li>
                                            <li>Price per person (incl. taxes & fees)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flight-detail-wrap">
                                    <div class="flight-date">
                                        <ul>
                                            <li>Thursday, Jun 16</li>
                                            <li>Thursday, Jun 16 - 23:20 <span>22h 50m</span></li>
                                            <li>Friday, Jun 17 - 03:20</li>
                                        </ul>
                                    </div>
                                    <div class="flight-detail-right">
                                        <h4 class="title">IST - Istanbul Airport, Turkish</h4>
                                        <div class="flight-detail-info">
                                            <img src="assets/img/icon/booking_icon01.jpg" alt="">
                                            <ul>
                                                <li>Tpm Line</li>
                                                <li>Operated by Airlines</li>
                                                <li>Economy | Flight EK585 | Aircraft BOEING 777-300ER</li>
                                                <li>Adult(s): 25KG luggage free</li>
                                            </ul>
                                        </div>
                                        <h4 class="title title-two">DXB - Dubai, United Arab Emirates</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-list-item">
                                <div class="booking-list-item-inner">
                                    <div class="booking-list-top">
                                        <div class="flight-airway">
                                            <div class="flight-logo">
                                                <img src="assets/img/icon/booking_icon02.jpg" alt="">
                                                <h5 class="title">Tom Line (DXB)</h5>
                                            </div>
                                            <span>Operated by Emirates</span>
                                        </div>
                                        <ul class="flight-info">
                                            <li>Thursday, <span>Jun 16</span></li>
                                            <li class="time"><span>12: 55</span>DAC</li>
                                            <li>22h<span>2 Stops</span></li>
                                        </ul>
                                        <div class="flight-price">
                                            <h4 class="title">US$ 1,056.40</h4>
                                            <a href="booking-details.html" class="btn">Select <i class="flaticon-flight-1"></i></a>
                                        </div>
                                    </div>
                                    <div class="booking-list-bottom">
                                        <ul>
                                            <li class="detail"><i class="fa-solid fa-angle-down"></i> Flight Detail</li>
                                            <li>Price per person (incl. taxes & fees)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flight-detail-wrap">
                                    <div class="flight-date">
                                        <ul>
                                            <li>Thursday, Jun 16</li>
                                            <li>Thursday, Jun 16 - 23:20 <span>22h 50m</span></li>
                                            <li>Friday, Jun 17 - 03:20</li>
                                        </ul>
                                    </div>
                                    <div class="flight-detail-right">
                                        <h4 class="title">IST - Istanbul Airport, Turkish</h4>
                                        <div class="flight-detail-info">
                                            <img src="assets/img/icon/booking_icon02.jpg" alt="">
                                            <ul>
                                                <li>Tpm Line</li>
                                                <li>Operated by Airlines</li>
                                                <li>Economy | Flight EK585 | Aircraft BOEING 777-300ER</li>
                                                <li>Adult(s): 25KG luggage free</li>
                                            </ul>
                                        </div>
                                        <h4 class="title title-two">DXB - Dubai, United Arab Emirates</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- booking-list-area-end -->

        </main>
        <!-- main-area-end -->

@endsection