@extends('layouts.User.dashboard.dashboard')
@section('title')
    Recipes Details
@endsection

@section('content')
<div class="grid justify-center w-full space-y-8">
    {{-- image section --}}
    <div class="border-b border-gray-200 py-4">
        <figure class="rounded-lg overflow-hidden">
            @if($recipe->image)
                <img src="{{ asset($recipe->image) }}" alt="{{ $recipe->title }}" class="w-full">
            @endif
        </figure>

        <div class="w-5/6 mx-auto mt-8 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>
                <span class="font-semibold text-sm text-gray-600">Published by {{ $recipe->user->firstname ?? 'Anonymous' }}</span>
            </div>

            <div class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125Z" />
                </svg>
                <span class="font-semibold text-sm text-gray-600">{{ $recipe->created_at->format('M d, Y') }}</span>
            </div>
        </div>
    </div>

    {{-- content section --}}
    <div class="grid gap-8">
        <h1 class="text-3xl font-bold tracking-wide">{{ $recipe->title }}</h1>

        {{-- Ingredients Section --}}
        <div class="mb-8">
            <h3 class="text-lg font-semibold mb-4">Ingredients</h3>
            <ul class="list-disc list-inside space-y-2">
                @foreach($recipe->ingredients as $ingredient)
                    <li class="text-gray-700">{{ $ingredient }}</li>
                @endforeach
            </ul>
        </div>

        {{-- Instructions Section --}}
        <div class="mb-8">
            <h3 class="text-lg font-semibold mb-4">Instructions</h3>
            <ol class="list-decimal list-inside space-y-4">
                @foreach($recipe->instructions as $instruction)
                    <li class="text-gray-700">{{ $instruction }}</li>
                @endforeach
            </ol>
        </div>
    </div>

    {{-- download section --}}
    <div class="flex justify-between items-center mb-[7%]">
        <button class="flex items-start">
            <a href="" class="btn btn-md bg-yellow-300 hover:bg-yellow-200 border-0">Download PDF</a>
        </button>
        
        <a href="{{ route('profile.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 rounded-lg transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Back
        </a>
    </div>
</div>
@endsection