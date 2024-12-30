@extends('layouts.User.dashboard.dashboard')

@section('title')
  Newsfeed
@endsection

@section('content')
    {{-- two pictures layout  --}}
<div class="max-w-3xl mx-auto mt-[7%] p-6 rounded-lg shadow-md space-y-4">
  
  {{-- header  --}}
  <div class="flex items-center justify-between">
    <div class="flex items-center space-x-3 mb-4 text-slate-500">
      <img class="shrink-0 size-[38px] rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar" >
      <h1 class="font-semibold text-lg">Ruri</h1>
    </div>

    <div class="flex items-center space-x-3">
      <p class="text-slate-500">10:30 AM</p>
      <button>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>        
      </button>
    </div>
  </div>
  {{-- header  --}}

  {{-- title & description  --}}

  <div class="space-y-2">
    {{-- title  --}}
    <h1 class="font-semibold text-lg tracking-wider">Delicious Food !</h1>
    {{-- title  --}}

    {{-- description  --}}
    <p class="text-slate-500 text-sm line-clamp-2">
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus reiciendis facere sit
       exercitationem excepturi similique labore, rerum, molestiae quidem cumque ea nam! 
      Quibusdam ad corporis obcaecati ipsum minus dolore aspernatur.
    </p>
    {{-- description  --}}
  </div>

  {{-- title & description  --}}

  {{-- image  --}}


  <div class="grid grid-cols-4 gap-4">



    <div class="col-span-2">
      <img src="https://media.istockphoto.com/id/2153619111/photo/laziji-is-a-dish-of-sichuan-cuisine-traditional-chinese-food.webp?a=1&b=1&s=612x612&w=0&k=20&c=si58wIFJnl7bYEjybj4hQvLmrkys-WBi_fqBoJPLK7Q=" alt=""
      class="rounded-lg w-full h-auto object-cover object-center">
    </div>

    <div class="col-span-2">
      <img src="https://media.istockphoto.com/id/2153619111/photo/laziji-is-a-dish-of-sichuan-cuisine-traditional-chinese-food.webp?a=1&b=1&s=612x612&w=0&k=20&c=si58wIFJnl7bYEjybj4hQvLmrkys-WBi_fqBoJPLK7Q=" alt=""
      class="rounded-lg w-full h-auto object-cover object-center">
    </div>

  </div>


  {{-- reaction  --}}
  <div class="">
    <button id="heartButton" class="text-gray-200 text-3xl transition duration-300 transform">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
        <path
          d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
      </svg>
    </button>
  </div>
  {{-- reaction  --}}



</div>
@endsection