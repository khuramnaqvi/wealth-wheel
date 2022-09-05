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
              <a class="payment_from_wallet" >
                <img alt="Qries" src="{{URL::asset('/assets/img/wallet.png')}}"
                width="100" height="70">
             </a>
              
              </div>
              <div class="row">
                <div class="col"><b style="margin-left: 15px" >Pay Now</b></div>
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
    <form id="paypal_form" method="POST" action="{{ route('charge') }}">
      <input type="hidden"  name="price" class="append_price">
      <input hidden value="{{$wheel_details->id}}"  name="wheel_id" >
  
      {{ csrf_field() }}
      {{-- <input type="submit" class="btn btn-primary" name="submit" value="Paypal"> --}}
    <a class="paypal_form" type="submit">
    <img alt="Qries" src="{{URL::asset('/assets/img/paypal.jpg')}}"
    width="70" height="70">
  </a>
   </form>
  </div>
  
               
  
  <div class="col">
    {{-- {{url('stripe/'.$wheel_details->cog_price)}} --}}
    {{-- {{dd($wheel_details)}} --}}
    <a class="cardpay">
    <img alt="Qries" src="{{URL::asset('/assets/img/card.jpg')}}"
    width="75" height="70">
  </a>
  </div>
              
              </div>
              <div class="row">
  <div class="col"><b>Paypal</b></div>
  <div class="col"><b style="margin-left:8px;">Card </b> </div>
  
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