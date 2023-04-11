@extends('layouts.main')
@section('title', 'Home')
@section('content')
<!-- Start Main Section -->
<section class="wrapper__main">
  <div class="content">
    <!-- Start Dash Box Section -->
    <div class="row">
      <div class="col">
        <div class="dash-box">
          <span class="dash-box-bg-1"><i class="fa fa-users" aria-hidden="true"></i></span>
          <div class="dash-box-info text-right">
            <h3><?php $users_count = $users->count() ?>{{$users_count}}</h3>
            <span class="widget-title-1">Profiles <i class="fa fa-check" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="dash-box">
          <span class="dash-box-bg-2"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
          <div class="dash-box-info text-right">
            <h3><?php $products_count = $products->count() ?>{{$products_count}}</h3>
            <span class="widget-title-2">Products <i class="fa fa-check" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Dash Box Section -->

    <!-- Start Cards Section -->
    <div class="row">
      <div class="col-12 col-md-8 col-lg-8 col-xl-8">
        <!-- Start Products Section -->
        <div class="card">
          <div class="card-header">
            <h4 class="card-title d-inline-block">Products</h4>
            <a href="{{route('products.index')}}" class="btn btn-primary float-right">View all</a>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table mb-0">
                <tbody>
                  @foreach ($products as $product)
                  <!-- Start Product Item -->
                  <tr>
                    <td>
                      <a class="product-img pr-2" href="#">
                        @if ($product->product_image)
                          <img class="avatar" src="{{asset('images/'.$product->product_image)}}" alt="product-img" />
                        @else
                          <img class="avatar" src="{{asset('assets/images/default_img.png')}}" alt="product-img" />
                        @endif
                      </a>
                      <h2>Name <p>{{$product->product_name}}</p></h2>
                    </td>
                    <td>
                      <h2>Category <p>{{$product->category->category_name}}</p></h2>
                    </td>
                    <td>
                      <h2>Description <p>{{$product->product_description}}</p></h2>
                    </td>
                    <td>
                      <h2>Price <p>${{$product->product_price}}</p></h2>
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
      <!-- End Products Section -->

      <!-- Start Profiles Section -->
      <div class="col-12 col-md-4 col-lg-4 col-xl-4">
        <div class="card member-panel">
          <div class="card-header bg-white">
            <h4 class="card-title m-b-0">Profiles</h4>
          </div>
          <div class="card-body">
            <ul class="contact-list">
              @foreach ($users as $user)
              <!-- Start Profile Item -->
              <li>
                <div class="contact-cont">
                  <div class="float-left user-img m-r-10">
                    <a href="#!">
                      @if ($user->image)
                      <img class="avatar" src="{{asset('images/'.$user->image)}}" alt="profile-img" />
                      @else
                        <img class="avatar" src="{{asset('assets/images/default_img.png')}}" alt="profile-img" />
                      @endif
                    </a>
                  </div>
                  <div class="contact-info">
                    <span style="font-size: 17px" class="contact-name text-ellipsis">{{$user->name}}</span>
                    <p style="font-size: 12px" class="contact-date">{{$user->job}}</p>
                  </div>
                </div>
              </li>
              <!-- End Profile Item -->
              @endforeach
            </ul>
          </div>

          <div class="card-footer text-center bg-white">
            <p class="text-muted">Read Only</p>
          </div>
        </div>
        <!-- End Profiles Section -->
      </div>
    </div>
    <!-- End Cards Section -->
  </div>
</section>
@endsection