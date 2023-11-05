@extends('admin.layouts.app')
@section('content')
<div class="container">
    <h1 style="padding:20px 0px;text-align: center;">Add Customer</h1>
    <form action="{{ route('customer_addprocess') }}" method="post">
        @csrf
        <div class="form-group">
            <label>AccountId</label>
            <input type="text" class="form-control" name="AccountId" value="{{ old('AccountId') }}">
            @error('AccountId')
            <div style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">
            @error('firstname')
            <div style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
            @error('lastname')
            <div style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Gender</label>
            <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
            @error('gender')
            <div style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
            @error('email')
            <div style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
            @error('phone')
            <div style="color:red">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button style="float:right;" type="submit" class="btn btn-primary">Add Customer</button>
    </form>
</div>
@endsection