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
                <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-yellow-400 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none " href="#">
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
            <div class="card md:card-side glass  shadow-xl w-[80%] relative overflow-hidden ">
              <h1
              class="py-2 text-center uppercase text-yellow-700 text-md md:text-xl font-semibold bg-gradient-to-r from-yellow-200 via-orange-200 to-yellow-400  md:-rotate-[35deg] -rotate-45 -translate-x-14 rounded-full translate-y-8 md:-translate-x-20 lg:-translate-x-44 lg:translate-y-8 w-1/2 absolute"
            >
              Comming Soon
            </h1>
              <figure>
              
                <img
                  src="https://plus.unsplash.com/premium_photo-1705609329632-6d448a1b4792?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTQxfHxmb29kJTIwdHJhbnNwYXJlbnR8ZW58MHx8MHx8fDA%3D"
                  alt="food" class="w-[80%] h-[80%] object-cover" />
              </figure>
              <div class="card-body">
                <h2 class="card-title text-yellow-500 text-4xl font-bold">New event is comming soon!</h2>
                <p class="text-gray-500 text-xl font-semibold">January 20 | 9:30 AM</p>
                <p class="text-gray-400 text-lg font-semibold">Novotel Hotel</p>
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
            <div class="card md:card-side glass  shadow-xl w-[80%] relative overflow-hidden  ">
              <h1
              class="py-2 text-center uppercase text-yellow-700 text-md md:text-xl font-semibold bg-gradient-to-r from-yellow-200 via-orange-200 to-yellow-400  md:-rotate-[35deg] -rotate-45 -translate-x-14 rounded-full translate-y-8 md:-translate-x-20 lg:-translate-x-44 lg:translate-y-8 w-1/2 absolute"
            >
              Comming Soon
            </h1>
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
            <div class="card md:card-side glass  shadow-xl w-[80%]  relative overflow-hidden  ">
              <h1
              class="py-2 text-center uppercase text-yellow-700 text-md md:text-xl font-semibold bg-gradient-to-r from-yellow-200 via-orange-200 to-yellow-400  md:-rotate-[35deg] -rotate-45 -translate-x-14 rounded-full translate-y-8 md:-translate-x-20 lg:-translate-x-44 lg:translate-y-8 w-1/2 absolute"
            >
              Comming Soon
            </h1>
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
            <div class="card md:card-side glass  shadow-xl w-[80%] relative overflow-hidden  ">
              <h1
              class="py-2 text-center uppercase text-yellow-700 text-md md:text-xl font-semibold bg-gradient-to-r from-yellow-200 via-orange-200 to-yellow-400  md:-rotate-[35deg] -rotate-45 -translate-x-14 rounded-full translate-y-8 md:-translate-x-20 lg:-translate-x-44 lg:translate-y-8 w-1/2 absolute"
            >
              Comming Soon
            </h1>
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



            {{-- recipes section  --}}


<!-- Hero -->

  {{-- recipes section  --}}

  <div class="min-h-screen flex items-center justify-center mt-[10%] ">
    <div class="container mx-auto p-6">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center ">


        <!-- left Section -->
        <div class="grid grid-cols-4 gap-4">
          <!-- Large Top Left Image -->
          <div class="col-span-2 row-span-2">
            <img
              src="https://i.pinimg.com/474x/1e/92/70/1e92708d4c30a0c225cd6e2a8d6aac8b.jpg"
              alt="Healthy salad with egg"
              class="rounded-lg shadow-md object-cover w-full h-full hover:scale-105 transition-transform duration-300 ease-in-out"
            />
          </div>
        
          <!-- Large Top Right Image -->
          <div class="col-span-2">
            <img
              src="https://i.pinimg.com/474x/62/38/08/6238083cdbed4e1243890eb8f4e53867.jpg"
              alt="Desserts with oranges and blackberries"
              class="rounded-lg shadow-md object-cover w-full h-full hover:scale-105 transition-transform duration-300 ease-in-out"
            />
          </div>
        
          <!-- Small Bottom Left Image -->
          <div class="col-span-1">
            <img
              src="https://i.pinimg.com/474x/78/c4/33/78c433eb22a7fb53e31df6150ca867b2.jpg"
              alt="Refreshing drink with blueberries and lime"
              class="rounded-lg shadow-md object-cover w-full h-full hover:scale-105 transition-transform duration-300 ease-in-out"
            />
          </div>
        
          <!-- Small Bottom Right Image -->
          <div class="col-span-1">
            <img
              src="https://i.pinimg.com/474x/8b/c8/37/8bc8378a740f93b9dab9b28d14cd3acf.jpg"
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
            Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut.
          </p>
          <div class="space-x-4">
            <a
              href="#"
              class="px-6 py-3 bg-yellow-400 text-black rounded-lg shadow-md hover:bg-yellow-300"
            >
              Discover recipes
            </a>
            <a
              href="#"
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

  {{-- modal pop-up  --}}

<dialog id="Signin" class="modal  modal-bottom sm:modal-middle">
  <div class="modal-box  bg-white/70 backdrop-blur-lg">
  

    @include('auth.userLogin')

  
  </div>
  
</dialog>

<dialog id="Signup" class="modal modal-bottom sm:modal-middle">
  <div class="modal-box bg-white/70 backdrop-blur-lg">
    @include('auth.userRegister')
  </div>
</dialog>

{{-- modal pop-up  --}}

{{-- Browse Category  --}}

<!-- Features -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto mt-[10%]">
  <!-- Title -->
  <div class="mx-auto max-w-2xl mb-8 lg:mb-14 text-center">
    <h2 class="text-3xl lg:text-4xl text-gray-800 font-bold">
      Browse Recipes
    </h2>
    <p class="mt-3 text-gray-800 ">
      By Categotry
    </p>
  </div>
  <!-- End Title -->

  <!-- Grid -->
  <div class="mx-auto max-w-3xl grid grid-cols-12 gap-6 lg:gap-8">
    <!-- Icon Block -->
    <div class="md:col-span-4 sm:col-span-2 text-center">
      <svg class="mx-auto h-auto w-7 md:w-9 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="10" height="14" x="3" y="8" rx="2"/><path d="M5 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2h-2.4"/><path d="M8 18h.01"/></svg>
      <div class="mt-2 sm:mt-6">
        <h3 class="text-lg font-semibold text-gray-800">
          Asian Cuisine
        </h3>
      </div>
    </div>
    <!-- End Icon Block -->

    <!-- Icon Block -->
    <div class="md:col-span-4   sm:col-span-2 text-center">
      <svg class="mx-auto h-auto w-7 md:w-9 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7h-9"/><path d="M14 17H5"/><circle cx="17" cy="17" r="3"/><circle cx="7" cy="7" r="3"/></svg>
      <div class="mt-2 sm:mt-6">
        <h3 class="text-lg font-semibold text-gray-800">
          European Cuisine
        </h3>
      </div>
    </div>
    <!-- End Icon Block -->

    <!-- Icon Block -->
    <div class="md:col-span-4  sm:col-span-2 text-center">
      <svg class="mx-auto h-auto w-7 md:w-9 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z"/><path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"/></svg>
      <div class="mt-2 sm:mt-6">
        <h3 class="text-lg font-semibold text-gray-800">
          African Cuisine
        </h3>
      </div>
    </div>
    <!-- End Icon Block -->

        
    <!-- Icon Block -->
    <div class="md:col-span-4  sm:col-span-2 text-center">
          <svg class="mx-auto h-auto w-7 md:w-9 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z"/><path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"/></svg>
          <div class="mt-2 sm:mt-6">
            <h3 class="text-lg font-semibold text-gray-800">
              American Cuisine
            </h3>
          </div>
       
     </div>
     <!-- End Icon Block -->

      <!-- Icon Block -->
    <div class="md:col-span-4 sm:col-span-2 text-center">
      <svg class="mx-auto h-auto w-7 md:w-9 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z"/><path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"/></svg>
      <div class="mt-2 sm:mt-6">
        <h3 class="text-lg font-semibold text-gray-800">
          Middle Eastern Cuisine
        </h3>
      </div>
    </div>
    <!-- End Icon Block -->

     <!-- Icon Block -->
     <div class="md:col-span-4  sm:col-span-2 text-center">
          <svg class="mx-auto h-auto w-7 md:w-9 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z"/><path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"/></svg>
          <div class="mt-2 sm:mt-6">
            <h3 class="text-lg font-semibold text-gray-800">
              Oceanian Cuisine
            </h3>
          </div>
     </div>
      <!-- End Icon Block -->
  </div>
  <!-- End Grid -->

  <!-- Grid -->
  <div class="mt-20 grid grid-cols-12 items-center gap-x-2 sm:gap-x-6 lg:gap-x-8">
    <div class="hidden md:block col-span-4 md:col-span-3">
      <img class="rounded-xl" src="https://i.pinimg.com/474x/7d/5b/2e/7d5b2eaeb17a15f09f86a46fa688408b.jpg" alt="Features Image">
    </div>
    <!-- End Col -->
 
    <div class="col-span-4 md:col-span-3">
      <img class="rounded-xl" src="https://i.pinimg.com/474x/4d/fe/76/4dfe76ed52e6a44cba9e801ca70f28a5.jpg" alt="Features Image">
    </div>
    <!-- End Col -->

    <div class="col-span-4 md:col-span-3">
      <img class="rounded-xl" src="https://i.pinimg.com/474x/c8/11/e1/c811e16e296b7830943b90943a3d5c51.jpg" alt="Features Image">
    </div>
    <!-- End Col -->

    <div class="col-span-4 md:col-span-3">
      <img class="rounded-xl" src="https://i.pinimg.com/474x/00/0e/ba/000eba6e4ae76d9b96039cda9ae80a7d.jpg" alt="Features Image">
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->
</div>
<!-- End Features -->


{{-- Browse Category  --}}




  
</section>



    
@endsection