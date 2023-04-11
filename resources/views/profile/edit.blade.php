@extends('layouts.main')
@section('title', 'Edit Profile')
@section('content')
<!-- Start Main Section -->
<section class="wrapper__main">
  <!-- Start Edit Profile Section -->
  <div class="content">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h4 class="page-title">Edit Profile</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <form method="post" action="{{route('profile.update')}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required>
            @error('name') <p>{{ $message }}</p> @enderror
          </div>
          <div class="form-group">
            <label>Email Address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required>
            @error('email') <p>{{ $message }}</p> @enderror
          </div>
          <div class="form-group">
            <label>Job</label>
            <input type="text" class="form-control @error('job') is-invalid @enderror" name="job" value="{{$user->job}}" required>
            @error('job') <p>{{ $message }}</p> @enderror
          </div>
          <div class="form-group">
            <label>Phone Number</label>
            <input type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{$user->phone_number}}" required>
            @error('phone_number') <p>{{ $message }}</p> @enderror
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$user->address}}" required>
            @error('address') <p>{{ $message }}</p> @enderror
          </div>
          <div class="form-group">
            <label>Gender</label>
            <select class="form-control @error('gender') is-invalid @enderror" name="gender" required>
              <option>male</option>
              <option>female</option>
            </select>
            @error('gender') <p>{{ $message }}</p> @enderror
          </div>
          <div class="form-group">
            <div class="input-group">
              <label class="input-group-text">Image</label>
              <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" required>
            </div>
            @error('image') <p>{{ $message }}</p> @enderror
          </div>
          <div class="form-group">
            <label>Biography</label>
            <textarea class="form-control @error('biography') is-invalid @enderror" name="biography" rows="5" required>{{$user->biography}}</textarea>
            @error('biography') <p>{{ $message }}</p> @enderror
          </div>
          <div class="col-12">
            <input ref="btn" type="submit" class="btn btn-primary text-uppercase" value="Edit Profile" />
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End Edit Profile Section -->
</section>
<!-- End Main Section -->
@endsection