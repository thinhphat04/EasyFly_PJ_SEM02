@extends('admin.layouts.app')
@section('content')
<div class="container">
    <h1 style="padding:20px 0px;text-align: center;">Ticket Information</h1>
    <div style="padding-bottom: 20px; float:right;">
        <a href="{{route('ticket_add')}}">Add ticket</a>
    </div>
    <div class="search">
        <input type="text" id="search" name="search" class="mb-3 form-control" placeholder="Type here to search">
    </div>
    <table class="table table-hover">
        <tr>
            <th>ticket_id</th>
            <th>flight_id</th>
            <th>Customer_id</th>
            <th>pass_firstname</th>
            <th>pass_lastname</th>
            <th>pass_gender</th>
            <th>pass_dob</th>
            <th>pass_cmnd</th>
            <th>type</th>
        </tr>
        @forelse($tickets as $ticket)
        <tr>
            <td>{{$ticket->ticket_id}}</td>
            <td>{{$ticket->flight_id}}</td>
            <td>{{$ticket->Customer_id}}</td>
            <td>{{$ticket->pass_firstname}}</td>
            <td>{{$ticket->pass_lastname}}</td>
            <td>{{$ticket->pass_gender}}</td>
            <td>{{$ticket->pass_dob}}</td>
            <td>{{$ticket->pass_cmnd}}</td>
            <td>{{$ticket->type}}</td>
            <td>
                <a href="{{route('ticket_update',['code'=> $ticket->ticket_id])}}"><button class="btn btn-primary">Update</button></a> | <a href="{{route('ticket_delete',['code'=>$ticket->ticket_id])}}"><button class="btn btn-danger">Delete</button></a>
            </td>
        </tr>
        @empty
        <h3 style="text-align: center">No information</h3>
        @endforelse

    </table>
</div>
@endsection