<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receipes;

class AdminReceipesController extends Controller
{
    public function index(Request $request)
    {
        $receipes = Receipes::all();
        $search = $request->input('search');
        $receipes = Receipes::
        when($search, function($query) use ($search){
            return $query->where('title', 'ilike', '%' . $search . '%');
        })
        ->paginate(10)
        ->appends(['search' => $search]);
        return view('layouts.Admin.dashboard.receipes', compact('receipes'));
    }

}
