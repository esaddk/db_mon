@extends('layouts.auth')

@section('title')
<title>DB Monitoring - Login</title>
@endsection

@section('h1')
<h1 class="gradient-text-01">
    Welcome To Database Monitoring!
</h1>
@endsection

@section('content')
<!-- Begin Right Content -->
<div class="col-xl-4 col-lg-6 col-md-7 my-auto no-padding">
    <!-- Begin Form -->
    <div class="authentication-form mx-auto">
        @if($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-outline-danger dotted" role="alert">
            Maaf <strong> email atau password </strong> tidak sesuai !!!
        </div>
        @endforeach
        @endif
        <div class="logo-centered">
            <a href="#">
                <img src="{{ asset('elis/assets/img/logo.png') }}" alt="logo">
            </a>
        </div>
        {{-- <h3 style="text-align: center;">Sign In</h3> --}}
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="group material-input">
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Email</label>
            </div>
            <div class="group material-input">
                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password"
                    required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Password</label>
            </div>

            <div class="row">
                <div class="col text-left">
                    <div class="styled-checkbox">
                        <input type="checkbox" name="checkbox" id="remeber">
                        {{-- <label for="remeber">Remember me</label> --}}
                    </div>
                </div>
                <div class="col text-right">
                    {{-- <a href="pages-forgot-password.html">Forgot Password ?</a> --}}
                </div>
            </div>
            <div class="sign-btn text-center">
                <button type="submit" class="btn btn-gradient-01 btn-lg mr-1 mb-2">Sign In</button>
            </div>
        </form>
        <div class="register">
            Don't have an account?
            <br>
            <a href="#">Contact Admin !</a>
        </div>
    </div>
    <!-- End Form -->
</div>
<!-- End Right Content -->
@endsection