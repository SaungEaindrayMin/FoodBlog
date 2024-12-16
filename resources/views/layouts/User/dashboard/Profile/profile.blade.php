@extends('layouts.User.dashboard.dashboard')

@section('title')
  Profile
@endsection

@section('content')

<div class="max-w-6xl p-3">
    <div class="max-w-xl text-center mx-auto">
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
        <!-- Textarea for Title -->
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
                  required></textarea>
      
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

@endsection