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
    public function signup()
    {
        return view('user.signup');
    }
    public function userlogin()
    {
        return view('user.userlogin');
    }

  

    
}
