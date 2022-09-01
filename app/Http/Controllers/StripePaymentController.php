<?php

namespace App\Http\Controllers;

use App\Models\Adminwallet;
use App\Models\wallet;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Stripe;

class StripePaymentController extends Controller
{
    public function stripe($amount)
    {

        return view('stripe',compact('amount'));
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
       $amount = $request->amount;
       $final_amount = $amount * 100;
       
        
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET', 'sk_test_51Kh9uAFBFsCMdULhVtPQxp0NOArxMFzdQ6qroS5jZFettctGfyVPc5WPmT6b1hGimRW09adqa3lndHnywhsbBqYW00K8eyxFsu'));
        Stripe\Charge::create ([
                "amount" => $final_amount,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment" 
        ]);

        
            //for user 
            $up = 92.5/100;
            $user_percent = $up * $amount ;
            $user_payment = new wallet;
            $user_payment->user_id = Auth::user()->id;
            $user_payment->amount = $user_percent;
            $user_payment->save(); 

            //for admin
            $ad = 7.5/100;
            $admin_percent = $ad * $amount ;
            $admin_payment = new Adminwallet;
            $admin_payment->user_id = Auth::user()->id;
            $admin_payment->amount = $admin_percent;
            $admin_payment->save();
            return redirect('availabe_wealth_wheel')->with('success', 'Payment successful!');  

    }
}
