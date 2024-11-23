@extends('layouts.index')

@section('title')
Home Page
@endsection

@section('content')

<section>
    <!-- Hero -->
<div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 mt-8">
    <!-- Grid -->
    <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20  md:justify-center">
      <div>
        <h1 class="block text-3xl font-bold text-yellow-400 sm:text-4xl lg:text-6xl lg:leading-tight">Welcome <span class="text-gray-600">to the world of Fresh and Tasty Food</span></h1>
        <p class="mt-3 text-lg text-gray-900 dark:text-neutral-400">It's not just Food, It's an Experience. Make Your own homemade special receipes</p>
  
        <!-- Buttons -->
        <div class="mt-7 grid gap-3 w-full sm:inline-flex">
          <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-yellow-400 text-black hover:bg-yellow-500 focus:outline-none focus:bg-yellow-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
            Get started
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
          </a>
          <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
            More Details
          </a>
        </div>
        <!-- End Buttons -->
  
      </div>
      <!-- End Col -->
  
      <div class="relative ms-4">
        <img class=" rounded-md w-full" src="https://plus.unsplash.com/premium_photo-1705686155256-2bcbd03259c6?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Zm9vZCUyMHRyYW5zcGFyZW50fGVufDB8fDB8fHww" alt="Hero Image">
       {{-- <div class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 size-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6 dark:from-neutral-800 dark:via-neutral-900/0 dark:to-neutral-900/0"></div> --}}
  
 
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Hero -->
</section>
    
@endsection