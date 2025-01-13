<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Models\User;
use Hash;

class AdminController extends Controller
{
        public function store(Request $request){

        $request->validate([
            'image' =>['required'],
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required','confirmed'],
            'role' => 'required|in:user,admin',
        ]);





        $user = new User();
        $user->image=$request->image;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request -> role;
        $user->save();

}


}