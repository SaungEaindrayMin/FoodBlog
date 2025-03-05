<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Default')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    
      {{-- start nav section  --}}
<nav class="bg-[#FFFFF0] border-b border-slate-300 sticky  top-0  z-10 w-full">
    <div class="flex justify-between items-center py-4 px-6">
      <div class="nav-left flex items-center gap-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
        </svg>
        
        <h1>Magic of Flavour</h1>
      </div>
  
      <div class="nav-right flex items-center gap-4">
          <img src="/{{ auth()->user()->image }}" alt="" class="w-8 h-8 rounded-full object-cover">
      </div>
    </div>
  </nav>


  <div class=" text-black  relative ">

    {{-- side bar  --}}
    <aside class="w-56 bg-[#FFFFF0] border-r hidden md:flex flex-col justify-between h-[91vh] fixed p-2">
      <div class=" flex flex-col gap-y-2">
        <div>
          <a
            href="#"
            class="w-full flex gap-3 items-center px-4 py-3 transition duration-200 hover:bg-yellow-300 active:scale-95 rounded-lg"
          >
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
          </svg>
          
            <span class="">Dashboard</span>
          </a>
        </div>
    
      
        <div>
          <a
            href="{{ route('managerecipe') }}"
            class="flex gap-3 items-center px-4 py-3 transition duration-200 hover:bg-yellow-300 active:scale-95  rounded-lg"
          >
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
          </svg>
          
            <span class="">Recipes</span>
          </a>
        </div>

        <div>
          <a
            href="{{ route('managecategory') }}"
            class="flex gap-3 items-center px-4 py-3 transition duration-200 hover:bg-yellow-300 active:scale-95  rounded-lg"
          >
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
          </svg>
          
            <span class="">Categories</span>
          </a>
        </div>

        <div>
          <a
            href="{{ route('manageuser') }}"
            class="flex gap-3 items-center px-4 py-3 transition duration-200 hover:bg-yellow-300 active:scale-95  rounded-lg"
          >
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
          </svg>
          
            <span class="">Manage User</span>
          </a>
        </div>

        <div>
          <a
            href="{{ route('manageadmin') }}"
            class="flex gap-3 items-center px-4 py-3 transition duration-200 hover:bg-yellow-300 active:scale-95  rounded-lg"
          >
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
          </svg>
          
            <span class="">Manage Admin</span>
          </a>
        </div>
      
        <div>
          <a
            href="{{ route('createadmin.index') }}"
            class="flex gap-3 items-center px-4 py-3 transition duration-200 hover:bg-yellow-300 active:scale-95  rounded-lg"
          >
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
          </svg>
          
            <span class="">Create Admin</span>
          </a>
        </div>
      </div>
      
      <a href="{{ route('logout') }}" class="px-4 py-3 w-full flex gap-x-2 items-center hover:bg-red-500 rounded-lg duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
        </svg>
                
        <p>Log Out</p>
      </a>
    </aside>

    {{-- main content  --}}
    <div class="p-6">
      @yield('content')
    </div>

  </div>
</body>
</html>