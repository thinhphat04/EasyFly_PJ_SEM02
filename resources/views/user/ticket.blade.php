@extends('user.layouts.app')
@section('content')
{{-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> --}}
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
<div class="container">
    <h1 style="padding:20px 0px;text-align: center;">My Ticket Information</h1>
    @forelse ($tickets as $result)
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
                    <li>{{Carbon\Carbon::parse($result->departure)->format('l')}}, <span>{{Carbon\Carbon::parse($result->departure)->format('jS F ')}}</span></li>
                    <li class="time"><span> {{date('h : i A' , strtotime($result->departure))}}</span></li>

                </ul>
                <div class="flight-price">
                    <h4 class="title">$ {{$result->price}}</h4>
                    <a href="{{ route('cancel.flight', ['ticketId' => $result->ticket_id]) }}" class="btn cancel-flight-btn">Cancel <i class="flaticon-flight-1"></i></a>
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
                    <li>Passenger's Information</li>
                    <li>Fist Name: {{$result->pass_firstname}}</li>
                    <li>Last Name: {{$result->pass_lastname}}</li>
                    <li>Passport: {{$result->pass_cmnd}}</li>
                </ul>
            </div>
            <div class="flight-detail-right">
                <h4 class="title">{{$result->FromPlace}} </h4>
                <div class="flight-detail-info">
                    <img src="assets/img/icon/booking_icon02.jpg" alt="">
                    <ul>
                        <li>Tpm Line</li>
                        <li>Operated by EasyFly</li>
                        <li>Flight ID: {{$result->flight_id}} | {{$result->PlaneName}} | Ticket ID: {{$result->ticket_id}} | Class: {{$result->type}}</li>
                        <li>Adult(s): 25KG luggage free</li>
                    </ul>
                </div>
                <h4 class="title title-two">{{$result->ToPlace}} </h4>
            </div>
        </div>
    </div>
    @empty
    <h4 style="text-align: center;">No information about your flight, please wait for us to update</h4>
    @endforelse
</div>
<script>
    $(document).ready(function() {
        $('.cancel-flight-btn').click(function(e) {
            e.preventDefault();
            var ticketId = $(this).data('ticket-id');
            if (confirm("Do you want to cancel this flight?")) {}
        });
    });
</script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@endsection