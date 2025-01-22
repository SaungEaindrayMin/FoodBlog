@extends('layouts.Admin.dashboard.dashboard') 

@section('title')
    Admin Table
@endsection

@section('content')

<div class="ms-0 md:ms-56 ">
    <div class="p-3 space-y-8">

        <div class="flex flex-col md:flex-row justify-between items-center">
            <h1 class="text-2xl font-semibold mb-6 md:mb-0">Manage Admins</h1>

            <div class="flex gap-x-3 gap-y-2 md:gap-y-0">
                <form action="{{ route('manageadmin') }}" method="GET" class="relative border border-slate-400 rounded-lg w-full md:w-auto">
                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                        <svg class="shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    </div>
                    <input type="text" name="search" value="{{ $searchTerm }}" class="py-2 ps-10 pe-16 block w-full bg-white border-slate-200 rounded-lg text-sm focus:outline-none" placeholder="Search by name or email">
                </form>

                <button class="flex gap-x-2 bg-[#FFFFF0] p-2 rounded-lg shadow-lg justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                    </svg>    
                    <p class="hidden lg:block">Filter</p>                  
                </button>

                <button class="flex gap-x-2 bg-[#FFFFF0] p-2 rounded-lg shadow-lg justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m.75 12 3 3m0 0 3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>                        
                    <p class="hidden lg:block">Export</p>                  
                </button>

                <a class="flex gap-x-2 bg-[#FFFFF0] p-2 rounded-lg shadow-lg text-sm justify-center items-center  ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <p class="hidden lg:block">New Admin</p>                  
                </a>
            </div>
        </div>

        <div class="overflow-x-auto">
            @if($admins->isEmpty())
                <div class="text-center py-4 text-gray-500">
                    @if($searchTerm)
                        No admin users found matching "{{ $searchTerm }}".
                    @else
                        No admin users found.
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
                                    <span class="text-xs font-semibold uppercase tracking-wide text-black ">First Name</span>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-black ">Last Name</span>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-black ">Email</span>
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
                        @foreach($admins as $index => $admin)
                        <tr class="hover:bg-gray-50 ">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                {{ $admin->id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-x-3">
                                    <img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full" src="{{ asset($admin->image) }}" alt="Admin Image">
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                {{ $admin->firstname }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                {{ $admin->lastname }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $admin->email }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex gap-x-3">
                                    <button class="btn btn-sm btn-error" onclick="delete_modal{{ $admin->id }}.showModal()">Delete</button>
                                    <button class="btn btn-sm btn-success" onclick="edit_modal{{$admin->id}}.showModal()">Edit</button>
                                </div>

                                <!-- Delete Modal  -->
                                <dialog id="delete_modal{{ $admin->id }}" class="modal">
                                    <div class="modal-box">
                                      <form method="dialog">
                                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                      </form>
                                      <h3 class="text-lg font-bold">Delete Admin</h3>
                                      <p class="py-4">Are you sure you want to delete this admin? This action cannot be undone!</p>

                                      <form action="{{ route('deleteadmin', $admin->id) }}" method="POST" class="flex justify-between">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn" onclick="delete_modal{{ $admin->id }}.close()">Cancel</button>
                                        <button type="submit" class="btn btn-error">Delete</button>
                                      </form>
                                    </div>
                                </dialog>

                               <!-- Edit Modal -->
                               <dialog id="edit_modal{{ $admin->id }}" class="modal">
                                        <div class="modal-box w-11/12 max-w-3xl">
                                            <form method="dialog">
                                                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                            </form>
                                            <h3 class="text-lg font-bold mb-4">Edit Admin</h3>
                                            
                                            <form action="{{ route('admin.update', $admin->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                                                @csrf
                                                @method('PUT')
                                                
                                                <div class="grid grid-cols-2 gap-4">
                                                    <div>
                                                        <label class="block text-sm font-medium text-gray-700">First Name</label>
                                                        <input type="text" name="firstname" value="{{ $admin->firstname }}" 
                                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                                    </div>
                                                    
                                                    <div>
                                                        <label class="block text-sm font-medium text-gray-700">Last Name</label>
                                                        <input type="text" name="lastname" value="{{ $admin->lastname }}"
                                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                                    </div>
                                                </div>

                                                <div>
                                                    <label class="block text-sm font-medium text-gray-700">Email</label>
                                                    <input type="email" name="email" value="{{ $admin->email }}"
                                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                                </div>

                                                <div>
                                                    <label class="block text-sm font-medium text-gray-700">Profile Image</label>
                                                    <div class="mt-1 flex items-center gap-x-3">
                                                        <img class="h-12 w-12 rounded-full" src="{{ asset($admin->image) }}" alt="Current profile photo">
                                                        <input type="file" name="image" 
                                                            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                                    </div>
                                                </div>

                                                <div class="mt-4 flex justify-end gap-x-3">
                                                    <button type="button" class="btn btn-ghost" onclick="edit_modal{{ $admin->id }}.close()">Cancel</button>
                                                    <button type="submit" class="btn bg-blue-500 text-white hover:bg-blue-600">Update Admin</button>
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
        </div>
    </div>
</div>

@endsection
