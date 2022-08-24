<?php

namespace App\Http\Controllers;

use App\Helpers\helperClass;
use App\Interfaces\messasges;
use App\Models\Currency;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        return view('dashboard.plan.index', compact('plans'));
    }

    public function create()
    {
        return view('dashboard.plan.create');
    }

    public function save(Request $request, Plan $plan)
    {


        $file=null;

        if ($request->hasfile('file')) {
            $file=helperClass::saveFile($request);
        }

        $plan->create([
            'vip'=>$request->vip,
            'commission'=>$request->commission,
            'limit'=>$request->limit,
            'amount'=>$request->amount,
            'image'=>$file,
        ]);

        if ($plan){
            return redirect('admin/plans')->with('success', messasges::Save);

        }
        else{
            return back()->with('error',messasges::error);
        }

    }

    public function edit(Plan $plan)
    {

        return view('dashboard.plan.edit', compact('plan'));

    }

    public function update(Request $request,Plan $plan){
        $file=null;

        if ($request->hasfile('file')) {
            $file=helperClass::saveFile($request);
        }

        $list=array(
            'vip'=>$request->vip,
            'commission'=>$request->commission,
            'limit'=>$request->limit,
            'amount'=>$request->amount,

        );
        if ($file)
            $list['image']=$file;

        $plan->update($list);

        if ($plan){
            return redirect('admin/plans')->with('success', messasges::Update);

        }
        else{
            return back()->with('error',messasges::error);
        }
    }

    public function delete(Plan $plan)
    {

        if ($plan) {
            $plan->delete();
            return redirect('admin/plans')->with('success', messasges::Delete);
        } else {
            return back()->with('error', messasges::error);
        }


    }
}
