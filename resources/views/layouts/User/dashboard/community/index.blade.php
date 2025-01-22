@extends('layouts.User.dashboard.dashboard')

@section('title')
    Community Cookbook
@endsection

@section('content')
<div class="ms-0 md:ms-56">
    <div class="p-3 space-y-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <h1 class="text-2xl font-semibold mb-6 md:mb-0">Community Cookbook</h1>
            <div class="flex gap-x-3">
                <form action="{{ route('user.community') }}" method="GET" class="relative">
                    <input type="text" name="search" value="{{ request('search') }}" 
                        class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Search users...">
                    <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </form>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($users as $user)
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="flex items-start justify-between">
                        <div class="flex items-center space-x-4">
                            <div class="h-12 w-12 rounded-full bg-gray-200 flex items-center justify-center">
                                <span class="text-xl font-semibold text-gray-600">{{ substr($user->name, 0, 1) }}</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold">{{ $user->name }}</h3>
                                <p class="text-gray-500 text-sm">{{ $user->recipes_count }} recipes</p>
                            </div>
                        </div>
                        @if(Auth::id() !== $user->id)
                            <form action="{{ route('user.community.follow', $user) }}" method="POST">
                                @csrf
                                <button type="submit" class="text-blue-600 hover:text-blue-800 text-sm font-semibold">
                                    {{ Auth::user()->following()->where('following_id', $user->id)->exists() ? 'Unfollow' : 'Follow' }}
                                </button>
                            </form>
                        @endif
                    </div>

                    @if($user->recipes->isNotEmpty())
                        <div class="mt-4">
                            <h4 class="text-sm font-semibold text-gray-600 mb-2">Popular Recipes</h4>
                            <div class="space-y-2">
                                @foreach($user->recipes->take(3) as $recipe)
                                    <a href="{{ route('recipes.show', $recipe) }}" class="block text-sm text-gray-800 hover:text-blue-600">
                                        {{ $recipe->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="mt-4 flex justify-between items-center">
                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-500">{{ $user->followers_count }} followers</span>
                        </div>
                        <a href="{{ route('user.community.recipes', $user) }}" class="text-blue-600 hover:text-blue-800 text-sm">
                            View All Recipes
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-6">
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection
