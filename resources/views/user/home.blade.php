
    @extends('layouts.user')
    @section('content')

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-end align-items-center carousel-home">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container carousel-container-home">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Wealth Wheel</span></h2>
            <p class="animate__animated fanimate__adeInUp">Wealth Wheel is a the continuous income-generator platform providing people 
            with 10% profits on their entries, giving them the simplest way of generating 
            additional income ever.</p>
            <p>
              By simply purchasing a ‘Cog’ within any chosen Wealth Wheel, as more Cogs are 
              purchased, the earlier users receive 110% of the wheel’s cog value (ie they 
              receive their initial cog payment back PLUS an additional 10%).
            </p>
            <p>
              In these challenging global economic times, there has never been a simpler, 
              effortless model of finance generation available to anyone, and at any level they 
              choose, from small to large profits.
            </p>
          <div class="d-flex ww-banner-btn">
          <!-- @guest
          @if (Route::has('login'))
          <li class="nav-link ww-register"><a class="nav-link" href=" {{ route ('register') }}">Signup</a></li>
          @endif
          @if (Route::has('login'))
          <li class="nav-link ww-register"><a class="nav-link" href=" {{ route ('login') }}">Login</a></li>
          @endif
          @else
          <li class="nav-link ww-register"><a class="nav-link" href=" {{ route ('logout') }}">logout</a></li>

          @endguest -->

          @guest
          @if (Route::has('login'))
          <a href="{{ route ('register') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Sign Up</a>
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

  </section>
  <!-- End Hero -->

  
  <!-- End #main -->
  
   
 

   
    @endsection
  