@extends('layouts.main')
@section('title', 'Profile')
@section('content')
<!-- Start Main Section -->
<section class="wrapper__main">
  <!-- Start Profile Section -->
  <div class="content">
    <div class="row">
      <div class="col-sm-7 col-4">
        <h4 class="page-title">My Profile</h4>
      </div>
      <div class="col-sm-5 col-8 text-right m-b-30">
        <a href="{{route('profile.edit')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a>
      </div>
    </div>
    <div class="card-box profile-header">
      <div class="row">
        <div class="col-md-12">
          <div class="profile-view">
            <div class="profile-img-wrap">
              <div class="profile-img">
                <a href="#">
                  @if ($user->image)
                  <img class="avatar" src="{{asset('images/'.$user->image)}}" alt="profile-img" />
                  @else
                    <img class="avatar" src="{{asset('assets/images/default_img.png')}}" alt="profile-img" />
                  @endif
                </a>
              </div>
            </div>
            <div class="profile-basic">
              <div class="row">
                <div class="col-md-5">
                  <div class="profile-info-left">
                    <h3 class="user-name m-t-0 m-b-0">{{$user->name}}</h3>
                    <small class="text-muted">{{$user->job}}</small>
                    <div class="staff-id">Profile ID : {{$user->id}}</div>
                  </div>
                </div>
                <div class="col-md-7">
                  <ul class="personal-info">
                    <li>
                      <span class="title">Phone:</span>
                      <span class="text"><a href="">{{$user->phone_number}}</a></span>
                    </li>
                    <li>
                      <span class="title">Email:</span>
                      <span class="text"><a href="mailto:{{$user->email}}">{{$user->email}}</a></span>
                    </li>
                    <li>
                      <span class="title">Address:</span>
                      <span class="text">{{$user->address}}</span>
                    </li>
                    <li>
                      <span class="title">Gender:</span>
                      <span class="text">{{$user->gender}}</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="profile-tabs">
      <ul class="nav nav-tabs nav-tabs-bottom">
        <li class="nav-item"><a class="nav-link active" href="#about-cont" data-toggle="tab">About</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane show active" id="about-cont">
          <div class="row">
            <div class="col-md-12">
              <div class="card-box">
                <h3 class="card-title">Biography</h3>
                <div class="experience-box">
                  <p>{{$user->biography}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Profile Section -->
</section>
<!-- End Main Section -->
@endsection