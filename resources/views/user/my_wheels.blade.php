@extends('layouts.user')
@section('content')
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

body {
    padding: 30px;
}

.tabset {
    max-width: 65em;
}
</style>

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
                <h2 class="animate__animated animate__fadeInDown">My Accounts</span></h2>
                <p class="animate__animated fanimate__adeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
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
<div class="tabset">
    <!-- Tab 1 -->
    <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
    <label for="tab1">My Wealth Wheels</label>
    <!-- Tab 2 -->
    <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
    <label for="tab2">My Wallet</label>
    <!-- Tab 3 -->
    <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
    <label for="tab3">My Details</label>

    <div class="tab-panels">

        <section id="marzen" class="tab-panel">

            <section id="our-products" class="our-products avl-wealthWheel">
                <div class="container">
                    <div class="row content" data-aos="fade-up">
                        <div class="col-lg-12">
                            <div class="row">
                                
                                @forelse($my_whells as $wheel)
                                <div class="ww-avl-card col-md-4 my-2">
                                    <div class="card">
                                        <div class="ww-card-tag">
                                            <span>Available Now</span>
                                        </div>

                                        <img style="height: 250px; width:310px"
                                            src="{{ asset('assets/img/ww-pic.png') }}" alt="no img" class="img-fluid">
                                        <div class="card-body">
                                            <h5 class="card-title">WW0{{ $wheel->wheel_number }}</h5>


                                            <p class="card-text">Last Cog Number: {{$wheel->wallet->count()}}</p>
                                            <div class="pro-price">
                                                <h4>Cog Price : <span>US${{$wheel->cog_price}}</span></h4>
                                            </div>
                                            <a href="{{url('wheels_details?id=' .$wheel->id) }}"
                                                class="pro-dtl-btn">Join Wealth Wheel</a>

                                            <!-- <a href="{{route('wheels_details', ['id' =>encrypt($wheel->id)])}}"  class="pro-dtl-btn">Join Wealth Wheel</a> -->
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <h4>No wheel available</h4>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section id="rauchbier" class="tab-panel">
            <section id="our-products" class="our-products avl-wealthWheel">
                <div class="container">
                    <div class="row content" data-aos="fade-up">
                        <div class="col-lg-12">
                            <div class="row">
                            
                            @forelse($purchased_whells as $wheel)
                            <div class="ww-avl-card col-md-4 my-2">
                                <div class="card">
                                    <div class="ww-card-tag">
                                        <span>Available Now</span>
                                    </div>


                                    <img style="height: 250px; width:310px" src="{{ asset('assets/img/ww-pic.png') }}"
                                        alt="no img" class="img-fluid">

                                    <div class="card-body">
                                        <h5 class="card-title">{{ $wheel->purchase_wheel->wheel_name }}</h5>

                                        <p class="card-text">Last Cog Number:
                                        {{ $wheel->purchase_wheel->wheel_name }} - 0{{$wheel->purchase_wheel->wallet->count()}}</p>
                                        <div class="pro-price">
                                            <p>Cog Price : US${{$wheel->purchase_wheel->cog_price}}</p>
                                        </div>
                                        <p>Purchase Date : {{$wheel->created_at}}</p>
                                        <p>Payout Cog Number : </p>
                                        <p>Payout Amount :</p>
                                        <p>Status :</p>
                                        <a href="{{url('/withdraw') }}/{{auth()->user()->id}}" class="pro-dtl-btn">Withdraw</a>

                                    </div>
                                </div>
                            </div>
                            @empty
                            <h4>No wheel available</h4>
                            @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </section>
    
    <section id="dunkles" class="tab-panel">
        <h2>my detail section</h2>
        
    </section>
</div>
<!-- tabs end -->

</div>



@endsection