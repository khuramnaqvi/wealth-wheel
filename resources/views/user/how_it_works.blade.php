@extends('layouts.user')
@section('content')
<!-- 
  <style>
    .blink {
        animation: blinker 1.5s linear infinite;
        color: #2963e2;
        font-size: 45px;
        font-style: oblique;
        text-shadow: 2px 4px 8px rgba(0,0,0,0.6);
        font-weight: bold;
        line-height: 75px;
        font-family: sans-serif;
    }
    @keyframes blinker {
        50% {
            opacity: 0;
        }
    }
</style> -->



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">How it Works</h2>
          <p class="animate__animated fanimate__adeInUp">
            Wealth Wheels are a continuous generation of individual profit.
            Picture a wheel and the cogs that make up the wheel, spinning as the wheel 
            rotates. That is the concept of a Wealth Wheel.
          </p>
          <p>
            Each cog purchased becomes part of wheel, and as more and more cogs are 
              purchased, the wheel returns the cog payment made to the earlier cog 
              purchasers, with an additional 10%.
              For example, if you purchase a Wealth Wheel Cog for $100, the wheel will return 
              you $110.

          </p>
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

  </section>
  <!-- End Hero -->

  <main id="main">


    <!-- ======= cogs payouts Section ======= -->
    <section id="cogs" class="we-wrok-cogs">
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>Cog payouts</h2>
          <p>Below is how the Wealth Wheel cog payouts work</p>
        </div>
        <div class="row portfolio-container weWork-child" data-aos="fade-up"> 
          <table class="table">
            <thead>
              <tr>
                <th scope="col"  class="table-active">Cog Number Purchased</th>
                <th scope="col"  class="table-active">Cog Number Payouts</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Cog 6</td>
                <td>Cog 1</td>
              </tr>
              <tr>
                <td>Cog 7</td>
                <td>Cog 2</td>
              </tr>
              <tr>
                <td>Cog 8</td>
                <td>Cog 3</td>
              </tr>
              <tr>
                <td>Cog 9</td>
                <td>Cog 4</td>
              </tr>
              <tr>
                <td>Cog 10</td>
                <td>Cog 5</td>
              </tr>
              <tr>
                <td>Cog 11</td>
                <td class="table-active"></td>
              </tr>
              <tr>
                <td>Cog 12</td>
                <td>Cog 6</td>
              </tr>
              <tr>
                <td>Cog 13</td>
                <td>Cog 7</td>
              </tr>
              <tr>
                <td>Cog 14</td>
                <td>Cog 8</td>
              </tr>
              <tr>
                <td>Cog 15</td>
                <td>Cog 9</td>
              </tr>
              <tr>
                <td>Cog 16</td>
                <td>Cog 10</td>
              </tr>
              <tr>
                <td>Cog 17</td>
                <td class="table-active"></td>
              </tr>
              <tr>
                <td>Cog 18</td>
                <td>Cog 11</td>
              </tr>
              <tr>
                <td>Cog 19</td>
                <td>Cog 12</td>
              </tr>
              <tr>
                <td>Cog 20</td>
                <td>Cog 13</td>
              </tr>
              <tr>
                <td>Cog 21</td>
                <td>Cog 14</td>
              </tr>
              <tr>
                <td>Cog 22</td>
                <td>Cog 15</td>
              </tr>
              <tr>
                <td>Cog 23</td>
                <td class="table-active"></td>
              </tr>
              <tr>
                <td>Cog 24</td>
                <td>Cog 16</td>
              </tr>
              <tr>
                <td>Cog 25</td>
                <td>Cog 17</td>
              </tr>
              <tr>
                <td>Cog 26</td>
                <td>Cog 18</td>
              </tr>
              <tr>
                <td>Cog 27</td>
                <td>Cog 19</td>
              </tr>
              <tr>
                <td>Cog 28</td>
                <td>Cog 20</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- ======= Marquee Section ======= -->
    <section id="marquee" class="ww-marquee ww-howitwork marquee">
      <div class="container">
        <div class="row">
          <marquee class="blink">The Wealth Wheel continues to return these cog user profit payouts.</marquee>
        </div>
      </div>
    </section>

  </main>


  @endsection


