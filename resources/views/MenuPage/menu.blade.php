@extends('layouts.CoffeeLayout.layout')


@section('content')
<x-page-banner.banner :title=$title bg_image="{{ asset('storage/images/bg.jpg') }}" id="main-banner" class="h-[400px]" />


<div class="container">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 mt-6 ">
    @foreach ($drinks as $drink)
    <div class="">
      @component('components.product-card.index')
        @slot('image')
          {{ $drink['img'] }}
        @endslot
        @slot('alt')
          {{ $drink['title'] }}
        @endslot
        @slot('description')
            {{ $drink['title'] }}
        @endslot
      @endcomponent

    </div>
    @endforeach

  </div>
</div>
@endsection