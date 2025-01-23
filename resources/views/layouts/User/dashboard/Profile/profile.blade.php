@extends('layouts.User.dashboard.dashboard')

@section('title')
  Profile
@endsection

@section('content')
<div class="flex justify-center mx-auto md:ms-0    lg:mx-auto w-[80%] lg:w-full ">
  <!-- Main Content Wrapper -->
  <div class="max-w-3xl w-full ">
    <form>
      <div class="flex flex-row items-center gap-3 md:gap-2">
        <div>
          <img class="shrink-0 w-[38px] h-[38px] rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        </div>
        <div class="w-[80%] lg:w-full  border border-gray-400 rounded-md">
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
    
        <!-- Category Dropdown -->
        <div class="form-control w-full">
            <select name="category_id" class="select select-bordered w-full" required>
                <option value="" disabled selected>Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    
        <!-- Title -->
        <input type="text" 
            name="title"
            class="w-full p-2 text-gray-700 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Recipe Title"
            required>
    
        <!-- Description -->
        <textarea name="paragraph" 
            rows="4" 
            class="w-full p-2 text-gray-700 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
            placeholder="Recipe Description"
            required></textarea>

        <!-- Dynamic Ingredients -->
        <div class="space-y-2">
            <label class="font-semibold text-gray-700">Ingredients</label>
            <div id="ingredients-container">
                <div class="flex items-center gap-2 mb-2">
                    <input type="text" 
                        name="ingredients[]" 
                        class="w-full p-2 text-gray-700 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Add Ingredient"
                        required>
                </div>
            </div>
            <button type="button" onclick="addIngredient()" class="btn btn-sm bg-blue-500 text-white hover:bg-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Add Ingredient
            </button>
        </div>

        <!-- Dynamic Instructions -->
        <div class="space-y-2">
            <label class="font-semibold text-gray-700">Instructions</label>
            <div id="instructions-container">
                <div class="flex items-center gap-2 mb-2">
                    <input type="text" 
                        name="instructions[]" 
                        class="w-full p-2 text-gray-700 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Add Instruction Step"
                        required>
                </div>
            </div>
            <button type="button" onclick="addInstruction()" class="btn btn-sm bg-blue-500 text-white hover:bg-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Add Instruction
            </button>
        </div>
    
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
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Post Recipe</button>
    </form>
    
    
    </div>
  </dialog>
</div>




<!-- Post Header -->

@foreach ($receipes as $receipe)
<div class="max-w-3xl mx-auto mt-[7%] p-6 rounded-lg  border border-slate-200">
  <div class="flex justify-between items-center">
        <div class="flex items-center space-x-3 mb-4">
            <div class="w-10 h-10 bg-gray-300 rounded-full">
                <img class="shrink-0 w-[38px] h-[38px] rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
            </div>
            <p class="font-semibold text-gray-800">Ruri</p>
        </div>
        
        <div class="flex gap-3 items-center">
        <p class="text-slate-600">10:00 AM</p>



        <div class="dropdown dropdown-end ">
          <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar hover:bg-yellow-400">
            <div class="flex-none">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  class="inline-block h-5 w-5 stroke-current">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </div>
          </div>
          <div
            tabindex="0"
            class="text-center  menu-sm grid justify-center items-center gap-3 dropdown-content bg-base-100 rounded-md z-[1] mt-3 hover:bg-yellow-300 p-2 shadow">
              <form action="{{ route('profile.destroy', $receipe->id) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500">Delete</button>
              </form>
          </div>
      </div>

      </div>
  </div>


  {{-- Post Title  --}}
    <div class="grid gap-4">
      <a href="{{ route('recipe.detail', $receipe->id) }}" class="hover:text-yellow-500">
        <h1 class="font-bold text-xl">{{ $receipe->title }}</h1>
      </a>
      <p class="text-gray-600">{{ $receipe->paragraph }}</p>

      <!-- Ingredients Section -->
      <div class="mt-4">
        <h2 class="font-semibold text-lg mb-2">Ingredients:</h2>
        <ul class="list-disc list-inside space-y-1">
          @foreach($receipe->ingredients ?? [] as $ingredient)
            <li class="text-gray-700">{{ $ingredient }}</li>
          @endforeach
        </ul>
      </div>

      <!-- Instructions Section -->
      <div class="mt-4">
        <h2 class="font-semibold text-lg mb-2">Instructions:</h2>
        <ol class="list-decimal list-inside space-y-2">
          @foreach($receipe->instructions ?? [] as $instruction)
            <li class="text-gray-700">{{ $instruction }}</li>
          @endforeach
        </ol>
      </div>

      <!-- Media Section -->
      <div class="flex gap-2 mx-auto mt-4">
        @if ($receipe->image)
          <img src="{{ asset($receipe->image) }}" class="rounded-md w-3/6 object-cover">
        @endif
        @if ($receipe->video)
          <video controls class="w-3/6">
            <source src="{{ asset($receipe->video) }}" type="video/mp4">
          </video>
        @endif
      </div>
    </div>
  </div>
  @endforeach

    

@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize containers
    window.ingredientCount = 1;
    window.instructionCount = 1;
});

function addIngredient() {
    const container = document.getElementById('ingredients-container');
    const newInput = document.createElement('div');
    newInput.className = 'flex items-center gap-2 mb-2';
    newInput.innerHTML = `
        <input type="text" 
            name="ingredients[]" 
            class="w-full p-2 text-gray-700 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Add Ingredient"
            required>
        <button type="button" onclick="removeElement(this)" class="btn btn-circle btn-sm bg-red-500 text-white hover:bg-red-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
    `;
    container.appendChild(newInput);
    window.ingredientCount++;
}

function addInstruction() {
    const container = document.getElementById('instructions-container');
    const newInput = document.createElement('div');
    newInput.className = 'flex items-center gap-2 mb-2';
    newInput.innerHTML = `
        <input type="text" 
            name="instructions[]" 
            class="w-full p-2 text-gray-700 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Add Instruction Step"
            required>
        <button type="button" onclick="removeElement(this)" class="btn btn-circle btn-sm bg-red-500 text-white hover:bg-red-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
    `;
    container.appendChild(newInput);
    window.instructionCount++;
}

function removeElement(button) {
    const parentContainer = button.closest('div').parentElement;
    const elementType = button.closest('div').querySelector('input').name.includes('ingredients') ? 'ingredient' : 'instruction';
    
    if ((elementType === 'ingredient' && window.ingredientCount > 1) || 
        (elementType === 'instruction' && window.instructionCount > 1)) {
        button.closest('div').remove();
        if (elementType === 'ingredient') {
            window.ingredientCount--;
        } else {
            window.instructionCount--;
        }
    }
}

// Add file preview handlers
document.getElementById('image').addEventListener('change', function(e) {
    const container = document.getElementById('file-preview-img-container');
    const preview = document.getElementById('file-preview-img');
    container.classList.remove('hidden');
    preview.src = URL.createObjectURL(e.target.files[0]);
});

document.getElementById('video').addEventListener('change', function(e) {
    const container = document.getElementById('file-preview-video-container');
    const preview = document.getElementById('file-preview-video');
    container.classList.remove('hidden');
    preview.src = URL.createObjectURL(e.target.files[0]);
});
</script>
@endsection
