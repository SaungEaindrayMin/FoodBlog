@extends('layouts.Admin.dashboard.dashboard') 

@section('title')
    Recipes Table
@endsection

@section('content')

<div class="ms-0 md:ms-56 ">
    <div class="p-3 space-y-8">

        <div class="flex flex-col md:flex-row justify-between items-center">
            <h1 class="text-2xl font-semibold mb-6 md:mb-0">Manage Recipes</h1>

            <div class="flex gap-x-3 gap-y-2 md:gap-y-0">
                <form action="{{ route('managerecipe') }}" method="GET" class="relative border border-slate-400 rounded-lg w-full md:w-auto">
                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                        <svg class="shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    </div>
                    <input type="text" name="search" value="{{ $searchTerm }}" class="py-2 ps-10 pe-16 block w-full bg-white border-slate-200 rounded-lg text-sm focus:outline-none" placeholder="Search by name or email">
                </form>

            </div>
        </div>

        <div class="overflow-x-auto">
            @if($receipes->isEmpty())
                <div class="text-center py-4 text-gray-500">
                    @if($searchTerm)
                        No recipes found matching "{{ $searchTerm }}".
                    @else
                        No recipes found.
                    @endif
                </div>
            @else
                <table class="min-w-full divide-y divide-gray-200 border">
                    <thead class="bg-[#FFFFF0]">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-black ">ID</span>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-black ">Image</span>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-black ">Title</span>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-black ">Ingredients</span>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-black ">Video</span>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-black ">Action</span>
                                </div>
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        @foreach($receipes as $index => $recipe)
                        <tr class="hover:bg-gray-50 ">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                {{ $recipe->id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-x-3">
                                    <img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full" src="{{ asset($recipe->image) }}" alt="Recipe Image">
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                {{ $recipe->title }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ Str::limit($recipe->ingredient, 50) }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($recipe->video)
                                    <div class="flex items-center">
                                        <a href="{{ asset($recipe->video) }}" 
                                           target="_blank" 
                                           rel="noopener noreferrer"
                                           class="inline-block"
                                           aria-label="View recipe video for {{ $recipe->title }}">
                                            <video 
                                                class="h-[4rem] w-[4rem] rounded-lg object-cover" 
                                                preload="metadata"
                                                aria-hidden="true"
                                                tabindex="-1">
                                                <source src="{{ asset($recipe->video) }}" type="video/mp4">
                                                <track kind="captions" src="" srclang="en" label="English">
                                                Your browser does not support the video tag.
                                            </video>
                                            <span class="sr-only">Video available for {{ $recipe->title }}</span>
                                        </a>
                                    </div>
                                @else
                                    <span class="text-gray-400 italic" aria-label="No video available">No video</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex gap-x-3">
                                    <a href="#" 
                                       class="text-red-600 hover:text-red-800"
                                       aria-label="Delete recipe {{ $recipe->title }}">Delete</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>

@endsection
