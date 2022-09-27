@extends('layouts.user')
@section('content')

    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Withdraw Requests</span></h2>
                    
                    <div class="d-flex ww-banner-btn">
                        @guest
                            @if (Route::has('login'))
                                <a href="{{ route('register') }}"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Signup</a>
                            @endif
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Login</a>
                            @endif
                        @else
                            <a href="{{ route('logout') }}"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Logout</a>
                        @endguest
                        <a href="{{ route('wealth_wheel') }}"
                            class="btn-get-started animate__animated animate__fadeInUp scrollto">Create Wealth Wheel</a>
                    </div>
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

    <section id="our-products" class="our-products avl-wealthWheel">
        <div class="container">
            <div class="row content" data-aos="fade-up" style="justify-content: center;">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="d-flex mb-4" style="justify-content: space-between;">
                            <h3>Withdraw Requests</h3>
                            <button class="btn btn-primary withdraw_btn site_colr">Withdraw Request</button>
                        </div>
                        <table class="table">
                            <thead style="color:white" class="site_colr">
                                <tr>
                                    <th scope="col">S. No.</th>
                                    <th scope="col">UserName</th>
                                    <th scope="col">Withdraw</th>
                                    <th scope="col">Date</th>


                                </tr>
                            </thead>
                            <tbody>
                                @php $count=1; @endphp
                                @foreach ($withdraws as $withdraw)
                                    <tr>
                                        <td scope="row">{{ $count++ }}</td>
                                        <td>{{ auth()->user()->name }}</td>
                                        <td>{{ $withdraw->withdraw }}</td>
                                        <td>{{ $withdraw->created_at }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>







                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--  -->
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
                                <div class="form-group" style="text-align: left;">
                                  <label for="">Withdraw From Wallet</label>
                                  <select id="dropDownId" required name="wallet_amount" class="form-control" style="border-radius: 30px;">
                                    <option  style="border-radius: 30px;" value="">--Select Wallet--</option>
                                    <option  style="border-radius: 30px;" tyype="balance" value="{{auth()->user()->balance}}">My Wallet</option>
                                      @foreach ($user_wallets as $wallet)
                                          <option att="{{$wallet->id}}" tyype="wallet" value="{{$wallet->amount}}">{{$wallet->wallet_name}}</option>
                                      @endforeach
                                  </select>
                              </div>
                              <input type="hidden" name="wellet_id" class="wellet_amount">
                              <input type="hidden" name="typee" class="typeee">

                                <div class="form-group" style="text-align: left;">
                                    <label for="">Enter Amount:</label>
                                    <input required min="1" max="" type="number"
                                        name="withdraw" placeholder="Enter Amount To Withdraw"
                                        class=" form-control checkamount2"
                                        onkeyup="this.value=this.value.replace(/[^0-9]/g)" style="border-radius: 30px;">
                                </div>
                                <label class="mt-4" for="" style="text-align: left;font-weight: bold;">Select Withdraw Option</label>
                                <br>
                                <input disabled type="radio" name="pay" id="vcard3" value="1" class="paymentmode3" required><label for="vcard3" style="margin-right: 33px;">Withdraw with Card</label>
                                <input type="radio" name="pay" id="payypal3"  value="2" class="paymentmode3"><label for="payypal3">Withdraw with PayPal</label>
                                
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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            // alert('aaa');
            $(document).on("click", "#dropDownId", function() {
            var value = $('select#dropDownId option:selected').val();
            var att = $('select#dropDownId option:selected').attr('att');
            var tyype = $('select#dropDownId option:selected').attr('tyype');
            
            // console.log(value);
            $('.wellet_amount').val(att);
            $('.checkamount2').attr('max', value);
            $('.typeee').val(tyype);


            });


            $(document).on("click", ".withdraw_btn", function() {
                $('#withdrawmodel').modal('show');

            });

            // $(".paymentmode3").click( function() {
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
                // }else{
                //     toastr.options = {
                //     "closeButton": true,
                //     "progressBar": true
                //     }
                //     toastr.error('Please Enter Amount First');
                // }

            });
        });
    </script>
@endsection
