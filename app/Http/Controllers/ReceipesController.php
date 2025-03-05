<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Receipes;
use Illuminate\Support\Facades\Log;

class ReceipesController extends Controller
{
    // Display the list of recipes
    public function index()
    {
        $receipes = Receipes::all();
        $categories = Category::all();
        return view('layouts.User.dashboard.Profile.profile', compact('categories', 'receipes'));
    }



    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'paragraph' => 'required|string',
                'ingredients' => 'required|array',
                'ingredients.*' => 'required|string',
                'instructions' => 'required|array',
                'instructions.*' => 'required|string',
                'category_id' => 'required|exists:categories,id',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'video' => 'nullable|mimes:mp4,mov,avi|max:20480',
            ]);

            // If validation passes
            $recipe = new Receipes();
            $recipe->title = $validated['title'];
            $recipe->paragraph = $validated['paragraph'];
            $recipe->category_id = $validated['category_id'];
            $recipe->ingredients = $validated['ingredients']; 
            $recipe->instructions = $validated['instructions']; 
            $recipe->user_id = auth()->id(); // Add the authenticated user's ID
    
            if ($request->hasFile('image')) {
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images/recipes'), $imageName);
                $recipe->image = 'images/recipes/'.$imageName;
            }

            if ($request->hasFile('video')) {
                $videoName = time().'.'.$request->video->extension();
                $request->video->move(public_path('images/videos'), $videoName);
                $recipe->video = 'images/videos/'.$videoName;
            }
            
            $recipe->save();
            return redirect()->route('profile.index')->with('success', 'Recipe created successfully!');
    
        } catch (\Exception $e) {
            dd ($e);
            \Log::error('Recipe creation error: ' . $e->getMessage());
            return redirect()->back()
                ->withErrors(['error' => 'Failed to create recipe. Please try again.'])
                ->withInput();
        }
    }
    

    // Delete a specific recipe
    public function destroy($id)
    {
        $receipe = Receipes::findOrFail($id);

        // Delete the associated files
        // if ($receipe->image && \Storage::exists('public/' . $receipe->image)) {
        //     \Storage::delete('public/' . $receipe->image);
        // }
        // if ($receipe->video && \Storage::exists('public/' . $receipe->video)) {
        //     \Storage::delete('public/' . $receipe->video);
        // }

        $receipe->delete();

        return redirect()->route('profile.index')->with('success', 'Recipe deleted successfully.');
    }

    public function show($id)
    {
        $recipe = Receipes::findOrFail($id);
        return view('layouts.User.dashboard.Profile.recipe-detail', compact('recipe'));
    }

    public function manage(Request $request)
    {
        $query = Receipes::query();

        // Search functionality
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where(function($q) use ($searchTerm) {
                $q->where('title', 'like', "%{$searchTerm}%")
                  ->orWhere('ingredient', 'like', "%{$searchTerm}%");
            });
        }

        $receipes = $query->get();
        return view('layouts.Admin.dashboard.receipes.manage', [
            'receipes' => $receipes,
            'searchTerm' => $request->input('search', '')
        ]);
    }
}
