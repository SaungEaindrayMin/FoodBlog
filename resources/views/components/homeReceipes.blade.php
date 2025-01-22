  {{-- recipes section  --}}

  <div class="min-h-screen flex items-center justify-center mt-[10%] ">
    <div class="container mx-auto p-6">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center ">


        <!-- left Section -->
        <div class="grid grid-cols-4 gap-4">
          <!-- Large Top Left Image -->
          <div class="col-span-2 row-span-2">
            <img
              src="/rec1.jpeg"
              alt="Healthy salad with egg"
              class="rounded-lg shadow-md object-cover w-full h-full hover:scale-105 transition-transform duration-300 ease-in-out"
            />
          </div>
        
          <!-- Large Top Right Image -->
          <div class="col-span-2">
            <img
              src="/rec2.jpeg"
              alt="Desserts with oranges and blackberries"
              class="rounded-lg shadow-md object-cover w-full h-full hover:scale-105 transition-transform duration-300 ease-in-out"
            />
          </div>
        
          <!-- Small Bottom Left Image -->
          <div class="col-span-1">
            <img
              src="/rec3.jpeg"
              alt="Refreshing drink with blueberries and lime"
              class="rounded-lg shadow-md object-cover w-full h-full hover:scale-105 transition-transform duration-300 ease-in-out"
            />
          </div>
        
          <!-- Small Bottom Right Image -->
          <div class="col-span-1">
            <img
              src="/rec4.jpeg"
              alt="Fresh strawberries and lime slices"
              class="rounded-lg shadow-md object-cover w-full h-full hover:scale-105 transition-transform duration-300 ease-in-out"
            />
          </div>
        </div>
        

        <!-- right Section -->
        <div class="space-y-4">
          <h1 class="text-4xl font-bold leading-tight">
            Come & explore  <br />
            <span class="text-yellow-500">nutritious and delicious recipes</span>
          </h1>
          <p class="text-gray-600">
            A vibrant community for food lovers, sharing recipes, culinary tips, and stories that bring people together through the joy of cooking and eating.
          </p>
          <div class="space-x-4">
            <a
              onclick="Signin.showModal()"
              class="px-6 py-3 bg-yellow-400 text-black rounded-lg shadow-md hover:bg-yellow-300"
            >
              Discover recipes
            </a>
            <a
              href="{{ route('about') }}"
              class="px-6 py-3 border border-yellow-400 text-gray-800 rounded-lg hover:bg-gray-100"
            >
              About me
            </a>
          </div>
        </div>


        
      </div>
    </div>
  </div>
  {{-- recipes section  --}}