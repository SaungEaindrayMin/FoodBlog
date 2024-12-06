
@extends('layouts.index')
@section('title')
    About Us
@endsection

@section('content')
  @include('components.aboutUsHeader')
  @include('components.aboutUsBody')
  @include('components.Testimonial')
  @include('components.footer')
  @include('components.modal')

@endsection
