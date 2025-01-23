<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'details' => 'required|string'
        ]);

        // Combine first_name and last_name into name
        $mailData = [
            'name' => $validated['first_name'] . ' ' . $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'details' => $validated['details']
        ];

        Mail::create($mailData);

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
