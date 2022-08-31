<?php

namespace App\Http\Controllers;

use App\Models\WealthWheel;
use Illuminate\Http\Request;

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
        $wheel_id = $_GET['id'];
        $wheel_details = WealthWheel::where('id' , $wheel_id )->first();
        return view('user.wheels_details', compact('wheel_details'));
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
       
    }

  

    
}
