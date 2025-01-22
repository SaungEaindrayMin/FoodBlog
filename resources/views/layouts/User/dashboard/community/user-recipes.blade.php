@extends('layouts.User.dashboard.dashboard')

@section('title')
    {{ $user->name }}'s Recipes
@endsection

@section('content')
<div class="ms-0 md:ms-56">
    <div class="p-3 space-y-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div>
                <a href="{{ route('user.community') }}" class="text-blue-600 hover:text-blue-800 mb-2 inline-block">
                    ← Back to Community
                </a>
                <h1 class="text-2xl font-semibold">{{ $user->name }}'s Recipes</h1>
            </div>
            @if(Auth::id() !== $user->id)
                <form action="{{ route('user.community.follow', $user) }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-[#FFFFF0] px-4 py-2 rounded-lg shadow-lg text-sm font-semibold">
                        {{ Auth::user()->following()->where('following_id', $user->id)->exists() ? 'Unfollow' : 'Follow' }}
                    </button>
                </form>
            @endif
        </div>

        @if($recipes->isEmpty())
            <div class="text-center py-8">
                <p class="text-gray-500">{{ $user->name }} hasn't shared any recipes yet.</p>
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
                                    <button type="submit" class="{{ Auth::user()->favorites()->where('recipe_id', $recipe->id)->exists() ? 'text-red-500' : 'text-gray-400' }} hover:text-red-700">
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
