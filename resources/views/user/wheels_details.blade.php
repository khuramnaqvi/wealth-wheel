
  @extends('layouts.user')
@section('content')

  <style type="">
    .ww-wrapper {
      margin: 0 auto;
      text-align: center;
    }

    .ww-image-gallery {
      margin: 0 auto;
      display: flex;
      flex-direction: column-reverse;
    }

    .primary,
    .ww-thumbnails {
      display: table-cell;
    }

    .ww-thumbnails {
      width: 100%;display: flex;


    }
    .primary {
      height: 400px;
      max-width: 450px;
      background-color: #cccccc;
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      border: 2px solid #11def9;
      border-radius: 35px;
    }

    .thumbnail:hover .thumbnail-image, .selected .thumbnail-image {
      border: 2px solid #11def9;
    }
    .thumbnail-image {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      margin: 20px auto;
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      border: 4px solid #fff;
    }
  </style>



  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="howItWork.php">How it Works</a></li>
          <li><a class="nav-link scrollto" href="availableWealthWheel.php">Available Wealth Wheels</a></li>
          <li><a class="nav-link scrollto" href="contac.php">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
   <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container carousel-container-detail">
          <h2 class="animate__animated animate__fadeInDown">Wealth Wheel Details</span></h2>
          <!-- <p class="animate__animated fanimate__adeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p> -->
          <!-- <div class="d-flex ww-banner-btn">
            <a href="signup.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Signup</a>
            <a href="login.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Login</a>
            <a href="createWealthWheel.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Create Wealth Wheel</a>
          </div> -->
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



  
  <section id="our-products" class="our-products avl-wealthWheel ww-product-dtl">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <!-- <h2>Product details</h2> -->
          <!-- <p>Here you can see the wealth wheel details</p> -->
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="ww-wrapper">
              <div class="ww-image-gallery">
                <!-- <aside class="ww-thumbnails">
                  <div href="#" class="selected thumbnail" data-big="assets/img/ww-pic.png">
                    <div class="thumbnail-image" style="background-image: url(assets/img/ww-pic.png)"></div>
                  </div>
                  <div href="#" class="thumbnail" data-big="assets/img/testimonials/testimonials-1.jpg">
                    <div class="thumbnail-image" style="background-image: url(assets/img/testimonials/testimonials-1.jpg)"></div>
                  </div>
                  <div href="#" class="thumbnail" data-big="assets/img/testimonials/testimonials-4.jpg">
                    <div class="thumbnail-image" style="background-image: url(assets/img/testimonials/testimonials-4.jpg)"></div>
                  </div>
                  <div href="#" class="thumbnail" data-big="assets/img/testimonials/testimonials-4.jpg">
                    <div class="thumbnail-image" style="background-image: url(assets/img/testimonials/testimonials-4.jpg)"></div>
                  </div>
                  <div href="#" class="thumbnail" data-big="assets/img/testimonials/testimonials-4.jpg">
                    <div class="thumbnail-image" style="background-image: url(assets/img/testimonials/testimonials-4.jpg)"></div>
                  </div>
                </aside> -->

                <main class="primary" style="background-image: url(assets/img/ww-pic.png)"></main>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="ww-pro-description">
              <div class="ww-pro-name">
                <h2>Wealth Wheel Number</h2>
                <p class="ww-pro-number">
                  <span>1 2 3 4</span>
                </p>
              </div>
              <div class="ww-pro-price my-4">
                <h4>Cog Price : $3000</h4>
              </div>
              <!-- <div class="ww-pro-quantity my-4">
                  <div id="ww-quantity">
                      <span>Quantity</span>
                      <button type="button" id="sub" class="sub ww-plus-minus">-</button>
                      <input type="number" id="1" value="1" min="1" max="100" class="ww-quantity-input" />
                      <button type="button" id="add" class="add ww-plus-minus">+</button>
                  </div>
              </div> -->
              <div class="ww-pro-action my-2">
                <button type="button" class="btn py-3 text-white ww-pro-action-btn">Buy Now</button>
                <!-- <button type="button" class="btn py-3 text-white ww-pro-action-btn">Add to Cart</button> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @endsection


