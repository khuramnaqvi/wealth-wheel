
@extends('layouts.user')
@section('content')
 
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Available Wealth Wheel</span></h2>
          <p class="animate__animated fanimate__adeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          <div class="d-flex">
            <a href="{{ route ('login') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Login</a>
            <a href="#" class="btn-get-started animate__animated animate__fadeInUp scrollto">Create Wealth Wheel</a>
          </div>
        </div>
      </div>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section>



  
  <section id="our-products" class="our-products avl-wealthWheel">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Products</h2>
          <p>Here you can see our products</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-9">
            <div class="row">

            @foreach($products as $product)
              <div class="col-md-4 my-2">
                <div class="card">
                  <img src="{{ asset('images/' .$product->image) }}" alt="" class="img-fluid">
                  <div class="card-body">
                    <h5 class="card-title">{{$product->wheel_name}}</h5>
                    <p class="card-text">This is a longer card with supporting text below.</p>
                    <div class="pro-price">
                      <span>RS:{{$product->cog_price}}</span>
                    </div>
                  </div>
                </div>
              </div>

              @endforeach
          
            </div>
          </div>
          <div class="col-lg-3">
            <div class="ww-pro-filter-main">
              <h4 class="fw-bold mb-4">Apply Filter</h4>
              <div class="ww-pro-filter-wrp mb-5">
                <h6 class="pb-1">Search Product by Name</h6>
                <div>
                  <input type="text" name="ww-pro-name" class="w-100 ps-2" placeholder="enter name">
                </div>
              </div>
              <div class="ww-pro-filter-wrp mb-5">
                <h6 class="pb-1">Search Product by Category</h6>
                <div>
                  <input type="text" name="ww-pro-category" class="w-100 ps-2" placeholder="enter category">
                </div>
              </div>
              <div class="ww-pro-filter-wrp mb-5">
                <h6 class="pb-1">Search Product by Price</h6>
                <div>
                  <input type="text" name="ww-pro-price" class="w-100 ps-2" placeholder="enter price">
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </section>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 

  @endsection