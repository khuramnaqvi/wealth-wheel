@extends('layouts.user')
@section('content')


<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="">

        <!-- nav tabs -->

        <!--  -->
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <!--  -->


            <!--  -->
            <div class="carousel-container">
                <!--  -->

                <!--  -->
                <h2 class="animate__animated animate__fadeInDown">My Account</span></h2>
                
                <div class="d-flex ww-banner-btn">
                    @guest
                    @if (Route::has('login'))
                    <a href="{{ route ('register') }}"
                        class="btn-get-started animate__animated animate__fadeInUp scrollto">Signup</a>
                    @endif
                    @if (Route::has('login'))
                    <a href="{{ route ('login') }}"
                        class="btn-get-started animate__animated animate__fadeInUp scrollto">Login</a>
                    @endif
                    @else
                    <a href="{{ route ('logout') }}"
                        class="btn-get-started animate__animated animate__fadeInUp scrollto">Logout</a>
                    @endguest
                    <a href="{{ route ('wealth_wheel') }}"
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
<!-- tabs start -->
<div class="tabset pt-4 mt-4" style="margin: auto;">
        <!-- Tab 1 -->
        <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
        <label for="tab1">My Cogs</label>
        <!-- Tab 2 -->
        <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
        <label for="tab2">My Wealth Wheels</label>
        <!-- Tab 3 -->
        <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
        <label for="tab3">My Details</label>
        <input type="radio" name="tabset" id="tab4" aria-controls="wallet">
        <label for="tab4">My Wallet</label>

    


    <div class="tab-panels">

        <section id="marzen" class="tab-panel">

        <section id="our-products" class="our-products avl-wealthWheel">
                <div class="container">
                    <div class="row content" data-aos="fade-up">
                        <div class="col-lg-12">
                            <div class="row">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Wheel No.</th>
                                            <th scope="col">Cog No.</th>
                                            <th scope="col">Cog Price</th>
                                            <th scope="col">Payout Amount</th>
                                            <th scope="col">Purchase Date</th>
                                            <th scope="col">Payout Cog No.</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                    @forelse($purchased_whells as $wheel)

                                        <tr>
                                            <td>{{ $wheel->purchase_wheel->wheel_name }}</td>
                                            <td>{{ $wheel->purchase_wheel->wheel_name }} - 0{{$wheel->purchase_number}}</td>
                                            <td>US${{$wheel->purchase_wheel->cog_price}}</td>
                                            <td>US${{$wheel->purchase_wheel->cog_price*110/100}}</td>
                                            <td>{{$wheel->created_at}}</td>
                                            <td>{{ $wheel->purchase_wheel->payout_wheel->count() }}</td>
                                            @if($wheel->cog_percnt== 'given')
                                            <td>Paid</td>
                                            @elseif($wheel->cog_percnt== 'not given')
                                            <td>Pending</td>
                                            @else
                                            <td>Returned</td>
                                            @endif
                                        </tr>
                                        @empty
                                        <tr>
                                            <td><h4>No cogs purchased</h4></td>
                                        </tr>
                                    @endforelse
                                        
                                    </tbody>
                                </table>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section id="rauchbier" class="tab-panel">
            

            <!--  -->
            <section id="our-products" class="our-products avl-wealthWheel">
                <div class="container">
                    <div class="row content" data-aos="fade-up">
                        <div class="col-lg-12">
                            <div class="row">
                                <h3>Owned Wealth Wheels</h3>
                                <hr>
                                
                                @forelse($my_whells as $wheel)
                                <div class="ww-avl-card col-md-4 my-2">
                                    <div class="card">
                                        <div class="ww-card-tag">
                                        @if($wheel->available == 'available')
                                            <span>Available Now</span>
                                        @else
                                            <span style="background: red;">Unavailable</span>
                                        @endif
                                        </div>

                                        <img style="height: 250px; width:310px"
                                            src="{{ asset('assets/img/ww-pic.png') }}" alt="no img" class="img-fluid">
                                        <div class="card-body">
                                            <h5 class="card-title">WW0{{ $wheel->wheel_number }}</h5>


                                            <p class="card-text">Last Cog Number: {{$wheel->wallet->count()}}</p>
                                            <div class="pro-price">
                                                <h4>Cog Price : <span>US${{$wheel->cog_price}}</span></h4>
                                            </div>
                                            @if($wheel->available == 'available')
                                            <a href="{{url('wheels_details?id=' .$wheel->id) }}"
                                                class="pro-dtl-btn">Join Wealth Wheel</a>
                                                @if($wheel->wallet->count() >= 20)
                                                <form action="{{url('close_wheel')}}/{{$wheel->id}}" method="post">
                                                    @csrf
                                                    <button type="submit" class="pro-dtl-btn show_confirm">Close Wheel</button>
                                                </form>
                                                @else
                                                <button type="submit" class="pro-dtl-btn">Close Wheel</button>

                                                @endif
                                            @else
                                            <button type="button"
                                                class="pro-dtl-btn">Wheel Closed</button>
                                            @endif

                                            <!-- <a href="{{route('wheels_details', ['id' =>encrypt($wheel->id)])}}"  class="pro-dtl-btn">Join Wealth Wheel</a> -->
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <h4>No wheels created</h4>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </section>
    
    <section id="dunkles" class="tab-panel">
        <h2>Account details</h2>
        <form method="post" action="{{url('/update_profile')}}">
            @csrf

            <div class="row">
                <div class="col-12 mt-4 form-group">
                    <label for="">Username</label>
                    <input required type="text" class="form-control" name="name" placeholder="Enter Your Name" value="{{auth()->user()->name}}">
                </div>

                <div class="col-12 mt-4 form-group">
                    <label for="">Password</label>
                    <input  type="password" class="form-control" name="password" placeholder="Enter Your Password">
                    
                </div>

                <div class="col-12 mt-4 form-group">
                    <label for="">Confirm Password</label>
                    <input  type="password" class="form-control" name="confirm" placeholder="Enter Confirm Password">
                </div>


            </div>
            <button style="color: white" type="submit" class="btn btn-info mt-4">Submit</button>

        <form>
        
    </section>
    <section id="wallet" class="tab-panel">
        <section id="our-products" class="our-products avl-wealthWheel">
            <div class="container">
                <div class="row content " data-aos="fade-up" style="justify-content: center;">
                    <div class="col-lg-6 site_colr pt-4 pb-4 rounded-4 text-center">
                        <div class="row">
                            <h4>Balance : <span>US${{auth()->user()->balance}}</span></h4>
                        </div>

                        <a href="#" class="btn btn-primary deposit_modelbtn">Deposit</a>
                            <a href="{{url('withdraw')}}/{{auth()->user()->id}}" class="btn btn-primary">Withdraw</a>
                    </div>
                </div>
            </div>
        </section>
    </section>
</div>
<!-- tabs end -->

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>


<script type="text/javascript">
    // Swal.fire(
    //     'Welcome To Wealth Wheel!',
    //     'You have successfully created your account and are now logged in.',
    //     'success'
    //   )
        $('.show_confirm').click(function(event) {

             var form =  $(this).closest("form");
             var name = $(this).data("name");
             event.preventDefault();
             new swal({
                 title: `The Wealth Wheel has cogs awaiting payout.`,
                 text: "Are you sure you want to close the wheel?",
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


@endsection