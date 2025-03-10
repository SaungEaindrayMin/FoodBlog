  <!-- Hero -->
  <div >
    <!-- Grid -->
    <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20  md:justify-center">
      <div>
        <h1 class="block text-3xl font-bold text-yellow-400 sm:text-4xl lg:text-6xl lg:leading-tight">Welcome <span class="text-gray-600">to the world of Fresh and Tasty Food</span></h1>
        <p class="mt-3 text-lg text-gray-900 dark:text-neutral-400">It's not just Food, It's an Experience. Make Your own homemade special receipes</p>
  
        <!-- Buttons -->
        <div class="mt-7 grid gap-3 w-full sm:inline-flex">
          <a href="{{ route('about') }}" class="bg-yellow-500 text-black border border-yellow-400 border-b-4 font-medium overflow-hidden relative px-4 py-2 rounded-md hover:brightness-150 hover:border-t-4 hover:border-b active:opacity-75 outline-none duration-300 group">
  <span class="bg-yellow-400 shadow-yellow-400 absolute -top-[150%] left-0 inline-flex w-80 h-[5px] rounded-md opacity-50 group-hover:top-[150%] duration-500 shadow-[0_0_10px_10px_rgba(0,0,0,0.3)]"></span>
  About us
          </a>
          <a onclick="Signin.showModal()" class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-yellow-400 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none " href="#">
            More Details
          </a>
        </div>
        <!-- End Buttons -->
  
      </div>
      <!-- End Col -->
  
      <div class="relative ms-4">
        <img class=" rounded-md w-full" src="/hero.jpeg" alt="Hero Image">
  

      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Hero -->

      {{-- recipes section  --}}


<!-- Hero -->