@extends('layouts.index')

@section('title')
Home Page
@endsection

@section('content')

<section class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 mt-[10%]">
@include('components.hero')
@include('components.event')
@include('components.homeReceipes')
@include('components.homeCategory')
@include('components.footer')

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
  



  
</section>



    
@endsection