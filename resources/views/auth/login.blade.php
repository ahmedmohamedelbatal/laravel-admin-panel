@extends('layouts.registration') 
@section('title', 'Login')
@section('content')
<!-- Start Account Section -->
<section class="wrapper__account">
  <!-- Start Login Section -->
  <div class="account-page">
    <div class="account-center">
      <div class="account-box" style="margin-top: 100px;">
        <!-- Start Login Form -->
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="account-logo">
              <a href="{{route('login')}}">
                <img src="{{asset('assets/images/logo.png')}}" alt="logo" />
              </a>
            </div>

            <div class="form-group">
              <label>Email Address</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Password</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
              </label>
            </div>

            <div class="form-group text-right">
              <a href="{{route('register')}}">Create an account?</a>
            </div>

            <div class="form-group text-center">
              <input class="btn btn-primary account-btn" type="submit" value="login" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection