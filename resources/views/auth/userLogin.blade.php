<div class="flex flex-col items-center justify-center bg-white border-2 border-[#264143] rounded-2xl shadow-[3px_4px_0px_1px_#E99F4C]">
  <div class="py-4 sm:py-7 ">
    <div class="text-center flex flex-col items-center justify-center bg-white border-2 border-[#264143] rounded-2xl shadow-[3px_4px_0px_1px_#E99F4C] p-14">
      <h1 class="block text-4xl font-bold text-black-800 ">Sign in</h1>
      <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
        Don't have an account yet?
        <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" onclick="Signin.showModal()">
          Sign up here
        </a>
      </p>
    </div>

    <div class="mt-5 ">


      <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">Or</div>

      <!-- Form -->
      <form action="{{route('login')}}" method="POST" onsubmit="return handleSubmit()" class="flex flex-col items-center justify-center bg-white border-2 border-[#264143] rounded-2xl shadow-[3px_4px_0px_1px_#E99F4C] py-6">
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

@if(session('error_code') === 'login_attempt')
    <div id="errorModal" class="fixed inset-0 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-lg font-semibold text-red-600">Login Error</h2>
            <p class="mt-2 text-gray-600">{{ session('email') }}</p>
            <button onclick="document.getElementById('errorModal').style.display='none'" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">Close</button>
        </div>
    </div>
@endif

<script>
function handleSubmit() {
    const emailError = '{{ session('email') }}';
    if (emailError) {
        document.getElementById('errorModal').style.display = 'flex';
        return false; // Prevent form submission
    }
    return true; // Allow form submission
}
</script>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content rounded-lg shadow-lg">
            <div class="modal-header bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
                <h5 class="modal-title font-bold text-2xl" id="loginModalLabel">Welcome Back!</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('login')}}" method="POST" class="flex flex-col items-center justify-center">
                    @csrf
                    <div class="form-group w-full mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <input type="email" class="form-control border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 w-full p-3" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group w-full mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" class="form-control border-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 w-full p-3" id="password" placeholder="Enter your password" required>
                    </div>
                    <div class="form-group form-check mb-4">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-lg px-4 py-2 w-full">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
