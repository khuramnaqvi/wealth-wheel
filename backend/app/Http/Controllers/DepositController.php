<?php

namespace App\Http\Controllers;

use App\Helpers\helperClass;
use App\Interfaces\messasges;
use App\Models\Deposit;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function index(){

        $deposits=Deposit::OrderBy('id','desc')->get();
        return view('dashboard.deposit.index',compact('deposits'));
    }

    public function approve(Deposit $deposit){
     $deposit->update([
        'status'=>'completed'
     ]);
     $user=helperClass::getUser($deposit->user_id);
     $user->balance=$user->balance+floatval($deposit->amount);
     $user->update();
     return  back()->with('success',messasges::StatusUpdate);
    }
}
