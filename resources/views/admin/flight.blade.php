@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('message') }}
            </div>
        @endif
        <h1 style="padding:20px 0px;text-align: center;">Flight's Information</h1>
        <div style="padding-bottom: 20px; float:right;">
            <a href="{{ route('flight_add') }}">Add New Flight</a>
        </div>
        <div class="search">
            <input type="text" id="search-flight" name="search" class="mb-3 form-control" placeholder="Type here to search">
        </div>
        <table class="table .table-responsive" style="padding-bottom: 50px">
            <thead class="thead-light">
                <tr>
                    <th>Flight ID</th>
                    <th>Plane Code</th>
                    <th>From Place</th>
                    <th>To Place</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th>Available Seat</th>
                    <th>Function</th>
                </tr>
            </thead>
            <tbody id="flight-row">
                @forelse ($flights as $flight)
                <tr>
                    <td>{{ $flight->flight_id }}</td>
                    <td>{{ $flight->planecode }}</td>
                    <td>{{ $flight->FromPlace }}</td>
                    <td>{{ $flight->ToPlace }}</td>
                    <td>{{ date('d-m-Y  h : i A', strtotime($flight->departure)) }}</td>
                    <td>{{ date('d-m-Y  h : i A', strtotime($flight->arrival)) }}</td>
                    <td>{{ $flight->avail_seat }}</td>
                    <td>
                        <a href="{{ route('flight_update', ['code' => $flight->flight_id]) }}"><button
                                class="btn btn-primary">Update</button></a> | <a onclick="confirmation(event)"
                            href="{{ route('flight_delete', ['code' => $flight->flight_id]) }}"><button
                                class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            @empty
                <h3 style="text-align: center">No information</h3>
            @endforelse
            </tbody>
            <tbody id="flight-data"></tbody>
        </table>
        {{ $flights->links() }}
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript"> 
        $('#search-flight').on('keyup', function() {
            let value = $(this).val();
            if(value){
                $('#flight-row').hide();
                $('#flight-data').show();
            }
            $.ajax({
                type: 'POST',
                url: "{{ route('searchflightadmin') }}",

                data: {
                    'search': value,
                    '_token': '{{ csrf_token() }}'
                },
                success: function(data){
                    console.log(data);
                    $('#flight-data').html(data);
                }
                
            });
        });
    </script>
    {{-- <script type="text/javascript">
        $('#search-flight').on('keyup', function() {
            var searchQuest = $(this).val();
            // console.log(searchQuest);
            $.ajax({
                method: 'POST',
                url: '{{ route('searchflightadmin') }}',
                dataType: 'json',
                data: {
                    searchQuest: searchQuest,
                    '_token': '{{ csrf_token() }}'
                },
                success: function(res) {
                    console.log(res)
                    var tableRow = '';
                    $('#flight-row').html('');
                    $.each(res, function(index, value) {
                        tableRow = '<tr><td>' +
                            value.flight_id + '</td><td>' +
                            value.planecode + '</td><td>' +
                            value.FromPlace + '</td><td>' +
                            value.country +
                            '</td><td><a href="{{ route('sb_update', ['code' => $flight->flight_id]) }}"><button class="btn btn-primary">Update</button></a>| <a onclick="confirmation(event)" href="{{ route('sb_delete', ['code' => $flight->flight_id]) }}"><button class="btn btn-danger">Delete</button></a></td></tr>'

                        $('#flight-row').append(tableRow);
                    });
                }
            });
        });
    </script> --}}
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

