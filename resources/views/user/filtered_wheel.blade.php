@forelse($wheels as $wheel)
    <div class="ww-avl-card col-md-4 my-2">
        <div class="card">
            <div  class="ww-card-tag">
            <span>Available Now</span>
            </div>
        
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
    
    @empty
    <h3>Wheel number not found.</h3>
@endforelse