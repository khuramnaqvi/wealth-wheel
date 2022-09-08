<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WealthWheel;
use DB;
use Illuminate\Http\Request;
use App\Interfaces\messasges;
use App\Models\Withdraw;

class DashboardController extends Controller
{
  
    public function users()
    {

        $users = User::where('role', 'user')->get();
        return view('dashboard.user.index', compact('users'));
    }

    public function create()
    {

        return view('dashboard.user.create');
    }



    public function save(Request $request)
    {
     
        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],

        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'balance' => 0,
            'password' => bcrypt($request->password),
        ]);
        if ($user) {
            

            return redirect('dashboard')->with('success', messasges::userSave);
        } else {
            return back()->with('error', messasges::error);
           

        }


    }

    public function edit(User $user)
    {

        return view('dashboard.user.edit', compact('user'));

    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|min:3|unique:users,name,' . $user->id . '',
        ]);
        

    
        $userArray = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        );

        if ($request->password)
            $userArray['password'] = bcrypt($request->password);


        $user = $user->update($userArray);

        if ($user) {
            return redirect('users')->with('success', messasges::userupdate);
        } else {
            return back()->with('error', messasges::error);
        }


    }

    public function delete(User $user)
    {


        if ($user) {
            $user->delete();
            return redirect('users')->with('success', messasges::userDelete);
        } else {
            return back()->with('error', messasges::error);
        }


    }

    public function  delete_wheel(WealthWheel $product)
    {
        if ($product) {
            $product->delete();
            return back()->with('success', messasges::userDelete);
        } else {
            return back()->with('error', messasges::error);
        }


    }


    public function edit_wheel(WealthWheel $wheel)
    {
        
        return view('dashboard.wheel.edit', compact('wheel'));

    }


    public function update_wheel(Request $request, WealthWheel $wheel)
    {
        

        $request->validate([
            'wheel_name' => 'required|min:3|unique:wealth_wheels,wheel_name,' . $wheel->id . '',
        ]);

        $image = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $image =   $request->image->move(public_path('images'), $imageName);
            
        }

        

        $wheelArray = array(
            'wheel_number' => $request->wheel_number,
            'wheel_name' => $request->wheel_name,
            'cog_price' => $request->cog_price,
            'image' => $imageName,

        );

        $wheel = $wheel->update($wheelArray);

        if ($wheel) {
            return redirect('wheels')->with('success', messasges::Update);
        } else {
            return back()->with('error', messasges::error);
        }


    }


    public function  withdraw_request()
    {
        $withdraws = Withdraw::orderBy('status', 'DESC')->get();
        // dd($withdraws[0]->userr);
       
            return view('dashboard.withdraw.index',compact('withdraws'));
    }

    public function aprove_withdraw(Request $request)
    {
        // dd($request->id);
        $affecte = DB::table('withdraws')
            ->where('id', $request->id)
            ->update(['status' => 'Approved']);
            return back()->with('success', 'Status change successfully!');
    }



   
}
