@extends('admin.layouts.app')
@section('content')
<div class="container">
    @if (session()->has('message'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
    </div>
    @endif
    <h1 style="padding:20px 0px;text-align: center;">Add New seatclass</h1>
    <form action="{{route('seatclass_addprocess')}}" method="POST">
        @csrf
        <!-- Flight_id	price_class_TG	num_class_PT	num_class_TG	price_class_PT -->
        <div class="form-group">
            <label>Flight_id</label>
            <input type="text" name="Flight_id" class="form-control" value="{{ old('Flight_id') }}" placeholder="Enter Flight ID or Choose from the list">
            @error('Flight_id')
            <div style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>price_class_TG</label>
            <input type="text" class="form-control" name="price_class_TG" value="{{ old('price_class_TG')}}">
            @error('price_class_TG')
            <div style="color:red">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>num_class_PT</label>
            <input type="text" class="form-control" name="num_class_PT" value="{{ old('num_class_PT')}}">
            @error('num_class_PT')
            <div style="color:red">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>num_class_TG</label>
            <input type="text" class="form-control" name="num_class_TG" value="{{ old('num_class_TG')}}">
            @error('num_class_TG')
            <div style="color:red">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>price_class_PT</label>
            <input type="text" class="form-control" name="price_class_PT" value="{{ old('price_class_PT')}}">
            @error('price_class_PT')
            <div style="color:red">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
@endsection