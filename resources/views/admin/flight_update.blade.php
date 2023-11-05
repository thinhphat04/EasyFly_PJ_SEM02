@extends('admin.layouts.app')
@section('content')
<div class="container">
    <h1 style="padding:20px 0px;text-align: center;">Update Flight</h1>

    <form action="{{route('flight_updateprocess',['code'=> $flight->flight_id])}}" method="POST" style="padding-bottom: 50px;">
        @csrf
        {{-- <table class="table .table-responsive">
            <thead class="thead-light">
            <tr>
                <th>Flight ID</th>
                <th>Plane Code</th>
                <th>From Place</th>
                <th>To Place</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Available Seat</th>
            </tr>
        </thead>
            <tr>
                <td>{{  $flight->flight_id}}</td>
                <td>{{  $flight->planecode }}</td>
                <td>{{  $flight->FromPlace }}</td>
                <td>{{  $flight->ToPlace }}</td>
                <td>{{ date('d-m-Y  h : i A' , strtotime($flight->departure))  }}</td>
                <td>{{  date('d-m-Y  h : i A' , strtotime($flight->arrival)) }}</td>
                <td>{{  $flight->avail_seat }}</td>
            </tr>
        </table> --}}
        <div class="form-group">
            <label>Plane code</label>
            <select name="planecode" class="form-control">
                <option value="{{$flight->planecode}}">{{$flight->planecode}}</option>
                @foreach ($planes as $key => $value)
                <option value="{{ $value->PlaneCode }}"  @selected(old('planecode') == $value->PlaneCode)> {{ $value->PlaneCode }} - {{ $value->PlaneName }}</option>
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
                <option value="{{$flight->FromPlace}}">{{$flight->FromPlace}}</option>
                @foreach ($airports as $key => $value)
                <option value="{{ $value->airport_code }}" @selected(old('FromPlace') == $value->airport_code)>{{ $value->airport_code }} -  {{ $value->airport_name }}, {{ $value->city }}</option>
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
                <option value="{{$flight->ToPlace}}">{{$flight->ToPlace}}</option>
                @foreach ($airports as $key => $value)
                <option value="{{ $value->airport_code }}"  @selected(old('ToPlace') == $value->airport_code)>{{ $value->airport_code }} -  {{ $value->airport_name }}, {{ $value->city }}</option>
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
            <input type="datetime-local" class="form-control" name="departure" value="<?php echo $flight->departure; ?>">
            @error('departure')
            <div style="color:red">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Arrival</label>
            <input type="datetime-local" class="form-control" name="arrival" value="<?php echo $flight->arrival; ?>" >
            @error('arrival')
            <div style="color:red">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Available Seat</label>
            <input class="form-control" name="avail_seat" value="{{$flight->avail_seat}}">
        </div>
        @error('avail_seat')
        <div style="color:red">
            {{$message}}
        </div>
        @enderror
        <button  onclick="return confirm('Are you sure to update this ?')" style="float:right;" type="submit" class="btn btn-primary">Update Flight</button>
    </form>
</div>

@endsection