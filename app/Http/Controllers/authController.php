<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\LoginAttempt;
use Carbon\Carbon;
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
            // Check if the user is locked out
            $loginAttempt = LoginAttempt::where('email', $request->email)->first();
            
            if ($loginAttempt && $loginAttempt->locked_until && $loginAttempt->locked_until > now()) {
                $timeLeft = now()->diffInSeconds($loginAttempt->locked_until);
                $minutes = floor($timeLeft / 60);
                $seconds = $timeLeft % 60;
                
                return back()->withErrors([
                    'email' => "Too many failed attempts. Please wait {$minutes} minutes and {$seconds} seconds before trying again."
                ]);
            }

            if (Auth::attempt($request->only('email', 'password'))) {
                // Reset login attempts on successful login
                if ($loginAttempt) {
                    $loginAttempt->attempts = 0;
                    $loginAttempt->locked_until = null;
                    $loginAttempt->save();
                }

                $request->session()->regenerate();

                // Get authenticated user's role
                $user = Auth::user();
                
                // Redirect based on role
                if ($user->role === 'admin') {
                    return redirect('/admin/dashboard/home');
                } else {
                    return redirect('/user/dashboard/profile');
                }
            }

            // Handle failed login attempt
            if (!$loginAttempt) {
                $loginAttempt = LoginAttempt::create([
                    'email' => $request->email,
                    'attempts' => 1
                ]);
            } else {
                $loginAttempt->attempts++;
                
                // Lock the account after 3 failed attempts
                if ($loginAttempt->attempts >= 3) {
                    $loginAttempt->locked_until = now()->addMinutes(3);
                }
                
                $loginAttempt->save();
            }

            $attemptsLeft = 3 - $loginAttempt->attempts;
            $message = $attemptsLeft > 0 
                ? "Invalid credentials. {$attemptsLeft} attempts remaining." 
                : "Too many failed attempts. Please wait 3 minutes before trying again.";

            return back()->withErrors([
                'email' => $message
            ]);

        } catch (Exception $e) {
            return back()->with('fail', 'Login failed');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out successfully.');
    }
}