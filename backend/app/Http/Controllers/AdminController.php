<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Plan;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index(){

       $user=User::where('role','!=','admin')->count();
       $orders=Order::count();
       $plans=Plan::count();
       $products=Product::count();
       return view('dashboard.index.dashboard',compact('user','orders','plans','products'));
   }


}
