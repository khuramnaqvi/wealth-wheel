
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wealth Wheel - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img//apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img//favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
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
</style>

<body>

  <!-- ======= Header ======= -->
   <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="{{route('user_home')}}"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('how_it_works') }} ">How it Works</a></li>
          <li><a class="nav-link scrollto" href="{{ route('availabe_wealth_wheel') }}">Available Wealth Wheels</a></li>
          <li><a class="nav-link scrollto" href="{{ route('contact') }}">Contact Us</a></li>
        </ul> 
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
  <!-- End Hero -->
 
  @yield('content')
  
  <!-- End #main -->

  <!-- ======= Footer ======= -->
   <!-- ======= Footer ======= -->
   <footer id="footer" class="mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <img src="assets/img/logo.png" class="footer-img" alt="">
        </div>
        <div class="col-lg-3 col-md-3"> 
          <h3>FEATURES</h3>
          <div class="footer-links">
            <!-- <a href="about.php">About us</a> -->
            <a href="{{ route('how_it_works') }}">how it works</a>
            <a href="{{ route('availabe_wealth_wheel') }}">available wealth wheels</a>
            <a href="{{ route('contact') }}">Contact us</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-3">
          <h3>DETAILS</h3>
          <div class="footer-links">
            <a href="{{ route('term_and_conditions') }}">terms & conditions</a>
            <a href="{{ route('privacy_policy') }}">privacy policy</a>
            <a href="{{ route('faq') }}">FAQs</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-3">
          <h3>FOLLOW US</h3>
          <div class="social-links my-4">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          </div>
        </div>
        </div>
      </div>
      <div class="copyright mt-5">
        &copy; Copyright <strong><span>Wealth Wheel</span></strong>. All Rights Reserved.
      </div>
    </div>
  </footer>
  <!-- End Footer -->
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