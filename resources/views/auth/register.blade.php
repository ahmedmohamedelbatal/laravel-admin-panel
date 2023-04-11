@extends('layouts.registration') 
@section('title', 'Register')
@section('content')
<!-- Start Account Section -->
<section class="wrapper__account">
  <!-- Start Login Section -->
  <div class="account-page">
    <div class="account-center">
      <div class="account-box" style="margin-top: 50px;">
        <!-- Start Login Form -->
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="account-logo">
              <a href="{{route('register')}}">
                <img src="{{asset('assets/images/logo.png')}}" alt="logo" />
              </a>
            </div>

            <div class="form-group">
              <label>Name</label>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Email Address</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Password</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Password Confirm</label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="form-group text-right">
              <a href="{{route('login')}}">Already have an account?</a>
            </div>

            <div class="form-group text-center">
              <input class="btn btn-primary account-btn" type="submit" value="Signup" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection