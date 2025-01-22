@extends('layouts.User.dashboard.dashboard')

@section('title')
    Learn Cooking
@endsection

@section('content')
<div class="ms-0 md:ms-56">
    <div class="p-3 space-y-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <h1 class="text-2xl font-semibold mb-6 md:mb-0">Learn Cooking</h1>
            <a href="{{ route('user.learn.categories') }}" class="flex gap-x-2 bg-[#FFFFF0] p-2 rounded-lg shadow-lg text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                </svg>
                Browse Categories
            </a>
        </div>

        <!-- Featured Articles -->
        <div>
            <h2 class="text-xl font-semibold mb-4">Featured Articles</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($featuredArticles as $article)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <span class="text-sm text-blue-600">{{ $article->category->name }}</span>
                            <h3 class="text-lg font-semibold mt-1">{{ $article->title }}</h3>
                            <p class="text-gray-600 mt-2 text-sm line-clamp-2">{{ $article->excerpt }}</p>
                            <a href="{{ route('user.learn.article', $article) }}" class="text-blue-600 hover:text-blue-800 text-sm mt-3 inline-block">
                                Read More →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Categories Overview -->
        <div>
            <h2 class="text-xl font-semibold mb-4">Browse by Category</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($categories as $category)
                    <a href="{{ route('user.learn.category', $category) }}" 
                        class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-200">
                        <h3 class="font-semibold">{{ $category->name }}</h3>
                        <p class="text-sm text-gray-500 mt-1">{{ $category->articles_count }} articles</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
