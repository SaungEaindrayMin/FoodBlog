@extends('layouts.Admin.dashboard.dashboard') 

@section('title')
    Category Table
@endsection

@section('content')

<div class="ms-0 md:ms-56 ">
    <div class="p-3 space-y-8">

        <div class="flex flex-col md:flex-row justify-between items-center">
            <h1 class="text-2xl font-semibold mb-6 md:mb-0">Manage Categories</h1>

            <div class="flex gap-x-3 gap-y-2 md:gap-y-0">
                <form action="{{ route('managecategory') }}" method="GET" class="relative border border-slate-400 rounded-lg w-full md:w-auto">
                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                        <svg class="shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    </div>
                    <input type="text" name="search" value="{{ request('search') }}" class="py-2 ps-10 pe-16 block w-full bg-white border-slate-200 rounded-lg text-sm focus:outline-none" placeholder="Search by name">
                </form>

                <a href="{{ route('newcategory') }}" class="flex gap-x-2 bg-[#FFFFF0] p-2 rounded-lg shadow-lg text-sm justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <p class="hidden lg:block">New Category</p>                  
                </a>
            </div>
        </div>

        <div class="overflow-x-auto">
            @if($categories->isEmpty())
                <div class="text-center py-4 text-gray-500">
                    @if(request('search'))
                        No categories found matching "{{ request('search') }}".
                    @else
                        No categories found.
                    @endif
                </div>
            @else
                <table class="min-w-full divide-y divide-gray-200 border">
                    <thead class="bg-[#FFFFF0]">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                        ID
                                    </span>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                        Name
                                    </span>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                        Description
                                    </span>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-end"></th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        @foreach($categories as $category)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                {{ $category->id }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                {{ $category->name }}
                            </td>

                            <td class="px-6 py-4 text-sm text-gray-800">
                                {{ $category->description }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <div class="flex justify-end gap-x-3">
                                    <button onclick="edit_modal{{ $category->id }}.showModal()" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                                        Edit
                                    </button>

                                    <form action="{{ route('category.delete', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 disabled:opacity-50 disabled:pointer-events-none">
                                            Delete
                                        </button>
                                    </form>
                                </div>

                                <dialog id="edit_modal{{ $category->id }}" class="modal">
                                    <div class="modal-box w-11/12 max-w-3xl">
                                        <form method="dialog">
                                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                        </form>
                                        <h3 class="font-bold text-lg mb-4">Edit Category</h3>
                                        <form action="{{ route('category.update', $category->id) }}" method="POST" class="space-y-4">
                                            @csrf
                                            @method('PUT')
                                            <div>
                                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                                <input type="text" name="name" id="name" value="{{ $category->name }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            </div>
                                            <div>
                                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                                <textarea name="description" id="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ $category->description }}</textarea>
                                            </div>
                                            <div class="flex justify-end gap-x-2">
                                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </dialog>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

            <div class="mt-4">
                {{ $categories->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
