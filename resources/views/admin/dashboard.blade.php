@extends('admin.layouts.app')
@section('content')
<h1 style="text-align: center; padding:10%; color:red;">Hello {{Auth::user()->name}}</h1>
@endsection