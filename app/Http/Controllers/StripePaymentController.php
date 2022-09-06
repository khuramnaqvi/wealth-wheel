<?php

namespace App\Http\Controllers;

use App\Models\Adminwallet;
use App\Models\wallet;
use App\Models\User;
use App\Models\WealthWheel;
use App\Notifications\PurchaseCogNotification;

use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
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
      $wheel_id = $request->wheel_id;
       
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
            $user_payment->wheel_id =  $wheel_id;
            $user_payment->amount = $user_percent;
            $user_payment->save(); 

            // 
            $purchased_whells = wallet::where('wheel_id', $wheel_id)->get();
                $total_purchase = $purchased_whells->count();
                $wheel_amount = WealthWheel::find($wheel_id);

                if($total_purchase > 5)
                {
                    if(($total_purchase+1)%6 != 0)
                    {

                        $cog_110percent = $wheel_amount->cog_price*110/100;
                        $cog_notgiven = wallet::where('wheel_id', $wheel_id)->where('cog_percnt', 'not given')->orderBy('id', 'ASC')->first();
                        $cog_notgiven->cog_percnt = 'given';
                        $cog_notgiven->update();
                        $user_id = $cog_notgiven->user_id;
                        DB::table('users')
                        ->where('id', $user_id)
                        ->increment('balance', $cog_110percent);

                    }
                    

                }

            //for admin
            $ad = 7.5/100;
            $admin_percent = $ad * $amount ;
            $admin_payment = new Adminwallet;
            $admin_payment->user_id = Auth::user()->id;
            $admin_payment->wheel_id =  $wheel_id;
            $admin_payment->amount = $admin_percent;
            $admin_payment->save();
            
                    
        $user = User::where('email', auth()->user()->email)->first();
        $user->notify(new PurchaseCogNotification($user));

        $wheel_number = $wheel_amount->wheel_number;
            $cogg_num = $wheel_amount->wallet->count();
            $mes = "WW0$wheel_number-0$cogg_num";

            return redirect('availabe_wealth_wheel')->with('cogpurchase', $mes);  

    }
}
