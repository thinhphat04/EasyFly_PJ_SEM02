@extends('admin.layouts.app')
@section('content')
    <div class="container" id="airport">
        @if (session()->has('message'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('message') }}
            </div>
        @endif
        <h1 style="padding:20px 0px;text-align: center;">Airport's Information</h1>
        <div style="padding-bottom: 20px; float:right;">
            <a href="{{ route('sb_add') }}">Add New Airport</a>
        </div>
        <input type="text" id="search-airport" name="search" class="mb-3 form-control" placeholder="Type here to search">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>AirportCode</th>
                    <th>Airport Name</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Function</th>
                </tr>
            </thead>
            <tbody id="dynamic-row">
                @forelse ($sanbay as $airport)
                    <tr>
                        <td>{{ $airport->airport_code }}</td>
                        <td>{{ $airport->airport_name }}</td>
                        <td>{{ $airport->city }}</td>
                        <td>{{ $airport->country }}</td>
                        <td>
                            <a href="{{ route('sb_update', ['code' => $airport->airport_code]) }}"><button
                                    class="btn btn-primary">Update</button></a> | <a onclick="confirmation(event)"
                                href="{{ route('sb_delete', ['code' => $airport->airport_code]) }}"><button
                                    class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @empty
                    <h3 style="text-align: center">No information</h3>
                @endforelse
            </tbody>

        </table>
        {{ $sanbay->links() }}
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('#search-airport').on('keyup', function() {
            var searchQuest = $(this).val();

            $.ajax({
                method: 'POST',
                url: '{{ route('searchairport') }}',
                dataType: 'json',
                data: {
                    searchQuest: searchQuest,
                    '_token': '{{ csrf_token() }}'
                },
                success: function(res) {
                    console.log(res)
                    var tableRow = '';
                    $('#dynamic-row').html('');
                    $.each(res, function(index, value) {
                        tableRow = '<tr><td>' +
                            value.airport_code + '</td><td>' +
                            value.airport_name + '</td><td>' +
                            value.city + '</td><td>' +
                            value.country +
                            '</td><td><a href="{{ route('sb_update', ['code' => $airport->airport_code]) }}"><button class="btn btn-primary">Update</button></a>| <a onclick="confirmation(event)" href="{{ route('sb_delete', ['code' => $airport->airport_code]) }}"><button class="btn btn-danger">Delete</button></a></td></tr>'

                        $('#dynamic-row').append(tableRow);
                    });
                }
            });
        });
    </script>
    <script>
        function confirmation(ev) {
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);
            swal({
                    title: "Are you sure to Delete this Airport?",
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
