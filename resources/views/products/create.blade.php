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
              <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" required>
              @error('product_name') <p>{{ $message }}</p> @enderror
            </div>
            <div class="form-group">
              <label>Product Price</label>
              <input type="number" class="form-control @error('product_price') is-invalid @enderror" name="product_price" required>
              @error('product_price') <p>{{ $message }}</p> @enderror
            </div>
            <div class="form-group">
              <label for="category_id">Product Category:</label>
              <select class="form-control" name="category_id" id="category_id" required>
                  @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                  @endforeach
              </select>
              @error('category_id') <p>{{ $message }}</p> @enderror
            </div>
            <div class="form-group">
              <div class="input-group">
                <label class="input-group-text">Product Image</label>
                <input type="file" name="product_image" class="form-control @error('product_image') is-invalid @enderror" required>
              </div>
              @error('product_image') <p>{{ $message }}</p> @enderror
            </div>
            <div class="form-group">
              <label>Product Description</label>
              <textarea class="form-control @error('product_description') is-invalid @enderror" name="product_description" rows="5" required></textarea>
              @error('product_description') <p>{{ $message }}</p> @enderror
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