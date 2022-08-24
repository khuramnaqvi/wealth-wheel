<?php

namespace App\Http\Controllers;

use App\Helpers\helperClass;
use App\Interfaces\messasges;
use App\Models\Deposit;
use App\Models\Withdraw;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function index(){

        $withdraws=Withdraw::all();
        return view('dashboard.withdraw.index',compact('withdraws'));
    }
    public function approve(Withdraw $withdraw){
        $withdraw->update([
            'status'=>'completed'
        ]);

        return  back()->with('success',messasges::StatusUpdate);
    }
}
