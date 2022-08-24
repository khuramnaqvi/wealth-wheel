<?php

namespace App\Http\Controllers;

use App\Interfaces\messasges;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
  public function index(Setting $setting){

      $user=Auth::user();
      $setting=$setting->find(1);

      return view('dashboard.setting.index',compact('user','setting'));
  }

  public function update(Request $request,Setting $setting){
      $user=Auth::user();
      $setting=$setting->find(1);
      $arrayList=array(
          'name'=>$request->name,
          'username'=>$request->username,
      );
      if ($request->password)
          $arrayList['password']=bcrypt($request->password);

      $user->update($arrayList);
      $setting->update([
          'commission'=>$request->commission
      ]);
      return back()->with('success',messasges::Save);
  }
}
