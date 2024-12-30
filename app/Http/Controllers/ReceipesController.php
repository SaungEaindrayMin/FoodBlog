<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receipes;

class ReceipesController extends Controller
{
    // Display the list of recipes
    public function index()
    {
        $receipes = Receipes::all();
        return view('layouts.User.dashboard.Profile.profile', compact('receipes'));
    }



    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'paragraph' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'video' => 'nullable|mimes:mp4,avi,mov|max:10240',
        ]);
    
        $recipe = new Receipes();
        $recipe->title = $validated['title'];
        $recipe->paragraph = $validated['paragraph'];
    
        if ($request->hasFile('image')) {
            $recipe->image = $request->file('image')->store('images', 'public');
        }
    
        if ($request->hasFile('video')) {
            $recipe->video = $request->file('video')->store('videos', 'public');
        }
    
        $recipe->save();
    
        return redirect()->route('profile.index')->with('success', 'Recipe created successfully!');
    }
    

    // Delete a specific recipe
    public function destroy($id)
    {
        $receipe = Receipes::findOrFail($id);

        // Delete the associated files
        if ($receipe->image && \Storage::exists('public/' . $receipe->image)) {
            \Storage::delete('public/' . $receipe->image);
        }
        if ($receipe->video && \Storage::exists('public/' . $receipe->video)) {
            \Storage::delete('public/' . $receipe->video);
        }

        $receipe->delete();

        return redirect()->route('profile.index')->with('success', 'Recipe deleted successfully.');
    }
}
