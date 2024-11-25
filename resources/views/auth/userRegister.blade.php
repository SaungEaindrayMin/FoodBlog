

<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:py-2 mx-auto ">
  <div class="max-w-xl mx-auto">
    <div class="text-center">
      <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl text-black/70">
        Register Here!
      </h1>
    </div>
  </div>

  <div class="mt-12 max-w-lg mx-auto">
    <!-- Card -->
    <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-4 dark:border-neutral-700">
      <h2 class="mb-8 text-xl font-semibold text-gray-800 dark:text-neutral-900">
        Fill in the form
     
     </h2>

      <form method="POST" action="{{route('register')}}">
        <div class="grid gap-4 lg:gap-6">

        @csrf


          <!-- Grid -->
           
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
            <div>
              
              
              <label for="firstname" class="block mb-2 text-sm text-gray-700 font-medium text-black/70">First Name</label>
              <input type="text" name="firstname" id="firstname" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-100 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600">
              @error('firstname')
            <p class=" text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
            @enderror
            </div>

            <div>
              <label for="lastname" class="block mb-2 text-sm text-gray-700 font-medium text-black/70">Last Name</label>
              <input type="text" name="lastname" id="lastname" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-100 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600">
              @error('lastname')
            <p class=" text-xs text-red-600 mt-2" >{{$message}}</p>
            @enderror
            </div>
          </div>

          <!-- end grid  -->

            <div>
             
              <label for="email" class="block mb-2 text-sm text-gray-700 font-medium text-black/70">Email</label>
              <input type="text" name="email" id="email"  class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-100 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600">
              @error('email')
            <p class=" text-xs text-red-600 mt-2" id="email-error" >{{$message}}</p>
            @enderror
            </div>

            <div>
             
              <label for="password" class="block mb-2 text-sm text-gray-700 font-medium text-black/70">Password</label>
              <input type="password" name="password" id="password"  class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-100 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600">
              @error('password')
            <p class=" text-xs text-red-600 mt-2" >{{$message}}</p>
            @enderror
            </div>

            <div>
             
              <label for="password_confirmation" class="block mb-2 text-sm text-gray-700 font-medium text-black/70">Confirm Password</label>
              <input type="password" name="password_confirmation" id="password_confirmation"  class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-100 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600">
              @error('password_confirmation')
            <p class=" text-xs text-red-600 mt-2" >{{$message}}</p>
            @enderror
            </div>


        <div class="mt-6 grid">
          <button type="submit" name="save" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Register</button>
        </div>


      </form>
    </div>
    <!-- End Card -->
  </div>

  
</div>



