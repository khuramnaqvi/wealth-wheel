
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>Wealth Wheel - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img//apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img//favicon-16x16.png') }}">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
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
    .hide {
      display:none;
    }
    .toast-success{
        background-color:green !important;
    }
    .toast-error
    {
        background-color:brown !important;

    }

    /*  */
/* .dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
} */

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  right:-38px;
}
@media only screen   
and (max-device-width : 768px)  
{
  .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  left:45px;
}
.dropdown {
  padding-left: 14px;
}
  
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

</style>

<style>
.tabset>input[type="radio"] {
    position: absolute;
    left: -200vw;
}

.tabset .tab-panel {
    display: none;
}

.tabset>input:first-child:checked~.tab-panels>.tab-panel:first-child,
.tabset>input:nth-child(3):checked~.tab-panels>.tab-panel:nth-child(2),
.tabset>input:nth-child(5):checked~.tab-panels>.tab-panel:nth-child(3),
.tabset>input:nth-child(7):checked~.tab-panels>.tab-panel:nth-child(4),
.tabset>input:nth-child(9):checked~.tab-panels>.tab-panel:nth-child(5),
.tabset>input:nth-child(11):checked~.tab-panels>.tab-panel:nth-child(6) {
    display: block;
}

/*
 Styling
*/
body {
    font: 16px/1.5em "Overpass", "Open Sans", Helvetica, sans-serif;
    color: #333;
    font-weight: 300;
}

.tabset>label {
    position: relative;
    display: inline-block;
    padding: 15px 15px 25px;
    border: 1px solid transparent;
    border-bottom: 0;
    cursor: pointer;
    font-weight: 600;
}

.tabset>label::after {
    content: "";
    position: absolute;
    left: 15px;
    bottom: 10px;
    width: 22px;
    height: 4px;
    background: #8d8d8d;
}

.tabset>label:hover,
.tabset>input:focus+label {
    color: #06c;
}

.tabset>label:hover::after,
.tabset>input:focus+label::after,
.tabset>input:checked+label::after {
    background: #06c;
}

.tabset>input:checked+label {
    border-color: #ccc;
    border-bottom: 1px solid #fff;
    margin-bottom: -1px;
    background: linear-gradient(0deg, rgb(113 146 239) 0%, rgb(45 210 235) 100%);
    color:white;
}

.tab-panel {
    padding: 30px 0;
    border-top: 1px solid #ccc;
}

/*
 Demo purposes only
*/
*,
*:before,
*:after {
    box-sizing: border-box;
}


.tabset {
    max-width: 65em;
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
        <ul id="myDIV">
          <li><a class="nav-link scrollto {{ Request::is('/')? 'active' : '' }} " href="{{ url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto {{ Request::is('how_it_works')? 'active' : '' }} " href="{{ route('how_it_works') }} ">How it Works</a></li>
          <li><a class="nav-link scrollto {{ Request::is('availabe_wealth_wheel')? 'active' : '' }} " href="{{ route('availabe_wealth_wheel') }}">Available Wealth Wheels</a></li>
          <li><a class="nav-link scrollto {{ Request::is('contact')? 'active' : '' }} " href="{{ route('contact') }} ">Contact Us</a></li>
          @auth
          <li><a class="nav-link scrollto {{ Request::is('my_wheels')? 'active' : '' }}" href="{{ url('my_wheels') }}">My Account</a></li>
          <li><a class="nav-link scrollto">${{auth()->user()->balance}}</a></li>
          {{-- <li><a class="nav-link scrollto">${{auth()->user()->balance}}</a></li> --}}

          <div class="dropdown">
            <li><i class="fa fa-angle-down dropbtn" style="font-size:26px"></i></li>

            <div class="dropdown-content" style="padding-top: 13px;padding-bottom: 13px;">
              <a href="#" class="deposit_modelbtn">Deposit</a>
              <a class="withdraw_btn" href='#'>Withdraw</a>
              <form action="{{route('logout') }}" method="get">
                @csrf
                <button type="submit" class="show_confirm2" style="border: none;padding-left: 23px;padding-top: 9px;">Logout</button>
              </form >  
            </div>
          </div>
          @endauth
        </ul>
        {{-- <ul class="nav navbar-nav float-right"> --}}

         
              <!-- <a type="button" data-bs-toggle="modal" class="" href="#"  data-bs-target="#exampleModal">
                  <span><img style="border-radius: 50%" class="round" src="{{asset('assets/img_avatar.png')}}" alt="avatar" height="40" width="40"></span>
              </a> -->
            
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

  <!-- deposit model -->

  <div class="modal fade" id="paymentmodel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="border-radius: 45px; margin-top: 123px;">
        

            <div class="site_colr" style=" border-radius: 42px 42px 0px 0px;">
                <h5 class="modal-title" id="staticBackdropLabel"style="text-align: center;padding-top: 15px;padding-bottom: 15px;">Payment</h5>
                
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="margin-top: -40px;margin-right: 16px;"><i class="fa fa-close"></i></button>
                
            </div>
            <div class="modal-body">
                    <div class="row" style="justify-content:  center;">

                        <div class="col-6"  style="text-align: center; margin-bottom:10px;">
                            <div class="form-group" style="text-align: left;">
                              <label for="">Enter Amount:</label>
                              <div class="input-group" >

                                <span class="input-group-text">US$</span>
                                <input type="number" name="amount" placeholder="Enter Amount To Deposit" class=" form-control checkamount" onkeyup="this.value=this.value.replace(/[^0-9]/g)" >

                              </div>
                              
                          </div>
                            <input type="radio" name="pay" id="vcard" value="1" class="paymentmode"><label for="vcard" style="margin-right: 33px;">Pay with Card</label>
                            <input type="radio" name="pay" id="payypal"  value="2" class="paymentmode"><label for="payypal">Pay with PayPal</label>
                        </div>

                        <div class="col-md-10 col-md-offset-3 stripe_div d-none">
                            <div class="panel panel-default credit-card-box">
                                <div class="panel-body">
                                    <form role="form" action="{{url('/deposit_balance')}}" method="post"
                                        class="require-validation" data-cc-on-file="false"
                                        data-stripe-publishable-key="{{ env('STRIPE_KEY','pk_test_51Kh9uAFBFsCMdULhjZvuXtEvn03Dc8oBpZS9VEZf3ZEym3JBm6F8owLE8nzc4o1p7tT2FSqyYjyrpPKgBmU3f4lC00yFeVGFJa') }}" id="payment-form">
                                        @csrf

                                        <input type="hidden" name="amount" class="amount">

                                        <div class='form-row row mt-2'>
                                            <div class='col-xs-12 form-group required'>
                                                <label class='control-label'>Name on Card</label> <input
                                                    class='form-control' size='4' type='text'>
                                            </div>
                                        </div>

                                        <div class='form-row row mt-2'>
                                            <div class='col-xs-12 form-group required'>
                                                <label class='control-label'>Card Number</label> <input
                                                    autocomplete='off' class='form-control card-number' size='20'
                                                    type='text'>
                                            </div>
                                        </div>

                                        <div class='form-row row mt-2'>
                                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                                    type='text'>
                                            </div>
                                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                <label class='control-label'>Expiration Month</label> <input
                                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                                    type='text'>
                                            </div>
                                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                <label class='control-label'>Expiration Year</label> <input
                                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                                    type='text'>
                                            </div>
                                        </div>

                                        <div class='form-row row mt-2'>
                                            <div class='col-md-12 error form-group hide'>
                                                <div class='alert-danger alert'>Please correct the errors and try
                                                    again.</div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-12 d-flex" style="justify-content: space-between;">
                                                <button class="col-5 btn btn-primary site_colr" type="submit">Pay Now
                                                    </button>
                                                <button type="button" class="col-5 btn btn-secondary " data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="paypal_div d-none">

                            <form action="{{ url('/paypal_deposit_balance') }}" method="post">
                                <input type="hidden" class="amount" name="amount" />
                                {{ csrf_field() }}
                                <div class="row" style="justify-content: center;">
                                  <div class="col-md-10 col-md-offset-3">
                                    <div class="row mt-4">
                                      <div class="col-12 d-flex" style="justify-content: space-between;">
                                        <input type="submit" name="submit" class=" col-5 btn btn-primary site_colr" value="Pay Now">
                                        <button type="button" class="col-5 btn btn-secondary " data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>


  <!--  -->

      <!-- withdraw model -->
      @if(auth()->user())
  <div class="modal fade" id="withdrawmodel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content" style="border-radius: 45px; margin-top: 123px;">
              <div class="site_colr" style=" border-radius: 42px 42px 0px 0px;">
                  <h5 class="modal-title"
                      id="staticBackdropLabel"style="text-align: center;padding-top: 15px;padding-bottom: 15px;">Withdraw
                  </h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="margin-top: -40px;margin-right: 16px;"><i class="fa fa-close"></i></button>

              </div>
              <div class="modal-body">
                  <div class="row" style="justify-content:  center;">
                      <div class="col-6" style="text-align: center; margin-bottom:10px;">
                          <form action="{{ url('wihdraw_submit') }}" method="POST">
                              @csrf
                              <div class="form-group d-none" style="text-align: left;">
                                <label for="">Withdraw From Wallet</label>
                                
                                <select id="dropDownId" required name="wallet_amount" class="form-control" style="border-radius: 30px;">
                                  <option  style="border-radius: 30px;" tyype="balance" value="{{auth()->user()->balance}}">My Wallet</option>
                                    {{-- @foreach ($user_wallets as $wallet)
                                        <option att="{{$wallet->id}}" tyype="wallet" value="{{$wallet->amount}}">{{$wallet->wallet_name}}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                            <input type="hidden" name="wellet_id" class="wellet_amount">
                            <input type="hidden" name="typee" class="typeee" value="balance">

                              <div class="form-group" style="text-align: left;">
                                  <label for="">Enter Amount:</label>

                                  <div class="input-group" >
                                      <span class="input-group-text">US$</span>
                                      <input required min="1" max="{{auth()->user()->balance}}" type="number"
                                      name="withdraw" placeholder="Enter Amount To Withdraw"
                                      class=" form-control checkamount2"
                                      onkeyup="this.value=this.value.replace(/[^0-9]/g)" style="">
                                  </div>

                              </div>


                                



                              <label class="mt-4" for="" style="text-align: left;font-weight: bold;">Withdraw To PayPal</label>
                              <br>
                              <input disabled type="radio" name="pay" id="vcard3" value="1" class="paymentmode3 d-none" required><label for="vcard3" style="margin-right: 33px;display:none;">Withdraw with Card</label>
                              <input type="radio" name="pay" id="payypal3"  value="2" class="paymentmode3 d-none"><label for="payypal3" class="d-none">Withdraw with PayPal</label>
                              
                              <input type="hidden" name="withdraw_amount" class="withdraw_amount">
                              <input type="hidden" name="withdraw_type" class="withdraw_type" value="paypal">
                              <div class="col-md-12 col-md-offset-3 stripe_div2 d-none">
                                  <div class="panel panel-default credit-card-box">
                                      <div class="panel-body">
                                          <div class="row">

                                              <div class="form-group col-12 text-left">
                                                  <label for="">Bank Name:</label>
                                                  <input type="text" name="bank_name" class="form-control" style="border-radius: 30px;">
                                              </div>
                                              
                                              <div class="form-group col-12 text-left">
                                                  <label for="">Account Title:</label>
                                                  <input type="text" name="account_title" class="form-control" style="border-radius: 30px;">
                                              </div>

                                              <div class="form-group col-12 text-left">
                                                  <label for="">Account Number:</label>
                                                  <input type="text" name="account_number" class="form-control" style="border-radius: 30px;">
                                              </div>

                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-12 col-md-offset-3 paypal_div2 d-none" style="display:none">
                                  <div class="panel panel-default credit-card-box">
                                      <div class="panel-body">
                                          <div class="row">
                                              <div class="form-group col-12 text-left">
                                                  <label for="">PayPal Email:</label>
                                                  <input type="email" name="paypal_email" class="form-control" placeholder="Enter Your PayPal Email" style="border-radius: 30px;" value="{{ auth()->user()->paypal_email }}">
                                              </div>
                                              
                                          </div>
                                      </div>
                                  </div>
                              </div>


                              <div class="col-12 d-flex" style="justify-content: space-between;">
                                  <button type="submit" class=" col-5 btn btn-primary site_colr">Submit</button>
                                  <button type="button" class="col-5 btn btn-secondary " data-bs-dismiss="modal"
                                      aria-label="Close">Cancel</button>
                              </div>

                          </form>



                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endif
 

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
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>




  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
  

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  
  <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
    
    
<script>
  
  
  // if($(location).attr('href') == 'http://127.0.0.1:8000/register/success')

  if($(location).attr('href') == 'http://wealthwheel.herokuapp.com/public/register/success')
  // if($(location).attr('href') == 'http://wealth-wheel.com/register/success')
    {
      Swal.fire(
        'Welcome To Wealth Wheel!',
        'You have successfully created your account and are now logged in.',
        'success'
      )
    }
    

    @if(Session::has('success'))
        toastr.options = {
          "closeButton": true,
          "progressBar": true
        }
        toastr.success('{{ Session::get('success') }}');
    @elseif(Session::has('error'))
        toastr.options = {
          "closeButton": true,
          "progressBar": true
        }
        toastr.error('{{ Session::get('error') }}');
    @elseif(Session::has('cogpurchase'))
    Swal.fire(
        'Congratulations!\n{{ Session::get("cogpurchase") }}',
        'You have successfully purchased your wealth wheel cog.',
        'success'
        )
      
    @endif

    @if ($errors->any())
     @foreach ($errors->all() as $error)
         toastr.options = {
          "closeButton": true,
          "progressBar": true
        }
        toastr.error('{{$error}}');
     @endforeach

    @endif

    


$(document).ready(function() {

  $(document).on("click", ".withdraw_btn", function() {
      $('#withdrawmodel').modal('show');

  });

  $('.paymentmode3').trigger("click");

    $(document).on("click", ".paymentmode3", function () {
        var checkamount = $('.checkamount2').val();

        // if(checkamount != '')
        // {
            $('.withdraw_amount').val(checkamount);
            var a = $('.paymentmode3:checked').val();
            if(a ==1)
            {
                $('.withdraw_type').val('card');
                $('.stripe_div2').removeClass('d-none');
                $('.paypal_div2').addClass('d-none');
            }else{
                $('.withdraw_type').val('paypal');
                $('.paypal_div2').removeClass('d-none');
                $('.stripe_div2').addClass('d-none');
            }
    });



  $(document).on("click", ".deposit_modelbtn", function() {
      $('#paymentmodel').modal('show');

  });

 
    $('.nav li a').click(function(e) {

        $('.nav li a.active').removeClass('active');

        var $parent = $(this).parent();
        $parent.addClass('active');
        e.preventDefault();
    });




  $(document).on("click", ".paymentmode", function () {
    var checkamount = $('.checkamount').val();

    if(checkamount != '')
    {
      $('.amount').val(checkamount)
    
      var a = $('.paymentmode:checked').val();
      if(a ==1)
      {
          $('.stripe_div').removeClass('d-none');
          $('.paypal_div').addClass('d-none');
      }else{
          $('.paypal_div').removeClass('d-none');
          $('.stripe_div').addClass('d-none');
      }
    }else{
      toastr.options = {
        "closeButton": true,
        "progressBar": true
      }
      toastr.error('Please Enter Amount First');
    }

  });

  $('.checkamount').keypress(function(evt) {
        if (evt.which == "0".charCodeAt(0) && $(this).val().trim() == "") {
        return false;
        }
    });

    $('.checkamount2').keypress(function(evt) {
        if (evt.which == "0".charCodeAt(0) && $(this).val().trim() == "") {
        return false;
        }
    });

});

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

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  
<script type="text/javascript">
$(function() {
   
    var $form         = $(".require-validation");
   
    $('form.require-validation').bind('submit', function(e) {
        var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
  
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
   
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
    
   
});

    $('.show_confirm2').click(function(event) {
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        new swal({
            title: `Are you sure you want to logout?`,
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            form.submit();
          }
        });
    });
</script>
 

  @yield('js')
</body>


</html>