<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Log;

class CreateAdminController extends Controller
{
    public function index()
    {
        return view('layouts.Admin.dashboard.admin.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'image' =>['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
                'firstname' => ['required'],
                'lastname' => ['required'],
                'email' => ['required', 'email', 'unique:users,email'],
                'password' => ['required','confirmed', 'min:6'],
                'role' => 'required|in:user,admin',
            ]);

            // Handle image upload
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/users'), $imageName);

            $user = new User();
            $user->image = 'images/users/' . $imageName;
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = $request->role;
            $user->save();

            return redirect()->route('manageadmin')->with('success', 'Admin registration successful!');
        } catch (\Exception $e) {
            // Redirect back with error
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }
}