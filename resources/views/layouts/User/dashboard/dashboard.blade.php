<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Default')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @yield ('theme')
</head>
<body>

<!-- ========== HEADER ========== -->
<header class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-[48] w-full bg-[#FFFFF0] border-b text-sm py-2.5 lg:ps-[260px] ">
  <nav class="px-4 sm:px-6 flex basis-full items-center w-full mx-auto">
    <div class="me-5 lg:me-0 lg:hidden">
      <!-- Logo -->
      <a class="flex-none rounded-md text-lg w-[200px] inline-block font-semibold focus:outline-none focus:opacity-80" href="#" aria-label="Preline">
        <span class=" text-yellow-500">Magic Of Flavour</span>
      </a>
      <!-- End Logo -->

      <div class="lg:hidden ms-1">

      </div>
    </div>

    <div class="w-full flex items-center justify-end ms-auto md:justify-between gap-x-1 md:gap-x-3">

    <div></div>

      <div class="flex flex-row items-center justify-end gap-1">
        <button type="button" class="md:hidden size-[38px] relative inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 ">
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
          <span class="sr-only">Search</span>
        </button>

        <button type="button" class="size-[38px] relative inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 ">
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="m10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
          <span class="sr-only">Notifications</span>
        </button>

        <button type="button" class="size-[38px] relative inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 ">
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          <span class="sr-only">Activity</span>
        </button>

 
      </div>
    </div>
  </nav>
</header>
<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<div class="-mt-px">
  <!-- Breadcrumb -->
  <div class="sticky top-0 inset-x-0 z-20 bg-[#FFFFF0] border-y px-4 sm:px-6 lg:px-8 lg:hidden ">
    <div class="flex items-center py-2">
      <!-- Navigation Toggle -->
      <button type="button" class="size-8 flex justify-center items-center gap-x-2 border border-gray-200 text-gray-800 hover:text-gray-500 rounded-lg focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none " aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar" aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
        <span class="sr-only">Toggle Navigation</span>
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M15 3v18"/><path d="m8 9 3 3-3 3"/></svg>
      </button>
      <!-- End Navigation Toggle -->

      <!-- Breadcrumb -->
      <ol class="ms-3 flex items-center whitespace-nowrap">
        <li class="flex items-center text-sm text-gray-800 ">
          User Dashboard
          <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400 " width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </li>

      </ol>
      <!-- End Breadcrumb -->
    </div>
  </div>
  <!-- End Breadcrumb -->
</div>

<!-- Sidebar -->
<div id="hs-application-sidebar" class="hs-overlay  [--auto-close:lg]
  hs-overlay-open:translate-x-0
  -translate-x-full transition-all duration-300 transform
  w-[260px] h-full
  hidden
  fixed inset-y-0 start-0 z-[60]
  bg-[#FFFFF0] border-e border-gray-200
  lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
  " role="dialog" tabindex="-1" aria-label="Sidebar">
  <div class="relative flex flex-col h-full max-h-full">
    <div class="px-6 pt-4 flex items-center">
      <!-- Logo -->
      <a class="flex-none rounded-xl text-center text-3xl inline-block font-semibold focus:outline-none focus:opacity-80" href="#" aria-label="Preline">
        <span class=" text-yellow-500">Magic Of Flavour</span>
      </a>
      <!-- End Logo -->

      <div class="hidden lg:block ms-2">

      </div>
    </div>

    <!-- Content -->
    <div class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
      <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
        <ul class="grid  justify-center space-y-1 mt-4">
          <li>
            <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-gray-800 rounded-lg hover:bg-yellow-400 focus:outline-none focus:bg-gray-100 " href="{{ route('recipes.collection') }}">
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              Recipes Collection
            </a>
          </li>

          <li class="hs-accordion" id="users-accordion">
            <a href="{{ route('profile.index') }}" type="button" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-yellow-400 focus:outline-none focus:bg-gray-100 " aria-expanded="true" aria-controls="users-accordion-child">
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              Community Cookbook

             
            </a>

          </li>

          <li class="hs-accordion" id="account-accordion">
            <a href="{{ route('user.cookbook') }}" type="button" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-yellow-400 focus:outline-none focus:bg-gray-100 " aria-expanded="true" aria-controls="account-accordion-child">
              <svg class="shrink-0 mt-0.5 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="15" r="3"/><circle cx="9" cy="7" r="4"/><path d="M10 15H6a4 4 0 0 0-4 4v2"/><path d="m21.7 16.4-.9-.3"/><path d="m15.2 13.9-.9-.3"/><path d="m16.6 18.7.3-.9"/><path d="m19.1 12.2.3-.9"/><path d="m19.6 18.7-.4-1"/><path d="m16.8 12.3-.4-1"/><path d="m14.3 16.6 1-.4"/><path d="m20.7 13.8 1-.4"/></svg>
              Culinary Resource

    
            </a>

          </li>

          <li class="hs-accordion" id="projects-accordion">
            <a href="{{ route('user.education') }}" type="button" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-yellow-400 focus:outline-none focus:bg-gray-100 " aria-expanded="true" aria-controls="projects-accordion-child">
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
              Educational Resource


            </a>


          </li>
        </ul>
      </nav>
    </div>
    <!-- End Content -->
  </div>
  
</div>
<!-- End Sidebar -->

<!-- Content -->
<div class="p-4 sm:p-6 md:p-8 space-y-4 sm:space-y-6 md:space-y-8">
  <div>
    @yield('content')
  </div>
</div>



<!-- End Content -->
<!-- ========== END MAIN CONTENT ========== -->


{{-- right side bar  --}}
<div class=" relative hidden md:block">
  <div class="fixed top-14 right-0  flex flex-col justify-between border-l border-slate-300  h-[95%] ">
    <div class="bg-[#FFFFF0] p-8 h-screen rounded-lg shadow-lg">
    <figure class="text-center mb-6">
      @if(auth()->check())
      <img 
      src="/{{ auth()->user()->image }}" alt="Avatar"
      class="w-32 h-32 mx-auto object-cover rounded-full p-1 shadow-lg transition-transform duration-300 hover:scale-105">
      @else
      <h1 class="text-sm font-semibold text-gray-700">No user is currently logged in.</h1>
  @endif
    </figure>
  
    <div class="grid mt-4 p-4 bg-white rounded-lg shadow-md">
      @if(auth()->check())
      <h1 class="text-lg font-semibold text-gray-800">{{ auth()->user()->firstname }}</h1>
  @else
      <h1 class="text-sm font-semibold text-gray-700">No user is currently logged in.</h1>
  @endif
  
  
  </div>
  
  
  
  <div >
      <form action="{{ route('logout') }}" method="POST" class="w-full mt-2">
        @csrf
        <button type="submit" class="btn btn-sm w-full text-white bg-red-600 hover:bg-red-500 border-0">
            Log Out
        </button>
    </form>
  </div>
  </div> 
  </div>
  {{-- right side bar  --}}




</body>
@include('layouts.User.dashboard.Footer.footer')
</html>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@yield('scripts')