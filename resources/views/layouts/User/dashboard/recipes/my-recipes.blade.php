@extends('layouts.User.dashboard.dashboard')

@section('title')
    My Recipes
@endsection

@section('content')
<div class="ms-0 md:ms-56">
    <div class="p-3 space-y-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <h1 class="text-2xl font-semibold mb-6 md:mb-0">My Recipes</h1>
            <a href="{{ route('recipes.create') }}" class="flex gap-x-2 bg-[#FFFFF0] p-2 rounded-lg shadow-lg text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                New Recipe
            </a>
        </div>

        @if($recipes->isEmpty())
            <div class="text-center py-8">
                <p class="text-gray-500">You haven't created any recipes yet.</p>
                <a href="{{ route('recipes.create') }}" class="text-blue-600 hover:underline mt-2 inline-block">Create your first recipe</a>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($recipes as $recipe)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ $recipe->image_url }}" alt="{{ $recipe->name }}" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold">{{ $recipe->name }}</h3>
                            <p class="text-gray-600 mt-2 line-clamp-2">{{ $recipe->description }}</p>
                            <div class="mt-4 flex justify-between items-center">
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm text-gray-500">{{ $recipe->cooking_time }} mins</span>
                                    <span class="text-gray-300">•</span>
                                    <span class="text-sm text-gray-500">{{ $recipe->difficulty }}</span>
                                </div>
                                <a href="{{ route('recipes.edit', $recipe) }}" class="text-blue-600 hover:text-blue-800">Edit</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-6">
                {{ $recipes->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
