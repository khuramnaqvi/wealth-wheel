@extends('layouts.user')
@section('content')

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Product Details - Wealth Wheels</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img//apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img//favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

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
                width: 100%;
                display: flex;


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

            .thumbnail:hover .thumbnail-image,
            .selected .thumbnail-image {
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

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                z-index: 1;
                right: -38px;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {
                background-color: #ddd;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }
        </style>
    </head>

    <body>

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

            <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28 " preserveAspectRatio="none">
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


                                {{-- <main class="primary" style="background-image: url({{images$wheel_details->image}})"></main> --}}
                                @if (isset($wheel_details->image))
                                    <main class="primary"
                                        style="background-image:  url('images/{{ $wheel_details->image }}')"></main>
                                @else
                                    <main class="primary" style="background-image:  url('assets/img/ww-pic.png')"></main>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">

                        <div class="ww-pro-description">
                            <div class="ww-pro-name">
                                <p class="ww-pro-number">
                                    <span>Wheel Number :{{ $wheel_details->wheel_number }}</span>
                                </p>

                            </div>
                            <div class="ww-pro-price my-4">
                                <h4>Cog Price :${{ $wheel_details->cog_price }} </h4>
                                <div class="ww-pro-price my-4">
                                    @if (count($user_wheels) > 0)
                                        @if (isset($user_balance))
                                            <h6>Wallet Balance : <b>${{ $user_balance }}</b></h6>
                                        @endif
                                    @endif
                                </div>
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

                                @if ($wheel_details->user_id == auth()->user()->id)
                                    <button disabled data-toggle="modal" data-target="#userModal" type="button"
                                        class="btn py-3 text-white ww-pro-action-btn">Buy Now</button>
                                @else
                                    <button data-toggle="modal" data-target="#userModal" type="button"
                                        class="btn py-3 text-white ww-pro-action-btn pasy">Buy Now</button>
                                @endif



                                {{-- <form method="POST" action="{{ route('charge') }}">
                        <input type="hidden" value="{{$wheel_details->cog_price}}" name="price">
                        <input type="hidden" value="{{$wheel_details->wheel_number}}" name="wheel_number">
                        <input type="hidden" value="{{$wheel_details->wheel_name}}" name="name">
                        <input type="hidden" value="{{$wheel_details->id}}" name="wheel_id">

                
                {{ csrf_field() }}
                <input type="submit" class="btn py-3 text-white ww-pro-action-btn" name="submit" value="Pay Now">
                </form> --}}
                                {{-- <a style="background-color: blue" href="{{route('stripe')}}" class="btn py-3 text-white ww-pro-action-btn">Card pay</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <input hidden class="cog_price" value="{{ $wheel_details->cog_price }}">
            <input hidden class="cog_id" value="{{ $wheel_details->id }}">

        </section>



        {{-- new --}}
        <div class="modal fade" id="selectpaymentModal" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content" style="border-radius: 45px;">
                    <div class="site_colr" style=" border-radius: 42px 42px 0px 0px;">
                        <h5 class="modal-title"
                            id="staticBackdropLabel"style="text-align: center;padding-top: 15px;padding-bottom: 15px;">
                            Select Payment Method</h5>

                    </div>
                    <div class="modal-body">
                        <div class="row" style="justify-content:  center;">

                            <div class="col-6" style="text-align: center; margin-bottom:10px;">
                                <div class="form-group">

                                </div>


                            </div>

                            <div class="col-md-10 col-md-offset-3 stripe_div ">
                                <div class="panel panel-default credit-card-box">
                                    <div class="panel-body">
                                        <div class="container">
                                            <div class="modal-body">

                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="row col-8">
                                                            {{-- <button  type="button" class="btn btn-primary">Pay from Walet</button> --}}
                                                            <form id="payment_from_wallet_form" role="form"
                                                                action="{{ url('pay_from_wallet') }}" method="post">
                                                                @csrf
                                                                <input class="append_price" type="hidden"
                                                                    name="amount">
                                                                <a class="payment_from_wallet">
                                                                    <img alt="Qries"
                                                                        src="{{ URL::asset('/assets/img/wallet.png') }}"
                                                                        width="100" height="100">
                                                                </a>
                                                            </form>


                                                        </div>
                                                        <div class="row text-center">
                                                            <div class="col-12"><b style="color: #3dc1eb">Pay From
                                                                    Walet</b>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <style>
                                                        .vl {
                                                            border-left: 3px solid #0D6EFD;
                                                            height: 90px;
                                                        }
                                                    </style>

                                                    <div class="vl col-1"></div>

                                                    <div class="col-3">
                                                        <div class="row col-8">
                                                            {{-- <button  type="button" class="btn btn-primary">Pay from Walet</button> --}}
                                                            <form id="paypal_form" method="POST"
                                                                action="{{ route('charge') }}">
                                                                <input type="hidden" name="price"
                                                                    class="append_price">
                                                                <input hidden value="{{ $wheel_details->id }}"
                                                                    name="wheel_id">

                                                                {{ csrf_field() }}
                                                                {{-- <input type="submit" class="btn btn-primary" name="submit" value="Paypal"> --}}
                                                                <a class="paypal_form" type="submit">
                                                                    <img alt="Qries"
                                                                        src="{{ URL::asset('/assets/img/paypal.jpg') }}"
                                                                        width="100" height="100">
                                                                </a>
                                                            </form>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col text-center">
                                                                <b style="color: #3dc1eb">Paypal</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vl col-1 ml-4"></div>
                                                    <div class="col-3">
                                                        <div class="row col-8">
                                                            {{-- <button  type="button" class="btn btn-primary">Pay from Walet</button> --}}
                                                            <a class="cardpay">
                                                                <img alt="Qries"
                                                                    src="{{ URL::asset('/assets/img/card.jpg') }}"
                                                                    width="100" height="100">
                                                            </a>

                                                        </div>
                                                        <div class="row text-center">
                                                            <div style="color: #3dc1eb" class="col"><b>Card Pay</b>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary close_btn"
                                        data-dismiss="modal">Close</button>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- end main payment modal --}}


        {{-- modal for card --}}


        <div class="modal fade" id="walletpaymentModal" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="border-radius: 45px;">
                    <div class="site_colr" style=" border-radius: 42px 42px 0px 0px;">
                        <h5 class="modal-title"
                            id="staticBackdropLabel"style="text-align: center;padding-top: 15px;padding-bottom: 15px;">
                            Payment</h5>

                    </div>
                    <div class="modal-body">
                        <div class="row" style="justify-content:  center;">
                            <div class="col-md-10 col-md-offset-3 stripe_div ">
                                <div class="panel panel-default credit-card-box">
                                    <div class="panel-body">
                                        <form role="form" action="{{ url('stripe_post') }}" method="post"
                                            class="require-validation" data-cc-on-file="false"
                                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                            @csrf

                                            <input class="append_price" type="hidden" name="amount">
                                            <input hidden value="{{ $wheel_details->id }}" name="wheel_id">


                                            <div class='form-row row mt-2'>
                                                <div class='col-xs-12 form-group required'>
                                                    <label class='control-label'>Name on Card</label> <input
                                                        class='form-control' size='4' type='text'>
                                                </div>
                                            </div>

                                            <div class='form-row row mt-2'>
                                                <div class='col-xs-12 form-group required'>
                                                    <label class='control-label'>Card Number</label> <input
                                                        autocomplete='off' class='form-control card-number'
                                                        size='20' type='text'>
                                                </div>
                                            </div>

                                            <div class='form-row row mt-2'>
                                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                    <label class='control-label'>CVC</label> <input autocomplete='off'
                                                        class='form-control card-cvc' placeholder='ex. 311'
                                                        size='4' type='text'>
                                                </div>
                                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                    <label class='control-label'>Expiration Month</label> <input
                                                        class='form-control card-expiry-month' placeholder='MM'
                                                        size='2' type='text'>
                                                </div>
                                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                    <label class='control-label'>Expiration Year</label> <input
                                                        class='form-control card-expiry-year' placeholder='YYYY'
                                                        size='4' type='text'>
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
                                                    <button type="button" class="col-5 btn btn-secondary "
                                                        data-bs-dismiss="modal" aria-label="Close">cancel</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- modal for card --}}



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script>
            $(document).ready(function() {
                $(".pasy").click(function() {
                    $("#selectpaymentModal").modal('show');
                    var priv = $(".cog_price").val();
                    $('.append_price').val(priv)

                });

                $(".cardpay").click(function() {
                    $("#selectpaymentModal").modal('hide');
                    $("#walletpaymentModal").modal('show');
                    var priv = $(".cog_price").val();
                    var cog_id = $(".cog_id").val();
                    $('.append_price').val(priv)

                });

                $(".payment_from_wallet").click(function() {
                    $("#selectpaymentModal").modal('hide');
                    var priv = $(".cog_price").val();
                    $('.append_price').val(priv)

                });

                $(".close_btn").click(function() {
                    $("#selectpaymentModal").modal('hide');
                    $("#walletpaymentModal").modal('hide');
                });

                $(".paypal_form").click(function() {
                    $("#paypal_form").submit();
                });

                $(".payment_from_wallet").click(function() {
                    $("#payment_from_wallet_form").submit();
                });
            });
        </script>
    @endsection
