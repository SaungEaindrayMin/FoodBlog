@extends('layouts.User.dashboard.dashboard')

@section('title')
    {{ $category->name }} - Learning
@endsection

@section('content')
<div class="ms-0 md:ms-56">
    <div class="p-3 space-y-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div>
                <a href="{{ route('user.learn.categories') }}" class="text-blue-600 hover:text-blue-800 mb-2 inline-block">
                    ← Back to Categories
                </a>
                <h1 class="text-2xl font-semibold">{{ $category->name }}</h1>
                <p class="text-gray-600 mt-1">{{ $category->description }}</p>
            </div>
        </div>

        @if($articles->isEmpty())
            <div class="text-center py-8">
                <p class="text-gray-500">No articles available in this category yet.</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($articles as $article)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold">{{ $article->title }}</h3>
                            <p class="text-gray-600 mt-2 line-clamp-2">{{ $article->excerpt }}</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-sm text-gray-500">{{ $article->reading_time }} min read</span>
                                <a href="{{ route('user.learn.article', $article) }}" class="text-blue-600 hover:text-blue-800">
                                    Read Article →
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-6">
                {{ $articles->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
