@extends('layouts.Admin.dashboard.dashboard') 

@section('title')
    Admin Table
@endsection

@section('content')

<div class="ms-0 md:ms-56 ">
    <div class="p-3 space-y-8">

        <div class="flex flex-col md:flex-row justify-between items-center">
            <h1 class="text-2xl font-semibold mb-6 md:mb-0">Manage admins</h1>

        </div>

        <div class="overflow-x-auto">
        
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
                                    <span class="text-xs font-semibold uppercase tracking-wide text-black ">Role</span>
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
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $admin->role }}
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

                                                <div>
                                                    <label class="block text-sm font-medium text-gray-700">Role</label>
                                                    <select name="role" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                                        <option value="admin" {{ $admin->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                                        <option value="superadmin" {{ $admin->role == 'superadmin' ? 'selected' : '' }}>Super Admin</option>
                                                    </select>
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
        </div>
    </div>
</div>

@endsection
