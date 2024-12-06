  {{-- modal pop-up  --}}

  <dialog id="Signin" class="modal  modal-bottom sm:modal-middle">
    <div class="modal-box  bg-transparent">
      @include('auth.userLogin')
    </div>
    
  </dialog>
  
  <dialog id="Signup" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box bg-transparent">
      @include('auth.userRegister')
    </div>
  </dialog>
  
  {{-- modal pop-up  --}}