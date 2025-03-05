<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('layouts.User.dashboard.Profile.profile', compact('user'));
    }

    public function cookbook()
    {
        return view('layouts.User.dashboard.cookbook');
    }

    public function education()
    {
        return view('layouts.User.dashboard.education');
    }

    // Admin methods
    public function index(Request $request)
    {
        $searchTerm = $request->input('search');
        $users = User::when($searchTerm, function ($query, $searchTerm) {
            return $query->where('name', 'like', '%'.$searchTerm.'%')
                         ->orWhere('email', 'like', '%'.$searchTerm.'%');
        })->get();

        return view('layouts.Admin.dashboard.user.manage', compact('users', 'searchTerm'));
    }

    public function destroy($id)
    {
        try {
            // Find the user by ID
            $user = User::findOrFail($id);

            // Delete the user
            $user->delete();

            // Redirect back with success message
            return redirect()->route('manageuser')->with('success', 'User deleted successfully.');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->route('manageuser')->with('error', 'Failed to delete user.');
        }
    }
}