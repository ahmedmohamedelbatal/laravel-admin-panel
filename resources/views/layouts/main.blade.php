<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Dashboard - @yield('title')</title>
    <!-- Icon Css Incloude-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Custom Css Include-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
  </head>
  <body>
    <!-- Start Header Section -->
    <header class="wrapper__header">
      <!-- start logo -->
      <div class="logo">
        <a href="{{route('home')}}" class="logo__img">
          <img src="{{asset('assets/images/admin-logo.png')}}" alt="logo-img" />
        </a>
      </div>
      <!-- end Logo -->

      <!-- start sideBar btn -->
      <a href="#!" class="open-aside mobile_btn float-left" id="open-aside" onclick="open_side();"><i class="fa fa-bars"></i></a>
      <a href="#!" class="close-aside mobile_btn float-left" id="close-aside" onclick="close_side();"><i class="fa fa-bars"></i></a>
      <!-- end sidebar btn -->

      <!-- start navbar -->
      <ul class="nav user-menu float-right">
        <!-- start user item -->
        <li class="nav-item dropdown has-arrow">
          <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown" aria-expanded="false">
            <span class="user-img">
              @if (Auth::user()->image)
                <img class="rounded-circle" src="{{asset('images/'.Auth::user()->image)}}" alt="Admin" width="24">
              @else
                <img class="rounded-circle" src="{{asset('assets/images/default_img.png')}}" alt="Admin" />
              @endif
            </span>
            <span> {{ Auth::user()->name }} </span>
          </a>

          <div class="dropdown-menu" x-placement="bottom-start">
            <a href="{{route('profile')}}" class="dropdown-item">My Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
          </div>
        </li>
        <!-- end user item -->
      </ul>
      <!-- end navbar -->

      <!-- start mobile user item -->
      <div class="dropdown mobile-user-menu float-right">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="{{route('profile')}}" class="dropdown-item">My Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
        </div>
      </div>
      <!-- End mobile user item -->
    </header>
    <!-- End Header Section -->

    <!-- Start Sidebar Section -->
    <section class="sidebar" id="sidebar">
      <div class="sidebar-menu">
        <ul>
          <li class="menu-title"></li>
          <li>
            <a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li>
            <a href="{{route('products.index')}}"><i class="fa fa-shopping-cart"></i> Products</a>
          </li>
          <li>
            <a href="{{route('categories.index')}}"><i class="fa fa-list-alt"></i> Categories</a>
          </li>
        </ul>
      </div>
    </section>
    <!-- End Sidebar Section -->

    @yield('content')
    
    <!-- This Is All Plugins used-->
    <!-- JQuery Plugins include-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap 4 Plugins include-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Custom JQuery File-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>
</html>