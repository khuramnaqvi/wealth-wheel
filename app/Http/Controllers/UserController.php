<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WealthWheel;
use Illuminate\Http\Request;
use DB;
use Stripe;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function user()
    {
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
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
                $stripee = Stripe\Charge::create ([
                        "amount" => $amount * 100,
                        "currency" => "usd",
                        "source" => $request->stripeToken,
                        "description" => "Your payment is success." 
                ]);

<<<<<<< HEAD
=======
        $affected = DB::table('users')
        ->where('id', auth()->user()->id)
        ->update(['balance' => auth()->user()->balance + $amount]);
        return back()->with('success', 'Payment Successfull');
    }

    public function my_wheels()
    {
        $wheels = WealthWheel::all();
        $my_whells = DB::table('wealth_wheels')
        ->where('user_id', auth()->user()->id)->get();
        return view('user.my_wheels', compact('wheels', 'my_whells'));

    }
  
>>>>>>> cd0aa79c623b8345542c8855d542a2d7f1e769dc


    public function pay_from_wallet(Request $request)
    {
        $amount_to_pay = $request->amount;
        // dd($request->all());
        $user_balance = Auth::user()->balance;
        if ($user_balance = null || $user_balance < $amount_to_pay) {

            return redirect()->back()->with('error', 'Sorry! You Do not have Enough Balance');
        } else {

            $total_amount = Auth::user()->balance - $amount_to_pay;
            $userDetails = Auth::user();  // To get the logged-in user details
            $user = User::find($userDetails->id);  // Find the user using model and hold its reference
            $user->balance = $total_amount;
            $user->save();
            return redirect()->back()->with('success', 'Wheel Purchased Successfully!');

        }
    }
}
