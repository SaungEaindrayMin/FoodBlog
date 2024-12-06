@extends('layouts.index')
@section('title')
    Contact Us
@endsection

@section('content')
  @include('components.contactForm')
  @include('components.FAQ')
  @include('components.modal')
  @include('components.footer')
@endsection






