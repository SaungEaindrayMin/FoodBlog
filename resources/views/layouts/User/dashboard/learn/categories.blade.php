@extends('layouts.User.dashboard.dashboard')

@section('title')
    Learning Categories
@endsection

@section('content')
<div class="ms-0 md:ms-56">
    <div class="p-3 space-y-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div>
                <a href="{{ route('user.learn') }}" class="text-blue-600 hover:text-blue-800 mb-2 inline-block">
                    ← Back to Learning
                </a>
                <h1 class="text-2xl font-semibold">Browse Categories</h1>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($categories as $category)
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-semibold">{{ $category->name }}</h2>
                    <p class="text-gray-600 mt-2">{{ $category->description }}</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-sm text-gray-500">{{ $category->articles_count }} articles</span>
                        <a href="{{ route('user.learn.category', $category) }}" class="text-blue-600 hover:text-blue-800">
                            Browse Articles →
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-6">
            {{ $categories->links() }}
        </div>
    </div>
</div>
@endsection
