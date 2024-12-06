

<div class="flex flex-col items-center justify-center bg-white border-2 border-[#264143] rounded-2xl shadow-[3px_4px_0px_1px_#E99F4C]">
  <div class="py-4 sm:py-7 ">
    <div class="text-center flex flex-col items-center justify-center bg-white border-2 border-[#264143] rounded-2xl shadow-[3px_4px_0px_1px_#E99F4C] p-14">
      <h1 class="block text-4xl font-bold text-black-800 ">Sign in</h1>
      <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
        Don't have an account yet?
        <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="../examples/html/signup.html">
          Sign up here
        </a>
      </p>
    </div>

    <div class="mt-5 ">


      <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">Or</div>

      <!-- Form -->
      <form action="{{route('login')}}" method="POST" class="flex flex-col items-center justify-center bg-white border-2 border-[#264143] rounded-2xl shadow-[3px_4px_0px_1px_#E99F4C] py-6">
        @csrf

        @if (session('fail'))
        <div role="alert" class="alert alert-error w-2/3 mx-auto mt-[5%]">
            {{ session('fail') }}
        </div>
      @endif
        <div class="grid gap-y-4">
          <!-- Form Group -->
          <div>
            
            <label for="email" class="block mb-2 text-sm text-gray-700 font-medium text-black/70">Email</label>
            <div class="relative">
              
              <input type="text" name="email" id="email"  class="py-3 px-4 block mb-2 w-full outline-none border-2 border-[#264143] shadow-[3px_4px_0px_1px_#E99F4C]  rounded-md text-sm focus:translate-y-1 focus:shadow-[1px_2px_0px_0px_#E99F4C]">
                
              </div>
            </div>
            @error('email')
            <p class=" text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
            @enderror
          </div>
          <!-- End Form Group -->

          <!-- Form Group -->
          <div>
            <div class="flex justify-between items-center">
             
              <label for="password" class="block mb-2 text-sm text-gray-700 font-medium text-black/70">Password</label>
              <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="../examples/html/recover-account.html">Forgot password?</a>
            </div>
            <div class="relative">
              
              <input type="password" name="password" id="password"  class="py-3 px-4 block mb-2 w-full outline-none border-2 border-[#264143] shadow-[3px_4px_0px_1px_#E99F4C]  rounded-md text-sm focus:translate-y-1 focus:shadow-[1px_2px_0px_0px_#E99F4C]">
              <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                </svg>
              </div>
            </div>
            @error('password')
            <p class=" text-xs text-red-600 mt-2" id="email-error">{{$message}}</p>
            @enderror
          </div>
          <!-- End Form Group -->



          <button type="submit" name="save" class="bg-yellow-400 shadow-[3px_3px_0px_0px_#E99F4C] text-black font-extrabold w-[50%] mx-auto p-2 mt-4 rounded-xl hover:opacity-90">Sign in</button>
        </div>
      </form>
      <!-- End Form -->
    </div>
  </div>
</div>


{{-- other version 

<div class="flex flex-col items-center justify-center text-center">
  <div class="flex flex-col items-center justify-center bg-[#EDDCD9] border-2 border-[#264143] rounded-2xl shadow-[3px_4px_0px_1px_#E99F4C] p-6">
      <p class="text-[#264143] font-extrabold text-xl mt-5">SIGN UP</p>
      <form action="">
          <div class="flex flex-col items-start my-3">
              <label class="font-semibold mb-1" for="name">Name</label>
              <input placeholder="Enter your full name" class="outline-none border-2 border-[#264143] shadow-[3px_4px_0px_1px_#E99F4C] w-72 p-3 rounded-md text-sm focus:translate-y-1 focus:shadow-[1px_2px_0px_0px_#E99F4C]" type="text">
          </div>
          <div class="flex flex-col items-start my-3">
              <label class="font-semibold mb-1" for="email">Email</label>
              <input placeholder="Enter your email" id="email" class="outline-none border-2 border-[#264143] shadow-[3px_4px_0px_1px_#E99F4C] w-72 p-3 rounded-md text-sm focus:translate-y-1 focus:shadow-[1px_2px_0px_0px_#E99F4C]" type="email">
          </div>
          <div class="flex flex-col items-start my-3">
              <label class="font-semibold mb-1" for="password">Password</label>
              <input placeholder="Enter your password" id="password" class="outline-none border-2 border-[#264143] shadow-[3px_4px_0px_1px_#E99F4C] w-72 p-3 rounded-md text-sm focus:translate-y-1 focus:shadow-[1px_2px_0px_0px_#E99F4C]" type="password">
          </div>
          <div class="text-center mt-5">
              <button class="bg-[#DE5499] shadow-[3px_3px_0px_0px_#E99F4C] text-white font-extrabold w-72 p-4 rounded-xl hover:opacity-90">SIGN UP</button>
              <p class="mt-4">Have an Account? <a class="font-extrabold text-[#264143] hover:underline" href="">Login Here!</a></p>
          </div>
      </form>
  </div>
</div> --}}

