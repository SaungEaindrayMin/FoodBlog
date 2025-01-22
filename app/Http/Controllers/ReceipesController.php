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

        // dd($request->all());

        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'paragraph' => 'required|string',
                'ingredient' => 'required|string',
                'image' => 'nullable',
                'video' => 'nullable',
            ]);

            // If validation passes
            $recipe = new Receipes();
            $recipe->title = $validated['title'];
            $recipe->paragraph = $validated['paragraph'];
            $recipe->ingredient = $validated['ingredient'];
    
            if ($request->hasFile('image')) {
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images/recipes'), $imageName);
                $recipe->image = 'images/recipes/'.$imageName;
            }

            if ($request->hasFile('video')) {
                $videoName = time().'.'.$request->video->extension();
                $request->video->move(public_path('images/videos'), $videoName);
                $recipe->video = 'images/videos/'.$videoName;
                
                // Debug statements
                Log::info('Video Upload Debug', [
                    'hasFile' => $request->hasFile('video'),
                    'videoName' => $videoName,
                    'videoPath' => public_path('images/videos/' . $videoName),
                    'videoExists' => file_exists(public_path('images/videos/' . $videoName))
                ]);
            }
            
            $recipe->save();
            return redirect()->route('profile.index')->with('success', 'Recipe created successfully!');
    
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->validator->errors())->withInput();
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
