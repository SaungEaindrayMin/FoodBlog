@extends('layouts.index')

@section('title')
Home Page
@endsection

@section('content')

<section class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 mt-[20%] lg:mt-[10%]">
@include('components.hero')
@include('components.event')
@include('components.homeReceipes')
@include('components.homeCategory')
@include('components.footer')
@include('components.modal')
  
  
</section>



    
@endsection