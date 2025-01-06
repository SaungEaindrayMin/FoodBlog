@extends('layouts.User.dashboard.dashboard')

@section('title')
  Profile
@endsection

@section('content')
<div class="flex justify-center items-start mx-auto w-full mt-[7%]">
  <!-- Main Content Wrapper -->
  <div class="max-w-3xl w-full p-4">
    <form>
      <div class="flex flex-row items-center gap-3 md:gap-2">
        <div>
          <img class="shrink-0 w-[38px] h-[38px] rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        </div>
        <div class="w-full border border-gray-400 rounded-md">
          <button type="button" onclick="document.getElementById('share_post').showModal()" class="py-2 px-4 text-gray-500">
            Share Something...
          </button>
        </div>
      </div>
    </form>
  </div>

  <!-- Modal Popup -->
  <dialog id="share_post" class="modal">
    <div class="modal-box flex items-center justify-center p-4">
      <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data" class="w-full max-w-lg grid gap-3">

        @csrf

   
        <button type="button" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2" onclick="document.getElementById('share_post').close()">✕</button>
    
        <!-- Post Header -->
        <div class="flex items-center space-x-3 mb-4">
            <div class="w-10 h-10 bg-gray-300 rounded-full">
                <img class="shrink-0 w-[38px] h-[38px] rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
            </div>
            <p class="font-semibold text-gray-800">Ruri</p>
        </div>
    
        <!-- Title -->
        <input type="text" 
            name="title"
            class="w-full p-2 text-gray-700 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Your Title"
            required>
    
        <!-- Textarea for Content -->
        <textarea name="paragraph" 
            rows="4" 
            class="w-full p-2 text-gray-700 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
            placeholder="What's on your mind?"
            required></textarea>
    
        <!-- File Upload Section -->
        <div class="w-full border border-gray-200 rounded-md flex justify-between items-center">
            <p class="p-3 font-semibold text-gray-500">Add an Image or Video</p>
            <div class="p-3 flex items-center gap-3">
                <input type="file" name="image" class="hidden" id="image" accept="image/*">
                <label for="image" class="text-blue-500 cursor-pointer">Upload Image</label>
    
                <input type="file" name="video" class="hidden" id="video" accept="video/*">
                <label for="video" class="text-blue-500 cursor-pointer">Upload Video</label>
            </div>
        </div>
    
        <!-- Image Preview -->
        <div class="flex justify-between ">
        <div class="mt-3 hidden" id="file-preview-img-container">
            <img id="file-preview-img" class="preview-size border object-contain w-[200px] h-[200px]  rounded-md" />
        </div>
    
        <!-- Video Preview -->
        <div class="mt-3 hidden" id="file-preview-video-container">
            <video id="file-preview-video" class="preview-size border object-contain w-[200px] h-[200px]  rounded-md" controls></video>
        </div>
      </div>
    
        <!-- Submit Button -->
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Post</button>
    </form>
    
    
    </div>
  </dialog>
</div>

{{-- Post Content --}}
{{-- <div class="max-w-3xl mx-auto mt-[7%] p-6 rounded-lg shadow-md">
  <h2 class="text-xl font-bold mb-4">Your Post</h2>
  @foreach ($receipes as $receipe)
    <div class="mt-6">
      <h1 class="font-bold text-xl">{{ $receipe->title }}</h1>
      <p class="text-gray-600">{{ $receipe->paragraph }}</p>
      <div class="flex space-x-4 mt-2">
        @if ($receipe->image)
          <img src="{{ asset('storage/' . $receipe->image) }}" class="w-32 h-32 rounded-md">
        @endif
        @if ($receipe->video)
          <video controls class="w-32 h-32 rounded-md">
            <source src="{{ asset('storage/' . $receipe->video) }}" type="video/mp4">
          </video>
        @endif
      </div>
      <div class="mt-2">
        <form action="{{ route('profile.destroy', $receipe->id) }}" method="POST" class="inline-block">
          @csrf
          @method('DELETE')
          <button type="submit" class="text-red-500">Delete</button>
        </form>
      </div>
    </div>
  @endforeach
</div> --}}


{{-- Post Content  --}}



<!-- Post Header -->

@foreach ($receipes as $receipe)
<div class="max-w-3xl mx-auto mt-[7%] p-6 rounded-lg shadow-md">
  <div class="flex justify-between items-center">
        <div class="flex items-center space-x-3 mb-4">
            <div class="w-10 h-10 bg-gray-300 rounded-full">
                <img class="shrink-0 w-[38px] h-[38px] rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
            </div>
            <p class="font-semibold text-gray-800">Ruri</p>
        </div>
        
        <div class="flex gap-3 items-center">
        <p class="text-slate-600">10:00 AM</p>
        <button>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>          
        </button>
      </div>
  </div>


  {{-- Post Title  --}}
    <div class="grid gap-4">
      <h1 class="font-bold text-xl">{{ $receipe->title }}</h1>
      <p class="text-gray-600 line-clamp-3">{{ $receipe->paragraph }}</p>
      <div class="flex gap-2  mx-auto mt-2">
        @if ($receipe->image)
          <img src="{{ asset('storage/' . $receipe->image) }}" class="rounded-md w-3/6 ">
        @endif
        @if ($receipe->video)
          <video controls class="w-3/6">
            <source src="{{ asset('storage/' . $receipe->video) }}" type="video/mp4">
          </video>
        @endif
      </div>
      <div class="mt-2">
        <form action="{{ route('profile.destroy', $receipe->id) }}" method="POST" class="inline-block">
          @csrf
          @method('DELETE')
          <button type="submit" class="text-red-500">Delete</button>
        </form>
      </div>
    </div>
  </div>
  @endforeach

    

@endsection

