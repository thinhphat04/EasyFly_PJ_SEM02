@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('message') }}
            </div>
        @endif
        <h1 style="padding:20px 0px;text-align: center;">Add New Flight</h1>
        <form action="{{ route('flight_addprocess') }}" method="POST" style="padding-bottom: 50px;">
            @csrf
            <div class="form-group">
                <label>Plane code</label>
                <select name="planecode" class="form-control">
                    <option value="">Choose Plane</option>
                    @foreach ($planes as $key => $value)
                    <option value="{{ $value->PlaneCode }}"  @selected(old('planecode') == $value->PlaneCode)> {{ $value->PlaneName }}</option>
                    @endforeach
                </select>
                @error('planecode')
                <div style="color:red">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>From Place</label>
                <select name="FromPlace" class="form-control" >
                    <option value="">Choose airport</option>
                    @foreach ($airports as $key => $value)
                    <option value="{{ $value->airport_code }}" @selected(old('FromPlace') == $value->airport_code)> {{ $value->airport_name }}, {{ $value->city }}</option>
                    @endforeach
                </select>
                @error('FromPlace')
                <div style="color:red">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>To Place</label>
                <select name="ToPlace" class="form-control">
                    <option value="">Choose airport</option>
                    @foreach ($airports as $key => $value)
                    <option value="{{ $value->airport_code }}"  @selected(old('ToPlace') == $value->airport_code)> {{ $value->airport_name }}, {{ $value->city }}</option>
                    @endforeach
                </select>
                @error('ToPlace')
                <div style="color:red">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Departure</label>
                <input type="datetime-local" class="form-control" name="departure" value="{{ old('departure')}}">
                @error('departure')
                <div style="color:red">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Arrival</label>
                <input type="datetime-local" class="form-control" name="arrival" value="{{ old('arrival')}}" >
                @error('arrival')
                <div style="color:red">
                    {{$message}}
                </div>
                @enderror
            </div>
            {{-- <div class="form-group">
                <label>Available Seat</label>
                <input class="form-control" name="avail_seat" value="{{ old('avail_seat')}}" readonly>
            </div>
            @error('avail_seat')
            <div style="color:red">
                {{$message}}
            </div>
            @enderror --}}
            <button style="float:right;" type="submit" class="btn btn-primary">Add Flight</button>
        </form>
    </div>

@endsection
