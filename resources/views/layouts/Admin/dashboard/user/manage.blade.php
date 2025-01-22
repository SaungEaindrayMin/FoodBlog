@extends('layouts.Admin.dashboard.dashboard') 

@section('title')
    User Table
@endsection

@section('content')

<div class="ms-0 md:ms-56 ">
    <div class="p-3 space-y-8">

        <div class="flex flex-col md:flex-row justify-between items-center">
            <h1 class="text-2xl font-semibold mb-6 md:mb-0">Manage Users</h1>

            <div class="flex gap-x-3 gap-y-2 md:gap-y-0">
                <form action="{{ route('manageuser') }}" method="GET" class="relative border border-slate-400 rounded-lg w-full md:w-auto">
                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                        <svg class="shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    </div>
                    <input type="text" name="search" value="{{ $searchTerm }}" class="py-2 ps-10 pe-16 block w-full bg-white border-slate-200 rounded-lg text-sm focus:outline-none" placeholder="Search by name or email">
                </form>


            </div>
        </div>

        <div class="overflow-x-auto">
            @if($users->isEmpty())
                <div class="text-center py-4 text-gray-500">
                    @if($searchTerm)
                        No users found matching "{{ $searchTerm }}".
                    @else
                        No users found.
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
                        @foreach($users as $index => $user)
                        <tr class="hover:bg-gray-50 ">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                {{ $user->id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-x-3">
                                    <img class="inline-block h-[2.875rem] w-[2.875rem] rounded-full" src="{{ asset($user->image) }}" alt="User Image">
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                {{ $user->firstname }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                {{ $user->lastname }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $user->email }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex gap-x-3">
                                    <button class="btn btn-sm btn-error" onclick="delete_modal{{ $user->id }}.showModal()">Delete</button>
                                </div>

                                <dialog id="delete_modal{{ $user->id }}" class="modal">
                                    <div class="modal-box">
                                      <form method="dialog">
                                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                      </form>
                                      <h3 class="text-lg font-bold">Delete User</h3>
                                      <p class="py-4">Are you sure you want to delete this user? This action cannot be undone!</p>

                                      <form action="{{ route('deleteuser', $user->id) }}" method="POST" class="flex justify-between">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn" onclick="delete_modal{{ $user->id }}.close()">Cancel</button>
                                        <button type="submit" class="btn btn-error">Delete</button>
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
