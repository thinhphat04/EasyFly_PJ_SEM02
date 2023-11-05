{{-- Trong kh_update.blade.php --}}
@extends('admin.layouts.app')

@section('content')

<div class="container">

    <h1 style="padding:20px 0px;text-align: center;">Cập nhật thông tin khách hàng</h1>

    <form action="{{ route('kh_updateprocess', ['code' => $rs->customer_id]) }}" method="POST">

        @csrf
        <table class="table">
            <tr>
                <td>Mã khách hàng</td>
                <td><input name="makhachhang" value="{{ $rs->customer_id }}" readonly></td>
            </tr>
            <tr>
                <td>Họ</td>
                <td><input name="ho" value="{{ $rs->lastname }}"></td>
            </tr>
            <tr>
                <td>Tên</td>
                <td><input name="ten" value="{{ $rs->firstname }}"></td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td><input name="gioitinh" value="{{ $rs->gender }}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input name="email" value="{{ $rs->email }}"></td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td><input name="sodienthoai" value="{{ $rs->phone }}"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Cập nhật">
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection