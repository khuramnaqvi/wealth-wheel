
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

  <main id="main">
    
  @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

    <!-- ======= Marquee Section ======= -->
    <section id="marquee" class="ww-marquee">
      <div class="container">
        <div class="row">
          <marquee class="blink">Join Wealth Wheel, the revolution in global income generation!</marquee>
        </div>
      </div>
    </section>


    <!-- ======= description Section ======= -->
    <section id="ww-homeInfo" class="ww-home-info" style="padding-top: unset;display: none;">
      <div class="container">
        <div class="row">
          <div data-aos="fade-up">
            <p>By simply purchaseing a ‘Cog’ withn any chosen Wealth Wheel, as more Cogs 
              are purchased, the earlier users receive 110% of the wheel’s cog value, ie they 
              receive their initial cog payment back PLUS an additional 10%.</p>
          </div>
        </div>
      </div>
    </section>


    <!-- ======= how we work Section ======= -->
    <section id="weWork" class="we-wrok">
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <p>Wealth Wheels work in the following simple steps:</p>
        </div>
        <div class="row portfolio-container weWork-child" data-aos="fade-up">
          <div class="col-lg-3 col-md-6 px-lg-0">
            <div class="we-wrok-steps">
              <h3>Create An Account</h3>
              <p>Wealth Wheel is open to anybody to create an account, immediately join any 
                wheels or create wheels of their own, view/track any cogs that have been 
                purchased, and withdraw your profits.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 px-lg-0">
            <div class="we-wrok-steps">
              <h3>Create A Wealth Wheel</h3>
              <p>To create a Wealth Wheel, after setting the Cog Price it is immediately available 
                  for anybody to join.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 px-lg-0">
            <div class="we-wrok-steps">
              <h3>Purchase Cogs</h3>
              <p>There is no limit to how many cogs you can purchase, and any Wealth Wheel is 
                Available to join and receive profit from.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 px-lg-0">
            <div class="we-wrok-steps">
              <h3>Invite Others</h3>
              <p>Whether you’re a Wealth Wheel owner or have joined a wheel, invite others to 
                join your wheels and also generate profits with you. The more cogs that join a 
                wheel, the quicker the wheel spins, and the faster profits are generated.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- End #main -->
  
   
 

   
    @endsection
  