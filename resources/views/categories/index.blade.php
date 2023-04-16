@extends('layouts.main')
@section('title', 'Categories')
@section('content')
<!-- Start Main Section -->
<section class="wrapper__main">
  <!-- Start Categories Section -->
  <div class="content product-section">
    <div class="row">
      <div class="col-sm-4 col-3">
        <h4 class="page-title">Categories</h4>
      </div>
      <div class="col-sm-8 col-9 text-right m-b-20">
        <a href="{{route('categories.create')}}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Category</a>
      </div>
    </div>
    <div class="row" style="margin-top: 27px;">
      <div class="col-md-12">
        <div class="table-responsive">
          <div class="wrapper__dataTables container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-border table-striped custom-table datatable m-b-0 dataTable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Category NAME</th>
                      <th scope="col">DESCRIPTION</th>
                      <th scope="col" class="text-right sorting">ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $category)
                    <!-- Start Product Item -->
                    <tr>
                      <td class="product-img" scope="row">
                        @if ($category->category_image)
                          <img class="img-thumbnail" src="{{asset('images/'.$category->category_image)}}" alt="product-img">
                        @else
                          <img src="{{asset('assets/images/default_img.png')}}" alt="product-img" />
                        @endif
                      </td>
                      <td class="td-item">{{$category->category_name}}</td>
                      <td class="td-item">{{$category->category_description}}</td>
                      <td class="text-right">
                        <div class="dropdown dropdown-action patient-action">
                          <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{route('categories.edit', $category->id)}}" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <button class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</button>
                          </form>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <!-- End Product Item -->
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Categories Section -->
</section>
<!-- End Main Section -->
@endsection