@extends('layout.main')
@section('container')
<link rel="stylesheet" href="/css/login.css">
<div class="center">
    <div class="header">
       Login Form
    </div>
<div class="row">
    <div class="col-md-6">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('login.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" placeholder="Email or Username">
                <i class="far fa-envelope"></i>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" />
                <i class="far fa-envelope"></i>
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger"></span></label>
                <input class="form-control" type="password" name="password" onclick="show()"/>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Login</button>
                <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
            </div>
        </form>
    </div>
</div>
</div>
<script>
    function show(){
     var pswrd = document.getElementById('pswrd');
     var icon = document.querySelector('.fas');
     if (pswrd.type === "password") {
      pswrd.type = "text";
      pswrd.style.marginTop = "20px";
      icon.style.color = "#7f2092";
     }else{
      pswrd.type = "password";
      icon.style.color = "grey";
     }
    }
 </script>

@endsection

{{-- <div class="center">
    <div class="header">
       Login Form
    </div>
    <form>
       <input type="text" placeholder="Email or Username">
       <i class="far fa-envelope"></i>
       <input id="pswrd" type="password" placeholder="Password">
       <i class="fas fa-lock" onclick="show()"></i>
       <input type="submit" value="Sign in">
       <a href="#">Forgot Password?</a>
    </form>
 </div> --}}
