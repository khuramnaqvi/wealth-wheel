@extends('layouts.app')

@section('content')
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Rest Password</span></h2>
          <p class="animate__animated fanimate__adeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
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

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= F.A.Q Section ======= -->
    <section id="Signup" class="faq signup ww-form-main">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Sign Up</h2>
          <p>Please put your details </p>
        </div>
        <div class="ww-form-wrp" data-aos="fade-right">
        <form method="POST" action="">
        @csrf

            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Enter email">
              @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
          

            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>  
              <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
              @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
            </div>
            <style>
              h6 {
   width: 100%; 
   text-align: center; 
   border-bottom: 1px solid #000; 
   line-height: 0.1em;
   /* margin: 10px 0 20px;  */
} 

h6 small { 
    background:#fff; 
    padding:0 10px; 
}
            </style>

            <div class="form-group">
              <label for="exampleInputPassword1"> Confirm Password</label>  
              <input id="password-confirm" name="password_confirmation" type="password" class="form-control" id="password" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-primary">Reset Password</button>
          </form>
          <div class="form-group mt-4">
            <h6><small>OR/<a href="{{url('login')}}">Login</a></small></h6>
            {{-- <button onclick="window.location.href='{{url('login')}}';"  type="button" class="btn btn-primary">Login</button>  --}}
          </div>
        </div>

      </div>
    </section>

  </main>
  <!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection
