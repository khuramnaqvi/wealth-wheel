<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\wallet;
use App\Models\Adminwallet;
use App\Models\WealthWheel;
use App\Models\UserWallet;
// use App\Models\wallet;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use App\Notifications\PurchaseCogNotification;
use App\Notifications\WealthWheelClose;
use App\Notifications\WithdrawRequest;
use Mail;
use App\Rules\Recaptcha;
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
        // dd($wheels);
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

        $wheels = WealthWheel::paginate(12);
        // $cog_num = WealthWheel::where('')->get();
        // dd($wheels);
        
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

        // $user_wallet = wallet::where('wheel_id', $wheel_id)->get();
        // $wallet_balance = 0;
        // for($i = 0;$i<count($user_wallet);$i++)
        // {
        // }

        $wallet_balance = $wheel_details->user_wallet->amount;
        // dd($wallet_balance);

        return view('user.wheels_details', compact('wheel_details', 'user_wheels', 'user_balance', 'wallet_balance'));
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
        return back()->with('success', 'Payment Successful');
    }

    public function my_wheels()
    {
        $wheels = WealthWheel::all();
        $my_whells = WealthWheel::where('user_id', auth()->user()->id)->get();

        $purchased_whells = wallet::where('user_id', auth()->user()->id)->get();
        
        $payout_count = wallet::where('user_id', auth()->user()->id)->get();
        $withdraws = Withdraw::where('user_id', Auth::user()->id)->get();

            // dd($purchased_whells);

        return view('user.my_wheels', compact('wheels', 'my_whells','purchased_whells','withdraws'));
    }



    public function pay_from_wallet(Request $request)
    {
        

        $amount = $request->amount;
        $wheel_id = $request->wheel_id;
        // dd($wheel_id);

        $user_balance = Auth::user()->balance;
        if ($user_balance = null || $user_balance < $amount) {

            return redirect()->back()->with('error', 'Sorry! You Do Not Have Enough Balance.');
        } else {

            $walt = wallet::where('wheel_id', $request->wheel_id)->get();
            // dd($walt->count());

            // 
            $up = 92.5/100;
            $user_percent = $up * $amount ;
            $user_payment = new wallet;
            $user_payment->user_id = Auth::user()->id;
            $user_payment->wheel_id =  $wheel_id;
            $user_payment->amount = $user_percent;
            $user_payment->purchase_number = $walt->count()+1;
            $user_payment->save();

            DB::table('user_wallets')
                ->where('wheel_id', $wheel_id)
                ->increment('amount', $user_percent);

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


            

            $wheel_number = $wheel_amount->wheel_number;
            $cogg_num = $wheel_amount->wallet->count();
            $mes = "WW0$wheel_number-0$cogg_num";

            $cog_no = "WW0$wheel_number";
            $date = $user_payment->created_at->format('d/m/y');
            

            $users = User::where('email', auth()->user()->email)->first();
            
            $arr = [ 'cog_no' => $mes,'date' => $date, 'amount' => $amount, 'payment' => 'Wallet'];

            $users->notify(new PurchaseCogNotification($arr));
            \Notification::route('mail', 'admin@wealth-wheel.com')->notify(new PurchaseCogNotification($arr));

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

        $wheels = WealthWheel::where('wheel_name', 'like', '%' . $request->text . '%')->get();

        // dd($wheels->count());
        // $cogss = $wheels[0]->wallet->count();
        // $cogss = wallet::where('wheel_id', $wheels[0])->count();
        // dd($cogss);

        return view('user.filtered_wheel', compact('wheels'));
        
        // return response()->json($wheels);
        // return view ('user.filter_wheel',compact('wheels'));

    }
    
        public function withdraw()
    {
        $user_wallets = UserWallet::where('user_id', Auth::user()->id)->get();
        $withdraws = Withdraw::where('user_id', Auth::user()->id)->get();
        return view ('user.withdraw',compact('withdraws','user_wallets'));
    }

    public function wihdraw_submit(Request $request)
    {
        // dd($request);
        if($request->pay == 1)
        {
            $request->validate([
                'bank_name' => ['required'],
                'account_title' => ['required'],
                'account_number' => ['required'],
            ]);

            $withdraw = new Withdraw;
            $withdraw->user_id = auth()->user()->id;
            $withdraw->withdraw = $request->withdraw;
            $withdraw->type = $request->withdraw_type;
            $withdraw->bank_name = $request->bank_name;
            $withdraw->account_title = $request->account_title;
            $withdraw->account_number = $request->account_number;
            $withdraw->save();


        }else{
            $request->validate([
                'paypal_email' => ['required'],
            ]);
            $withdraw = new Withdraw;
            $withdraw->user_id = auth()->user()->id;
            $withdraw->withdraw = $request->withdraw;
            $withdraw->type = $request->withdraw_type;
            $withdraw->paypal_email = $request->paypal_email;
            $withdraw->save();
 
            $arr = [ 'withdraw' => $request->withdraw, 'user_name' => auth()->user()->name, 'paypal_email' => $request->paypal_email];

            \Notification::route('mail', 'withdrawals@wealth-wheel.com')->notify(new WithdrawRequest($arr));

        }
        if($request->typee == 'balance')
        {
            $us = DB::table('users')
            ->where('id', auth()->user()->id)
            ->decrement('balance', $request->withdraw);

        }else{
            $us = DB::table('user_wallets')
            ->where('id', $request->wellet_id)
            ->decrement('amount', $request->withdraw);
        }

        return redirect()->back()->with('success', 'Withdrawal Requested Successfully!');

    }


    public function contact_form(Request $request){
       
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => ['required', new Recaptcha()],
        ]);
        dd($request);

  
        ContactUs::create($request->all());
        return redirect()->back()->with(['success' => 'Thank you for contacting us. We will contact you shortly.']);
    }
    public function update_profile(Request $request)
    {
        if($request->password == $request->confirm)
        {
            $user = user::find(auth()->user()->id);
            $user->name = $request->name;
            
            if(isset($request->password))
            {
                $user->password = Hash::make($request->password);
            }

            $user->update();

            return back()->with('success', 'Account Updated Successfully');
        }
        else
        {
            return back()->with('error', 'Password And Confrim Password Does Not Match.');
        }

    }
    public function update_withdraw(Request $req)
    {
        // dd($req->paypal_email);
        DB::table('users')->where('id',auth()->user()->id)->update(['paypal_email' => $req->paypal_email]);
        return back()->with('success', 'Account Updated Successfully');


    }
    public function close_wheel(Request $request)
    {
        $wealth_wheels = DB::table('wealth_wheels')
            ->where('id', $request->id)
            ->update(['available' => 'unavailable']);

        $wheels = WealthWheel::find($request->id);
        for ($i = 0; $i < count($wheels->payout_not_given); $i++) {
            $user_id = $wheels->payout_not_given[$i]->user_id;
            $wallet_id = $wheels->payout_not_given[$i]->id;
            $walletts = DB::table('wallets')->where('id', $wallet_id)->update(['cog_percnt' => 'returned']);
            $useers = DB::table('users')->where('id', $user_id)->increment('balance', $wheels->cog_price);
        }

            $looop = $wheels->wallet->unique('user_id');
            foreach($looop as $whelll) {
                $users_id = $whelll->user_id;
                $usr = User::find($users_id);
                $arr = [ 'wheel_name' => $wheels->wheel_name];

                $usr->notify(new WealthWheelClose($arr));
            }

        return back()->with('success', 'Wheel Close Successfully');
    }
}
