<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Models\User;
use Hash;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $query = User::where('role', 'admin');

        // Search functionality
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where(function($q) use ($searchTerm) {
                $q->where('firstname', 'like', "%{$searchTerm}%")
                  ->orWhere('lastname', 'like', "%{$searchTerm}%")
                  ->orWhere('email', 'like', "%{$searchTerm}%");
            });
        }

        $admins = $query->get();
        return view('layouts.Admin.dashboard.admin.manage', [
            'admins' => $admins,
            'searchTerm' => $request->input('search', '')
        ]);
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

    public function create()
    {
        return view('layouts.Admin.dashboard.admin.create');
    }

    public function destroy($id)
    {
        try {
            $admin = User::findOrFail($id);
            
            // Delete the admin
            $admin->delete();

            // Redirect back with success message
            return redirect()->route('manageadmin')->with('success', 'Admin deleted successfully.');
        } catch (\Exception $e) {

            // Redirect back with error message
            return redirect()->route('manageadmin')->with('error', 'Failed to delete admin.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $admin = User::findOrFail($id);

            $request->validate([
                'firstname' => ['required'],
                'lastname' => ['required'],
                'email' => ['required', 'email', 'unique:users,email,' . $id],
                'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            ]);

            // Update basic information
            $admin->firstname = $request->firstname;
            $admin->lastname = $request->lastname;
            $admin->email = $request->email;

            // Handle image upload if a new image is provided
            if ($request->hasFile('image')) {
                // Delete old image if it exists
                if ($admin->image && file_exists(public_path($admin->image))) {
                    unlink(public_path($admin->image));
                }

                // Upload new image
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/users'), $imageName);
                $admin->image = 'images/users/' . $imageName;
            }

            $admin->save();

            return redirect()->route('manageadmin')->with('success', 'Admin updated successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }
}