<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\wallet;
use App\Models\Adminwallet;
use App\Models\WealthWheel;
// use App\Models\wallet;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use App\Notifications\PurchaseCogNotification;
use Mail;
use App\Models\ContactUs;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Carbon\Carbon; 


use Hash;
use Illuminate\Support\Str;

use DB;
use Stripe;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function user()
    {
        // $details = [
        //     'title' => 'Mail from ItSolutionStuff.com',
        //     'body' => 'This is for testing email using smtp'
        // ];
       
        // \Mail::to('ansmalik446@gmail.com')->send(new \App\Mail\registerMail($details));

        $wheels = WealthWheel::all();
        return view('user.home', compact('wheels'));

    }

    public function products()
    {
        $products = WealthWheel::all();
        return view('user.products', compact('products'));
    }

    public function about()
    {
        return view('user.about');
    }

    public function faq()
    {
        return view('user.faq');
    }

    public function contact()
    {
        return view('user.contact');
    }
    public function how_it_works()
    {
        return view('user.how_it_works');
    }
    public function availabe_wealth_wheel()
    {

        $wheels = WealthWheel::all();
        // $cog_num = WealthWheel::where('')->get();
        // dd($wheels[1]->wallet);
        
        return view('user.availabe_wealth_wheel', compact('wheels'));
    }



    public function wheels_details()
    {
        // $wheel_id = decrypt($id);
        $auth_user = Auth::user()->id;
        $user_balance = Auth::user()->balance;
        $user_wheels = WealthWheel::where('user_id', $auth_user)->get();
        $wheel_id = $_GET['id'];
        $wheel_details = WealthWheel::where('id', $wheel_id)->first();

        

        return view('user.wheels_details', compact('wheel_details', 'user_wheels', 'user_balance'));
    }

    public function signup()
    {
        return view('user.signup');
    }
    public function userlogin()
    {
        return view('user.userlogin');
    }

    public function privacy_policy()
    {
        return view('privacy_policy');
    }

    public function term_and_conditions()
    {
        return view('term_and_conditions');
    }

    public function paypal_form()
    {
        return view('paypal');
    }

    public function add_user_balance(Request $request)
    {
        dd($request->all());
        if ($request->payment == "paypal") {
        } else {
        }
    }
    // 
    public function deposit_balance(Request $request)
    {
        // dd('dd');
        $amount = $request->amount;
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET','sk_test_51Kh9uAFBFsCMdULhVtPQxp0NOArxMFzdQ6qroS5jZFettctGfyVPc5WPmT6b1hGimRW09adqa3lndHnywhsbBqYW00K8eyxFsu'));
        $stripee = Stripe\Charge::create([
            "amount" => $amount * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Your payment is success."
        ]);


        $affected = DB::table('users')
            ->where('id', auth()->user()->id)
            ->update(['balance' => auth()->user()->balance + $amount]);
        return back()->with('success', 'Payment Successfull');
    }
    // 
    // public function deposit_balance(Request $request)
    // {
    //     // dd('dd');
    //     $amount = $request->amount;
    //     Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    //             $stripee = Stripe\Charge::create ([
    //                     "amount" => $amount * 100,
    //                     "currency" => "usd",
    //                     "source" => $request->stripeToken,
    //                     "description" => "Your payment is success." 
    //             ]);


    //     $affected = DB::table('users')
    //     ->where('id', auth()->user()->id)
    //     ->update(['balance' => auth()->user()->balance + $amount]);
    //     return back()->with('success', 'Payment Successfull');
    // }

    public function my_wheels()
    {
        $wheels = WealthWheel::all();
        $my_whells = WealthWheel::where('user_id', auth()->user()->id)->get();

        $purchased_whells = wallet::where('user_id', auth()->user()->id)->get()->unique('wheel_id');

            // dd($purchased_whells);

        return view('user.my_wheels', compact('wheels', 'my_whells','purchased_whells'));
    }



    public function pay_from_wallet(Request $request)
    {
        $amount = $request->amount;
        $wheel_id = $request->wheel_id;
        // dd($wheel_id);

        $user_balance = Auth::user()->balance;
        if ($user_balance = null || $user_balance < $amount) {

            return redirect()->back()->with('error', 'Sorry! You Do not have Enough Balance');
        } else {

            // 
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

            // 

            $total_amount = Auth::user()->balance - $amount;
            $userDetails = Auth::user();  // To get the logged-in user details
            $user = User::find($userDetails->id);  // Find the user using model and hold its reference
            $user->balance = $total_amount;
            $user->save();

            $users = User::where('email', auth()->user()->email)->first();
            $users->notify(new PurchaseCogNotification($users));

            $wheel_number = $wheel_amount->wheel_number;
            $cogg_num = $wheel_amount->wallet->count();
            $mes = "WW0$wheel_number-0$cogg_num";

            return redirect()->back()->with('cogpurchase', $mes);
        }
    }


 


    public function wheels_filter(Request $request)
    {
       
        $wheel = WealthWheel::where('wheel_number', $request->wheel_number)->get();
        return view ('user.filter_wheel',compact('wheel'));
        
    }

    public function wheels_filter_form(Request $request)
    {

        $wheels = WealthWheel::where('wheel_number', $request->text)->get();
        dd($wheels); 
        // return response()->json($wheels);
        // return view ('user.filter_wheel',compact('wheels'));

    }
    
        public function withdraw()
    {
        $wallets = wallet::where('user_id', Auth::user()->id)->get();
        $withdraws = Withdraw::where('user_id', Auth::user()->id)->get();
        return view ('user.withdraw',compact('withdraws','wallets'));
    }

    public function wihdraw_submit(Request $request)
    {
        
        $wallet = wallet::find($request->wallet_id);
        if($request->wallet_id > 0 ){
            if($wallet->amount >= $request->withdraw){
                $wallet->amount = $wallet->amount - $request->withdraw;
                $wallet->update();

                $withdraw = new Withdraw;
                $withdraw->user_id = auth()->user()->id;
                $withdraw->withdraw = $request->withdraw;
                $withdraw->save();

                return redirect()->back()->with('success', 'Amount Withdraw Successfully!');

            }
            else{
                return redirect()->back()->with('error', 'Sorry you do not have Enough Balance in Wallet');
            }
        }
        else{

            $id = Auth::user()->id;
            $user = User::find($id);
    
            if($request->withdraw <= $user->balance ){
                $user->balance = $user->balance - $request->withdraw;
                $user->update();
    
            $withdraw = new Withdraw;
            $withdraw->user_id = auth()->user()->id;
            $withdraw->withdraw = $request->withdraw;
            $withdraw->save();
    
            return redirect()->back()->with('success', 'Amount Withdraw Successfully!');
            }
            else{
            return redirect()->back()->with('error', 'Sorry you do not have Enough Balance');
            }

        }
     
     



    }


    public function contact_form(Request $request){
       
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
  
        ContactUs::create($request->all());
        return redirect()->back()->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
