@extends('admin.layouts.app')
@section('content')
<div class="container">
    <h1 style="padding:20px 0px;text-align: center;">Update Feedback</h1>
    <form action="{{route('feedback_updateprocess',['code'=>$rs->FeedbackId])}}" method="POST">
        @csrf
        <div class="form-group">
            <label>FeedBack ID</label>
            <input name="FeedbackId" readonly value="{{$rs->FeedbackId}}" class="form-control" >
        </div>
        <div class="form-group">
            <label>Customer ID</label>
            <input name="customer_id" value="{{$rs->customer_id}}"  class="form-control" >
            @error('customer_id')
            <div style="color:red">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Comment</label>
            <input input name="Comment" value="{{$rs->Comment}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Feedback Date</label>
            <input class="form-control" name="FeedbackDate" value="{{$rs->FeedbackDate}}" type="date">
        </div>
        <button style="float:right;" type="submit" class="btn btn-primary">Update FeedBack</button>
    </form>
</div>

@endsection