@extends('layouts.index')

@section('title')
Home Page
@endsection

@section('content')

<section class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 mt-[10%]">
    <!-- Hero -->
<div >
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

  {{-- slider --}}
  <div class="carousel w-full mt-[13%]">

    {{-- event 1  --}}
    <div id="slide1" class="carousel-item relative w-full flex justify-center items-center">
      <div class="card md:card-side glass  shadow-xl w-[80%] ">
        <figure>
          <img
            src="https://plus.unsplash.com/premium_photo-1705609329632-6d448a1b4792?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTQxfHxmb29kJTIwdHJhbnNwYXJlbnR8ZW58MHx8MHx8fDA%3D"
            alt="food" class="w-[80%] h-[80%] object-cover" />
        </figure>
        <div class="card-body">
          <h2 class="card-title text-yellow-500 text-4xl font-bold">New event is comming soon!</h2>
          <p class="text-gray-500 text-xl font-semibold">January 20 | 9:30 AM</p>
          <p class="text-yellow-300 text-lg font-semibold">Novotel Hotel</p>
          <div class="card-actions justify-end">
            <button class="btn bg-yellow-400">Watch</button>
          </div>
        </div>
      </div>
      <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
        <a href="#slide4" class="btn btn-circle bg-yellow-400">❮</a>
        <a href="#slide2" class="btn btn-circle bg-yellow-400">❯</a>
      </div>
    </div>

    {{-- event 2 --}}
    <div id="slide2" class="carousel-item relative w-full flex justify-center items-center">
      <div class="card md:card-side glass  shadow-xl w-[80%] ">
        <figure>
          <img
            src="https://images.unsplash.com/photo-1464305795204-6f5bbfc7fb81?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTYzfHxmb29kJTIwdHJhbnNwYXJlbnR8ZW58MHx8MHx8fDA%3D"
            alt="food" class="w-[80%] h-[80%] object-cover" />
        </figure>
        <div class="card-body">
          <h2 class="card-title text-yellow-500 text-4xl font-bold">New event is comming soon!</h2>
          <p class="text-gray-500 text-xl font-semibold">January 20 | 9:30 AM</p>
          <p class="text-yellow-300 text-lg font-semibold">Novotel Hotel</p>
          <div class="card-actions justify-end">
            <button class="btn bg-yellow-400">Watch</button>
          </div>
        </div>
      </div>
      <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
        <a href="#slide1" class="btn btn-circle bg-yellow-400">❮</a>
        <a href="#slide3" class="btn btn-circle bg-yellow-400">❯</a>
      </div>
    </div>

    {{-- event 3 --}}
    <div id="slide3" class="carousel-item relative w-full flex justify-center items-center">
      <div class="card md:card-side glass  shadow-xl w-[80%]  ">
        <figure>
          <img
            src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTM2fHxmb29kJTIwdHJhbnNwYXJlbnR8ZW58MHx8MHx8fDA%3D"
            alt="food" class="w-[80%] h-[80%] object-cover" />
        </figure>
        <div class="card-body">
          <h2 class="card-title text-yellow-500 text-4xl font-bold">New event is comming soon!</h2>
          <p class="text-gray-500 text-xl font-semibold">January 20 | 9:30 AM</p>
          <p class="text-yellow-300 text-lg font-semibold">Novotel Hotel</p>
          <div class="card-actions justify-end">
            <button class="btn bg-yellow-400">Watch</button>
          </div>
        </div>
      </div>
      <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
        <a href="#slide2" class="btn btn-circle bg-yellow-400">❮</a>
        <a href="#slide4" class="btn btn-circle bg-yellow-400">❯</a>
      </div>
    </div>

    {{-- event 4  --}}
    <div id="slide4" class="carousel-item relative w-full flex justify-center items-center">
      <div class="card md:card-side glass  shadow-xl w-[80%] ">
        <figure>
          <img
            src="https://plus.unsplash.com/premium_photo-1687959301529-e4d63d33b034?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Zm9vZCUyMHRyYW5zcGFyZW50fGVufDB8fDB8fHww"
            alt="food" class="w-[80%] h-[80%] object-cover" />
        </figure>
        <div class="card-body">
          <h2 class="card-title text-yellow-500 text-4xl font-bold">New event is comming soon!</h2>
          <p class="text-gray-500 text-xl font-semibold">January 20 | 9:30 AM</p>
          <p class="text-yellow-300 text-lg font-semibold">Novotel Hotel</p>
          <div class="card-actions justify-end">
            <button class="btn bg-yellow-400">Watch</button>
          </div>
        </div>
      </div>
      <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
        <a href="#slide3" class="btn btn-circle bg-yellow-400">❮</a>
        <a href="#slide1" class="btn btn-circle bg-yellow-400">❯</a>
      </div>
    </div>
  </div>
  {{-- slider --}}
</section>



    
@endsection