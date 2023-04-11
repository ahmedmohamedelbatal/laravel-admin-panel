@extends('layouts.main')
@section('title', 'Add Product')
@section('content')
<!-- Start Main Section -->
<section class="wrapper__main">
  <!-- Start Add Product Section -->
  <div class="content">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h4 class="page-title">Add Product</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 offset-md-2">
          <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Product Name</label>
              <input type="text" class="form-control" name="product_name" required>
            </div>
            <div class="form-group">
              <label>Product Price</label>
              <input type="number" class="form-control" name="product_price" required>
            </div>
            <div class="form-group">
              <label>Product Category</label>
              <input type="text" class="form-control" name="product_category" required>
            </div>
            <div class="input-group mb-3">
              <label class="input-group-text">Product Image</label>
              <input type="file" name="product_image" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Product Description</label>
              <textarea class="form-control" name="product_description" rows="5" required></textarea>
            </div>
            <div class="col-12">
              <input ref="btn" type="submit" class="btn btn-primary text-uppercase" value="Add Product" />
            </div>
          </form>
        </form>
      </div>
    </div>
  </div>
  <!-- End Add Product Section -->
</section>
<!-- End Main Section -->
@endsection