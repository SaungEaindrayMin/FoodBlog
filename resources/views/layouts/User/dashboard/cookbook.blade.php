@extends('layouts.User.dashboard.dashboard')

@section('title')
    Community Cookbook
@endsection

@section('content')
<div class="ms-0 md:ms-56">
    <div class="p-3 space-y-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <h1 class="text-2xl font-semibold mb-6 md:mb-0">Community Cookbook</h1>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6">
            <p class="text-gray-600">Welcome to the community cookbook! Here you can discover and share recipes with other food enthusiasts.</p>
        </div>
    </div>
</div>
@endsection
