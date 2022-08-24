<?php

namespace App\Http\Controllers;

use App\Helpers\helperClass;
use App\Interfaces\messasges;
use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index()
    {
        $currencies = Currency::all();
        return view('dashboard.currency.index', compact('currencies'));
    }

    public function create()
    {
        return view('dashboard.currency.create');
    }

    public function save(Request $request, Currency $currency)
    {

        $file=null;

        if ($request->hasfile('file')) {
            $file=helperClass::saveFile($request);
        }

        $currency->create([
           'name'=>$request->name,
           'address'=>$request->address,
           'image'=>$file,
        ]);

        if ($currency){
            return redirect('admin/currency')->with('success', messasges::Save);

        }
        else{
            return back()->with('error',messasges::error);
        }

    }

    public function edit(Currency $currency)
    {

        return view('dashboard.currency.edit', compact('currency'));

    }

    public function update(Request $request,Currency $currency){
        $file=null;

        if ($request->hasfile('file')) {
            $file=helperClass::saveFile($request);
        }

        $list=array(
                'name'=>$request->name,
                'address'=>$request->address,

        );
        if ($file)
        $list['image']=$file;

        $currency->update($list);

        if ($currency){
            return redirect('admin/currency')->with('success', messasges::Update);

        }
        else{
            return back()->with('error',messasges::error);
        }
    }

    public function delete(Currency $currency)
    {

        if ($currency) {
            $currency->delete();
            return redirect('admin/currency')->with('success', messasges::Delete);
        } else {
            return back()->with('error', messasges::error);
        }


    }
}
