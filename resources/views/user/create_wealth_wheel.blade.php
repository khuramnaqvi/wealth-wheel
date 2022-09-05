
@extends('layouts.user')
@section('content')

<style type="">

button {
  background: cornflowerblue;
  color: white;
  border: none;
  padding: 10px;
  border-radius: 8px;
  font-family: 'Lato';
  margin: 5px;
  text-transform: uppercase;
  cursor: pointer;
  outline: none;
}

button:hover {
  background: orange;
}
</style>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Create Wealth Wheel</span></h2>
          <p class="animate__animated fanimate__adeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
          <div class="d-flex ww-banner-btn">
          @guest
          @if (Route::has('login')) 
          <a href="{{ route ('register') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Signup</a>
          @endif
          @if (Route::has('login'))
          <a href="{{ route ('login') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Login</a>
          @endif
          @else
          <a href="{{ route ('logout') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Logout</a>
          @endguest
          <a href="{{ route ('wealth_wheel') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Create Wealth Wheel</a>
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
          <h2>Create Wealth Wheel</h2>
          <p>ENTER WEALTH WHEEL DETAILS</p>
        </div>
        @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

        <div class="ww-form-wrp" data-aos="fade-right">
        <form action="{{ route('create_wealth_wheel') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="wheel-number">Wheel Number</label>
              @if(isset($wheel_number))
              <input readonly="readonly" type="Number" name="wheel_number" class="form-control" id="wheel-number" value="{{$wheel_number}}"  aria-describedby="wheel-number" placeholder="">
            @else
            <input readonly="readonly" type="Number" name="wheel_number" class="form-control" id="wheel-number" value="1"  aria-describedby="wheel-number" placeholder="">
            @endif
            </div>
            <!-- <div class="form-group">
              <label for="wheel-name">Wheel Name</label>
              <input name="wheel_name" type="text" class="form-control" id="wheel-name" placeholder="wheel name">
            </div> -->
            <div class="form-group">
              <label for="cog-price">Cog Price</label>
              <!-- <input name="cog_price" type="number" class="form-control" id="cog-price" placeholder="cog price"> -->

              <select required name="cog_price"  class="form-control" id="cog-price">

                <option value="">--Please Select Price--</option>
                <option value="100">$100</option>
                <option value="200">$200</option>
                <option value="300">$300</option>
                <option value="400">$400</option>
                <option value="500">$500</option>
                <option value="600">$600</option>
                <option value="700">$700</option>
                <option value="800">$800</option>
                <option value="900">$900</option>
                <option value="1000">$1000</option>
                <option value="2000">$2000</option>
                <option value="3000">$3000</option>
                <option value="4000">$4000</option>
                <option value="5000">$5000</option>
                <option value="6000">$6000</option>
                <option value="7000">$7000</option>
                <option value="8000">$8000</option>
                <option value="9000">$9000</option>
                <option value="10000">$10000</option>

              </select>
            </div>
            <!-- <div class="form-group">
              <label for="">Image</label>
              <input name="image" type="file" class="form-control" accept="image/*" />
              {{-- <small style="color: gray">please enter the correct image size</small> --}}
            </div> -->
            <button type="submit" class="btn btn-primary confirmation-message first">Save</button>
          </form>
        </div>

      </div>
      <div class="toast">
        <div class="toast-header">
          Toast Header
        </div>
        <div class="toast-body">
          Some text inside the toast body
        </div>
      </div>
    </section>




    <!-- <button class="first1">Title Only</button>
    <button class="second">Title and Text</button>
    <button class="third">Title, Text and Icon</button> -->

  </main>
 




@endsection



