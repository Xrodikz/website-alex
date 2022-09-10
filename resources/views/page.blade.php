@extends('layout.main')
@section('container')
@include('style.Nav.Navpage')
@include('style.Card.card')
@auth
{{-- <a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
<a class="btn btn-danger" href="{{ route('logout') }}">Logout</a> --}}
@endauth
{{-- @guest
<a class="btn btn-primary" href="{{ route('login') }}">Login</a>
<a class="btn btn-info" href="{{ route('register') }}">Register</a>
@endguest --}}
@endsection