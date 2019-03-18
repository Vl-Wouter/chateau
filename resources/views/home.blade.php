@extends('layout')

@section('title', $title)

@section('content')
<div class="row">
  <div class="medium-12 text-center">
  <h4>{{ $hotel }}</h4>
  </div>
  <div class="medium-6 columns">
    <img class="thumbnail" src="{{ $image }}">
  </div>
  <div class="medium-6 large-5 columns">
    {!! $description !!}
  </div>
</div>
@endsection