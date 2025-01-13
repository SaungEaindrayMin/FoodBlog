<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Exception;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed'],
            'role' => 'required|in:user,admin'
        ]);

        try {
            // Handle image upload
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/users'), $imageName);

            // Create user with all fields
            $user = User::create([
                'image' => 'images/users/' . $imageName,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role
            ]);

            return redirect()->route('login.form')->with('success', 'Registration successful! Please login.');
        } catch (Exception $e) {
            dd($e);
            return back()->with('fail', 'Registration failed');
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        try {
            if (Auth::attempt($request->only('email', 'password'))) {
                $request->session()->regenerate();
                return redirect('/User/dashboard/profile');
            }

            return back()->with('fail', 'Invalid credentials');

        } catch (Exception $e) {
            return back()->with('fail', 'Login failed');
        }
    }
}