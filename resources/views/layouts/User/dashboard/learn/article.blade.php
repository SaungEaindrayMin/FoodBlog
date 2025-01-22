@extends('layouts.User.dashboard.dashboard')

@section('title')
    {{ $article->title }}
@endsection

@section('content')
<div class="ms-0 md:ms-56">
    <div class="p-3 space-y-8">
        <div>
            <a href="{{ route('user.learn.category', $article->category) }}" class="text-blue-600 hover:text-blue-800 mb-2 inline-block">
                ← Back to {{ $article->category->name }}
            </a>
        </div>

        <article class="prose prose-lg max-w-none">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="w-full h-64 md:h-96 object-cover">
                <div class="p-6 md:p-8">
                    <div class="flex items-center gap-x-4 text-sm mb-6">
                        <span class="text-blue-600">{{ $article->category->name }}</span>
                        <span class="text-gray-500">{{ $article->reading_time }} min read</span>
                        <span class="text-gray-500">{{ $article->created_at->format('M d, Y') }}</span>
                    </div>

                    <h1 class="text-3xl md:text-4xl font-bold mb-4">{{ $article->title }}</h1>
                    <p class="text-xl text-gray-600 mb-8">{{ $article->excerpt }}</p>

                    <div class="prose prose-lg max-w-none">
                        {!! $article->content !!}
                    </div>

                    @if($article->tips)
                        <div class="mt-8 bg-blue-50 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold mb-4">Pro Tips</h3>
                            <ul class="list-disc list-inside space-y-2">
                                @foreach($article->tips as $tip)
                                    <li class="text-gray-700">{{ $tip }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </article>

        @if($relatedArticles->isNotEmpty())
            <div class="mt-12">
                <h2 class="text-2xl font-semibold mb-6">Related Articles</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($relatedArticles as $related)
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="{{ $related->image_url }}" alt="{{ $related->title }}" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">{{ $related->title }}</h3>
                                <p class="text-gray-600 mt-2 text-sm line-clamp-2">{{ $related->excerpt }}</p>
                                <div class="mt-4 flex justify-between items-center">
                                    <span class="text-sm text-gray-500">{{ $related->reading_time }} min read</span>
                                    <a href="{{ route('user.learn.article', $related) }}" class="text-blue-600 hover:text-blue-800">
                                        Read Article →
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
