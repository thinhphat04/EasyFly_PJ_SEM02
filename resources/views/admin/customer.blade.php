@extends('admin.layouts.app')
@section('content')
<div class="container" id="airport">
    @if (session()->has('message'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
    </div>
    @endif
    <h1 style="padding:20px 0px;text-align: center;">Customer Information</h1>
    <div style="padding-bottom: 20px; float:right;">
        <a href="{{ route('customer_add') }}">Add customer</a>
    </div>
    <div class="search">
        <input type="text" id="search" name="search" class="mb-3 form-control" placeholder="Type here to search">
    </div>
    <table class="table table-hover">
        <tr>
            <th>customer_id</th>
            <th>AccountId</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>gender</th>
            <th>email</th>
            <th>phone</th>
        </tr>
        @forelse($customers as $customer)
        <tr>
            <td>{{$customer->customer_id}}</td>
            <td>{{$customer->AccountId}}</td>
            <td>{{$customer->firstname}}</td>
            <td>{{$customer->lastname}}</td>
            <td>{{$customer->gender}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->phone}}</td>
            <td>
                <a href="{{ route('customer_update', ['code' => $customer->customer_id]) }}"><button class="btn btn-primary">Update</button></a> | <a onclick="confirmation(event)" href="{{ route('customer_delete', ['code' => $customer->customer_id]) }}"><button class="btn btn-danger">Delete</button></a>
            </td>
        </tr>
        @empty
        <h3 style="text-align: center">No information</h3>
        @endforelse

    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $('#search').on('keyup', function() {
        var searchQuest = $(this).val();

        $.ajax({
            method: 'POST',
            url: '{{ route("searchcustomer") }}',
            dataType: 'json',
            data: {
                searchQuest: searchQuest,
                '_token': '{{ csrf_token() }}'
            },
            success: function(res) {
                console.log(res)
                var tableRow = '';
                $('table tbody').html('');
                $.each(res, function(index, value) {
                    tableRow = '<tr><td>' +
                        value.customer_id + '</td><td>' +
                        value.AccountId + '</td><td>' +
                        value.firstname + '</td><td>' +
                        value.lastname + '</td><td>' +
                        value.gender + '</td><td>' +
                        value.email + '</td><td>' +
                        value.phone +
                        '</td><td><a href="{{ route("customer_update", ["code" => $customer->customer_id]) }}"><button class="btn btn-primary">Update</button></a> | <a onclick="confirmation(event)" href="{{ route("customer_delete", ["code" => $customer->customer_id]) }}"><button class="btn btn-danger">Delete</button></a></td></tr>';
                    $('table tbody').append(tableRow);


                });
            }
        });
    });

    function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
        swal({
            title: "Are you sure to Delete this Customer?",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willCancel) => {
            if (willCancel) {
                window.location.href = urlToRedirect;
            }
        });
    }
</script>
@endsection