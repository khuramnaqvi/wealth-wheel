
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        </ul>
        {{-- <ul class="nav navbar-nav float-right"> --}}

         
              <a type="button" data-bs-toggle="modal" class="" href="#"  data-bs-target="#exampleModal">
                  <span><img style="border-radius: 50%" class="round" src="{{asset('assets/img_avatar.png')}}" alt="avatar" height="40" width="40"></span>
              </a>
            
              {{-- <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="{{ url('/logout') }}"><i class="feather icon-user"></i>Logout</a>
              </div> --}}
         
      {{-- </ul> --}}
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  



  <!-- ======= Hero Section ======= -->
  
  <!-- End Hero -->
 
  @yield('content')
    {{-- model --}}

<!-- Button trigger modal -->
  {{-- model start --}}

            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Open modal</button> --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div  class="form-group  text-center" >
                    <h3>Add Credit</h3>
                  </div>
                  <div class="modal-body">

        <form action="{{ route('add_user_balance') }}" method="POST">
@csrf
                     
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Amount:</label>
                        <input type="number" class="form-control" id="number">
                      </div>

                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Pay With</label><br>
                        <input type="radio" id="paypal" value="paypal" name="payment" >
                      <label for="paypal">Paypal</label>
                      <input type="radio" id="card" value="card" name="payment" >
                      <label for="card">Card</label>
                      </div>
                   
                  </div>
                  <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </form>
                </div>
              </div>
            </div>

            {{-- end --}}


            {{-- user modal --}}

            {{-- <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Chose Payment Options</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-center">
                    <button  type="button" class="btn btn-primary">Pay from Walet</button>
                    <button  type="button" class="btn btn-primary m-2 pasy">Direct Payment</button>
                  </div>
                  <div class="modal-footer">
                  
                  </div>
                </div>
              </div>
            </div> --}}

            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="selectpaymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5  class="modal-title" id="exampleModalCenterTitle">Chose Payment Method</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<div class="container">
      <div class="modal-body">
        
        <div class="row">
          <div class="col-5">
            <div class="row col-8">
            {{-- <button  type="button" class="btn btn-primary">Pay from Walet</button> --}}
            <a href="https://www.qries.com/">
              <img alt="Qries" src="{{URL::asset('/assets/img/wallet.png')}}"
              width="100" height="70">
           </a>
            
            </div>
          </div>

          <style>
            .vl {
              border-left: 3px solid #0D6EFD;
              height: 90px;
            }
            </style>
        
          <div class="vl col-1"></div>
          <div class="col-5">
            <div class="row">
            
<div class="col">
  <form method="POST" action="{{ route('charge') }}">
    <input type="hidden"  name="price" class="append_price">
    {{ csrf_field() }}
    {{-- <input type="submit" class="btn btn-primary" name="submit" value="Paypal"> --}}
  <a type="submit">
  <img alt="Qries" src="{{URL::asset('/assets/img/paypal.jpg')}}"
  width="70" height="70">
</a>
 </form>
</div>
             

<div class="col">
  <a href="{{url('stripe/'.$wheel_details->cog_price)}}">
  <img alt="Qries" src="{{URL::asset('/assets/img/card.jpg')}}"
  width="75" height="70">
</a>
</div>
            
            </div>
            {{-- <button  type="button" class="btn btn-primary pasy">Direct Payment</button> --}}
          </div>
      </div>
      </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>

            {{-- end modal --}}

             {{-- select payment modal --}}

             <div class="modal fade" id="selectpaymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Select payment method</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-center">
                      <form method="POST" action="{{ route('charge') }}">
                        <input type="hidden"  name="price" class="append_price">
                        {{-- <input type="hidden" value="{{$wheel_details->wheel_number}}" name="wheel_number">
                        <input type="hidden" value="{{$wheel_details->wheel_name}}" name="name">
                        <input type="hidden" value="{{$wheel_details->id}}" name="wheel_id"> --}}

                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" name="submit" value="Paypal">
                      
                {{-- <input type="submit" class="btn py-3 text-white ww-pro-action-btn" name="submit" value="Pay Now"> --}}
                </form>

                    {{-- <button type="button" class="btn btn-primary">Paypal</button> --}}
                   @if(isset($wheel_details->cog_price))
                    <a href="{{url('stripe/'.$wheel_details->cog_price)}}"  type="button" class="btn btn-primary m-2 "> Card</a>
                @endif
                  </div>
                  <div class="modal-footer">
                  
                  </div>
                </div>
              </div>
            </div>

            {{-- end modal --}}

  <!-- End #main -->

 
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
 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
  <script src=" {{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src=" {{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src=" {{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src=" {{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src=" {{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src=" {{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
@if(Session::has('success'))
    toastr.success('{{ Session::get('success') }}');
@elseif(Session::has('error'))
    toastr.error('{{ Session::get('error') }}');
@endif
</script>
<script>
   function initPayPalButton() {
    paypal.Buttons({
      style: {
        shape: 'pill',
        color: 'blue',
        layout: 'horizontal',
        label: 'paypal',
        
      },

      createOrder: function(data, actions) {
        return actions.order.create({
          purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
        });
      },

      onApprove: function(data, actions) {
        return actions.order.capture().then(function(orderData) {
          
          // Full available details
          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

          // Show a success message within this page, e.g.
          const element = document.getElementById('paypal-button-container');
          element.innerHTML = '';
          element.innerHTML = '<h3>Thank you for your payment!</h3>';

          // Or go to another URL:  actions.redirect('thank_you.html');
          
        });
      },

      onError: function(err) {
        console.log(err);
      }
    }).render('#paypal-button-container');
  }
  initPayPalButton();
</script>
 

  @yield('js')
</body>



</html>