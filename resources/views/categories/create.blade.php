@extends('layouts.main')
@section('title', 'Add Category')
@section('content')
<!-- Start Main Section -->
<section class="wrapper__main">
  <!-- Start Add Category Section -->
  <div class="content">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h4 class="page-title">Add Category</h4>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 offset-md-2">
        <form method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <label>Category Name</label>
              <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" required>
              @error('category_name') <p>{{ $message }}</p> @enderror
            </div>
            <div class="form-group">
              <div class="input-group">
                <label class="input-group-text">Category Image</label>
                <input type="file" name="category_image" class="form-control @error('category_image') is-invalid @enderror" required>
              </div>
              @error('category_image') <p>{{ $message }}</p> @enderror
            </div>
            <div class="form-group">
              <label>Category Description</label>
              <textarea class="form-control @error('category_description') is-invalid @enderror" name="category_description" rows="5" required></textarea>
              @error('category_description') <p>{{ $message }}</p> @enderror
            </div>
            <div class="col-12">
              <input ref="btn" type="submit" class="btn btn-primary text-uppercase" value="Add Category" />
            </div>
          </form>
        </form>
      </div>
    </div>
  </div>
  <!-- End Add Category Section -->
</section>
<!-- End Main Section -->
@endsection