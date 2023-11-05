@extends('admin.layouts.app')
@section('content')
<div class="container">
    <h1 style="padding:20px 0px;text-align: center;">Update Airport</h1>
    <form action="{{route('sb_updateprocess',['code'=>$rs->airport_code])}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Airport Code</label>
            <input name="airport_code" value="{{$rs->airport_code}}"  class="form-control" readonly >
        </div>
        <div class="form-group">
            <label>Airport Name</label>
            <input input name="airport_name" value="{{$rs->airport_name}}" class="form-control">

        </div>
        <div class="form-group">
            <label>City</label>
            <input class="form-control" name="city" value="{{$rs->city}}">
        </div>
        <div class="form-group">
            <label>Country</label>
            <input  class="form-control" name="country" value="{{$rs->country}}">
        </div>
        <button  onclick="return confirm('Are you sure to update this airport?')" style="float:right;" type="submit" class="btn btn-primary">Update Airport</button>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
@endsection