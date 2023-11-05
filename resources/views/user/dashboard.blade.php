@extends('user.layouts.app')
@section('content')
<h1 style="text-align: center; padding:10%; color:red;">Hello {{Auth::user()->name}}, welcome to your dashboard</h1>
@endsection