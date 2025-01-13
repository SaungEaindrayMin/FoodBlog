

<div class="max-w-[85rem]    mx-auto ">
  <div class="max-w-xl mx-auto">
    <div class="text-center">
      <h1 class="text-3xl font-bold sm:text-4xl text-yellow-500">
        Register Here!
      </h1>
    </div>
  </div>

  <div class="mt-3 max-w-xl mx-auto flex flex-col items-center justify-center bg-white border-2 border-[#264143] rounded-2xl shadow-[3px_4px_0px_1px_#E99F4C] p-6">
    <!-- Card -->
    <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-4 dark:border-neutral-700">
      <h2 class="mb-3 text-xl font-semibold text-gray-800 dark:text-neutral-900">
        Fill in the form
     
     </h2>

      <form method="POST" action="{{route('register')}}">
        <div class="grid gap-4 ">

        @csrf


          <!-- Grid -->
           
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-4 ">

            <div id="drop-area" class="col-span-2 block w-full max-w-sm mx-auto bg-white outline-none border-2 border-[#264143] shadow-[3px_4px_0px_1px_#E99F4C] p-6 cursor-pointer rounded-md text-sm focus:translate-y-1 focus:shadow-[1px_2px_0px_0px_#E99F4C]transition duration-300 ease-in-out">
              <input type="file" name="image" class="hidden" id="image" accept="image/*">
              <label for="image" class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
                
                  <p class="mt-2 text-sm text-gray-600 text-center">Drag & drop an image here, or click to upload</p>
              </label>
          </div>
          
          <script>
              const dropArea = document.getElementById('drop-area');
              const inputFile = document.getElementById('image');
          
              dropArea.addEventListener('click', () => {
                  inputFile.click();
              });
          
              dropArea.addEventListener('dragover', (event) => {
                  event.preventDefault();
                  dropArea.classList.add('bg-blue-50');
              });
          
              dropArea.addEventListener('dragleave', () => {
                  dropArea.classList.remove('bg-blue-50');
              });
          
              dropArea.addEventListener('drop', (event) => {
                  event.preventDefault();
                  dropArea.classList.remove('bg-blue-50');
                  const files = event.dataTransfer.files;
                  inputFile.files = files;
                  // You can now handle the uploaded files here
                  console.log(files);
              });
          </script>
          


            <div class="">              
              <label for="firstname" class="block mb-2 text-sm text-gray-700 font-medium text-black/70">First Name</label>
              <input type="text" name="firstname" id="firstname" class="outline-none border-2 border-[#264143] py-3 px-4 block w-full shadow-[3px_4px_0px_1px_#E99F4C]  p-3 rounded-md text-sm focus:translate-y-1 focus:shadow-[1px_2px_0px_0px_#E99F4C]">
              @error('firstname')
            <p class=" text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
            @enderror
            </div>

            <div>
              <label for="lastname" class="block mb-2 text-sm text-gray-700 font-medium text-black/70">Last Name</label>
              <input type="text" name="lastname" id="lastname" class="outline-none border-2 border-[#264143] py-3 px-4 block w-full shadow-[3px_4px_0px_1px_#E99F4C] p-3 rounded-md text-sm focus:translate-y-1 focus:shadow-[1px_2px_0px_0px_#E99F4C]">
              @error('lastname')
            <p class=" text-xs text-red-600 mt-2" >{{$message}}</p>
            @enderror
            </div>
          </div>

          <!-- end grid  -->

            <div>
             
              <label for="email" class="block mb-2 text-sm text-gray-700 font-medium text-black/70">Email</label>
              <input type="text" name="email" id="email"  class="outline-none border-2 border-[#264143] py-3 px-4 block w-full shadow-[3px_4px_0px_1px_#E99F4C] p-3 rounded-md text-sm focus:translate-y-1 focus:shadow-[1px_2px_0px_0px_#E99F4C]">
              @error('email')
            <p class=" text-xs text-red-600 mt-2" id="email-error" >{{$message}}</p>
            @enderror
            </div>

            <div>
             
              <label for="password" class="block mb-2 text-sm text-gray-700 font-medium text-black/70">Password</label>
              <input type="password" name="password" id="password"  class="outline-none border-2 border-[#264143] py-3 px-4 block w-full shadow-[3px_4px_0px_1px_#E99F4C] p-3 rounded-md text-sm focus:translate-y-1 focus:shadow-[1px_2px_0px_0px_#E99F4C]">
              @error('password')
            <p class=" text-xs text-red-600 mt-2" >{{$message}}</p>
            @enderror
            </div>

            <div>
             
              <label for="password_confirmation" class="block mb-2 text-sm text-gray-700 font-medium text-black/70">Confirm Password</label>
              <input type="password" name="password_confirmation" id="password_confirmation"  class="outline-none border-2 border-[#264143] py-3 px-4 block w-full shadow-[3px_4px_0px_1px_#E99F4C] p-3 rounded-md text-sm focus:translate-y-1 focus:shadow-[1px_2px_0px_0px_#E99F4C]">
              @error('password_confirmation')
            <p class=" text-xs text-red-600 mt-2" >{{$message}}</p>
            @enderror
            </div>

            <input type="text" hidden  value="user" name="role">



        <div class="text-center mt-5">
          <div class="mt-6 grid">
            <button type="submit" name="save" class="bg-yellow-400 mx-auto shadow-[3px_3px_0px_0px_#E99F4C] text-black font-extrabold w-72 p-4 rounded-xl hover:opacity-90">Register</button>
          </div>
  
          <p class="mt-4">Have an Account? <a class="font-extrabold text-[#264143] hover:underline" href="">Login Here!</a></p>
      </div>

      </form>
    </div>
    <!-- End Card -->
  </div>

  
</div>




