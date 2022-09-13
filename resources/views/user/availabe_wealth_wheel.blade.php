  @extends('layouts.user')
@section('content')

  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Available Wealth Wheels</span></h2>
          
          <div class="d-flex ww-banner-btn">
          @guest
          @if (Route::has('login')) 
          <a href="{{ route ('register') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Sign Up</a>
          @endif
          @if (Route::has('login'))
          <a href="{{ route ('login') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Login</a>
          @endif
          @else
          <a href="{{ route ('logout') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Logout</a>
          @endguest
          <a href="{{ route ('wealth_wheel') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Create Wealth Wheel</a>
          </div>
        </div>
      </div>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
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
        <div class="row content" data-aos="fade-up">
          <div class="col-lg-9">
            <div id="product_div" class="row product_div">

            @foreach($wheels as $wheel)
              <div class="ww-avl-card col-md-4 my-2">
                <div class="card">
                  <div  class="ww-card-tag">
                    <span>Available Now</span>
                  </div>
                 
                  {{-- <img style="height: 250px; width:310px" src="{{ asset('images/' .$wheel->image) }}" alt="no img" class="img-fluid"> --}}
                
                  <img style="height: 250px; width:310px"  src="{{ asset('assets/img/ww-pic.png') }}" alt="no img" class="img-fluid">
                
                  <div class="card-body">
                    <h5 class="card-title">{{ $wheel->wheel_name }}</h5>

                    <p class="card-text">Last Cog Number: {{$wheel->wallet->count()}}</p>
                    <div class="pro-price">
                      <h4>Cog Price : <span>US${{$wheel->cog_price}}</span></h4>
                    </div> 
                    <a href="{{url('wheels_details?id=' .$wheel->id) }}" class="pro-dtl-btn">Join Wealth Wheel</a>

                    <!-- <a href="{{route('wheels_details', ['id' =>encrypt($wheel->id)])}}"  class="pro-dtl-btn">Join Wealth Wheel</a> -->
                  </div>
                </div>
              </div>
              @endforeach
            </div>

          </div>
          
          <div class="col-lg-3">
            <div class="ww-pro-filter-main">
              <h4 class="fw-bold mb-4">Search Wealth Wheel</h4>
              <div class="ww-pro-filter-wrp mb-5">
                <h6 class="pb-1">Find Wealth Wheel Number</h6>
                <div>
                  {{-- <form id="filter_form" class="" action="{{route('wheels_filter_form')}}" method="POST"> --}}
                    {{-- @csrf --}}
                    <input id="txtSearch" class=" ps-2" type="text" placeholder="Enter wheel number" name="wheel_number">
                    <button id="Searchbtn" class="btn btn-info site_colr" type="button"><i style="color: white" class="fa fa-search "></i></button>
                  
                  {{-- </form> --}}

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      </script>

    <script>

        // $(document).ready(function() {
          
        //     $(document).on('click', '#search', function() {
        //       $("#product_div").empty();
        //         // $("#filter_form").submit();

        //     });

            //for filter

 $(document).ready(function(){

$('#Searchbtn').on('click', function(){
// $("#product_div").empty();

   var text = $('#txtSearch').val();

    $.ajax({
        type:"POST",
        url: '{{url('wheels_filter_form')}}',
        data: {text: $('#txtSearch').val()},
       
        success: function(response) {
          $('.product_div').empty().append(response);

         }



    });

});

});

        // });
    </script>

  @endsection