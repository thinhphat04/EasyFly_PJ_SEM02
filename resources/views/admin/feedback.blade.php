@extends('admin.layouts.app')
@section('content')
    <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('message') }}
            </div>
        @endif
        <h1 style="padding:20px 0px;text-align: center;">Feedback's Information</h1>
        <div style="padding-bottom: 20px; float:right;">
            <a href="{{ route('feedback_add') }}">Add New Feedback</a>
        </div>
        <div class="search">
            <input type="text" id="search" name="search" class="mb-3 form-control" placeholder="Type here to search">
        </div>
        <table class="table .table-responsive">
            <thead class="thead-light">
                <tr>
                    <th>Feedback ID</th>
                    <th>Customer ID</th>
                    <th>Comment</th>
                    <th>Feedback Date</th>
                    <th>Function</th>
                </tr>
            </thead>
            <tbody id="feedback-row">
                @forelse ($feedbacks as $feedback)
                    <tr>
                        <td>{{ $feedback->FeedbackId }}</td>
                        <td>{{ $feedback->customer_id }}</td>
                        <td>{{ $feedback->Comment }}</td>
                        <td>{{ date('d-m-Y ', strtotime($feedback->FeedbackDate)) }}</td>
                        <td>
                            <a href="{{ route('feedback_update', ['code' => $feedback->FeedbackId]) }}"><button
                                    class="btn btn-primary">Update</button></a> | <a
                                href="{{ route('feedback_delete', ['code' => $feedback->FeedbackId]) }}"
                                onclick="confirmation(event)"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @empty
                    <h3 style="text-align: center">No information</h3>
                @endforelse
            </tbody>
            <tbody id="Content"></tbody>
        </table>
        {{ $feedbacks->links() }}
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('#search').on('keyup', function() {
            var value = $(this).val();
            if (value) {
                $('#feedback-row').hide();
                $('#Content').show();
            }
            $.ajax({
                type: 'POST',
                url: '{{ route('searchfeedback') }}',

                data: {
                    'search': value,
                    '_token': '{{ csrf_token() }}'
                },
                success: function(data) {
                    console.log(data);
                    $('#Content').html(data);
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
                    title: "Are you sure to Delete this Feedback",
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
