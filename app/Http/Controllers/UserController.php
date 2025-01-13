<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = User::where('role', 'user');

        // Search functionality
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where(function($q) use ($searchTerm) {
                $q->where('firstname', 'like', "%{$searchTerm}%")
                  ->orWhere('lastname', 'like', "%{$searchTerm}%")
                  ->orWhere('email', 'like', "%{$searchTerm}%");
            });
        }

        $users = $query->get();
        return view('layouts.Admin.dashboard.user.manage', [
            'users' => $users,
            'searchTerm' => $request->input('search', '')
        ]);
    }

    public function destroy($id)
    {
        try {
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