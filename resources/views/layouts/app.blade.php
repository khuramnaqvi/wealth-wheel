
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wealth Wheel - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img//apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href=" {{ asset('assets/img//favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('/site.webmanifest') }}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href=" {{ route ('user_home') }}">Home</a></li>
          <li><a class="nav-link scrollto" href=" {{ route ('products') }} ">Products</a></li>
          <li><a class="nav-link scrollto" href=" {{ route ('about') }}">About</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Other Pages</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="faq.php">FAQ's</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href=" {{ route ('faq') }}">FAQ's</a></li>
          <li><a class="nav-link scrollto" href="{{ route ('contact') }}">Contact</a></li>

          @guest
          @if (Route::has('login'))
          <li class="nav-link ww-register"><a class="nav-link" href=" {{ route ('register') }}">Signup</a></li>
          @endif
          @if (Route::has('login'))
          <li class="nav-link ww-register"><a class="nav-link" href=" {{ route ('login') }}">Login</a></li>
          @endif
          @else
          <li class="nav-link ww-register"><a class="nav-link" href=" {{ route ('logout') }}">logout</a></li>

          @endguest
        


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>

  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
  <!-- End Hero -->
 
  @yield('content')
  
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <img src="assets/img/logo.png" class="footer-img" alt="">
        </div>
        <div class="col-lg-4 col-md-4"> 
          <h3>FEATURES</h3>
          <div class="footer-links">
            <a href="about.php">About us</a>
            <a href="howItWork.php">how it works</a>
            <a href="availableWealthWheel.php">available wealth wheel</a>
            <a href="contac.php">Contact us</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <h3>DETAILS</h3>
          <div class="footer-links">
            <a href="teramsAndConditions.php">terms and conditions</a>
            <a href="privacyPolicy.php">privacy policy</a>
          </div>
        </div>
        </div>
      </div>
      <!-- <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p> -->
      
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Wealth Wheel</span></strong>. All Rights Reserved.
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  
  <script src=" {{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src=" {{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src=" {{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src=" {{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src=" {{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src=" {{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>