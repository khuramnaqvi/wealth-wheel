<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Interfaces\messasges;

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
            'name' => 'required|min:3|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
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
            'name' => 'required|min:3|unique:users,' . $user->id . '',
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
}
