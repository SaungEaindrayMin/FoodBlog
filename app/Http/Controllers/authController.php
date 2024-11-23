<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required','confirmed']
        ]);
    }

    public function login(Request $request){
        $request->validate([
            'email' => ['required','email'],
            'password' => ['required', 'confirmed']
        ]);
    }
}
