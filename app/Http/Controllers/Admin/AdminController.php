<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Plan;
use App\Models\Product;
use App\Models\User;
use DB;
use App\Models\WealthWheel;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $user=User::where('role','!=','admin')->count();
        $wheel=WealthWheel::all()->count();
        $total = DB::table('adminwallets')->sum('amount');
        $pending = DB::table('withdraws')->where('status', 'pending')->count();


        // dd($total);
        // $orders=Order::count();
        // $plans=Plan::count();
        // $products=Product::count();
        // return view('dashboard.index.dashboard',compact('user','orders','plans','products'));
        return view('dashboard.index.dashboard',compact('user', 'wheel', 'total', 'pending'));

    }
}
