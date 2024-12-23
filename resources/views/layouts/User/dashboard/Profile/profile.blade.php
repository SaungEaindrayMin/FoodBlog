@extends('layouts.User.dashboard.dashboard')

@section('title')
  Profile
@endsection

@section('content')

<div class="w-4/6 mx-auto p-3">
    <div class="w-3/6 text-center mx-auto">
      <form>
        <div class=" flex flex-row items-center gap-3 md:gap-2  ">
            <div>
                <img class="shrink-0 size-[38px] rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar" >
            </div>
          <div class="w-full border border-gray-400 rounded-md">
                <button type="button" onclick="share_post.showModal()" class="py-2 text-gray-500">
                        Share Something...
                </button>
          </div>
        </div>
      </form>
    </div>

      {{-- modal pop up  --}}

    <dialog id="share_post" class="modal">
      <div class="modal-box">
        <form method="dialog">
          <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <div class=" ">
          <!-- Post Header -->
          <div class="flex items-center space-x-3 mb-4">
              <div class="w-10 h-10 bg-gray-300 rounded-full">
                <img class="shrink-0 size-[38px] rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar" >
              </div>
              <div>
                  <p class="font-semibold text-gray-800">Ruri</p>
              </div>
          </div>

          <form action="{{ url('/store-post') }}" method="POST" enctype="multipart/form-data" class="grid gap-3">
            @csrf
            <!-- Title -->
            <input type="text" 
                  name="title"
                  class="w-full p-2 text-gray-700 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                  placeholder="Your Title"
                  required>
          
            <!-- Textarea for Content -->
            <textarea name="content" 
                      rows="4" 
                      class="w-full p-2 text-gray-700 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                      placeholder="What's on your mind?"
                      required>
            </textarea>
          
            <!-- File Upload Section for Image -->
            <div class="w-full border border-gray-200 rounded-md flex justify-between items-center">
              <p class="p-3 font-semibold text-gray-500">Add an Image</p>
              <div class="p-3 flex items-center gap-3">
                
                <!-- Image File Input -->
                <div class="group relative">
                  <span class="flex justify-center items-center text-gray-400 cursor-pointer">
                    <!-- Icon for Image -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                    </svg>
                    
                  </span>
          
                  <!-- Hidden File Input for Image -->
                  <input type="file" name="image" class="absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer" accept="image/*" />
                  
                  <!-- Image File Preview -->
                  <div class="file-preview w-full flex justify-center items-center">
                    <img class="w-full object-contain rounded-lg hidden" id="file-preview-img" />
                  </div>
                </div>

                            
                <!-- Video File Input -->
                <div class="group relative">
                  <span class="flex justify-center items-center text-gray-400 cursor-pointer">
                    <!-- Icon for Video -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                    
                  </span>
          
                  <!-- Hidden File Input for Video -->
                  <input type="file" name="video" class="absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer" accept="video/*" />
                  
                  <!-- Video File Preview -->
                  <div class="file-preview w-full flex justify-center items-center">
                    <video class="w-full object-contain rounded-lg hidden" id="file-preview-video" controls></video>
                  </div>
                </div>

              </div>
            </div>


          
            <!-- Submit Button -->
            <div class="w-full grid">
              <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-4 rounded-md">Post</button>
            </div>
          </form>
          

          <!-- Success Message -->
          @if(session('success'))
              <p class="mt-4 text-green-600">{{ session('success') }}</p>
          @endif
      </div>
      </div>
    </dialog>
     {{-- modal pop up  --}}
</div>


{{-- post content  --}}

<div class="w-4/6  mx-auto mt-[7%] bg-[#FFFFF0] p-4 rounded-lg shadow-md space-y-4">
  
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
    <p class="text-slate-500 text-sm">
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus reiciendis facere sit
       exercitationem excepturi similique labore, rerum, molestiae quidem cumque ea nam! 
      Quibusdam ad corporis obcaecati ipsum minus dolore aspernatur.
    </p>
    {{-- description  --}}
  </div>

  {{-- title & description  --}}

  {{-- image  --}}
  <div class="grid grid-cols-1 md:grid-cols-2 justify-center  gap-4">
    <img src="https://plus.unsplash.com/premium_photo-1672363353881-68c8ff594e25?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjV8fGZvb2R8ZW58MHx8MHx8fDA%3D" alt=""
    class="rounded-lg w-full h-auto object-cover object-center">
    <div class="flex flex-col justify-between ">
      <img src="https://media.istockphoto.com/id/2153619111/photo/laziji-is-a-dish-of-sichuan-cuisine-traditional-chinese-food.webp?a=1&b=1&s=612x612&w=0&k=20&c=si58wIFJnl7bYEjybj4hQvLmrkys-WBi_fqBoJPLK7Q=" alt=""
      class="rounded-lg w-full h-auto object-cover object-center">
      <img src="https://media.istockphoto.com/id/2153619111/photo/laziji-is-a-dish-of-sichuan-cuisine-traditional-chinese-food.webp?a=1&b=1&s=612x612&w=0&k=20&c=si58wIFJnl7bYEjybj4hQvLmrkys-WBi_fqBoJPLK7Q=" alt=""
      class="rounded-lg w-full h-auto object-cover object-center">
    </div>
  </div>
  {{-- image  --}}

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

{{-- post content  --}}


{{-- post content  --}}

<div class="w-4/6  mx-auto mt-[7%] bg-[#FFFFF0] p-4 rounded-lg shadow-md space-y-4">
  
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
    <p class="text-slate-500 text-sm">
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus reiciendis facere sit
       exercitationem excepturi similique labore, rerum, molestiae quidem cumque ea nam! 
      Quibusdam ad corporis obcaecati ipsum minus dolore aspernatur.
    </p>
    {{-- description  --}}
  </div>

  {{-- title & description  --}}

  {{-- image  --}}
  <div class="grid grid-cols-1 md:grid-cols-2 justify-center  gap-4">
    <img src="https://plus.unsplash.com/premium_photo-1672363353881-68c8ff594e25?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjV8fGZvb2R8ZW58MHx8MHx8fDA%3D" alt=""
    class="rounded-lg w-full h-auto object-cover object-center">
    <div class="flex flex-col justify-between ">
      <img src="https://media.istockphoto.com/id/2153619111/photo/laziji-is-a-dish-of-sichuan-cuisine-traditional-chinese-food.webp?a=1&b=1&s=612x612&w=0&k=20&c=si58wIFJnl7bYEjybj4hQvLmrkys-WBi_fqBoJPLK7Q=" alt=""
      class="rounded-lg w-full h-auto object-cover object-center">
      <img src="https://media.istockphoto.com/id/2153619111/photo/laziji-is-a-dish-of-sichuan-cuisine-traditional-chinese-food.webp?a=1&b=1&s=612x612&w=0&k=20&c=si58wIFJnl7bYEjybj4hQvLmrkys-WBi_fqBoJPLK7Q=" alt=""
      class="rounded-lg w-full h-auto object-cover object-center">
    </div>
  </div>
  {{-- image  --}}

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

{{-- post content  --}}


@endsection