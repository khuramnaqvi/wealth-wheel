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

        });
    </script>
@endsection
