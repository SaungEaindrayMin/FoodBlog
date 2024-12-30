<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Default')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @yield ('theme')
</head>
<body>

  {{-- start nav section  --}}
<nav class="bg-[#FFFFF0] border-b border-slate-300 fixed top-0 z-10 w-full">
  <div class="flex justify-between items-center py-4 px-6">
    <div class="nav-left flex items-center gap-4">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
      </svg>
      
      <h1>Magic of Flavour</h1>
    </div>

    <div class="nav-right flex items-center gap-4">
              <!-- Search Input -->
              <div class="relative border border-slate-400 rounded-lg">
                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                  <svg class="shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                </div>
                <input type="text" class="py-2 ps-10 pe-16 block w-full bg-white border-slate-200 rounded-lg text-sm focus:outline-none" placeholder="Search">
              </div>
              <!-- End Search Input -->
              <a href="" class="p-2 rounded-full transition duration-200 hover:bg-yellow-300 active:scale-95">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                </svg>
                
              </a>
    </div>
  </div>
</nav>


<aside class="h-screen grid md:grid-cols-12 ">

  <div class=" relative hidden md:block col-start-1  col-end-2">
  <div class="fixed left-0 px-8 bg-[#FFFFF0]   h-screen  flex flex-col justify-evenly gap-10 border-r border-slate-300 ">
    {{-- Sidebar Menu --}}
    <div>
      <a href="#" class="flex gap-3 items-center p-2 transition duration-200 hover:bg-yellow-300 active:scale-95 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>
        <span class="hidden">Profile</span>
      </a>
    </div>
    <div>
      <a href="#" class="flex gap-3 items-center p-2 transition duration-200 hover:bg-yellow-300 active:scale-95 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
        </svg>
        <span class="hidden">Newsfeed</span>
    </a>
  </div>

  <div>
    <a href="" class="flex gap-3 items-center p-2 transition duration-200 hover:bg-yellow-300 active:scale-95  rounded-full">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
      </svg>           
      <span class="hidden">Receipes</span>
    </a>
  </div>

  <div>
    <a href="" class="flex gap-3 items-center p-2 transition duration-200 hover:bg-yellow-300 active:scale-95  rounded-full">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
      </svg>      
      <span class="hidden">Profile</span>
    </a>
  </div>
</div>
</div>


{{-- main content  --}}
<div class="col-start-3 col-span-7 mt-[10%]">
  @yield('content')
</div>
{{-- main content  --}}

{{-- right side bar  --}}
<div class=" relative hidden md:block col-start-11 col-end-13">
<div class="fixed top-14 p-8 flex flex-col justify-between border-l border-slate-300  h-[95%] ">
  {{-- for profile --}}
  <div class="bg-[#FFFFF0]  rounded-lg shadow-lg">
  <figure>
    <img 
    src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"
    class=" w-full h-auto mx-auto object-cover">
  </figure>

  <div class="grid gap-3 mt-4 p-4">
    <h1 class="text-sm font-semibold ">Name - <span class="font-normal text-xs text-slate-600 ">Tom</span></h1>
    <p  class="text-sm font-semibold ">Email - <span  class="font-normal text-xs text-slate-600 ">tom@gmail.com</span></p>
    <a href="" class="btn btn-sm bg-yellow-300 w-full hover:bg-yellow-200 border-0">Update Profile</a>
  </div>
</div>


{{-- for profile  --}}

{{-- for switch account and create new account  --}}
<div >
    <a href="" class="btn btn-sm w-full text-white bg-red-600 hover:bg-red-500 border-0">
      Log Out
    </a>
</div>
{{-- for switch account and create new account  --}}

</div>

</div>
{{-- right side bar  --}}
</aside>
{{-- end nav section  --}}


<script src="./node_modules/lodash/lodash.min.js"></script>
<script src="./node_modules/dropzone/dist/dropzone-min.js"></script>
</body>
</html>