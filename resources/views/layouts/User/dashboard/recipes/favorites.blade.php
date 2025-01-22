@extends('layouts.User.dashboard.dashboard')

@section('title')
    Favorite Recipes
@endsection

@section('content')
<div class="ms-0 md:ms-56">
    <div class="p-3 space-y-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <h1 class="text-2xl font-semibold mb-6 md:mb-0">Favorite Recipes</h1>
            <a href="{{ route('user.community') }}" class="flex gap-x-2 bg-[#FFFFF0] p-2 rounded-lg shadow-lg text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
                Discover Recipes
            </a>
        </div>

        @if($recipes->isEmpty())
            <div class="text-center py-8">
                <p class="text-gray-500">You haven't favorited any recipes yet.</p>
                <a href="{{ route('user.community') }}" class="text-blue-600 hover:underline mt-2 inline-block">Discover community recipes</a>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($recipes as $recipe)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ $recipe->image_url }}" alt="{{ $recipe->name }}" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <div class="flex justify-between items-start">
                                <h3 class="text-lg font-semibold">{{ $recipe->name }}</h3>
                                <form action="{{ route('user.recipe.favorite', $recipe) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="text-red-500 hover:text-red-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                            <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            <p class="text-gray-600 mt-2 line-clamp-2">{{ $recipe->description }}</p>
                            <div class="mt-4 flex justify-between items-center">
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm text-gray-500">{{ $recipe->cooking_time }} mins</span>
                                    <span class="text-gray-300">•</span>
                                    <span class="text-sm text-gray-500">{{ $recipe->difficulty }}</span>
                                </div>
                                <a href="{{ route('recipes.show', $recipe) }}" class="text-blue-600 hover:text-blue-800">View Recipe</a>
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
