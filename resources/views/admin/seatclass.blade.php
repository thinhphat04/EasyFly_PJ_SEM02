@extends('admin.layouts.app')
@section('content')
<div class="container">
    @if (session()->has('message'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
    </div>
    @endif
    <h1 style="padding:20px 0px;text-align: center;">Seat Class's Information</h1>
    <div style="padding-bottom: 20px; float:right;">
        <a href="{{ route('seatclass_add') }}">Add New Seat Class</a>
    </div>
    <div class="search">
        <input type="text" id="search" name="search" class="mb-3 form-control" placeholder="Type here to search">
    </div>
    <table class="table .table-responsive">
        <thead class="thead-light">
            <tr>
                <th>Flight ID</th>
                <th>Price Class TG</th>
                <th>Num Class PT</th>
                <th>Num Class TG</th>
                <th>Price Class PT</th>
                <th>Function</th>
            </tr>
        </thead>
        <tbody id="feedback-row">
            @forelse ($seatclasses as $seatclass)
            <tr>
                <td>{{ $seatclass->Flight_id }}</td>
                <td>{{ $seatclass->price_class_TG }}</td>
                <td>{{ $seatclass->num_class_PT }}</td>
                <td>{{ $seatclass->num_class_TG }}</td>
                <td>{{ $seatclass->price_class_PT }}</td>
                <td>
                    <a href="{{ route('seatclass_update', ['code' => $seatclass->Flight_id]) }}"><button class="btn btn-primary">Update</button></a> | <a href="{{ route('seatclass_delete', ['code' => $seatclass->Flight_id]) }}" onclick="confirmation(event)"><button class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            @empty
            <h3 style="text-align: center">No information</h3>
            @endforelse
        </tbody>
        <tbody id="Content"></tbody>
    </table>
    {{ $seatclasses->links() }}
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $('#search').on('keyup', function() {
        var value = $(this).val();
        if (value) {
            $('#seat_class-row').hide();
            $('#Content').show();
        }
        $.ajax({
            type: 'POST',
            url: "{{ route('searchseatclass') }}",
            data: {
                '_token': '{{ csrf_token() }}',
                'search': value
            },
            success: function(data) {
                $('#Content').html(data);
            }
        });
    });

    function confirmation(e) {
        e.preventDefault();
        var url = e.target.getAttribute('href');
        swal({
                title: 'Are you sure?',
                text: 'Once deleted, you will not be able to recover this imaginary file!',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = urlToRedirect;
                }
            });
    }
</script>
@endsection