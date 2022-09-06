@extends('layouts.user')
@section('content')
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Withdraw Requests</span></h2>
                    <p class="animate__animated fanimate__adeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
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
                            <thead style="background-color: #3DC1EB; color:white;">
                                <tr>
                                    <th scope="col">S. No.</th>
                                    <th scope="col">User id</th>
                                    <th scope="col">Withdraw</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php $count=1; @endphp
                                @foreach ($withdraws as $withdraw)
                                    <tr>
                                        <td scope="row">{{ $count++ }}</td>
                                        <td>{{ $withdraw->user_id }}</td>
                                        <td>{{ $withdraw->withdraw }}</td>
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

                </div>
                <div class="modal-body">
                    <div class="row" style="justify-content:  center;">

                        <div class="col-6" style="text-align: center; margin-bottom:10px;">
                            <form action="{{ url('wihdraw_submit') }}" method="POST">
                                @csrf

                                <div class="form-group" style="text-align: left;">
                                  <label for="">Withdraw From Wallet</label>

                                  <select name="wallet_id" class="form-control" style="border-radius: 30px;">
                                    <option selected style="border-radius: 30px;" value="">--My Wallets--</option>
                                   
                                      @foreach ($wallets as $wallet)
                                          <option  value="{{$wallet->id}}">{{$wallet->amount}}</option>
                                      @endforeach
                                  </select>
                              </div>


                                <div class="form-group" style="text-align: left;">
                                    <label for="">Enter Amount:</label>
                                    <input required min="1" max="{{ auth()->user()->balance }}" type="number"
                                        name="withdraw" placeholder="Enter Amount To Withdraw"
                                        class=" form-control checkamount2"
                                        onkeyup="this.value=this.value.replace(/[^0-9]/g)" style="border-radius: 30px;">
                                </div>
                      

                                <div class="col-12 d-flex" style="justify-content: space-between;">
                                    <button type="submit" class=" col-5 btn btn-primary site_colr">Submit</button>
                                    <button type="button" class="col-5 btn btn-secondary " data-bs-dismiss="modal"
                                        aria-label="Close">cancel</button>
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

            $(document).on("click", ".withdraw_btn", function() {
                $('#withdrawmodel').modal('show');

            });
        });
    </script>
@endsection
