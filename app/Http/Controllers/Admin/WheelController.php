<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WealthWheel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WheelController extends Controller
{
    public function wealth_wheel()
    {
        return view('user.create_wealth_wheel');
    }

    
    public function wheels()
    {

       
        $wheels = WealthWheel::all();
        return view('dashboard.wheel.index', compact('wheels'));
    }

    public function create_wealth_wheel(Request $request)
    {
        $user_id = Auth::user()->id; 
      
    
       $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'wheel_name' => 'required',
            'wheel_number' => 'required',
            'cog_price' => 'required',
         ]);
       
        $image = null;
        if ($request->hasFile('image')) {
            
        $imageName = time().'.'.$request->image->extension(); 
        $image =   $request->image->move(public_path('images'), $imageName);
        }
        WealthWheel::create([
            'wheel_number' => $request->wheel_number,
            'wheel_name' => $request->wheel_name,
            'cog_price' => $request->cog_price,
            'image' =>  $imageName,
            'user_id' =>  $user_id,

        ]);
     

        return redirect()->route('wealth_wheel');

  
     
    }
}
