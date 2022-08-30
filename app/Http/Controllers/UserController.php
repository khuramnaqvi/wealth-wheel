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
        return view('user.wheels_details');
    }

    public function signup()
    {
        return view('user.signup');
    }
    public function userlogin()
    {
        return view('user.userlogin');
    }

  

    
}
