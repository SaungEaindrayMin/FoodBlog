<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use Hash;
use Session;

class authController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required','confirmed']
        ]);
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $user = User::where('email', '=', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->put('loginId', $user->id);
            return redirect('dashboard');
        }

        return back()->with('fail', 'Invalid credentials'); 
    }

    public function dashboard()
    {
        return view('layouts.User.dashboard.dashboard');
    }
}
