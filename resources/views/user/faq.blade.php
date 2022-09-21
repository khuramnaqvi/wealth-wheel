
@extends('layouts.user')
@section('content')



  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">FAQs</span></h2>
          
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
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>FAQ<span style="text-transform: lowercase;">s</span></h2>
          <p>Frequently Asked Questions</p>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">What is a Wealth Wheel? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
              A Wealth Wheel is a continuous income-generator that gives every user 10% 
              profit on their entries, providing a simple way of accumulating additional income.
              The concept is of a wheel and the cogs within it. Users purchase cogs for their 
              chosen wheel, and as more cogs are purchased the wheel returns 110% of the 
              cog price to the earlier users (ie, users receive their initial cog payment PLUS an 
              additional 10%).
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">How Do They Work? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
              Every cog purchase for a Wealth Wheel contributes to accumulating the wheel's 
              'bank', from where each user is sent their payouts. As subsequent cogs are 
              purchased they trigger the wheel bank to pay the earlier cog owners 110% of the
              cog price.
              For example, if a wheel's cog price is $100, when cog number 6 is purchased, 
              $110 is paid to the user who purchased cog number 1.
              Each user has a Wallet in their account from which they can withdraw their funds
              to their preferred destination (eg, PayPal or Bank).
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">How Much Can I Make From A Wealth Wheel? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
              There is no limit to how much profit can be accumulated as there is no limit to 
              how many wheel entries you can have, and every cog purchase returns an 
              additional 10% to the user.
              Each cog purchased for a wheel with a cog price of $100 will generate $10 profit,
              similarly every cog purchased for a wheel with a $500 cog price will generate 
              $50 profit.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">How Do I Join A Wealth Wheel? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
              The ‘Available Wealth Wheels’ page contains all wealth wheels. Simply click ‘Join 
              Wealth Wheel’ to purchase a cog.  
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">When Do I Receive My Profit? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
              Each user’s cogs are purchase triggers the wheel’s bank to pay the earlier cog 
              owners their 110% of the cog price.
              For example, when cog number 6 is purchased, the user who purchased cog 
              number 1 is paid. When cog number 7 is purchased, the user who purchased cog
              number 2 is paid.
              For a longer list of payout cog numbers visit the ‘How It Works’ page. 
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Can I Create A Wealth Wheel? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
              Yes. Any user can create a wheel by clicking ‘Create Wealth Wheel’ and selecting
              the cog price. It will immediately be available on the ‘Available Wealth Wheels’ 
              for anybody to join.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq7" class="collapsed question">How Do I Withdraw My Profits? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq7" class="collapse" data-bs-parent=".faq-list">
              <p>
              When logged in, within My Account every user has a Wallet from where you can 
              withdraw funds to your preferred destination (eg, PayPal or Bank).
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq8" class="collapsed question">Is There A Limit To How Many Cogs I Can Have? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq8" class="collapse" data-bs-parent=".faq-list">
              <p>
              No. You can have as many cogs as you like.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq9" class="collapsed question">Can I Have More Than One Cog In The Same Wheel? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq9" class="collapse" data-bs-parent=".faq-list">
              <p>
              Yes. There is no restriction on how many cogs you can have, even within the 
            same wheels.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq10" class="collapsed question">Is There A Limit To How Many Wealth Wheels I Can Join? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq10" class="collapse" data-bs-parent=".faq-list">
              <p>
              No. You can join as many Wealth Wheels as you like.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section>
    <!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section> -->
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @endsection
