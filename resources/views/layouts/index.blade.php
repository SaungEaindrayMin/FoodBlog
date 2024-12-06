<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Default')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    @yield ('theme')
    <style>
      .parallax {
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
      }
    </style>
</head>
<body>


<!-- ========== HEADER ========== -->
<header class="flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full py-5  fixed top-0  bg-white/50 backdrop-blur-xl z-99  ">
  <nav class="relative max-w-7xl w-full flex flex-wrap md:grid md:grid-cols-12 basis-full items-center px-4 md:px-6 mx-auto">
    <div class="md:col-span-3">
      <!-- Logo -->
      <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="../templates/creative-agency/index.html" aria-label="Preline">
        <img src="/magic-of-flavor-high-resolution-logo-transparent-3.png"  alt="" class="w-14 h-14">
      </a>
      <!-- End Logo -->
    </div>

    <!-- Button Group -->
    <div class="flex items-center gap-x-1 md:gap-x-2 ms-auto py-1 md:ps-6 md:order-3 md:col-span-3">
      <button type="button" onclick="Signin.showModal()" class="btn py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl bg-white border border-gray-400 text-black hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none  ">
        Sign in
      </button>
      <button type="button" onclick="Signup.showModal()" class=" btn py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent bg-yellow-400 text-black hover:bg-yellow-300 focus:outline-none focus:bg-yellow-500 transition disabled:opacity-50 disabled:pointer-events-none">
        Sign up
      </button>

      {{-- hambuger menu  --}}
      <div class="dropdown dropdown-end md:hidden">
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
        <ul
          tabindex="0"
          class="text-center  menu-sm grid justify-center items-center gap-3 dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
          <li class="hover:bg-yellow-400 rounded-lg"><a>Work</a></li>
          <li class="hover:bg-yellow-400 rounded-lg"><a>Service</a></li>
          <li class="hover:bg-yellow-400 rounded-lg"><a>About</a></li>
          <li class="hover:bg-yellow-400 rounded-lg"><a>Careers</a></li>
          <li class="hover:bg-yellow-400 rounded-lg"><a>Blog</a></li>


      </ul>
    </div>
  </div>

      {{-- hambuger menu  --}}
  </div>


      </div>
    
    <!-- End Button Group -->

    <!-- Collapse -->
    <div id="hs-navbar-hcail" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block md:w-auto md:basis-auto md:order-2 md:col-span-6" aria-labelledby="hs-navbar-hcail-collapse">
      <div class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:justify-center md:items-center md:gap-y-0 md:gap-x-7 md:mt-0">
        <div>
          <a class="relative inline-block text-black focus:outline-none before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-yellow-400 dark:text-black/70" href="#" aria-current="page">Work</a>
        </div>
        <div>
          <a class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">Services</a>
        </div>
        <div>
          <a class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">About</a>
        </div>
        <div>
          <a class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">Careers</a>
        </div>
        <div>
          <a class="inline-block text-black hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">Blog</a>
        </div>
      </div>
    </div>
    <!-- End Collapse -->
  </nav>

</header>
<!-- ========== END HEADER ========== -->
 


<div class="">
  @yield('content')
</div>
    




</body>
</html>