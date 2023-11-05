@extends('admin.layouts.app')
@section('content')
<div class="container">
    <h1 style="padding:20px 0px;text-align: center;">add order</h1>
    <form action="{{route('order_addprocess')}}" method="POST">
        @csrf
        <table class="table">
            <tr>
                <td>customer_id</td>
                <td><input name="customer_id"></td>
            </tr>
            <tr>
                <td>order_date</td>
                <td><input name="order_date"></td>
            </tr>
            <tr>
                <td>status</td>
                <td><input name="status"></td>
            </tr>
            <tr>
                <td>total</td>
                <td><input name="total"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="them order">
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection