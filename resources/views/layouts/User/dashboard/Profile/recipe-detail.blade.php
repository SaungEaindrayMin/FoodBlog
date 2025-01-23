@extends('layouts.User.dashboard.dashboard')

@section('title')
    Recipe Detail
@endsection

@section('content')
<div class="max-w-4xl mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
    <!-- Recipe Header -->
    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center space-x-4">
            <div class="w-12 h-12 bg-gray-300 rounded-full">
                <img class="w-full h-full rounded-full object-cover" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="User Avatar">
            </div>
            <div>
                <h2 class="text-xl font-bold">{{ $recipe->title }}</h2>
                <p class="text-gray-600">Posted by {{ $recipe->user->firstname ?? 'Anonymous' }}</p>
            </div>
        </div>
        <span class="text-gray-500">{{ $recipe->created_at->format('M d, Y') }}</span>
    </div>

    <!-- Recipe Image -->
    @if($recipe->image)
    <div class="mb-6">
        <img src="{{ asset($recipe->image) }}" alt="{{ $recipe->title }}" class="w-full h-96 object-cover rounded-lg">
    </div>
    @endif

    <!-- Recipe Description -->
    <div class="mb-8">
        <h3 class="text-lg font-semibold mb-2">Description</h3>
        <p class="text-gray-700">{{ $recipe->paragraph }}</p>
    </div>

    <!-- Ingredients Section -->
    <div class="mb-8">
        <h3 class="text-lg font-semibold mb-4">Ingredients</h3>
        <ul class="list-disc list-inside space-y-2">
            @foreach($recipe->ingredients as $ingredient)
                <li class="text-gray-700">{{ $ingredient }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Instructions Section -->
    <div class="mb-8">
        <h3 class="text-lg font-semibold mb-4">Instructions</h3>
        <ol class="list-decimal list-inside space-y-4">
            @foreach($recipe->instructions as $instruction)
                <li class="text-gray-700">{{ $instruction }}</li>
            @endforeach
        </ol>
    </div>

    <!-- Back Button -->
    <div class="mt-8">
        <a href="{{ route('profile.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-lg transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Back to Recipes
        </a>
    </div>
</div>
@endsection
