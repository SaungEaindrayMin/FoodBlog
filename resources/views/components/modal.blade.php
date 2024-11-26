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