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

        dd($request->all(), session('_token'));


        $user = User::where('email', '=', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {

            if (Auth::attempt($request->only('email', 'password'))) {
                $request->session()->regenerate();
                return redirect('User/dashboard/profile');
            }else{
                dd("fuck u too");
            }
        }else{
            dd("fuck u");
        }

        dd("fuc u 3");

        return back()->with('fail', 'Invalid credentials'); 
    }

//     public function login(Request $request)
// {
//     $request->validate([
//         'email' => ['required', 'email'],
//         'password' => ['required']
//     ]);

//     // Attempt to log the user in using Laravel's Auth system
//     if (Auth::attempt($request->only('email', 'password'))) {
//         // Regenerate the session for security
//         $request->session()->regenerate();
        
//         // Redirect to the profile/dashboard
//         return redirect('User/dashboard/profile');
//     }

//     // If authentication fails
//     return back()->with('fail', 'Invalid credentials'); 
// }
}
