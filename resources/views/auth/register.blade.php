@extends('layouts.auth')

@section('title')
<title>DB Monitoring - Register</title> 
@endsection

@section('h1')
<h1 class="gradient-text-01">
    Register To Database Monitoring!
</h1>
@endsection


@section('content')<!-- Begin Right Content -->
<div class="col-xl-4 col-lg-6 col-md-7 my-auto no-padding">
    <!-- Begin Form -->
    <div class="authentication-form mx-auto">
        <div class="logo-centered">
            <a href="db-default.html">
                <img src="{{ asset('elis/assets/img/logo.png') }}" alt="logo">
            </a>
        </div>
        {{-- <h3 style="text-align: center;">Create An Account</h3> --}}
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="group material-input">
                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Name</label>
            </div>

            <div class="group material-input">
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Password</label>
            </div>

            <div class="group material-input">
                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Confirm Password</label>
            </div>
        
        <div class="row">
            <div class="col text-left">
                <div class="styled-checkbox">
                    <input type="checkbox" name="checkbox" id="remeber">
                    <label for="remeber">I Accept Terms and Conditions</label>
                </div>
            </div>           
        </div>
        <div class="sign-btn text-center">
            <button type="submit" class="btn btn-gradient-01 btn-lg mr-1 mb-2">Create an account</button>
        </div> 
    </form>      
        <div class="register">
            Already have an account? 
            <br>
            <a href="{{ route('login') }}">Sign in</a>
        </div>
    </div>
    <!-- End Form -->                        
</div>
<!-- End Right Content -->
@endsection
