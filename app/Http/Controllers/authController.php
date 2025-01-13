<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use  App\Models\User;
use Hash;
use Session;

class authController extends Controller
{
    public function register(Request $request){

        try {
            $request->validate([
                'image' => ['required'],
                'firstname' => ['required'],
                'lastname' => ['required'],
                'email' => ['required', 'email'],
                'password' => ['required', 'confirmed'],
                'role' => 'required|in:user,admin',
            ]);
        } catch (Exception $e) {
            dd($e->getMessage(), $e->errors());
        }
        
        


        $user = new User();
        $user->image=$request->image;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request -> role;
        $user->save();


    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $user = User::where('email', '=', $request->email)->first();

        try {
            $user && Hash::check($request->password, $user->password);


            if (Auth::attempt($request->only('email', 'password'))) {
                $request->session()->regenerate();
                return redirect('/User/dashboard/profile');
            }else{
                dd("hello");
            }


        }

        catch(error $e){
            dd($e);
        }

        return back()->with('fail', 'Invalid credentials'); 
    }


}
