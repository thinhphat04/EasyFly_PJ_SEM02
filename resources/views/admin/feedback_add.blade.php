@extends('admin.layouts.app')
@section('content')
<div class="container">
    @if (session()->has('message'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
    </div>
    @endif
    <h1 style="padding:20px 0px;text-align: center;">Add New Feedback</h1>
    <form action="{{route('feedback_addprocess')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Customer ID</label>
            <input name="customer_id" value="{{ old('customer_id') }}"  class="form-control" >
            @error('customer_id')
            <div style="color:red">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Comment</label>
            <input input name="Comment" value="{{ old('Comment') }}" class="form-control">
            @error('Comment')
            <div style="color:red">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Feedback Date</label>
            <input class="form-control" name="FeedbackDate" value="{{ old('FeedbackDate') }}" type="date">
            @error('FeedbackDate')
            <div style="color:red">
                {{$message}}
            </div>
            @enderror
        </div>
        <button style="float:right;" type="submit" class="btn btn-primary">Add Feedback</button>
    </form>
</div>

@endsection