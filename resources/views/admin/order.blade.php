@extends('admin.layouts.app')
@section('content')
<!-- dat ve -->
<div class="container">
    <h1 style="padding:20px 0px;text-align: center;">Order Information</h1>
    <div style="padding-bottom: 20px; float:right;">
        <a href="{{route('order_add')}}">Add Order</a>
    </div>
    <table class="table table-hover">
        <tr>
            <th>order_id</th>
            <th>customer_id</th>
            <th>quantity</th>
            <th>total_price</th>
            <th>status</th>
            <th>create_at</th>
            <th>paymentmethod</th>
        </tr>
        @forelse ($orders as $order)
        <tr>
            <td>{{$order->order_id}}</td>
            <td>{{$order->customer_id}}</td>
            <td>{{$order->quantity}}</td>
            <td>{{$order->total_price}}</td>
            <td>{{$order->status}}</td>
            <td>{{$order->create_at}}</td>
            <td>{{$order->paymentmethod}}</td>
            <td>
                <a href="{{route('order_update',['code'=> $order->order_id])}}"><button class="btn btn-primary">Update</button></a> | <a href="{{route('order_delete',['code'=>$order->order_id])}}"><button class="btn btn-danger">Delete</button></a>
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
    $('#search-order').on('keyup', function() {
        let value = $(this).val();
        if (value) {
            $('#order-row').hide('');
            $('#order-row').show('');
        }
        $.ajax({
            type: 'POST',
            url: "{{ route('searchOrder') }}",
            data: {
                'search': value,
                '_token': '{{ csrf_token() }}'
            },
            success: function(data) {
                console.log(data);
                $('#order-row').html(data);
            }
        });
    })
</script>
<script>
    function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
        swal({
                title: "Are you sure to Delete this Flight?",
                text: "You will not be able to revert this!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willCancel) => {
                if (willCancel) {
                    window.location.href = urlToRedirect;
                }
            });
    }
</script>
@endsection