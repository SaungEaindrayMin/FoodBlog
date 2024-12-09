
@extends('layouts.index')
@section('title')
    About Us
@endsection

@section('content')
  @include('components.aboutUsHeader')
  @include('components.aboutUsBody')
  @include('components.aboutUsLatestReceipes')
  @include('components.teamMember')
  @include('components.footer')
  @include('components.modal')


@endsection
