<?php

namespace App\Http\Controllers;

use App\Models\Adminwallet;
use App\Models\wallet;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Session;
use Stripe;

class StripePaymentController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET', 'sk_test_51Kh9uAFBFsCMdULhVtPQxp0NOArxMFzdQ6qroS5jZFettctGfyVPc5WPmT6b1hGimRW09adqa3lndHnywhsbBqYW00K8eyxFsu'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment" 
        ]);

            //for user 
            $up = 92.5/100;
            $user_percent = $up * 100 ;
            $user_payment = new wallet;
            $user_payment->wheel_id = "1";
            $user_payment->amount = $user_percent;
            $user_payment->save(); 

            //for admin
            $ad = 7.5/100;
            $admin_percent = $ad * 100 ;
            $user_payment = new Adminwallet;
            $user_payment->wheel_id = "1";
            $user_payment->amount = $admin_percent;
            $user_payment->save();



        return redirect('availabe_wealth_wheel')->with('success', 'Payment successful!');  

    }
}
